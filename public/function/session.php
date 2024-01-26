<?php
session_start();

if(!ISSET($_SESSION['id']))
	{
		echo "<script>window.location = '{{route('home')}}';</script>";
	}
	

?>