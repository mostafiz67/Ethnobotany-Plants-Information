<?php
session_start();

include 'connect.php';

function loogedin()
{
	if(isset($_SEESION['username']) || isset($_COOKIE['username']))
	{
		$loogedin=TRUE;
		return $loogedin;
	}
}
?>