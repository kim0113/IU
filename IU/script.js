function Login(){
    var userName = document.getElementById("userName").value;
    var passWord = document.getElementById("passWord").value;

	if(userName == "Sgt" && passWord == "kkk"){
  	   return;
		document.getElementById("userName").reset();
	}else if(userName == "" || passWord = ""){
    	   alert("Login failed, please enter a valid Username and Password");
	   return false;
	}else{
	   alert("Login failed, incorrect Username or Password");
	   return flase;
	}
}