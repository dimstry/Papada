<?php
	$page =$_GET['page'];
	if($page== "")
	{
		if($page=="")
		{
		  include ("pages/welcome.php");
		}
		else
    {
      include("pages/login.php")
    }
	}
	else
  {
	  if (!file_exists("pages/$page.php")) 
	  {
	  	header("location:index.php?page=/home");
		}
		else
    {
			include("pages/$page.php");
		}
	}
	include("template/$template.php");

?>