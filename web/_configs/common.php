<?php
	$webUrl="http://www.maxma.com.tw/"; //Project URL
	
	$acdate=date("Y-m-d",time());//<---2004-05-20
	$nowtime=date("H:i:s",time());//<---17:06:06
	$year=date("Y",time());//<---2004
	$y=$year-1911; //<---93
	$m=date("m",time());//<---09
	$d=date("d",time());//<---18
	
	
	
	$fromIP=$HTTP_SERVER_VARS["REMOTE_ADDR"];
	
	//�W�ǹϤ��̤j����&&�T��
	$maxUploadpic="500000";
	$maxUploadpicMessage="500K";

	//�l��H�e�D��
	$mail_provider="127.0.0.1";
	//�l��H���
    $mail_sender="james@twinkle.com.tw";
	//�l�󦬥��
    $mail_receiver="james@twinkle.com.tw";
	
	//�l��H��̼��D
	$mail_from_title="�H��̼��D";
	
	//�l��D��
	$contact_mail_subject="�p���ڭ̨t��";
?>