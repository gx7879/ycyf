function check(theForm)
 {
   if (document.getElementById("Name").value == "")
     {
       alert("�п�J�p���H!");
       document.getElementById("Name").focus();
       return (false);
     }


   if (document.getElementById("Email").value == "")
     {
       alert("�п�J�z���q�l�l��!");
       document.getElementById("Email").focus();
       return (false);
     }

   if (document.getElementById("Message").value == "")
     {
       alert("�п�J�z���ݨD!");
       document.getElementById("Message").focus();
       return (false);
     }

   if (document.getElementById("check_num").value == "")
     {
       alert("�п�J�ˮֽX!");
       document.getElementById("check_num").focus();
       return (false);
     }
   if (document.getElementById("Email").value != "" &&  ! /^[_\.\d\w\-]+@([\d\w][\d\w\-]+\.)+[\w]{2,3}$/.test(theForm.Email.value))
    {
      alert("�п�J���T�� E-mail !");
      document.getElementById("Email").focus();
      return (false);
    }
 return (true);
}
