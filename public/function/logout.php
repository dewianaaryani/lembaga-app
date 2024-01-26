<?php
	
	session_start();
	session_destroy();
	
		
		header("location:../{{route('home')}}");
?>