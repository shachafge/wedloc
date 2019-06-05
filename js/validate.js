function validate(){
    var email = document.getElementById("email1").value;
    var password = document.getElementById("password1").value;
    var text = "טופס נשלח";



    if (!(password.length>=2 && password.length<=50) || !email.includes("@")) {
        if (!(password.length >= 2 && password.length <= 50)) {
            text = "The password must be between 2 and 50 characters";
            document.getElementById("errorPassword").innerHTML = text;
        }
        if (!email.includes("@")){
            text = "This is not a valid email";
            document.getElementById("errorEmail").innerHTML = text;
        }
    }
    else {
        console.log("Password: "+password);
        console.log("Email: "+email);

        var hr = new XMLHttpRequest();
        var url="../pages/loginDB.php";


        var vars= "email="+email+"&password="+password;
        hr.open("POST",url,true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function () {
            if(hr.readyState == 4 && hr.status==200){
                var return_data = hr.responseText;
                if(return_data=="true"){
               console.log(return_data);
               window.location.href = '../index.php';
                }
               else{
               console.log(return_data);
             document.getElementById("error").innerHTML = 'Try again or sign up';
               }
            }
        };
        hr.send(vars);
        /*location.reload();*/

    }


}
