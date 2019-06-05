<?php
require_once('../classes/init.php');

session_start();
if( isset( $_SESSION['user'] ) ) {
   }
   else
   header('Location: Login.php');
   
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Tesoro</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--carusela-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="place.css">-->
   
    <!--header bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!--icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Heebo|Orbitron|Pacifico|Tinos|Varela+Round" rel="stylesheet">
    

    
    <!--chat-->
    <script async>(function(w, d) { w.CollectId = "5ccf245e9f7b6227f439a880"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>   
  <style>
  
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

/*navbar*/
    /* Dropdown Button */
.dropbtn {
  color: #848285;
  padding: 16px;
  font-size: 14px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: right;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: white;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #e5dae2;}

#titlePlace{
    font-size: 50px;
    text-align: center;
    color: grey;
}
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
      
      body{
          font-family: Heebo;
      }

    /*Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }

    /* Slideshow container */
    .slideshow-container {
        position: relative;
        background: #ffdfc4;
    }

    /* Slides */
    .mySlides {
        display: none;
        padding: 80px;
        text-align: center;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -30px;
        padding: 16px;
        color: #888;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        position: absolute;
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        color: white;
    }

    /* The dot/bullet/indicator container */
    .dot-container {
        text-align: center;
        padding: 20px;
        background: #fdcdb2;
    }

    /* The dots/bullets/indicators */
    .dot{
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    /* Add a background color to the active dot/circle */
    .active, .dot:hover {
        background-color: #717171;
    }

    /* Add an italic font style to all quotes */
    q {font-style: italic;}

    /* Add a blue color to the author */
    .author {color: #b18268;}
    
        
    .container2 {
        position: relative;
        margin: 2%;
  
}

h5{
    font-size: 18px;
    font-weight: bold;
}

/* Bottom right text */
.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: #efe8e8ad;
    color: #333;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: bold;
}

main{
    margin: 0px auto;
    padding-bottom: 5%;
    padding-top: 2%;
}

/*footer*/
footer{
    background-color: #e3b9d847;
    float: right;
}

.wrap-in{
    width: 100%;
    margin: 0 auto;
    direction: rtl;
    text-align: right;
    border-bottom: 7px solid lightgrey;
    
}

.footer1{
    float: right;
}

.footer1 .custome{
    font-size: 14px;
    line-height: 22px;
    min-height: 265px;
    padding: 0 50px;
    text-align: justify;
}

.footer1-title{
    height: auto;
    margin-bottom: 2%;
    margin-top: 5%;
    overflow: hidden;
    width: 40%;
}

.footer2{
    border-right: 2px solid #fff;
    border-left: 2px solid #fff;
    position: relative;
    top: 20px;
    height: 280px;
    text-align: center;
    float: right;
    
}

.social-footer-title{
    font-size: 20px;
    margin: 25px 0 11px;
    text-align: center;
}

.footer3{
    text-align: center;
    float: right;
}

.footer3 img{
    height: auto;
    margin-top: 25px;
    width: 60%;
}

 i{
    background-color: white;
    border-radius: 50%;
    padding:10px;
    margin:5px;
    width: 79%;
}

.iconLI{
    width: 100%;
    list-style-type:none;
}

.iconLI .iconA {
  display: inline;
  text-align: center;
  padding: 5%;
  text-decoration: none;
  color: white;
}

#iconUL{
    margin: 0px auto;
    display: inline-flex;
    padding: 0px;
    
}

#aboutUs{
    padding: 4%;
}

.iconI{
    background-color: #c7dfdd;
}

#footer2Down{
    margin-top: 20%;
}

 @media only screen and (max-width : 480px) {
       /* Smartphone view: 1 tile */
         
        .footer1{
            width:100%;
       }
        .footer2{
            width:100%;

       }
        .footer3{
            width:100%;
       }
 }
 
 @media screen and (max-width: 767px) {
    .footer1{
        width:100%;
    }
    .footer2{
        width:100%;
    }
    .footer3{
        width:100%;
    }
}


  </style>
    
</head>
<body>
    <header class="col-12" id="upPage">
    <!-- Second navbar for sign in -->
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
          <a class="navbar-brand" href="/index.php" style="margin: 0px 30px 0px 0px; padding:0px;"><img src="/photos/logo.png" style="height:100%;"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
             <li><div class="dropdown">
                <button class="dropbtn">אולמות</button>
                <div class="dropdown-content">
                <a href="ganV.php">גן ורדים</a>
                <a href="alma.php">עלמה</a>
                <a href="amado.php">אמדו</a>
                <a href="anahala.php">הנחלה</a>
                <a href="avenue.php">אבניו</a>
                <a href="batHagil.php">בת הגלבוע</a>
                <a href="bayaar.php">ביער</a>
                <a href="euphoria.php">אופוריה</a>
                <a href="novia.php">נוביה</a>
                <a href="sheva.php">שבע</a>
                <a href="tesoro.php">טזורו</a>
                <a href="trask.php">טראסק</a>
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
    
    <!--title of the place-->
    <div id="titlePlace"><p>טזורו</p></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/photos/photos_tesoro/cover3.jpg" alt="Image">
      </div>

      <div class="item">
        <img src="/photos/photos_tesoro/cover2.jpg" alt="Image">
      </div>
      
      <div class="item">
        <img src="/photos/photos_tesoro/cover.jpg" alt="Image">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
  
  </header>
 
  <main class="col-10">
  
    <div class="container text-center col-12">    
     <div class="row">
      <div class="col-sm-4">
      <div class="well">
        <?php
        require_once("../classes/init.php");
         
        global $database;

        $sql = "SELECT street, number, city FROM address WHERE idP=7";
        $result=$database->query($sql);

        if ($result->num_rows>0){
            if($row=$result->fetch_assoc()){
                echo '<p>'.$row["street"].', '.$row["number"].',  '.$row["city"].'</p>';
            }
        }
    
        $sql2 = "SELECT email, phone, url FROM place WHERE idPlace=7";
        $result2=$database->query($sql2);
    
        if ($result2->num_rows>0){
            if($row=$result2->fetch_assoc()){
                echo '<p>'.$row["email"].'</p><p>'.$row["phone"].'</p><p>'
                    ."<a href=".$row["url"].">".$row["url"]."</a></p>";
            }
      }


    
        ?>  
      
      </div>
      <div class="well">
          <p>שדמיינו את טזורו דמיינו חווית אירוח ייחודית, המשלבת בין כפר שקט וסולידי לבין עיר סואנת, עיר ללא הפסקה. יצאנו לחפש מיקום, שאלנו מה כדאי, למדנו מה חסר ואז החלטנו… אולם אירועים בשכונת צהלה, בצפון של תל אביב.
