<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body  background="yy.jpg" > 

<FONT COLOR=white>

<center>
<H2><table WIDTH="250" BGCOLOR="#ffff00" HEIGHT="100">
  <tr>
  อาหารที่คุณสั่ง คือ<br>
    <td width="332" height="78">โต๊ะ <?php
echo $_GET['table']; ?> <br>

จำนวนชาม : <?php echo $_GET['jan']; ?>
<br>
เส้น : <?php echo $_GET['a']; ?>
<br>
น้ำซุป : <?php echo $_GET['b']; ?>
<br>
<?php if(isset($_GET['l'])){ ?>
เครื่องปรุง หมูสับ
<br>
<?php }?>

<?php if(isset($_GET['k'])){?>
เครื่องปรุง ลูกชิ้น
<br>
<?php }?>

<?php if(isset($_GET['kk'])){?>
เครื่องปรุง ตับลวก
<br>
<?php }?>

<?php if(isset($_GET['q'])){?>
เครื่องปรุง ผักบุ้ง
<br>
<?php }?>

<?php if(isset($_GET['w'])){?>
เครื่องปรุง ผักชี
<br>
<?php }?>

<?php if(isset($_GET['m'])){?>
เครื่องปรุง ถั่วงอก
<br>
<?php }?>

<?php if(isset($_GET['y'])){?>
พิเศษ กุ้งแม่น้ำ <?php echo $_GET['y']*55; ?>
<br>
<?php }?>

<?php if(isset($_GET['uu'])){?>
พิเศษ ปลาหมึก  <?php echo $_GET['uu']*55; ?>
<br>
<?php }?>

<?php if(isset($_GET['uuu'])){?>
พิเศษ ไช่มะตูม<?php echo $_GET['uuu']*15; ?>
<br>
<?php }?>

รวม ราคา<?php echo $_GET['jan']*30+($_GET['uu']*55)+($_GET['y']*55)+($_GET['uuu']*15); ?>&nbsp;</td>
  </tr>
</table>

<br>
</H2>
</center>
</body>
</html>