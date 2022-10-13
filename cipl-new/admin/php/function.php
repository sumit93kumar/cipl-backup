<?php


function move_files($title,$description)

{
	$str = ("Select * from files where title= '".$title."' and description= '".$description."'"); 
	$conn->prepare($str);
	$str->execute(); 
	$num=($str->rowCount()); print_r($num);
	if($num>0)
	{
		while($r=$str->fetchAll())
		{	
			$time=str_shuffle(time()+ceil(rand()));
			$ext=pathinfo($r['name'], PATHINFO_EXTENSION);
			if (copy("../js/plugins/fileupload/server/php/files/$r[name]", "files/thumbnail/$time.$ext")) 
			{
				unlink("../js/plugins/fileupload/server/php/files/thumbnail/$r[name]");
			}
			if (copy("../js/plugins/fileupload/server/php/files/$r[name]", "files/$time.$ext")) 
			{
    			unlink("../js/plugins/fileupload/server/php/files/$r[name]");
			}

			$conn->prepare("update files set name='".($time.".".$ext)."',status='1' where id='".$r['id']."'");
		}
	}
}
?>