בתוך העיר הסואנת, יצרנו מתחם כפרי ושליו, עיצבנו במיטב הסגנון, נתנו דגש עד לפרטים הכי קטנים, שילבנו בין נוחות, יופי ועיצוב ועכשיו רק נותר לגלות לכם שזה הצליח. טזורו הפך להיות מתחם לאירועי החלומות של המון חוגגים ואנו שמחנו עימם.
מזמינים את כולכם לחגוג איתנו את הרגעים היפים והטובים של החיים</p>
      </div>
       
    </div>
    <div class="col-sm-4">
        <div class="container2">
            <img src="/photos/photos_tesoro/canopy.jpg" class="img-responsive" style="width:100%; height:60%" alt="Image">
                <div class="text-block">
                    <h5>החופה</h5>
                </div>
            </div>
    </div>
    <div class="col-sm-4">
        <div class="container2"> 
            <img src="/photos/photos_tesoro/garden.jpg" class="img-responsive" style="width:100%; height:60%" alt="Image">
                <div class="text-block">
                    <h5>הגן</h5>
                </div>
            </div>
    </div> 
      
      <div class="col-sm-4">
          <div class="container2"> 
            <img src="/photos/photos_tesoro/dance.jpg" class="img-responsive" style="width:100%; height:60%" alt="Image">
                <div class="text-block">
                    <h5>הרחבה</h5>    
                </div>
            </div>
    </div> 
    
    <div class="col-sm-4">
        <div class="container2"> 
            <img src="/photos/photos_tesoro/hall.jpg" class="img-responsive" style="width:100%; height:60%" alt="Image">
                <div class="text-block">
                    <h5>האולם</h5>   
                </div>
        </div>
    </div> 
  </div>
</div><br>



<!-- Slideshow container -->
<div class="slideshow-container col-12">

    <!-- Full-width slides/quotes -->
    <div class="mySlides">
    <p>אין מספיק מילים לתאר כמה אנחנו שמחים מההחלטה לערוך את האירוע אצלכם אוכל עיצוב מיקום תאורה הגברה אוירה צוות מלצרים ומנהל אירוע הכי מרגיע- אור המהמם ואורן האחד והיחיד שמהערב הראשון שהגענו רק לבדוק, הרגיע תכנן אירגן עזר- אין כמוך!! תודות תודות תודות מקום נדיר קסום ומושקע- מומלץ ממש</p>
    <p class="author">- שוש מלאכי -</p>
    </div>

    <div class="mySlides">
    <p>אל טזורו הגענו אני ואשתי במקרה, אחרי שראינו מספר מקומות שלא קלעו לטעם שלנו. ברגע שנכנסנו אל האולם נפלנו בקסם של המקום. אווירה כפרית במיקום מנצח, מקום שהתאים בדיוק לדרישות שלנו. אורן ויוסי המדהימים נתנו מענה לכל בקשה, היו קשובים וסבלניים ודאגו שנתעסק כמה שפחות עם המסביב ופשוט נהנה ביום המאושר של חיינו. על האירוע עצמו קיבלנו רק מחמאות – מהעיצוב (שרית האלופה), האוכל, האווירה, השירות וכו'. לסיכום, מומלץ בטירוף, תודה טזורו</p>
        <p class="author">- הדס שופט -</p>
    </div>

    <div class="mySlides">
    <p>הטזורו היה אהבה ממבט ראשון. מהרגע שבאנו לראות את המקום פעם ראשונה הבנתי כמה הוא מושלם בשבילנו. האולם עצמו פשוט מהמם כמו שהוא וגם לא דורש הרבה השקעה אקטסרה של עיצוב. הגן יפיפיה ואפשר להנות מקבלת פנים שווה גם בחתונת חורף שזה היה לי מאוד חשוב.. השירות והיחס הכי מקצועי ואכפתי שזה הפך את הכל לכייף אחד גדול והכי חשוב אוכל טעים בצורה יוצאת דופן שכמעט ולא נתקלים בה בחתונות! היתה לנו חתונה חלומית והורסת תודה ענקית</p>
        <p class="author">- מאיה לברמן -</p>
    </div>

    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

</main>

<footer class="col-12">
            <div class="wrap-in">
                <div class="footer1 footer col-4">
                    <div class="custom">
                        <center>
                        <img class="footer1-title" src="/photos/ringnew.png" alt="ringLogo">
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
                                 <a href="mailto:amit.bass3@email.com" class="iconA"> <i class="fas fa-envelope iconI"></i></a>
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
                    <img alt="Logo" src="/photos/logo.png">
                </div>
            </div>    
            
</footer>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
