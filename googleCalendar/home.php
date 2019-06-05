<?php
session_start();

if(!isset($_SESSION['access_token'])) {
	header('Location: google-login.php');
	exit();	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>
 <!--bottun bootstrap-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
<!--end bottun bootstrap-->
<style type="text/css">

#form-container {
	width: 400px;
	margin: 100px auto;
}

input[type="text"] {
	border: 1px solid rgba(0, 0, 0, 0.15);
	font-family: inherit;
	font-size: inherit;
	padding: 8px;
	border-radius: 0px;
	outline: none;
	display: block;
	margin: 0 0 20px 0;
	width: 100%;
	box-sizing: border-box;
}

select {
	border: 1px solid rgba(0, 0, 0, 0.15);
	font-family: inherit;
	font-size: inherit;
	padding: 8px;
	border-radius: 2px;
	display: block;
	width: 100%;
	box-sizing: border-box;
	outline: none;
	background: none;
	margin: 0 0 20px 0;
}

.input-error {
	border: 1px solid red !important;
}

#event-date {
	display: none;
}

#create-event {
	background: none;
	width: 100%;
    display: block;
    margin: 0 auto;
    border: 2px solid #2980b9;
    padding: 8px;
    background: none;
    color: #2980b9;
    cursor: pointer;
}
#TDL_enterIvent{
   padding-top:2%;
    width: 80%;
    text-align: center;
    margin: 0px auto;

}
body{
    text-align:center;
}

#logo{
    width: 15%;
}

/*Down arrow:*/
i {
   
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  margin:1%;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>
</head>

<body class="card-up " style="background-color: #e9e9e9;">
  
<a href="/index.php" id="linkLogo"><img id="logo" src="/photos/logo.png" alt="logo"></a>
  <div style="margin: 3% 20% 5% 20%;padding: 2% 0px 1% 0px;/* border: 2px solid; */border-radius: 4%;box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);background-color: #dfcad9;">
      
<h2>הכנס אירועים ליומן שלך</h2>
<a href="#TDL_enterIvent"><h4 style="color: white;"><i class="arrow down"></i>&nbsp לרשימת משימות אפשריות</h4></a>
<div id="form-container">

	<input type="text" id="event-title" placeholder="Event Title" value="Event Title"  autocomplete="off" />
	<select id="event-type"  autocomplete="off">
		<option value="FIXED-TIME">Fixed Time Event</option>
		<option value="ALL-DAY">אירוע יום שלם</option>
	</select>
	<input type="text" id="event-start-time" placeholder="Event Start Time" autocomplete="off" />
	<input type="text" id="event-end-time" placeholder="Event End Time" autocomplete="off" />
	<input type="text" id="event-date" placeholder="Event Date" autocomplete="off" />
	<button id="create-event">צור אירוע</button>
</div>
</div>
<h2>בחר את האירוע שברצונך ליצור</h2>
<h7>בעת לחיצה, האירוע יכנס לתיבת הטקסט בה מתואר האירוע</h7>
 <section id="TDL_enterIvent">
     
    <h5>אולם</h5>
   
    <button class="btn purple-gradient TDL" type="button" value="פגישה באולם " onClick="insert(0)"> פגישה באולם</button>
       <button class="btn blue-gradient TDL" type="button" value="טעימות"  onClick="insert(1)">טעימות</button>
    <button class="btn aqua-gradient TDL" type="button" value="החתונה שלנו " onClick="insert(2)"> החתונה שלנו</button>
      <button class="btn peach-gradient TDL" type="button" value="פגישה עם המעצבת לעיצוב האולם" onClick="insert(3)">פגישה עם המעצבת לעיצוב האולם</button>
</section>
<section id="TDL_enterIvent">
    <h5> רבנות</h5>
    <button class="btn peach-gradient TDL" type="button" value="הדרכת כלה"  onClick="insert(4)">הדרכת כלה</button>
    <button class="btn blue-gradient TDL" type="button" value="מקווה " onClick="insert(5)"> מקווה</button>
   
    <button class="btn aqua-gradient TDL" type="button" value="פגישה עם הרב " onClick="insert(6)"> פגישה עם הרב</button>
     <button class="btn purple-gradient TDL" type="button" value="לפתוח תיק ברבנות" onClick="insert(7)">לפתוח תיק ברבנות</button>
  
</section>
<section id="TDL_enterIvent">
    <h5> ספקים</h5>
 
 
    <button class="btn peach-gradient TDL" type="button" value="מדידות לשמלה" onClick="insert(8)">מדידות לשמלה</button>
      <button class="btn blue-gradient TDL" type="button" value="שיער ניסיון" onClick="insert(9)">   שיער ניסיון</button>
      <button class="btn aqua-gradient TDL" type="button" value="מדידות לשמלה" onClick="insert(10)">מדידות לשמלה</button>
      <button class="btn purple-gradient TDL" type="button" value="איפור ניסיון" onClick="insert(11)">   איפור ניסיון</button>
  
     <button class="btn peach-gradient TDL" type="button" value="פגישה עם הדיג'יי" onClick="insert(12)"> פגישה עם הדיג'יי</button>
    <button class="btn blue-gradient TDL" type="button" value="פגישה עם הצלם " onClick="insert(13)"> פגישה עם הצלם</button>
   
</section>
 <section id="TDL_enterIvent">
     <h5>כללי</h5>
        <button class="btn aqua-gradient TDL" type="button" value="שליחת SAVE THE DATE" onClick="insert(14)">שליחת SAVE THE DATE</button> 
   <button class="btn purple-gradient TDL" type="button" value="שליחת הזמנות" onClick="insert(15)">שליחת הזמנות</button>
     </section>
<script>
function insert(y){
    var i = y;
    var x = document.getElementsByClassName("TDL");
  //  x[y].innerHTML = "Hello World!";
   document.getElementById("event-title").value = x[y].value;

}
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


</script>
 <!--bottun bootstrap-->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
<!--end bottun bootstrap-->


</body>

</html>