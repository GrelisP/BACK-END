<?php
$name=isset($_POST['name'])? $_POST['name']:'';
$email=isset($_POST['email'])? $_POST['email']:'';
$feedback=isset($_POST['feedback'])? $_POST['feedback']:'';
$num1=isset($_POST['num1'])? $_POST['num1']:'';
$num2=isset($_POST['num2'])? $_POST['num2']:'';
$sum;


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
