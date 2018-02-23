<?
   session_start();
   header('Content-type: text/html; charset=utf-8');
   header('Vary: Accept-Language');

   //管理者權限
   if(empty($_SESSION["pub_admin_id"]) || empty($_SESSION["pub_account"]))
   {
?>
    <script language="javascript">
	   alert("權限失效，請重新登入！");
	   parent.location.href="./";
	  </script>
<?
    exit();
   }
?>