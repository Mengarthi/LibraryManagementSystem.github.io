<?php

include("data_class.php");

$login_email=$_GET['login_email'];
$login_password=$_GET['login_password'];


if($login_email==null||$login_password==null){
    $emailmsg="";
    $pasdmsg="";
    
    if($login_email==null){
        $emailmsg="Email Empty";
    }
    if($login_password==null){
        $pasdmsg="password Empty";
    }

    header("Location: index.php?emailmsg=$emailmsg&pasdmsg=$pasdmsg");
}

elseif($login_email!=null&&$login_password!=null){
    $obj=new data();
    $obj->setconnection();
    $obj->userLogin($login_email,$login_password);

}
