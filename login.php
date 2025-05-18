<?php
include "users/config.php";

session_start();

if(isset($_SESSION["userId"])){
    header("location:users/page.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<style>
 body{
    background:#000 url(images/in-love.svg) repeat-x;
 }

 * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'kumbh sans', Verdana, Geneva, Tahoma, sans-serif;
}

.navBar{
    background: #1b1a1a;
    height: 90px;
    display: flex;
    position: sticky;
    top: 0;
    z-index: 999;
}

.navBar_container{
    margin:auto 80px;
}
#navBAr_logo{
    background-color: #9577ff;
    background-image: linear-gradient(to top, #1f2191 0%, #99daff 100%);
    background-size: 100%;
    -webkit-background-clip:text;
    -moz-background-clip:text;
    -webkit-text-fill-color:transparent;
    -moz-text-fill-color:transparent;
    display: flex;
    align-items: center;
    cursor: pointer;
    text-decoration: none;
    font-size: 1.8rem;
}

.form_container{
    position: absolute;
    top:55%;
    left:50%;
    translate: -50% -50%;
    margin: auto;
    width: 100%;
    height: 560px;
    max-width: 560px;
    background-color: rgb(40, 210, 223);
    border-radius: 10px;
    align-items: center;
}

h3{
    font-size: 30px;
    /* margin-top:px; */
    /* align-content: center; */
    text-align: center;
    margin-bottom: 10px;
    font-family:Georgia, 'Times New Roman', Times, serif;
}
.form{
    position: relative;
    top: 69px;
    margin:auto;
    padding: 2em;
    border: 1px solid #bbb;
    border-radius: 5px;
    width: 400px;
    height: 410px;
    background-color: aliceblue;
    text-align: center;
    box-shadow: 3px 3px 3px rgba(0,0,0,0.089);
    backdrop-filter: blur(10px);
    opacity: 1;
    border-top: 1px solid rgba(255,255,255,0.4);
    border-left: 1px solid rgba(255,255,255,0.4);
}
/* Since CSS variables are not normally animatable, so therefore @property is used to  create a fancy customization  */
@property --angle{
    syntax: "<angle>";
        initial-value: 0deg;
        inherits: false; 
    /* default settings for custom property */
    }
.form_container::after, .form_container::before{
    /* --angle:0deg; */
    content: '';
    width: 100%;
    height: 560px;
    max-width: 560px;
    /* background-image: conic-gradient(from var(--angle), red, green, pink, yellow); */
    background-image: conic-gradient(from var(--angle), transparent 70%, blue);
    background-image: conic-gradient(from var(--angle), transparent 70%, #000);
    background-color:rgb(206, 165, 243);
    position: absolute;
    z-index: -1;
    border-radius: 5px;
    /* padding: 10px; */
    top:50%;
    left:50%;
    translate: -50% -50%;
    animation:3s spin linear infinite ;
    opacity: 0.5;
}

.form::before{
    filter: blur(1.5rem);
    opacity: 0.5;
}

@keyframes spin{
    from{
        --angle:0deg;
    }
    to{
        --angle:360deg;
    }
}

input{
    width: 100%;
    margin:10px 5px 10px -8px;
    outline: none;
    padding: 10px;
    border: 1px solid rgb(157, 196, 230);
    border-radius: 5px;
    font-size: 17px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    background: linear-gradient(rgb(220, 232, 243), aliceblue);
    opacity: 1;
    box-shadow: 2px 3px 4px blue;
}
button{
    width: 100%;
    margin:10px 10px 10px 2px;
    outline: none;
    cursor: pointer;
    padding: 10px;
    border: 1px solid #bbb;
    border-radius: 5px;
    color: white;
    background-color: rgb(40, 210, 223);
    box-shadow: 2px 3px 4px blue;
}
button:hover{
    color: rgb(233, 230, 230);
    background-color: hsl(177, 83%, 54%);;
    box-shadow: 2px 3px 4px blue;
    opacity: 0.7;
    cursor: pointer;
}
.form ::placeholder{
    color: rgb(218, 164, 164);
}
#checkbox{
    width: max-content;
    margin: 10px;
    outline: none;
    padding: 10px;
    border: 1px solid rgb(157, 196, 230);
    border-radius: 5px;
    font-size: 17px;
    box-shadow: 0 0;
}
.afterS{
    justify-content: space-between;
    display: flex;
    align-items: center;
    flex-direction: row-reverse;
    margin-right: 14px;
}
.beforeS{
    display: flex;
    flex-direction: row;
}
h5{
    font-size: 12px;
    font-family:Georgia, 'Times New Roman', Times, serif;
}
a{
    text-decoration: none;
    font-size: 13px;
    color:dodgerblue;
}

.error{
    width: 100%;
    margin:10px 5px 10px -8px;
    background-color: #f72e2e4a;
    color: #9b1010;
    padding:10px;
    border-radius: 5px;
    text-align: center;
    /* margin: 2px 0px 10px 0px; */
    display: none;
}

.closeBtn{
    float: right;
    color: #9b1010;
    font-size: 20px;
    cursor: pointer;
    margin-top: -2px;
}

.success{
    width: 100%;
    background-color:rgba(73, 250, 161, 0.45);
    color:rgb(2, 97, 50);
    padding:10px;
    border-radius: 5px;
    text-align: center;
    margin:10px 5px 10px -8px;
    display: none;
}

.closeSuccess{
    float: right;
    color: rgb(2, 97, 50);
    font-size: 20px;
    cursor: pointer;
    margin-top: -2px;
}
</style>

</head>
<body>

<nav class="navBar">
    <div class="navBar_container">
        <a href="/" id="navBAr_logo"><img src="images/logo.png" alt="Logo image" style="width: 40px; height: auto;"> Dice-E</a>
    </div>      
</nav>  

<div class="form_container">

    <span class="result"></span>

    <div class="form">
            <h3>Login</h3>

        <!-- Success Msg -->
        <div class="success"> 
        <span class="successText"></span>
        <span class="closeSuccess">&times;</span>
        </div>
            <!-- Error Msg -->
        <div class="error"> 
        <span class="errorText"></span>
        <span class="closeBtn">&times;</span>
        </div>

        <input type="text" id="email" placeholder="Enter Email" value><br>
        <input type="password" id="password" placeholder="Enter Password"  value><br>
        
        <div class="beforeS">
            <input type="checkbox" id="checkbox"> 
            <h5><label  for="checkbox">Remember me</label></h5>
        </div>
    
        <button type="submit" id="submit">Login</button><br>
        <div class="afterS">
            <h5>Don't have an account? 
                <a href="signup.php">Sign up</a>
            </h5>
        </div>
           
            
    </div>
</div>

    
    
</body>

<script src="users/js/jquery.min.js"></script>

<script>
$(document).ready(function(){

//Close error
$(".closeBtn").click(function(){
    $(".error").fadeOut();
});

//Close success
$(".closeSuccess").click(function(){
    $(".success").fadeOut();
});


//if form is submitted
$("#submit").click(function(){

// get all inputs
let email = $("#email").val();
let password = $("#password").val();

if(email == ""){
    $(".errorText").html("Enter your email");
    $(".error").fadeIn();
}
else if(password == ""){
    $(".errorText").html("Enter your password");
    $(".error").fadeIn();
}else{

//remove error
$(".error").fadeOut();

type = "login";

//Send Ajax request
$.ajax({
url: "function.php",
type: "POST",
data: {email:email, password:password, type:type},
beforeSend: function(){
    //disabled button
    $("#submit").html("Processing...");
    $("#submit").attr("disabled", true);
    $("#submit").css({"cursor":"not-allowed", "opacity":"0.6"});
},
success:function(data){

    //reEnable the button
    $("#submit").html("Submit");
    $("#submit").attr("disabled", false);
    $("#submit").css({"cursor":"pointer", "opacity":"1"});


    // console.log(data);
    $(".result").html(data);
}

})


}

});


});

</script>





</html>


