<?php
$_REQUEST['dummy']='test';
if($_REQUEST){
echo "Username is ". $_REQUEST['username'];//name of the input field
echo "<br/>";
echo "Password is ". $_REQUEST['password'];
echo "<br/>";
echo "Email is ". $_REQUEST['email'];
echo "<br/>";
}

if($_REQUEST){
    foreach($_REQUEST as $key=>$value){
        echo "$key=$value";//key is name of the input field and value is the input inserted by the user
        echo "<br/>";
    }
}
//$global super global variable
$a=10;
echo"<pre>";
print_r($GLOBALS);
echo"</pre>";
//$_SERVER super global variable
echo"<pre>";
print_r($_SERVER);
echo"<br/>";
print_r($_SERVER['PHP_SELF']);
echo"<br/>";
print_r($_SERVER['REQUEST_METHOD']);
echo "<br/>";
print_r($_SERVER['REQUEST_URI']);
echo"</pre>";
echo"<br/>";
echo $_SERVER['SERVER_NAME'];
echo"<br/>";
echo $_SERVER['HTTP_HOST'];
echo"<br/>";
echo $_SERVER['HTTP_REFERER'];
echo"<br/>";
echo $_SERVER['HTTP_USER_AGENT'];
echo"<br/>";
echo $_SERVER['SCRIPT_NAME'];
?>