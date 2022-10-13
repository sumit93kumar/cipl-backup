<div class="breadLine">

                <ul class="breadcrumb">
                    <li><a href="#"><?php echo $_SESSION['utype'];?></a> </li>                
                    
                </ul>

                <ul class="buttons">
                    <li>
                        <a href="#" class="link_bcPopupList"><span class="icon-user"></span><span class="text"><?php echo $_SESSION['utype'];?></span></a>

                        <div id="bcPopupList" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-settings"></span>
                                <span class="name">Account Settingss</span>
                            </div>
                            <div class="body-fluid users">
                                                     

                                <div class="item clearfix">
                                    
                                    <div class="info">
                                        <a href="#" class="name">Change Password</a>                                                                        
                                    </div>
                                </div>                                  

                                <div class="item clearfix">
                                    
                                    <div class="info">
                                        <a href="logout.php" class="name">Logout</a>                                                                        
                                    </div>
                                </div>                                  

                            </div>
                            <div class="footer">
                                <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                            </div>
                        </div>                    

                    </li>                
                    
                </ul>

            </div>