<?php
include_once ("../Config/core.php");

function __autoload($classname)
{
	if(file_exists(WEBSITE_FULL_DIR."/Controllers/".$classname.".php"))
	{
	    $filename = WEBSITE_FULL_DIR."/Controllers/".$classname.".php";
	    include_once($filename);
	}
	else if(file_exists(WEBSITE_FULL_DIR."/Models/".$classname.".php"))
	{
	    $filename = WEBSITE_FULL_DIR."/Models/".$classname.".php";
	    include_once($filename);
	}
	else if(file_exists(WEBSITE_FULL_DIR."/Src/".$classname.".php"))
	{
	    $filename = WEBSITE_FULL_DIR."/Src/".$classname.".php";
	    include_once($filename);
	}
	else if(file_exists(WEBSITE_FULL_DIR."/Views/".$classname.".php"))
	{
	    $filename = WEBSITE_FULL_DIR."/Views/".$classname.".php";
	    include_once($filename);
	}
	else
	{
		if (0 !== strpos($classname, "Twig"))
	    {
	    	return;
	    }
	    else
        	include_once WEBSITE_FULL_DIR."/Vendors/".str_replace(array('_', "\0"), array('/', ''), $classname).".php";
	}
}

spl_autoload_register("__autoload");

?>
