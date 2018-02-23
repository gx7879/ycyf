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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<title>億長御坊-中國傳統食品的播種者</title>
<meta name="keywords" content="億長御坊, 熟食, 南門市場, 年菜, 億長御坊營業時間, 億長御坊佛跳牆, 南門市場億長御坊, 億長坊, 朱億長, 熟食食品, 熟食店, 冰糖蓮藕">
<meta name="description" content="堅持手工現做，堅持不添加防腐劑，堅持用最好的食材，為了回報客人的熱情肯定與相挺支持，億長御坊的最大要求，就是挑剔與用心！ ">
<meta name="robots" content="INDEX, FOLLOW">
<link href="css/incolorbox.css" rel="stylesheet" type="text/css" />
<script src="AC_RunActiveContent.js" type="text/javascript"></script>
<script src="AC_ActiveX.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="Scripts/jquery.colorbox.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	-moz-user-select : none;
    -webkit-user-select: none;
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
table a {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	position:relative;
	color: #FFFFCC;
}

.company a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #d09b96;
	line-height: 20px;
}
#abgne_float_ad {
	display: none;
	position: absolute;
	z-index:100;
}
#abgne_float_ad .abgne_close_ad {
	display: block;
	text-align: right;
	cursor: pointer;
	font-size: 12px;
	background-image:url(images/book_bg.jpg);
}
#abgne_float_ad a img {
	border: none;
}
div.bigDiv {
	height: 1000px;
}

</style>
-->
</style>
<script type="text/javascript">
	// 當網頁載入完
	$(window).load(function(){
	var $win = $(window),
		$ad = $('#abgne_float_ad').css('opacity', 0).show(),	// 讓廣告區塊變透明且顯示出來
		_width = $ad.width(),
		_height = $ad.height(),
		_diffY = 50, _diffX =50,	// 距離右及下方邊距
		_moveSpeed = 800;	// 移動的速度
 
	// 先把 #abgne_float_ad 移動到定點
	$ad.css({
		top: $(document).height(),
		left: $win.width() - _width - _diffX,
		opacity: 1
	});
 
	// 幫網頁加上 scroll 及 resize 事件
	$win.bind('scroll resize', function(){
		var $this = $(this);
 
		// 控制 #abgne_float_ad 的移動
		$ad.stop().animate({
			top: $this.scrollTop() + $this.height() - _height - _diffY,
			left: $this.scrollLeft() + $this.width() - _width - _diffX
		}, _moveSpeed);
	}).scroll();	// 觸發一次 scroll()
 
	// 關閉廣告
	$('#abgne_float_ad .abgne_close_ad').click(function(){
		$ad.hide();
	});
});
</script>
<script>
			$(document).ready(function(){
				$.colorbox({
					 html : '<img src="images/new_index.jpg" width="850" height="680" />' //在燈箱中要顯示的html字段
                   });
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
</script>
<script>
function iEsc(){ return false; }
function iRec(){ return true; }
function DisableKeys() {
if(event.ctrlKey || event.shiftKey || event.altKey) {
window.event.returnValue=false;
iEsc();}
}
document.ondragstart=iEsc;
document.onkeydown=DisableKeys;
document.oncontextmenu=iEsc;
if (typeof document.onselectstart !="undefined")
document.onselectstart=iEsc;
else{
document.onmousedown=iEsc;
document.onmouseup=iRec;
}
function DisableRightClick(qsyzDOTnet){
if (window.Event){
if (qsyzDOTnet.which == 2 || qsyzDOTnet.which == 3)
iEsc();}
else
if (event.button == 2 || event.button == 3){
event.cancelBubble = true
event.returnValue = false;
iEsc();}
}
</script>
</head>
<body onload="mCustomScrollbars();" >

<div id="floatdiv" style="position:absolute; right:0px; top:0px; width:150px; height:394px; z-index:100;">
   
    <div style="width:150px; height:300px;">
    	<img src="images/dragon_run.jpg" alt="億長御坊端午粽禮訂購活動" width="150" height="300" usemap="#Map" border="0">
           <map name="Map" id="Map">
             <area shape="rect" coords="3,27,147,110" href="http://www.momomall.com.tw/store/Main.jsp?entp_code=101704" target="_blank" />
             <area shape="rect" coords="3,115,147,197" href="http://tw.mall.yahoo.com/store/ycyf" target="_blank" />
           </map>
  </div>
       <div style="width:150px; height:94px; border:0">
            <a href="https://tw.mall.yahoo.com/search?m=list&sid=ycyf&ccatid=5&path=5" target="_blank"><img src="images/NewYearBanner2016.png" alt="2016 億長御坊年菜預購" border="0" /></a>
       </div>
       <div style="width:150px; height:94px; border:0">
            <a href="http://www.anyongfresh.com/anyongfresh/index.php?action=product_sort&prod_sort_uid=70" target="_blank"><img src="images/dragon_run02.png" alt="億長御坊安永鮮物合作產品" border="0" /></a>
       </div>
</div>



<script type="text/javascript" src="floating_menu.js"></script>
<div class="bigDiv" style="position:absolute"> </div>

<div id="centerback">
  <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="top"><script type="text/javascript">

	AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','950','height','522','src','images/index','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','wmode','transparent','movie','images/index' ); //end AC code

</script>
        <noscript>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="950" height="522">
          <param name="movie" value="images/index.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <embed src="images/index.swf" width="950" height="522" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
        </object>
      </noscript></td>
    </tr>
    <tr>
      <td height="90" align="center" valign="middle"><table width="950" border="0" cellpadding="0" cellspacing="5">
          <!--<tr>
            <td colspan="2" align="center"><img src="images/newopen.png" alt="即將進駐" width="344" height="104" border="0" /></td>
          </tr>-->
        </table>
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="30" rowspan="2" align="left"><img src="images/footpic.gif" width="19" height="55" /></td>
             <td colspan="2" align="center">| <a href="../about.html">關於我們</a> | <a href="../branches.html">分店資訊</a> | <a href="../appreciate.html">美味鑑賞</a> | <a href="../menu.html">最新消息</a> | <a href="../news_movie.html">媒體報導</a> | <a href="../contact.php">聯絡我們</a> | <br />
        南門店：台北市羅斯福路一段 (南門市場一樓內187、189號)</td>
            <td width="30" rowspan="2" align="right"><img src="images/footpic.gif" width="19" height="55" /></td>
          </tr>
          <tr>
            <td align="left"> 電話：02-23930383</td>
            <td align="right" class="company"><a href="http://www.twinkle.com.tw/" target="_blank">Design by TWINKLE</a></td>
          </tr>
        </table></td>
    </tr>
  </table>
</div>
</body>
</html>
