<?php

  //設定session存活時間為5分鐘
  ob_start();  //輸出緩衝區
  session_start();
  setcookie(session_name(),session_id(), time() + 86400, "/");  //設定使用者session存活時間 86400 秒
//echo $_SESSION["chk_string"];

  if (isset($_SESSION["chk_string"]))
  {
    $base_char = "~!@#$%^&*()_+";
    $im = imagecreate(85,20);//建立圖片

    //產生雪花背景
    $base_char_len = strlen($base_char)-1;//字串長度
    for ( $i = 1; $i <= 100; $i++ ) {
      $color = imageColorAllocate($im,mt_rand(175,255),mt_rand(175,255),mt_rand(175,255));
	    $rand_char = $base_char[mt_rand(0,$base_char_len)];
	    imageString( $im,1, mt_rand(0,80), mt_rand(0,30),$rand_char,$color);
    }

    //文字
    $base_len = strlen($_SESSION["chk_string"])-1;
    for ( $i = 0; $i <= $base_len ; $i++ ) {
	    $color = imageColorAllocate($im,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
	    imageString($im,6,$i*15,mt_rand(0,5),$_SESSION["chk_string"][$i],$color);
    }

    header('Content-type: image/jpeg');
    imagejpeg($im,'',100);
    imagedestroy($im);//釋放圖片

  }


?>