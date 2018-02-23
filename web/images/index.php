<?PHP

  include_once("_configs/db_include.php");





  if (Empty($_SESSION['ycyf']['counter']['index']))

    $_SESSION['ycyf']['counter']['index']="True"; //第一次進來,沒有SESSION為TRUE

  else

    $_SESSION['ycyf']['counter']['index']="FALSE"; //第二次以後進來,有SESSION為FALSE  //True 是灌水用的



  if($_SESSION['ycyf']['counter']['index']="True"){

  	$sql="update counter set pgcount=pgcount+1 where pgname='ycyf';";

    myquery($sql);

  }





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

	font-size: 11px;

	color: #FFFFFF;

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
#adbar{
	z-index: 2000;
	position: absolute;
	width: 142px;
	top: 540px;
	right: 0px;
	margin-right: 0px;
}

</style>
<script language="javascript"> 

　　function openwin() { 
　　window.open ("newmenu.html", "newwindow", "height=350, width=410,toolbar=no,menubar=no, scrollbars=no, resizable=no, location=no, status=no") 
 
　　} 
 
　　</script> 
</head>

<body onload="openwin()">



<body>
<div id="adbar"><a href="http://www.shopping7.com.tw/food/page_orange.html" target="_blank"><img src="images/ad2.jpg" alt="Shopping7訂購年菜" width="140" height="140" border="0" align="right" /></a></div>
<div id="centerback">

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td align="center" valign="top">

	<script type="text/javascript">

	AC_FL_RunContent( "codebase","http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0","width","950","height","522","src","images/index","quality","high","pluginspage","http://www.macromedia.com/go/getflashplayer","movie","images/index" ); //end AC code

</script>

	<noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="950" height="522">

      <param name="movie" value="images/index.swf" />

      <param name="quality" value="high" />

      <embed src="images/index.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="950" height="522"></embed>

    </object></noscript></td>

  </tr>

  <tr>

    <td height="90" align="center" valign="middle"><table width="50%" border="0" cellpadding="0" cellspacing="5">
      <tr>
        <td align="center"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','332','height','61','src','images/banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/banner' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="332" height="61">
        <param name="movie" value="images/banner.swf" />
        <param name="quality" value="high" />
        <embed src="images/banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="332" height="61"></embed></object></noscript></td>
        <td align="center"><a href="NewYear.html"><img src="images/NewYearBanner.gif" width="332" height="61" border="0" /></a></td>
      </tr>
    </table>
    <table border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td width="30" rowspan="2" align="left"><img src="images/footpic.gif" width="19" height="55" /></td>

        <td colspan="2" align="center">| <a href="about.html">關於我們</a> | <a href="menu.html">菜色介紹</a> | <a href="appreciate.html">美食鑑賞</a> | <a href="branches.html">分店訊息</a> | <a href="news.html">媒體報導</a> | <a href="contact.php">聯絡我們</a> |<br />

南門店：台北市羅斯福路一段 (南門市場一樓內187、189號)</td>

        <td width="30" rowspan="2" align="right"><img src="images/footpic.gif" width="19" height="55" /></td>

      </tr>

      <tr>

        <td align="left">            電話：02-23930383</td>

        <td align="right" class="company"> <a href="http://www.twinkle.com.tw/" target="_blank">Design by TWINKLE</a></td>

      </tr>

    </table></td>

  </tr>

</table>

</div>

</body>

</html>

