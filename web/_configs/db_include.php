<?php
    $db_hostname="localhost";
    $db_username="ycyf";
    $db_password="ycyfUsBmJ8";
    $db_database="ycyf";

	//設定session存活時間為5分鐘
  ob_start();  //輸出緩衝區
  session_start();
  setcookie(session_name(),session_id(), time() + 86400, "/");  //設定使用者session存活時間 86400 秒

	if(!($link=mysql_connect($db_hostname,$db_username,$db_password)))
    {
         echo("現在無法處理您的需求，請稍後再重試一次，謝謝\n");
         exit();
    }

    if (!mysql_select_db($db_database,$link))
    {
         echo("現在無法處理您的需求，請稍後再重試一次，謝謝\n");
         //echo(sprintf("錯誤：%d %s \n",mysql_errno($link),mysql_error($link)));
         exit();
    }

	function myquery($QueryString){
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER_SET_CLIENT=utf8");
    mysql_query("SET CHARACTER_SET_RESULTS=utf8");
 	  $Sql_Result=mysql_query($QueryString);

	  if($Sql_Result){
		  return($Sql_Result);
	  }
	  else{
		echo "<p><font color=\"#FF5E26\">資料庫無法連結</font></p>";
		/*
		echo "<br><br>";
		echo "<p>MySQL 語法：<br><font color=\"#FF5E26\">".$QueryString."</font></p>";
		echo "<br><br>";
		echo "<p>MySQL 錯誤訊息：<br><font color=\"#FF5E26\">".mysql_error()."</font></p>";
		*/
		exit();
	  }
	}

	 function check_empty($tbl,$action,$wor,$instr)
     {
				$sqla="select * from ".$tbl." where ".$wor."='".$instr."'";
				$resulta=myquery($sqla);
				$rowa=mysql_fetch_array($resulta);
					  if($rowa[$action]){
					  return $rowa[$action];

						}

		}
	function check_exit($tbl,$action,$instr){
				$sql="select * from ".$tbl." where ".$action."='".$instr."'";
				$result=myquery($sql);
				$row=mysql_fetch_array($result);
				 if($row[$action]){ return $row;}
				}

?>
