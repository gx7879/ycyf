<?PHP
  include_once("_configs/db_include.php");
  $sql="select pgcount from counter;";
  $result= myquery($sql);
  $row=mysql_fetch_array($result);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>億長御坊-中國傳統食品的播種者</title>
<meta name="keywords" content="億長御坊, 熟食, 南門市場, 年菜, 億長御坊營業時間, 億長御坊佛跳牆, 南門市場億長御坊, 億長坊, 朱億長, 熟食食品, 熟食店, 冰糖蓮藕">
<meta name="description" content="堅持手工現做，堅持不添加防腐劑，堅持用最好的食材，為了回報客人的熱情肯定與相挺支持，億長御坊的最大要求，就是挑剔與用心！ ">
<meta name="robots" content="INDEX, FOLLOW">
<script src="AC_RunActiveContent.js" type="text/javascript"></script>
<script src="AC_ActiveX.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	background-color: #a43d36;
	background-image: url(images/index_back.jpg);
	background-repeat: repeat-x;
	margin: 8px 0 0 0;
	text-align:center;
}
#centerback {
	background-image: url(images/index_centerback.jpg);
	background-repeat: no-repeat;
	height: 670px;
	width: 950px;
	margin-right: auto;
	margin-left: auto;
}
table {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13.5px;
	color: #003399;
	line-height: 20px;
}
table a{
	color: #FFFFFF;
	text-decoration: none;
}
a:hover{position:relative;top:1px;left:1px;color: #FFFFCC;}
-->
.company a{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #d09b96;
	line-height: 20px;
}
</style>
</head>

<body>
<div id="centerback">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p><img src="images/logo.gif" width="286" height="150" /></p>
	  <p>&nbsp;</p>
	  <table border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="12" align="left"><img src="images/icon2.gif" width="12" height="12" /></td>
          <td align="right">瀏覽人數：<?=$row["pgcount"]?></td>
          <td width="14" align="right"><img src="images/icon2.gif" width="12" height="12" /></td>
        </tr>
      </table>	  <p>&nbsp;</p></td>
  </tr>
</table>
</div>
</body>
</html>
