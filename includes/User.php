<?php
	
	include 'config.php';
	
	class User
	{
		
		// Database Connect
		function __construct()
		{
			$db = new Config();
		}
		
		// Login Process
		public function check_login($username, $password)
		{
			$result = mysql_query("SELECT * FROM users WHERE username='$username' AND 
			password='$password'");
			
			$user_data = mysql_fetch_array($result);
			$no_rows = mysql_num_rows($result);
			
			if ($no_rows == 1) 
			{
					$_SESSION['login'] = true;
					$_SESSION['user_id'] = $user_data['username'];
					return TRUE;
			}
			else 
			{
				return FALSE;
			}
		}
		
		
		
		
	}
?>