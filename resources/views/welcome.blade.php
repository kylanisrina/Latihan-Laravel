<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            text-align: center;
        }
        .text {
            background: blue;
            text-align: center;
            font-size: 20px;
        }
        </style>
</head>
<body>
   <div class="container">
   <span>Microdata Indonesia</span>

</body>
</html>
 -->
 <!DOCTYPE html>
<html> 
<head>

<meta charset="utf-8"/> 
<meta http-equiv="X-UA-Compatible" content="IE-edge"/> 
<title>Card</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
*{

text-decoration: none; 
}
body{
    background:-webkit-linear-gradient(bottom, #3498db, #9b59b6);
    background-repeat: no-repeat;
} 
label{
    font-family: "Raleway",sans-serif;
    font-size: 11pt; 
} 
#forgot-pass{
    color: #161085; 
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px; 
    text-align: right;

}
#card{
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0,0,0,0.65); 
    height: 410px;
    margin: 6rem auto 8.1rem auto;
    width: 329px;
}
#card-contents{
    padding: 12px 44px;
}


</style>
<body> 
   <div id="card">
     <div id="card-content">
         <div id="card-title">
             <h2>LOGIN</h2> 
             <div class="underline-title"> 
             
             </div> 
        </div> 
        <form method="post" class="form">
             <label for="user-email" style="padding-top: 13px">&nbsp;
             Email

             </labels>
             <input id="user-email" class="form-content" type="Email" 
             name="Email" autocomplete="on" required/>
             <div class="form-border"></div>

            <label for="user-password" style="padding-top: 22px">
            &nbsp; Password </label>
            <input id="user-password" class="form-content" type=" Password" name="Password"required/> 
            <div class="form-border"></div>
            <a href="#">
            <legend id="forgot-pass">Lupa Password?</legend> 
            </a>
            <input id="submit-btn" type="submit" name="submit" 
            value= "LOGIN"><a href="#" id="signup">Belum Punya akun?</a>
        </from>
<div> </div>


</form>
</body>