<?php


$con = mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}


if(isset($_POST['login'])){

$name=$_POST['user'];
$pass=$_POST['pass'];
$name = mysqli_real_escape_string($con,$name);
$pass = mysqli_real_escape_string($con,$pass);

$query = "select * from users where username='$name' AND password='$pass'";

$result = mysqli_query($con, $query);

$check_user = mysqli_num_rows($result);

if($check_user>0){

while ($row=mysqli_fetch_array($result)) {
$username=$row['username'];
$password=$row['password'];
if ($username==$name && $password==$pass) {
	
$_SESSION['username']=$name;

echo "Login seccessful<br>";
echo "welcome ".$name;
}
}


}
else {

echo "Login Failed";

}

}

?>

 