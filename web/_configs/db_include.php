<?php
    $db_hostname="localhost";
    $db_username="ycyf";
    $db_password="ycyfUsBmJ8";
    $db_database="ycyf";

	//�]�wsession�s���ɶ���5����
  ob_start();  //��X�w�İ�
  session_start();
  setcookie(session_name(),session_id(), time() + 86400, "/");  //�]�w�ϥΪ�session�s���ɶ� 86400 ��

	if(!($link=mysql_connect($db_hostname,$db_username,$db_password)))
    {
         echo("�{�b�L�k�B�z�z���ݨD�A�еy��A���դ@���A����\n");
         exit();
    }

    if (!mysql_select_db($db_database,$link))
    {
         echo("�{�b�L�k�B�z�z���ݨD�A�еy��A���դ@���A����\n");
         //echo(sprintf("���~�G%d %s \n",mysql_errno($link),mysql_error($link)));
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
		echo "<p><font color=\"#FF5E26\">��Ʈw�L�k�s��</font></p>";
		/*
		echo "<br><br>";
		echo "<p>MySQL �y�k�G<br><font color=\"#FF5E26\">".$QueryString."</font></p>";
		echo "<br><br>";
		echo "<p>MySQL ���~�T���G<br><font color=\"#FF5E26\">".mysql_error()."</font></p>";
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
