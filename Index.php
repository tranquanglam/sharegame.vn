<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include("DataProvider.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sharegame.vn</title>
    <link href="js/Style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="js/banner.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="js/Style_menu.css">
	<link rel="stylesheet" href="js/Style_search.css">
    
    <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <script src="js/Script_menu.js"></script>
	<script src="js/Script_banner.js"></script>
</head>

<body>
 
    
 <div id='cssmenu'>
 
         
    <ul>
   <li><a href='#'><span>Máy tính</span></a></li>
        <li><a href='#'><span>Máy tính</span></a></li>
   <li><a href='#'><span>Android</span></a></li>
   <li class='last'><a href='#'><span>Iphone/Ipad</span></a></li>
   
</ul>
</div>
    
    

    <div class="container">
    
        <div class="main">
            <div class="content">
				<div class="content-banner">
                	<div id="bigPic">
						<img src="imgs/1.jpg" alt="" />
						<img src="imgs/2.jpg" alt="" />
						<img src="imgs/3.jpg" alt="" />
						<img src="imgs/4.jpg" alt="" />
						<img src="imgs/5.jpg" alt="" />
						<img src="imgs/6.jpg" alt="" />
						<img src="imgs/7.jpg" alt="" />
						<img src="imgs/8.jpg" alt="" />
						<img src="imgs/9.jpg" alt="" />
						<img src="imgs/10.jpg" alt="" />
					</div>
			
					<ul id="thumbs">
						<li class='active' rel='1'><img src="imgs/1_thumb.jpg" alt="" /></li>
						<li rel='2'><img src="imgs/3_thumb.jpg" alt="" /></li>
						<li rel='3'><img src="imgs/4_thumb.jpg" alt="" /></li>
						<li rel='4'><img src="imgs/5_thumb.jpg" alt="" /></li>
						<li rel='5'><img src="imgs/6_thumb.jpg" alt="" /></li>
						<li rel='6'><img src="imgs/7_thumb.jpg" alt="" /></li>
						<li rel='7'><img src="imgs/8_thumb.jpg" alt="" /></li>
						<li rel='8'><img src="imgs/9_thumb.jpg" alt="" /></li>
						<li rel='9'><img src="imgs/10_thumb.jpg" alt="" /></li>
						<li rel='10'><img src="imgs/2_thumb.jpg" alt="" /></li>
					</ul>
				</div>
				
                <div class="content-listhotgame">
                     list hot game
                </div>

              <div class="content-newgame">
                 <?php
					$query = "SELECT * FROM GAMES";
					$connect = DataProvider::ExecuteQuery($query);
					while ($result = mysql_fetch_array($connect))
					{
					?>	
                    <div class="content-newgame-item">
                        <img class="content-newgame-picture" src="<?php echo $result["HinhAnh"];?>" width="190" height="160" />
                        <!--<div class="content-newgame-item-title"><?php echo $result["TenGame"]?></div> -->
					
                  </div>
					<?php }?>
                  
                  </div>
                
                <div class="content-gamecate">
                    <div class="content-gamecate-title">Thể thao</div>
                    <div class="content-gamecate-item">
                        <img class="content-gamecate-picture" src="Images/HanhDong/5505.jpg" width="190" height="160" />
                        <div class="content-gamecate-item-title">the thao</div>
                    </div>

                    <div class="content-gamecate-item">
                        <img class="content-gamecate-picture" src="Images/HanhDong/5654.jpg" width="190" height="160" />
                        <div class="content-gamecate-item-title">the thao</div>
                    </div>

                    <div class="content-gamecate-item">
                        <img class="content-gamecate-picture" src="Images/HanhDong/5647.jpg" width="190" height="160" /> 
                        <div class="content-gamecate-item-title">the thao</div>
                    </div>

                    <img class="content-gamecate-item" src="Images/HanhDong/5648.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5653.jpg" width="190" height="160" />

                    <img class="content-gamecate-item" src="Images/HanhDong/5655.jpg" width="190" height="160" />
                </div>

                 <div class="content-gamecate">
                    <div class="content-gamecate-title">Hành động</div>
                    <img class="content-gamecate-item" src="Images/HanhDong/5505.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5647.jpg" width="190" height="160" /> 
                    <img class="content-gamecate-item" src="Images/HanhDong/5648.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5653.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5654.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5655.jpg" width="190" height="160" />
                </div>

                 <div class="content-gamecate">
                    <div class="content-gamecate-title">Trí tuệ</div>
                    <img class="content-gamecate-item" src="Images/HanhDong/5505.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5647.jpg" width="190" height="160" /> 
                    <img class="content-gamecate-item" src="Images/HanhDong/5648.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5653.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5654.jpg" width="190" height="160" />
                    <img class="content-gamecate-item" src="Images/HanhDong/5655.jpg" width="190" height="160" />
                </div>
            </div>

            <div class="sidebar">
             <p>Thể loại game</p>
             <p>Hành động</p>
             <p>Thời trang</p>
             <p>Đua xe</p>
             <p>Thể thao</p>

            </div>

        </div>
  </div>
</body>
</html>