function check(theForm)
 {
   if (document.getElementById("Name").value == "")
     {
       alert("請輸入聯絡人!");
       document.getElementById("Name").focus();
       return (false);
     }


   if (document.getElementById("Email").value == "")
     {
       alert("請輸入您的電子郵件!");
       document.getElementById("Email").focus();
       return (false);
     }

   if (document.getElementById("Message").value == "")
     {
       alert("請輸入您的需求!");
       document.getElementById("Message").focus();
       return (false);
     }

   if (document.getElementById("check_num").value == "")
     {
       alert("請輸入檢核碼!");
       document.getElementById("check_num").focus();
       return (false);
     }
   if (document.getElementById("Email").value != "" &&  ! /^[_\.\d\w\-]+@([\d\w][\d\w\-]+\.)+[\w]{2,3}$/.test(theForm.Email.value))
    {
      alert("請輸入正確的 E-mail !");
      document.getElementById("Email").focus();
      return (false);
    }
 return (true);
}
