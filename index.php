<?php
    require_once('classes/init.php');
    global $database;
    $imageElements=array();
    $places="";
    $user_list="";
    $row="";
    $row1="";
    $output1="";
    $name="";
    $image="";
    $photo="";
    
    
    session_start();
    if( isset( $_SESSION['user'] ) ) {
          /*echo $_SESSION['user'] ;*/
          $user=$_SESSION['user'];
          
    
            }
     else
       header('Location: Login.php');
       

    
    
   require_once('googleCalendar/google-calendar-api.php');
    require_once('googleCalendar/settings.php');
    
                $photo = "SELECT icon FROM user WHERE email='".$user."'";
                $resultIcon=$database->query($photo);
                
                if($row=$resultIcon->fetch_assoc()){
                    if($row['icon']=="female")
                       $image="/photos/female.jpg";
                else if($row['icon']=="male")
                     $image="/photos/male.jpg";
                else if($row['icon']=="both")
                     $image="/photos/both.jpg";
                }
echo $image
?>


<!DOCTYPE html>
<html>
    <head class="col-12">
	<title>WedLoc</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<script src="js/index1.js"></script>-->

	
	<!--bootstrap code gallary-->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">   
  
    <!--header bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!--google calendar-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>
    
     <!--//icon footer-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <script>
        var n="<?php echo $user ?>";
       $(document).ready( function (){
        var vars= "user="+n;
        var hr = new XMLHttpRequest();

        hr.onreadystatechange = function () {

            if(this.readyState == 4 && this.status==200){
                var return_data = hr.responseText;
               console.log(return_data);
               $("#image1").html(return_data);
        }
          //  console.log('ammkm');

        };
        hr.open("POST","pages/element.php",true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.send(vars);
    });
    </script>
      
        <!--bottun bootstrap avater-->
          <meta charset="utf-8">
        
          <meta http-equiv="x-ua-compatible" content="ie=edge">
    
       
          <!-- Material Design Bootstrap -->
          <link href="googleCalendar/css/mdb.min.css" rel="stylesheet">
          <!-- Your custom styles (optional) -->
          <link href="googleCalendar/css/style.css" rel="stylesheet">
        <!--end bottun bootstrap-->
		    <!-- Second navbar for sign in -->
</head>

    <body class="no-touch" style="background-color:#f2f2f2">

    	<header class="col-12" id="upPage">

        <nav class="navbar navbar-default" style="margin:0px; background-color: #e3b9d847;border-bottom: 7px solid lightgrey;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="margin: 0px 30px 0px 0px; padding:0px;"><img src="photos/logo.png" style="height:100%;"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
             <li><div class="dropdown">
                <button class="dropbtn">אולמות</button>
                <div class="dropdown-content">
                <a href="pages/ganV.php">גן ורדים</a>
                <a href="pages/alma.php">עלמה</a>
                <a href="pages/amado.php">אמדו</a>
                <a href="pages/anahala.php">הנחלה</a>
                <a href="pages/avenue.php">אבניו</a>
                <a href="pages/batHagil.php">בת הגלבוע</a>
                <a href="pages/bayaar.php">ביער</a>
                <a href="pages/euphoria.php">אופוריה</a>
                <a href="pages/novia.php">נוביה</a>
                <a href="pages/sheva.php">שבע</a>
                <a href="pages/tesoro.php">טזורו</a>
                <a href="pages/trask.php">טראסק</a>
                </div>
             </div>
            </li>
            <li><a href="#aboutUs">אודות</a></li>
            <li><a href="mailto:amit.bass3@email.com">צור קשר</a></li>
            <li>
              <a href="pages/logout.php" style="padding: 5px 5px; margin: 10px;">Log-out</a>
            </li>
        </ul>
          
          <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse2">
            <form class="navbar-form navbar-right form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required />
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    	   
	    <div id="titleWedLoc" class="col-12"><center><img id="ringImg"src="photos/ring.png" alt="title"></center></div>
	     <!--botstrap avater-->
        <!--<div class="chip chip-md cyan darken-2 white-text">-->
        <!--        <img src=<?php echo $image ?> >-->
        <!--</div>-->
    	<div id="upPhotoDiv" class="col-10" ><img id="upImg" src="photos/cover.jpg" alt="upImg"></div>
		
	</header>

    	<main class="col-10">
	    
		<div class="col-12" class="filter">
		    <center>
		   <hr style="display: inline-block ; margin-bottom:3px; width:15%; border-top: 3px solid #d1e7e6;">
		   <h3>מצאנו בשבילך את האולמות המתאימים לך ביותר</h3>      
		   <hr style="display: inline-block ; margin-bottom:8%; width:15%; border-top: 3px solid #d1e7e6;">
           </center>
           
           
            <div class="slidecontainer col-10">
                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                <div class="slideBarChoose"><h4>לפי מיקום</h4></div>
                <div class="slideBarChoose" id="byPreferences"><h4>לפי העדפותיך</h4></div>
                
            </div>
                       
           
              
           <!-- <form method="get" class="searchPlaceByGeo">
            <p><input type="text" name="originSt" placeholder="Enter your city name:"></p>
                
            </form>-->
             <!--<input type="submit" onclick="getLocation()">-->
             <!--  <p><input type="submit" value="מיין לפי מיקום" onclick="ajax()"  ></p>-->
            <!--<input type="button" onclick="getLocation()" value="אישור">-->
             <p id="demo"></p>
        </div>
        <section id="top3" class="col-12">
        </section>
 

         <div id="image1" class="wrap">
      </div>
     
        <div id="image2" class="wrap">
            </div>
    	
    	<div id ="calendar" class="col-10">
		    <?php
    			$login_url = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/calendar') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
			?>
			<p id="addFromList">:לרשימת משימות לקראת החתונה, לחץ כאן </p>
			<a id="logo" href="<?= $login_url ?>" target="_blank" >Click here</a>
		
		</div>
		
		</main>
		
        <footer class="col-12">
            <div class="wrap-in">
                <div class="footer1 footer col-4">
                    <div class="custom">
                        <center>
                        <img class="footer1-title" src="photos/ringnew.png" alt="ringLogo">
                        </center>
                        <p id="aboutUs">ברוכים הבאים! <br>
                             הגעתם לאתר המרכז בפניכם מגוון רחב של מקומות אירועים בארץ, חשוב היה לנו להקל עליכם במציאת מקום לחתונה, על ידי התאמתו לרצונות שלכם! 
בעזרת שאלון ההעדפות שמילאתם הצגנו לכם רשימה של המקומות בסדר יורד, מהמקום המתאים ביותר למקום שהכי פחות מתאים. כעת תוכלו לסגור מקום במהירות ובקלות ותוכלו למנוע את בזבוז זמנכם היקר ולהתפנות לרשימת המשימות הנוספות והמרובות בעת תכנון החתונה וכל זה במקום אחד!
<br>
מאחלים לכם דרך צלחה רצופה בהנאה ♥
</p>
                    </div>
                </div>
                <div class="footer2 footer col-4">
                    <div class="custom" id="footer2Down">
                        <div class="social-footer-title">
                         <ul id="iconUL">
                              <li class="iconLI">
                                 <a href="https://www.facebook.com/" class="iconA"> <i class="fab fa-facebook-f iconI"></i></a>
                              </li>  
                              <li class="iconLI">
                                 <a href="https://www.instagram.com/" class="iconA"> <i class="fab fa-instagram iconI"></i></a>
                              </li>  
                               <li class="iconLI">
                                 <a href="https://www.pinterest.com/" class="iconA"> <i class="fab fa-pinterest-p iconI"></i></a>
                              </li> 
                              <li class="iconLI">
                                 <a href="https://www.google.com/" class="iconA"> <i class="fas fa-envelope iconI"></i></a>
                              </li>  
                         </ul>
                         <div class="468"></div> 
                        </div>
                    </div>
                    <p><a href="https://wedloc.000webhostapp.com/index.php" style="color:black;"> Home Page </a>    |
                       <a href="#upPage" style="color:black;"> Back to top</a>  &nbsp
                       <p>
                        &nbsp wedLoc &copy &nbsp 
                       </p>
                    </p>
                </div>
                <div class="footer3 footer col-4">
                    <img alt="Logo" src="photos/logo.png">
                </div>
            </div>    
            



    <!--<p>-->
    <!--<a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>-->
    <!--<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>-->
    <!--<a href="https://www.google.com/"><i class="fas fa-envelope"></i></a>-->
    <!--</p>-->
    
    
    
</footer>

    	<script>

/*google calendar script*/
    	
// Selected time should not be less than current time
function AdjustMinTime(ct) {
	var dtob = new Date(),
  		current_date = dtob.getDate(),
  		current_month = dtob.getMonth() + 1,
  		current_year = dtob.getFullYear();
  			
	var full_date = current_year + '-' +
					( current_month < 10 ? '0' + current_month : current_month ) + '-' + 
		  			( current_date < 10 ? '0' + current_date : current_date );

	if(ct.dateFormat('Y-m-d') == full_date)
		this.setOptions({ minTime: 0 });
	else 
		this.setOptions({ minTime: false });
}

// DateTimePicker plugin : http://xdsoft.net/jqplugins/datetimepicker/
$("#event-start-time, #event-end-time").datetimepicker({ format: 'Y-m-d H:i', minDate: 0, minTime: 0, step: 5, onShow: AdjustMinTime, onSelectDate: AdjustMinTime });
$("#event-date").datetimepicker({ format: 'Y-m-d', timepicker: false, minDate: 0 });

$("#event-type").on('change', function(e) {
	if($(this).val() == 'ALL-DAY') {
		$("#event-date").show();
		$("#event-start-time, #event-end-time").hide();
	}
	else {
		$("#event-date").hide(); 
		$("#event-start-time, #event-end-time").show();
	}
});

// Send an ajax request to create event
    $("#create-event").on('click', function(e) {
    	if($("#create-event").attr('data-in-progress') == 1)
    		return;
    
    	var blank_reg_exp = /^([\s]{0,}[^\s]{1,}[\s]{0,}){1,}$/,
    		error = 0,
    		parameters;
    
    	$(".input-error").removeClass('input-error');
    
    	if(!blank_reg_exp.test($("#event-title").val())) {
    		$("#event-title").addClass('input-error');
    		error = 1;
    	}
    
    	if($("#event-type").val() == 'FIXED-TIME') {
    		if(!blank_reg_exp.test($("#event-start-time").val())) {
    			$("#event-start-time").addClass('input-error');
    			error = 1;
    		}		
    
    		if(!blank_reg_exp.test($("#event-end-time").val())) {
    			$("#event-end-time").addClass('input-error');
    			error = 1;
    		}
    	}
    	else if($("#event-type").val() == 'ALL-DAY') {
    		if(!blank_reg_exp.test($("#event-date").val())) {
    			$("#event-date").addClass('input-error');
    			error = 1;
    		}	
    	}
    
    	if(error == 1)
    		return false;
    
    	if($("#event-type").val() == 'FIXED-TIME') {
    		// If end time is earlier than start time, then interchange them
    		if($("#event-end-time").datetimepicker('getValue') < $("#event-start-time").datetimepicker('getValue')) {
    			var temp = $("#event-end-time").val();
    			$("#event-end-time").val($("#event-start-time").val());
    			$("#event-start-time").val(temp);
    		}
    	}
    
    	// Event details
    	parameters = { 	title: $("#event-title").val(), 
    					event_time: {
    						start_time: $("#event-type").val() == 'FIXED-TIME' ? $("#event-start-time").val().replace(' ', 'T') + ':00' : null,
    						end_time: $("#event-type").val() == 'FIXED-TIME' ? $("#event-end-time").val().replace(' ', 'T') + ':00' : null,
    						event_date: $("#event-type").val() == 'ALL-DAY' ? $("#event-date").val() : null
    					},
    					all_day: $("#event-type").val() == 'ALL-DAY' ? 1 : 0,
    				};
    
    	$("#create-event").attr('disabled', 'disabled');
    	$.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: { event_details: parameters },
            dataType: 'json',
            success: function(response) {
            	$("#create-event").removeAttr('disabled');
            	alert('Event created with ID : ' + response.event_id);
            },
            error: function(response) {
                $("#create-event").removeAttr('disabled');
                alert(response.responseJSON.message);
            }
        });
    });

