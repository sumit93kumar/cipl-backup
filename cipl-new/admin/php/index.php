<?php
include_once('../connect.php');
error_reporting(0);
$caseno=base64_decode($_POST['caseno']);

function manage_images($conn,$title,$description,$files)
{
	$str=$conn->prepare("select id,name from files where title='".$title."' and description='".$description."' and status='1'");
	$str->execute();
	$num = $str->rowCount();
	if($num > 0){
		while($r=$str->fetchAll())
		{	
			foreach($r as $data){
				if(empty($files))
				{
					$ts = $conn->prepare("delete from files where id='".$data['id']."' and status='1'");
					$ts->execute();
					unlink("files/thumbnail/".$data['name']);
					unlink("files/".$data['name']);
				}
				else if(!in_array($data['name'],explode(",",$files)))
				{
					$ts = $conn->prepare("delete from files where id='".$data['id']."' and status='1'");
					$ts->execute();
					unlink("files/thumbnail/".$data['name']);
					unlink("files/".$data['name']);
				}
			}
		}
	}
	return $str;

}

function move_files($conn,$title, $description){
	$ms = $conn->prepare("Select * from files where title = ".$title." and description = ".$description); 
	$ms->execute();
	$num=($ms->rowCount()); 
	if($num>0)
	{
		while($r=$ms->fetchAll())
		{	
			foreach($r as $data){
				//print_r($data);
				$time=str_shuffle(time()+ceil(rand()));
				$ext=pathinfo($data['name'], PATHINFO_EXTENSION);
				if (copy("../js/plugins/fileupload/server/php/files/".$data['name'], "files/thumbnail/$time.$ext")) 
				{
					unlink("../js/plugins/fileupload/server/php/files/thumbnail/".$data['name']);
				}
				if (copy("../js/plugins/fileupload/server/php/files/".$data['name'], "files/$time.$ext")) 
				{
					unlink("../js/plugins/fileupload/server/php/files/".$data['name']);
				}

				$sm = $conn->prepare("update files set name='".($time.".".$ext)."',status='1' where id='".$data['id']."'");
				$sm->execute();
			}
		}
	}
	return $ms;
}

if($caseno == 5){
	extract($_POST); //print_r($_REQUEST);
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$query = $conn->prepare("Select id, name, email, pwd, designation from registration where status ='1' and email='".$email."' and pwd = '".$pass."'");
	$query->execute();
	if($query->rowCount() > 0){
		$r = $query->fetchAll();
		//print_r($r['0']['name']);
		foreach($r as $ds){
			$_SESSION['un']=html_entity_decode($ds['name']); 
			$_SESSION['uid']=$ds['id']; 
			$_SESSION['uemail']=$ds['email']; 
			$_SESSION['utype']=$ds['designation']; 
			$_SESSION['branch']=html_entity_decode($ds['name']); 
			if($_REQUEST['chkbrm']=='1')

			{
				setcookie('ckun',$ds['email']);
				setcookie('ckpwd',$ds['pwd']);
			}
			else
			{
				setcookie('ckun','');
				setcookie('ckpwd','');
			}
		}
		$data = array('code'=>'1','msg'=>'You successfully logged in.');
	}
	else{
		$data = array('code'=>'2','msg'=>'Invalid username and password.');
	}
	echo json_encode($data);
}


