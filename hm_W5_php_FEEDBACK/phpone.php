<?php
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$sum;

/*
if ( strlen ( $name ) > 0 ){
    $name=true;
}else{
    $name=false;
}

if ( strpos ( $email, '@' ) !==0 ){
    $email=true;
}
else {
    $email=false;
}

if ( strlen ( $feedback) > 0) {
    $feedback=true;
}else{
    $feedback=false;
}

if ( $num1 + $num2)==0 {
    $sum=true;
}else{
    $sum=false;
}

if ( $sum= $name= $email= $feedback= true){
    print ("Thank you for giving a feedback");
}else{
    print ("There is an error");
}

*/
//next try

if ( strlen ( $name ) == 0 ){
    print (" There is an error");    
}elseif (strpos ( $email, '@' ) == 0 ) {
    print (" There is an error");     
}elseif (strlen ( $feedback) == 0) {
    print (" There is an error");    
}elseif ($num1 + $num2 !==10) {
    print (" There is an error");   
}else{
    print (" Thank you for giving a feedback");
}
?>