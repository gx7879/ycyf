<?PHP
   ob_start();
   session_start();
	 if($_GET["act"]){
		switch($_GET["act"]){
			case"num":
			  $mes="<font color=\"#FF0000\">檢核碼錯誤!</font>";
			  $Name    = $_SESSION["Name"];
        $Address = $_SESSION["Address"];
        $TEL     = $_SESSION["TEL"];
        $FAX     = $_SESSION["FAX"];
        $message = $_SESSION["Message"];
        $Email   = $_SESSION["Email"];
			break;
			case "suc":
			$mes="<font color=\"#FF0000\">您的訊息已傳送完成，我們將會盡快處理，謝謝!</font>";
			break;
			case "err":


			$mes="<font color=\"#FF0000\">傳送失敗，請重新輸入!</font>";
			break;


			case "x":
			$mes="<font color=\"#FF0000\">請輸入資訊!</font>";
			break;


		 }

     session_unregister("Name");
     session_unregister("Address");
     session_unregister("TEL");
     session_unregister("FAX");
     session_unregister("Message");
     session_unregister("Email");
	 }


  //設定驗證碼
  $base = 'ABDEFGHIJLMNPQRSTZabdefghijmnpqrty23456789';
  $_SESSION["chk_string"]="";
  for ($i=1 ; $i <= 6 ; $i++) {
  	//mt_srand((double)microtime()*1000000);
    $char = $base[mt_rand(0,strlen($base)-1)];
    $chk_string = $chk_string.$char;
  }
	$_SESSION["chk_string"] = $chk_string;


  $check_image_url='../_includes/generate_identify_pic.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/page.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>億長御坊-聯絡我們</title>
<meta name="keywords" content="億長御坊, 熟食, 南門市場, 年菜, 億長御坊營業時間, 億長御坊佛跳牆, 南門市場億長御坊, 億長坊, 朱億長, 熟食食品, 熟食店, 冰糖蓮藕">
<meta name="description" content="堅持手工現做，堅持不添加防腐劑，堅持用最好的食材，為了回報客人的熱情肯定與相挺支持，億長御坊的最大要求，就是挑剔與用心！ ">
<meta name="robots" content="INDEX, FOLLOW">
<!-- InstanceEndEditable -->
<link href="web.css" rel="stylesheet" type="text/css" />
<link href="css/colorbox.css" rel="stylesheet" type="text/css" /> 
<script src="AC_RunActiveContent.js" type="text/javascript"></script>
<script src="AC_ActiveX.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="Scripts/jquery.colorbox.js" type="text/javascript"></script>
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({ rel: 'group2',
                onComplete: function() {
                    $("#cboxContent").css("height", "auto");
                    var sTextH = $("#cboxContent").css("height");
                    $("#cboxMiddleLeft").css("height", sTextH);
                    $("#cboxMiddleRight").css("height", sTextH); 
                }
            });
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


<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body onload="mCustomScrollbars();" >
<div id="floatdiv" style="position:absolute; right:0px; top:0px; width:150px; height:300px; z-index:100;">

    <div style="width:150px; height:300px;">
    	<img src="images/dragon_run.jpg" alt="億長御坊端午粽禮訂購活動" width="150" height="300" usemap="#Map" border="0">
           <map name="Map" id="Map">
             <area shape="rect" coords="3,27,147,110" href="http://www.momomall.com.tw/store/Main.jsp?entp_code=101704" target="_blank" />
             <area shape="rect" coords="3,115,147,197" href="http://tw.mall.yahoo.com/store/ycyf" target="_blank" /> 
           </map>
       </div>
       <!--<div style="width:150px; height:94px; border:0">
            <a href="https://tw.mall.yahoo.com/search?m=list&sid=ycyf&ccatid=9&path=9" target="_blank"><img src="../images/Dragon_2016.png" width="150" height="94" alt="2016 端午訂購活動" /></a>
       </div>-->
</div>

<script type="text/javascript" src="floating_menu.js"></script>
<div id="centermain">
  <div class="content_title">
    <div class="content_title_bnt">
              <ul>
                 <li class="btn01"><a href="about_origin.html"><img src="images/content/title_btn01.png" width="48" height="100" alt="關於我們" /></a></li>  
                 <li class="btn02"><a href="branches.html"><img src="images/content/title_btn02.png" width="48" height="100" alt="分店資訊" /></a></li>
                 <li class="btn03"><a href="appreciate.html"><img src="images/content/title_btn03.png" width="48" height="100" alt="美味鑑賞" /></a></li>
                 <li class="btn04"><a href="menu.html"><img src="images/content/title_btn04.png" width="48" height="100" alt="最新消息" /></a></li>
                 <li class="btn05"><a href="news_movie.html"><img src="images/content/title_btn05.png" width="48" height="100" alt="媒體報導" /></a></li>
                 <li class="btn06"><a href="contact.html"><img src="images/content/title_btn06.png" width="48" height="100" alt="聯絡我們" /></a></li>
              </ul>
           </div>
           <div class="gohome"><a href="index.php">回首頁</a></div>
  </div>
  

  <div id="content">
