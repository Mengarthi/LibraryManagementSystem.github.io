<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>

    body{
        background-image: url('images/library_bg.jpg')
        
    }
   
    h1,h4,h6{
        text-align: center;
        color:white;
    }


    .login-form-3 .btnSubmit {
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}

.login-form-3 h3 {
    text-align: center;
    color: #fff;
}

.login-form-1 h3 {
    text-align: center;
    color: #fff;
}
.login-form-3 {
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}

    </style>
    <body >
        <h1>Siddharth's Library Management System</h1>
        <h4>DevRev Task 2</h4>

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>



<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
 
                <div class="col-md-6 login-form-3">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_password"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-1">
                    <h3>Student Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $emailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_password"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $pasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="down">
        <a href="#" class="fa fa-home" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
            <h4>Contact me at</h4>
            <h6>Hyderabad, Telangana 500056</h6>
            <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
              +91-9640720611
            </a> <br>
            <a href="#" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
              mengarthisiddhartha@gmail.com
              </a>
              <br>
              
        </div>

        <div class="footer" >Developed By : Siddhartha Mengarthi</div>



        



        <script src="" async defer></script>
    </body>
</html>