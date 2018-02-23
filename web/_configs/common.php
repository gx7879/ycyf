<?php
	$webUrl="http://www.maxma.com.tw/"; //Project URL
	
	$acdate=date("Y-m-d",time());//<---2004-05-20
	$nowtime=date("H:i:s",time());//<---17:06:06
	$year=date("Y",time());//<---2004
	$y=$year-1911; //<---93
	$m=date("m",time());//<---09
	$d=date("d",time());//<---18
	
	
	
	$fromIP=$HTTP_SERVER_VARS["REMOTE_ADDR"];
	
	//上傳圖片最大限制&&訊息
	$maxUploadpic="500000";
	$maxUploadpicMessage="500K";

	//郵件寄送主機
	$mail_provider="127.0.0.1";
	//郵件寄件者
    $mail_sender="james@twinkle.com.tw";
	//郵件收件者
    $mail_receiver="james@twinkle.com.tw";
	
	//郵件寄件者標題
	$mail_from_title="寄件者標題";
	
	//郵件主旨
	$contact_mail_subject="聯絡我們系統";
?>