<?php
   ob_start();
   session_start();
  include_once("_includes/class.smtp.php");
  include_once("_includes/class.phpmailer.php");

	if(empty($_POST["Name"])  || empty($_POST["Email"]) || empty($_POST["check_num"]) ){
	  header("Location:./");
	  exit();
	}
	$cknum = $_POST['check_num']; //���U�X
  $Name    = $_SESSION["Name"]    = $_POST["Name"];
  $Address = $_SESSION["Address"] = $_POST["Address"];
  $Tel     = $_SESSION["TEL"]     = $_POST["TEL"];
  $FAX     = $_SESSION["FAX"]     = $_POST["FAX"];
  $message = $_SESSION["Message"] = $_POST["Message"];
  $Email = $_SESSION["Email"] = $_POST["Email"];
	//���U���ѽX�O�_���T
	if($_SESSION["chk_string"]!=$cknum) {
    echo "<script language='Javascript'>";
    echo "window.alert('�ˮֽX��J���~�I�I');";
    echo "location.href='contact.php?act=num'";
    echo "</script>";
    exit();
	}else{





	//�H��̪�mail
	$mail_sender="service@ycyf.com.tw";

	//�����mail
	//$mail_receiver="service@ycyf.com.tw";
     $mail_receiver="service@ycyf.com.tw";

	include_once("mail_data.php");

	$pub_email_mailer="smtp";
  $mail = new PHPMailer();
  $mail->CharSet  = "BIG5";
  $mail->From     = $mail_sender;
  $mail->FromName = "�Ȥ�";
  $mail->Host     = "127.0.0.1";
  $mail->Mailer   = $pub_email_mailer;
  $mail->Subject  = "�����s�{�u�W�p���ڭ�";
  $mail->Body     = $data;
  $mail->AltBody  = "�����s�{�u�W�p���ڭ�";
  $mail->IsHTML(true);
  $mail->AddAddress($mail_receiver, "jioumu");
  $send_ok=$mail->Send();


	if(!$send_ok){
	   header("Location:contact.php?act=err#mes");
	   exit();
	}else{
	   header("Location:contact.php?act=suc#mes");
	   exit();
	}
}
?>