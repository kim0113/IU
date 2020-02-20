function showmessage(){
    alert("Hi, lets learn Javascript!");
for(var i = 5;i>0;i--){
    alert("Variable I is now: " + i);
    }
}

function Login(){
    var Username = document.getElementById("Username").value;
    var Password = document.getElementById("Password").value;
    (alert Username);

	if(Username == "Sgt" && Password == "kkk"){
  	   location.href("file:///C:/Users/User/IU/IU/My%20Resume.html");
	}else if(Username == "" || Password = ""){
    alert("Please check if Username or Password is Correct");
}
}