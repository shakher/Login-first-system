<!DOCTYPE html><?php session_start();?>

<html>

<head>

<title>User Login</title>

</head>

<body>

<form action="login.php" method="post">

<table width="500" align="center" bgcolor="skyblue">

<tr align="center">

<td colspan="3"><h2>User Login</h2></td>

</tr>

<tr>

<td align="right"><b>Email</b></td>

<td><input type="text" name="user" required="required "/></td>

</tr>

<tr>

<td align="right"><b>Password:</b></td>

<td><input type="password" name="pass" required="required"></td>

</tr>

<tr align="center">

<td colspan="3">

<input type="submit" name="login" value="Login"/>

</td>

</tr>

</table>

</form>

</body>

</html>