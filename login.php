<?php
session_start();

include_once 'includes/User.php';

$user = new User();


?>

<table>

<form method="POST" action="" name="login"> 
	
	<tr>
		<th>Email or Username</th><td> : </td>
		<td> <input type="text" name="emailusername"/> </td>
	</tr> 
	
	<tr>
		<th>Password</th> 
		<td> : </td> 
		<td> <input type="password" name="password"/></td> 
	</tr> 
	
	<tr> 
		<th></th> 
		<td> </td> 
		<td> <input type="submit" name="Login" value="Login"/> </td> 
	</tr> 
	
	<tr> 
		<th>Don't have account?</th> 
		<td> : </td> 
		<td> <a href="./register.php"><b>Register Now</b></a> <br> </td> 
	</tr> 
	
</form> 
</table>

<?php
//if ($_SERVER['REQUEST_METHOD'] == "POST")
if (isset($_POST['Login']))
{
	$login = $user->check_login($_POST['emailusername'], $_POST['password']);
	
	if ($login)
	{
		echo "GOOD" . " : " . $_SESSION['user_id'];
	}
}
?>