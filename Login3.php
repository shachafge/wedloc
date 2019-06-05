<!DOCTYPE html>
<html>
<head>
    <title>WedLoc</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

    <script src="js/validate.js"></script>

</head>

<body>


<div id="overlay"  >
<!--onload="on()"--> 
    
        <h1>ברוכים הבאים</h1>
        <div class="container">
            <form method="POST">
                <div class="row">
                    <h2 style="text-align:center">Login with Facebook or Manually</h2>
                    <div class="vl">
                        <span class="vl-innertext">or</span>
                    </div>

                    <div class="col">
                        <a href="#" class="fb btn">

                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                        <fb:login-button
                                id="fb-btn"
                                scope="public_profile,email"
                                onlogin="checkLoginState();">
                        </fb:login-button>
                    </div>
                    <div class="col">
                        <div class="hide-md-lg">
                            <p>Or sign in manually:</p>
                        </div>

                        <input type="text" name="email" placeholder="Username" id="email1" required>
                        <div id="errorEmail" style="color:red"> </div>
                        <input type="password" name="password" placeholder="Password" id="password1" required>
                        <div id="errorPassword" style="color:red"> </div>

                        <div id="error" style="color:red"></div>
                    </div>
                </div>
            </form>
        <input type="submit" onClick="validate()" name="submit" id="send" value="שלח בקשה">

        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="#" style="color:white" class="btn">Sign up</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Forgot password?</a>
                </div>
            </div>
        </div>
    
     <script>

        function on() {
            document.getElementById("overlay").style.display = "block";
        }

        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '637281690063529',
                cookie     : true,
                xfbml      : true,
                version    : 'v3.2'
            });


            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function statusChangeCallback(response){
            if(response.status=='connected'){
                console.log('Log in');


            }else{
                console.log('Not Log in');

            }
        }

    </script>



</body>

</html>