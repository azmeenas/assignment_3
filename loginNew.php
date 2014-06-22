<?php
$username="azmeena";
$password="01010";

$user=isset($_GET['username']) ? $_GET['username'] : $_POST['username'];
$pass=isset($_GET['password']) ? $_GET['password'] : $_POST['password'];

if ($user==$username && $pass==$password) {
  echo 'pass';
} else {
  echo 'fail';
}



?>