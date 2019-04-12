function	regestervalidate()
		{
			var uname=document.getElementById("uname");
			var name=document.getElementById("name");
			var email=document.getElementById("email");
			var pass=document.getElementById("pass");
			var cpass=document.getElementById("cpass");
			var mode=document.getElementById("mode");
			/*var atindex=email.value.indexof('@');
			var dotindex=email.value.lastindexof('.');*/
			if(uname.value=="")
			{
				window.alert("user name required");
				name.focus();
				return false;
			}
			if(name.value=="")
			{
				window.alert("name  required");
				pass.focus();

				return false;
			}
			if(email.value=="")
			{
				window.alert("email  required");
				pass.focus();

				return false;
			}
			if(pass.value=="")
			{
				window.alert("password  required");
				pass.focus();

				return false;
			}
			if(cpass.value=="")
			{
				window.alert("confirm password  required");
				pass.focus();

				return false;
			}
			 if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
/*	if(atindex<1 || dotindex>=email.length-2 )
	{
	 window.alert("Please enter a valid e-mail address with @ and .");
        email.focus();
        return false;
	}*/
	if(pass.value!=cpass.value)
	{
		window.alert("password must match");
		pass.focus();
		return false;
	}
			return true;
		}