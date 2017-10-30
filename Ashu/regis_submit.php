<?php
include "class.php";
extract($_POST);
if(isset($submit))
{
	$inserts="insert into register values ('','$n','$e','$p')";
    if($obj->insert($inserts))
	{
		$obj->url("index.php?msg=run");
	}
	else
	{
		echo "your registration is not successfull";
	}


}
?>