<div id="contentleft"><!-- InstanceBeginEditable name="EditRegion1" --><h2><img src="images/title06.gif" alt="聯絡我們" width="190" height="77" /></h2>
<!-- InstanceEndEditable --></div> 
<div id="contentright">
<!-- InstanceBeginEditable name="EditRegion4" -->
  <div id="menu_content" style="background:url(images/contact_back.jpg); background-repeat:no-repeat; background-position:right top">
    <div align="left" style="width:450px;"><img src="images/contact_up.gif" width="440" height="18" /> <br />
    <form action="mailto.php" method="post" name="InquiryForm" id="InquiryForm" OnSubmit="return check(this)">
    <table width="440" border="0" cellpadding="4" cellspacing="0" class="contacttab">
      <tr>
        <td colspan="4" align="left" valign="top" class="word_green">「<span class="bigword_red">*</span>」為必填資料 / <?=$mes;?></td>
      </tr>
      <tr>
        <td width="18%" align="left" valign="top"><span class="bigword_red">* </span>聯 絡 人 <img src="images/icon7.gif" width="8" height="7" /></td>
        <td colspan="3" align="left" valign="top"><input name="Name" type="text"class="writetype_y" id="Name" value="<?=$Name;?>" /></td>
      </tr>

      <tr>
        <td align="left" valign="top">聯絡電話 <img src="images/icon7.gif" width="8" height="7" /></td>
        <td width="30%" align="left" valign="top"><input name="TEL" type="text" class="writetype_y" id="TEL" value="<?=$TEL;?>" />      </td>
        <td width="18%" align="left" valign="top">傳真號碼 <img src="images/icon7.gif" width="8" height="7" /></td>
        <td width="34%" align="left" valign="top"><input name="FAX" type="text" class="writetype_y" id="FAX" value="<?=$FAX;?>" /></td>
      </tr>
      <tr>
        <td align="left" valign="top"><span class="bigword_red">* </span>E-mail <img src="images/icon7.gif" width="8" height="7" /></td>
        <td colspan="3" align="left" valign="top"><input name="Email" type="text" class="writetype_w" id="Email" value="<?=$Email?>" />      </td>
      </tr>

      <tr>
        <td align="left" valign="top">聯絡地址 <img src="images/icon7.gif" width="8" height="7" /></td>
        <td colspan="3" align="left" valign="top"><input name="Address" type="text" class="writetype_w" id="Address" value="<?=$Address;?>" />      </td>
      </tr>
      <tr>
        <td colspan="4" align="left" valign="top"><span class="bigword_red">* </span>歡迎留下您的意見 <img src="images/icon7.gif" width="8" height="7" /></td>
        </tr>
      <tr>
        <td colspan="4" align="left" valign="top"><textarea name="Message" rows="5" class="writetype_w" id="Message"><?=$message;?></textarea></td>
        </tr>
      <tr>
        <td align="left" valign="top">檢核碼 <img src="images/icon7.gif" width="8" height="7" /></td>
        <td colspan="3" align="left" valign="top">
        <img src="<?=$check_image_url;?>" align="absmiddle" />

      	<input name="check_num" id="check_num" size="6" maxlength="6" class="writetype_l" />
      	請將圖片中的數字填入欄位中        </td>
      </tr>
      <tr class="contacttabb">
        <td colspan="4" align="center" valign="top"><label>
         <input type="button" name="button" id="button" value="按鈕" class="botton" />
          </label>
          <label>　
            <input type="reset" name="button2" id="button2" value="重填" class="botton" />
            </label></td>
      </tr>
      </table>
      </form>
 <img src="images/contact_down.gif" width="440" height="18" /></div>
  </div>
<!-- InstanceEndEditable -->
</div>
</div> 
<!--contentend--> 

<div id="pagefoot">&nbsp;</div> 
<div id="pagefoot_b">
  <table border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="30" rowspan="2" align="left"><img src="images/footpic.gif" width="19" height="55" /></td>
      <td colspan="2" align="center">| <a href="about.html">關於我們</a> | <a href="branches.html">分店資訊</a> | <a href="appreciate_old.html">美味鑑賞</a> | <a href="menu.html">最新消息</a> | <a href="news_movie.html">媒體報導</a> | <a href="contact.php">聯絡我們</a> | <a href="index.php">回首頁</a> | <br />
        南門店：台北市羅斯福路一段 (南門市場一樓內187、189號)</td>
      <td width="30" rowspan="2" align="right"><img src="images/footpic.gif" width="19" height="55" /></td>
    </tr>
    <tr>
      <td align="left"> 電話：02-23930383</td>
      <td align="right" class="company"><a href="http://www.twinkle.com.tw/" target="_blank">Design by TWINKLE</a></td>
    </tr>
  </table>
</div>
</div>
</body>
<!-- InstanceEnd --></html>
