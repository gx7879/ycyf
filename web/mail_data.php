<?PHP

$data='<style type="text/css">
<!--
.text01 {
	font-family: "�s�ө���";
	font-size: 12px;
	font-weight: normal;
	color: #666666;
	line-height: 18px;
}
}
-->
</style>
<table width="70%" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#666666">
  <tr>
    <td width="90" bgcolor="#cccccc" class="text01">�p���H: </td>
    <td width="460" bgcolor="#ffffff"><span class="text01">'.$Name.'</span> </td>
  </tr>
  <tr>
    <td width="90" bgcolor="#cccccc" class="text01">�p���q��: </td>
    <td width="460" bgcolor="#ffffff"><span class="text01">'.$Tel.'</span> </td>
  </tr>
  <tr>
    <td width="90" bgcolor="#cccccc" class="text01">�ǯu���X: </td>
    <td width="460" bgcolor="#ffffff"><span class="text01">'.$FAX.'</span> </td>
  </tr>
  <tr>
    <td width="90" bgcolor="#cccccc" class="text01">�p���a�}: </td>
    <td width="460" bgcolor="#ffffff"><span class="text01">'.$Address.'</span> </td>
  </tr>
  <tr>
    <td width="90" bgcolor="#cccccc" class="text01">E-mail: </td>
    <td width="460" bgcolor="#ffffff"><span class="text01">'.$Email.'</span> </td>
  </tr>
  <tr>
    <td bgcolor="#cccccc" class="text01">�Ȥ᪺�N��: </td>
    <td bgcolor="#ffffff" class="text01">'.nl2br($message).'</td>
  </tr>

</table>
';
?>