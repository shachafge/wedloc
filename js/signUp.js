
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "הבא";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  
  if (!(password.length>=2 && password.length<=50) || !(fname.length>=2 && fname.length<=50)|| !(lname.length>=2 && lname.length<=50) || !email.includes("@")) {
        if (!(password.length >= 2 && password.length <= 50)) {
            text = "The password must be between 2 and 50 characters";
            document.getElementById("errorPassword").innerHTML = text;
        }
        if (!email.includes("@")){
            text = "This is not a valid email";
            document.getElementById("errorEmail").innerHTML = text;
        }
        if (!(fname.length >= 2 && fname.length <= 50)) {
            text = "The first name must be between 2 and 50 characters";
            document.getElementById("errorFname").innerHTML = text;
        }
        if (!(lname.length >= 2 && lname.length <= 50)) {
            text = "The last name must be between 2 and 50 characters";
            document.getElementById("errorlname").innerHTML = text;
        }
    }
    
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}



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
            setElements(true);
            testAPI();

        }else{
            console.log('Not Log in');
            setElements(false);
        }
    }
    
    function testAPI(){
        FB.api('/me?fields=name,email',function(response){
            if(response&&!response.error){
               //console.log(response);
               buildProfile(response);
            }
        });
    }
    
    function buildProfile(user){
        let profile=`
        <h3>${user.name}</h3>
        <ul class="list-group">
            <li class="list-group-item" >User ID:${user.id}</li>
            <li class="list-group-item" >Email:${user.email}</li>
        </ul>
        `;
        document.getElementById('profile').innerHTML=profile;
    }
    
    
    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }
    
    function setElements(isLoggedIn){
        if(isLoggedIn){
            document.getElementById('logout').style.display='block';
            document.getElementById('profile').style.display='block';
            document.getElementById('fb-btn').style.display='none';
            document.getElementById('heading').style.display='none';

        }else{
            document.getElementById('logout').style.display='none';
            document.getElementById('profile').style.display='none';
            document.getElementById('fb-btn').style.display='block';
            document.getElementById('heading').style.display='block';

        }
    }
    
    function logout(){
        FB.logout(function(response){
            setElements(false);
        });
    }