if($caseno == 1){
	extract($_POST); //print_r($_POST);
	$cat_name = trim($_POST['category']);
	$loc = trim($_POST['location']);
	$title = trim(base64_decode($_POST['title']));
	$query = $conn->prepare('Select * from category where category_name = "'.$cat_name.'"');
	$query->execute();
	
	if($query->rowCount() == 0){
		$status = 1;
		
		$statement = $conn->prepare("INSERT INTO category(category_name,location,image,status,added_on)
					VALUES(:category_name,:location,:image,:status,:added_on)");
		$statement->bindParam(":category_name", $cat_name);	
		$statement->bindParam(":location", $loc);
		$statement->bindParam(":image",$title);
		$statement->bindParam(":status", $status);	 
		$statement->bindParam(":added_on", $created_at);	 
		$statement->execute();
		
		if($statement->rowCount()>0)
		{
			//move_files(base64_decode($_POST['title']),base64_decode($_POST['description']));
			move_files($conn,base64_decode($_POST['title']),base64_decode($_POST['description']));
			$description = base64_decode($_POST['description']);

			
			$data = array('code'=>'1','msg'=>'Category added successfully');
			
		}
		else
		{
			$data = array('code'=>'3','msg'=>'Opps something went wrong. Please retry later...');
		}
	}
	else
	{	
		$data = array('code'=>'2', 'msg'=>'You have already added this category');
	}
	echo json_encode($data);
}

if($caseno == 2){
	extract($_POST); 
	$scat_name = trim($_POST['sub_category']);
	$scat_id = trim($_POST['cat_id']);
	$query = $conn->prepare('Select * from subcategory where subcategory_name = "'.$scat_name.'"');
	$query->execute();
	if($query->rowCount() == 0){
		$status = 1;
		
		$statement = $conn->prepare("INSERT INTO subcategory(cat_id,subcategory_name,status,added_on)
					VALUES(:cat_id,:subcategory_name,:status,:added_on)");
		$statement->bindParam(":cat_id", $scat_id);	
		$statement->bindParam(":subcategory_name", $scat_name);	 
		$statement->bindParam(":status", $status);	 
		$statement->bindParam(":added_on", $created_at);	 
		$statement->execute();
		if($statement->rowCount()>0)
		{
			$data = array('code'=>'1','msg'=>'Subcategory added successfully');
		}
		else
		{
			$data = array('code'=>'3','msg'=>'Opps something went wrong. Please retry later...');
		}
	}
	else
	{	
		$data = array('code'=>'2', 'msg'=>'You have already added this subcategory');
	}
	echo json_encode($data);
}

if($caseno == 3){
	extract($_POST); 
	$scat_id = trim($_POST['subcat_id']);
	$cat_id = trim($_POST['cat_id']);
	$image_title = trim($_POST['image_title']);
	$title = trim(base64_decode($_POST['title']));
	
		$status = 1;
		
		$statement = $conn->prepare("INSERT INTO gallery(cat_id,subcat_id,title,images,status,added_on,updated_on)
					VALUES(:cat_id,:subcat_id,:title,:images,:status,:added_on,:updated_on)");
		$statement->bindParam(":cat_id", $cat_id);	
		$statement->bindParam(":subcat_id", $scat_id);
		$statement->bindParam(":title", $image_title);	
		$statement->bindParam(":images", $title );		
		$statement->bindParam(":status", $status);	 
		$statement->bindParam(":added_on", $created_at);
		$statement->bindParam(":updated_on", $created_at);		
		$statement->execute(); 
		if($statement->rowCount()>0)
		{
			$description = base64_decode($_POST['description']);
			move_files($conn,base64_decode($_POST['title']),base64_decode($_POST['description']));
			$data = array('code'=>'1','msg'=>'Gallery added successfully');
		}
		else
		{
			$data = array('code'=>'3','msg'=>'Opps something went wrong. Please retry later...');
		}
		echo json_encode($data);
	
}

if($caseno=='6')

{
	extract($_POST); 
	 $str=$conn->prepare("update ".$_POST['table']." set status=case when status=1 then 0 when status=0 then 1 end where id='".trim(base64_decode($_POST['link']),'row_')."'");

	$str->execute();
	

	$str=$conn->prepare("select status from ".$_POST['table']." where id='".trim(base64_decode($_POST['link']),'row_')."'");
	
	$str->execute();
	$num = $str->rowCount();
	if($num > 0){
		$r=$str->fetchAll(); 
		foreach($r as $data){
			if($data['status']==1)
			{
				echo '<button class="btn btn-success" type="button">Active</button> ';
			}
			else
			{
				echo '<button class="btn btn-danger" type="button">In Active</button>';
			}
		}
	}
}




if($caseno==10)

{
	extract($_POST); 
	$msg='<option value="">Select Subcategory</option>';

	$query = $conn->prepare("select * from subcategory where cat_id=".base64_decode($_POST['grp']));
	$query->execute();
	if($query->rowCount() > 0)
	{
		$da = $query->fetchAll();
		foreach($da as $row){
			$msg .= "<option value='".$row['id']."'>".$row['subcategory_name']."</option>";
		}
		$data = array('code'=>'2','msg'=>base64_encode($msg));
	}
	echo json_encode($data);

}

if($caseno == 11){
	//print_r($_POST); 
	$category_name = trim($_POST['category']);
	$location = trim($_POST['location']);
	$image = trim(base64_decode($_POST['title']));
	
	$statement = $conn->prepare("UPDATE category set category_name=:category_name, location=:location, image=:image  where id=".trim(base64_decode($_POST['link']),'row_'));
	//print_r($statement);
	$statement->bindParam(":category_name",$category_name );	
	$statement->bindParam(":location", $location);	
	$statement->bindParam(":image", $image);	
	$statement->execute(); 
	if($statement->rowCount()>0)
	{
		
			
manage_images($conn,base64_decode($_POST['title']),base64_decode($_POST['description']),implode(',',$_POST['efile']));
move_files($conn,base64_decode($_POST['title']),base64_decode($_POST['description']));
			
		$data = array('code'=>'1','msg'=>'Category updated successfully');
	}
	else{
		$data = array('code'=>'2','msg'=>'Something went wrong.');
	}
	echo json_encode($data);
	
}

if($caseno == 12){
	
	$subcategory_name = trim($_POST['sub_category']);
	$cat_id = trim($_POST['cat_id']);
	
	$statement = $conn->prepare("UPDATE subcategory set subcategory_name=:subcategory_name, cat_id=:cat_id where id=".trim(base64_decode($_POST['link']),'row_'));
	
	$statement->bindParam(":subcategory_name",$subcategory_name );	
	$statement->bindParam(":cat_id", $cat_id);		
	$statement->execute(); 
	if($statement->rowCount()>0)
	{
		$data = array('code'=>'1','msg'=>'Subcategory updated successfully');
	}
	else{
		$data = array('code'=>'2','msg'=>'Something went wrong.');
	}
	echo json_encode($data);
}

if($caseno == 19){
	//print_r($_POST); 
	$cat_id = trim($_POST['cat_id']);
	$subcat_id = trim($_POST['subcat_id']);
	$title = trim($_POST['image_title']);
	$image = trim(base64_decode($_POST['title']));
	
	$statement = $conn->prepare("UPDATE gallery set cat_id=:cat_id, subcat_id=:subcat_id, title=:title,  images=:images  where id=".trim(base64_decode($_POST['link']),'row_'));
	//print_r($statement);
	$statement->bindParam(":cat_id",$cat_id );	
	$statement->bindParam(":subcat_id",$subcat_id );
	$statement->bindParam(":title",$title );		
	$statement->bindParam(":images", $images);	
	$statement->execute(); 
	if($statement->rowCount()>0)
	{
		
			
manage_images($conn,base64_decode($_POST['title']),base64_decode($_POST['description']),implode(',',$_POST['efile']));
move_files($conn,base64_decode($_POST['title']),base64_decode($_POST['description']));
			
		$data = array('code'=>'1','msg'=>'Gallery updated successfully');
	}
	else{
		$data = array('code'=>'2','msg'=>'Something went wrong.');
	}
	echo json_encode($data);
	
}

if($caseno == '20')

{
	$str=$conn->prepare("update ".$_POST['table']." set status='2' where id =".trim(base64_decode($_POST['link']),',')); 
	$str->execute();
	$num = $str->rowCount();
	if($num > 0){
		echo '1';
	}
	else{
		echo '0';
	}

}

if($caseno == '25'){
	$str=$conn->prepare("select id,name from files where name='".$_POST['link']."' and status='1'"); 
	$str->execute();
	$num = $str->rowCount(); 
	if($num > 0){
		while($r=$str->fetchAll())
		{	
			foreach($r as $data){
				//print_r($data);
				if(empty($files))
				{
					$ts = $conn->prepare("delete from files where id='".$data['id']."' and status='1'");
					$ts->execute(); //print_r($ts->rowCount());
					unlink("files/thumbnail/".$data['name']);
					unlink("files/".$data['name']);
				}
				else if(!in_array($data['name'],explode(",",$files)))
				{
					$ts = $conn->prepare("delete from files where id='".$data['id']."' and status='1'");
					$ts->execute();
					unlink("files/thumbnail/".$data['name']);
					unlink("files/".$data['name']);
				}
			}
		}
		$data = array('code'=>'1','msg'=>'Image deleted successfully');
	}
	else{
		$data = array('code'=>'2','msg'=>'Something went wrong.Please try again after sometime.');
	}
}

if($caseno == '26'){
	
	$str=$conn->prepare("select id,name from files where name='".$_POST['link']."' and status='1'"); 
	$str->execute();
	$num = $str->rowCount(); 
	if($num > 0){
		while($r=$str->fetchAll())
		{	
			foreach($r as $data){
				//print_r($data);
				if(empty($files))
				{
					$ts = $conn->prepare("delete from files where id='".$data['id']."' and status='1'");
					$ts->execute(); //print_r($ts->rowCount());
					unlink("files/thumbnail/".$data['name']);
					unlink("files/".$data['name']);
				}
				else if(!in_array($data['name'],explode(",",$files)))
				{
					$ts = $conn->prepare("delete from files where id='".$data['id']."' and status='1'");
					$ts->execute();
					unlink("files/thumbnail/".$data['name']);
					unlink("files/".$data['name']);
				}
			}
		}
		$data = array('code'=>'1','msg'=>'Image deleted successfully');
	}
	else{
		$data = array('code'=>'2','msg'=>'Something went wrong.Please try again after sometime.');
	}
}

if($caseno == 7){
	//print_r($_POST);
	extract($_POST); 
	$title = trim($_POST['news_title']);
	$desc = trim($_POST['news_desc']);
	$author = trim($_POST['author']);
	$query = $conn->prepare('Select * from news where title = "'.$title.'"');
	$query->execute();
	if($query->rowCount() == 0){
		$status = 1;
		
		$statement = $conn->prepare("INSERT INTO news(title,description,author,status,added_on,updated_on)
					VALUES(:title,:description,:author,:status,:added_on,:updated_on)");
		$statement->bindParam(":title", $title);	
		$statement->bindParam(":description", $desc);
		$statement->bindParam(":author", $author);
		$statement->bindParam(":status", $status);	 
		$statement->bindParam(":added_on", $created_at);
		$statement->bindParam(":updated_on", $created_at);		
		$statement->execute();
		if($statement->rowCount()>0)
		{
			$data = array('code'=>'1','msg'=>'News added successfully');
		}
		else
		{
			$data = array('code'=>'3','msg'=>'Opps something went wrong. Please retry later...');
		}
	}
	else
	{	
		$data = array('code'=>'2', 'msg'=>'You have already added this news');
	}
	echo json_encode($data);
}

if($caseno == 13){
	$title = trim($_POST['news_title']);
	$description = trim($_POST['news_desc']);
	
	$statement = $conn->prepare("UPDATE news set title=:title, description=:description, updated_on=:updated_on  where id=".trim(base64_decode($_POST['link']),'row_'));
	
	$statement->bindParam(":title",$title );	
	$statement->bindParam(":description", $description);
	$statement->bindParam(":updated_on", $created_at);	
	$statement->execute(); 
	if($statement->rowCount()>0)
	{
		$data = array('code'=>'1','msg'=>'News updated successfully');
	}
	else{
		$data = array('code'=>'2','msg'=>'Something went wrong.');
	}
	echo json_encode($data);
}



?>