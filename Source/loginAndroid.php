<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username=='artt' && $password == 'artt'){
echo "true";
}
else{
echo "Login Failed";
}

?>