<html>
    <head>
        <title>WedLoc - login</title>
        <link rel="stylesheet" type="text/css" href="css/Login.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/validate.js"></script>
    </head>

    <body style=" background-color: #c7dfdd;">

        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
            <h3>ברוכים הבאים</h3>
            <!-- Icon -->
            <div class="fadeIn first">
              <img src="photos/ring.png" id="icon" alt="User Icon" />
            </div>
        
            <!-- Login Form -->
            <form method="POST">
              <input type="text" class="fadeIn second"  name="email" placeholder="שם משתמש" id="email1">
              <!-- error -->
              <div id="errorEmail" style="color:red"> </div>
              
              <input type="password" id="password1" class="fadeIn third" name="password" placeholder="סיסמא" id="password1" required>
             
              <!-- error -->
              <div id="errorPassword" style="color:red"> </div>
              <div id="error" style="color:red"></div>
              
            </form>
            
            
             <input type="submit" class="fadeIn fourth"  onClick="validate()" name="submit" id="send" value="שלח בקשה">
            
            <!-- Remind Passowrd -->
            <div id="formFooter">
              
              <a class="underlineHover" href="pages/signUp.html">הירשם</a>
            </div>
        
          </div>
        </div>
        <script>

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