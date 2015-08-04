<?php
	 session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include("DataProvider.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Mobile Shop</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="styles/myStyle.css" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />  
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<table width="100%" border="0" cellspacing="5" cellpadding="5" align="center">
  <tr>
    <td colspan="3" align="center" bgcolor="#000000">
		<?php include("inc/incBanner.php");?>
        </td>
  </tr>
  <tr>
    <td colspan="3" id="MenuNgang">
    	<?php include("inc/incMenuNgang.php");?>
    </td>
  </tr>
  <tr>
    <td width="21%" id="MenuDoc">
      <table width="100%">
        <tr>
          <td class="menu">Hãng Điện Thoại</td>
        </tr>
        
        <tr>
        	<td><?php include("inc/incMenuNSX.php");?></td>
        </tr>
        
        <tr>
        	<td class="menu">Loại Điện Thoại</td>
        </tr>
        
        <tr>
        	<td><?php include("inc/incMenuLoaiDT.php");?></td>
        </tr>
      </table>
    </td>
    <td width="58%" id="Content"><!-- InstanceBeginEditable name="Content" -->
      	<table border="1" width="100%" bordercolor="#0000CC" rules="all">
        	<?php
			$ma = $_REQUEST["madt"];
			$query = "SELECT MaDT, TenDT, Hinh, Gia, SoLuocXem, MaLoaiDT FROM DienThoai WHERE MaDT = $ma";
			
			$kq = DataProvider::ExecuteQuery($query);
			$dt = mysql_fetch_array($kq);
			$maLOAI = $dt["MaLoaiDT"];
			?>
        	<tr>
            	<td>
                	   <table width="220" border="1" bordercolor="#003399" rules="groups" >
   	    <tr>
   	      <td colspan="2" align="center"><h3><font color="#003399"><?php echo $dt["TenDT"];?></font></h3></td>
        </tr>
 
   	    <tr>
   	      <td colspan="2" align="center"><a href="ChiTietDT.php?madt=<?php echo $dt["MaDT"];?>"></a><a href="ChiTietDT.php?madt=<?php echo $dt["MaDT"];?>"><img src="<?php echo $dt["Hinh"];?>" width="200" height="200"/></a></td>
        </tr>
   	    <tr>
   	      <td align="left">Giá: <font color="#FF0000"><?php echo $dt["Gia"];?></font>$</td>
   	       <td align="right">Lược xem: <font color="#FF0000"><?php echo $dt["SoLuocXem"];?></font></td> 
        </tr>
   	    <tr>
   	      <td colspan="2" align="center" ><form id="form3" name="form3" method="post" action="">
   	        <input type="submit" name="MuaDT" id="MuaDT" value="Mua Điện Thoại"  />
 	        </form></td>
   	      </tr>
                      </table>
                </td>
                
                <td width="100%" valign="top"><table width="100%" border="1" rules="all">
                
                	<?php
						$query = "SELECT * FROM DienThoai WHERE MaDT = $ma";
						$kq = DataProvider::ExecuteQuery($query);
						$dt = mysql_fetch_array($kq)
						
						
						?>
                  <tr>
                      <td colspan="2" align="center" ><h2>TÍNH NĂNG SẢN PHẨM</h2></td>
                  </tr>
                  <tr>
                    <td class="ChiTietXe" width="50%"><strong>Loại Điện Thoại:</strong></td>
                    <td class="ChiTietXeThuong" width="50%"><?php 
						$queryLoaiDT = "SELECT * FROM LoaiDT WHERE MaLoaiDT = $dt[MaLoaiDT]" ;
						$kqLoaiDT = DataProvider::ExecuteQuery($queryLoaiDT);
						$loaidt = mysql_fetch_array($kqLoaiDT);
						echo $loaidt["LoaiDT"];		?>
                        </td>
                  </tr>
                  <tr>
                    <td class="ChiTietXe"><strong>Nhà Sản Xuất:</strong></td>
                    <td class="ChiTietXeThuong"><?php 
						$queryNSX = "SELECT * FROM NhaSanXuat WHERE MaNhaSanXuat = $dt[MaNhaSanXuat]" ;
						$kqLoaiDT = DataProvider::ExecuteQuery($queryNSX);
						$loaidt = mysql_fetch_array($kqLoaiDT);
						echo $loaidt["TenNhaSanXuat"];		?></td>
                  </tr>
                  <tr>
                    <td class="ChiTietXe"><strong>CPU:</strong></td>
                    <td class="ChiTietXeThuong"><?php echo $dt["CPU"]?></td>
                  </tr>
                  <tr>
                    <td class="ChiTietXe"><strong>Ram:</strong></td>
                    <td class="ChiTietXeThuong"><?php echo $dt["Ram"]?></td>
                  </tr>
                  <tr>
                    <td class="ChiTietXe"><strong>Hệ Điều Hành</strong></td>
                    <td class="ChiTietXeThuong"><?php echo $dt["HĐH"]?></td>
                  </tr>
                  <tr>
                    <td class="ChiTietXe"><strong>Pin</strong></td>
                    <td class="ChiTietXeThuong"><?php echo $dt["Pin"]?></td>
                  </tr>
                </table>
             
                </td>
             
            </tr>
       
       </table>
       
       <table width="100%">
       <tr>
       	<td><H3>Điện thoại cùng loại</H3></td>
       </tr>
       
       <tr>
       <td width="100%">
    	<?php
		
		
			$query1 = "SELECT MaDT, TenDT, Hinh, Gia, SoLuocXem FROM DienThoai WHERE MaLoaiDT = $maLOAI limit 5";
			
			$kq1 = DataProvider::ExecuteQuery($query1);
			$cot = 0;
			while($dong = mysql_fetch_array($kq1))
			{
				if($cot == 0)
					echo "<tr>";
				?>
                	<td>
                    	<table width="250" border="1" bordercolor="#003399" rules="groups">
   	    <tr>
   	      <td colspan="2" align="center"><h3><font color="#003399"><?php echo $dong["TenDT"];?></font></h3></td>
        </tr>
   	    <tr>
   	      <td colspan="2" align="center">
          	<a href="ChiTietDT.php?madt=<?php echo $dong["MaDT"];?>">
          		<img src="<?php echo $dong["Hinh"];?>" width="200" height="200"/>
            </a>
          </td>
        </tr>
   	    <tr>
   	      <td align="left" class="DienThoai">Giá: <font color="#FF0000"><?php echo $dong["Gia"];?></font>$</td>
   	      <td align="right" class="DienThoai">Lược xem: <font color="#FF0000"><?php echo $dong["SoLuocXem"];?></font></td>
        </tr>
         <tr>
   	      <td colspan="2" align="center" ><form id="form3" name="form3" method="post" action="">
   	        <input type="submit" name="MuaDT" id="MuaDT" value="Mua Điện Thoại"  />
 	        </form></td>
   	      </tr>
      </table>
                    </td>
                <?php
				if($cot == 2)
				{
					echo "</tr>";
					$cot = 0;
				}
				else
					$cot++;
			}		
			if($cot < 2)
				echo "</tr>";
		?>
        </td>
        </tr>
      </table>
    <!-- InstanceEndEditable --></td>
    <td width="21%" id="FormLogin">
    <form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" rules="none">
        <tr>
          <td width="50%">Username:</td>
          <td width="50%"><input type="text" name="txtUsername" ></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="text" name="txtPassword"></td>
        </tr>
        <tr>
          <td><input type="submit" name="DangNhap" id="DangNhap" value="Đăng Nhập" /></td>
          <td>&nbsp;</td>
        </tr> 
		
		<?php  
                 if(isset($_REQUEST['DangNhap']))
                 {
                    $ten = $_REQUEST['txtUsername'];
                    $matkhau = $_REQUEST['txtPassword'];
                    
                    $query = "SELECT * FROM NguoiDung WHERE TenDangNhap = '{$ten}'";
                            
                    $kq = DataProvider::ExecuteQuery($query);
                    $dong = mysql_fetch_array($kq);
                    
        
                        if(mysql_num_rows($kq)<= 0)
                        {
                            $_SESSION['name'] = "Không có người dùng này";
                        }
                        else
                        {			
                            if($matkhau != $dong['MatKhau'])
                            {
                                echo "Mật khẩu sai";
                            }
                                else {
                                    $nguoidung = $dong['MaLoaiNguoiDung'];
                                    $_SESSION['name'] = $ten;
                                    $_SESSION['pass'] = $matkhau;
                                    $_SESSION['quyen'] = $nguoidung;
                                    
                                }
                                
                        }
                    }
        ?>
        <tr>
          <td colspan="2">Người dùng : <?php if(isset($_SESSION['name'])) { echo $_SESSION['name'];}?></td>

        </tr>
      </table>
    </form>
   
  	   
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center" id="footer"><p>Thiết kế bởi: sinh viên Khoa CNTT - trường ĐH KHTN<br />Version: Demo 0.00</p></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>