/*end google calendar code*/
    var x = document.getElementById("demo");
   
   var latitudeIP="";
   var longitudeIP="";
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
     
    }
    
    function showPosition(position) {
      latitudeIP= position.coords.latitude ; 
      longitudeIP= position.coords.longitude;
/*               x.innerHTML = "Latitude: " + position.coords.latitude + 
      "<br>Longitude: " + position.coords.longitude; */
          ajax();
    }
    
    //var hr;
    //var url;
   // var vars;
    
    function ajax(){
        var vars= "latitude="+latitudeIP+"&longitude="+longitudeIP;
        var hr = new XMLHttpRequest();

        hr.onreadystatechange = function () {

            if(this.readyState == 4 && this.status==200){
                var return_data = hr.responseText;
               console.log(return_data);
                document.getElementById("image1").style.display="none";
               $("#image2").html(return_data);
        }
          //  console.log('ammkm');

        };
        hr.open("POST","pages/test.php",true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.send(vars);
    }
    
    // slideBar
    var slider = document.getElementById("myRange");
   

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
        if(slider.value<50){
             document.getElementById('myRange').value = '1';
             getLocation();
        } 
      	else{
      	  
      	    document.getElementById('myRange').value = '100';
      	    location.reload();
      	}
      	}
    </script>
    </body>
</html>
