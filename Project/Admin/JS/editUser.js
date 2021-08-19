   	function get(id){
			return document.getElementById(id);
		}
	function validEmail(email)
	{
       var pos_at=email.indexOf("@");
       var pos_dot=email.indexOf(".",pos_at+1);
       if(pos_at<pos_dot)
	   {
        return true;
       }
        return false;
	}
	
      function validateData()
    {
		refresh();
		
		var hasError=false;
		
		if(get("fname").value=="")
		{
			get("err_fname").innerHTML= "**Firstname Required";
			get("err_fname").style.color="red";
			hasError=true;
		}
		if(get("lname").value=="")
		{
			get("err_lname").innerHTML= "**Lastname Required";
			get("err_lname").style.color="red";
			hasError=true;
		}
		else if(get("uname").value.length<5)
		{
			get("err_uname").innerHTML= "**Username Should be atleast 5 character Long";
			get("err_uname").style.color="red";
			hasError=true;
		}
		 if(get("ad").value=="")
		{
			get("err_ad").innerHTML= "**Address Required";
			get("err_ad").style.color="red";
			hasError=true;
		}
		if((!get("male").checked)&&(!get("female").checked))
		{
			get("err_gender").innerHTML= "**Gender Required";
			get("err_gender").style.color="red";
			hasError=true;
		}
		 if(get("email").value=="")
		{
			get("err_email").innerHTML= "**Email Required";
			get("err_email").style.color="red";
			hasError=true;
		}

		{
			get("err_pass").innerHTML= "**Password needs # and ?";
			get("err_pass").style.color="red";
			hasError=true;
		}
		 if(get("number").value=="")
		{
			get("err_number").innerHTML= "**Phone Number Required";
			get("err_number").style.color="red";
			hasError=true;
		}
		else if(isNaN(get("number").value))
		{
			get("err_number").innerHTML= "**Numeric value Required";
			get("err_number").style.color="red";
			hasError=true;
		}
		return !hasError;
	}
	function refresh()
	{
		get("err_fname").innerHTML= "";
		get("err_lname").innerHTML= "";
		
		get("err_ad").innerHTML= "";
		get("err_gender").innerHTML= "";
		get("err_email").innerHTML= "";
		get("err_pass").innerHTML= "";
		get("err_number").innerHTML= "";
	}