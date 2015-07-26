<?php
	if(isset($_REQUEST["submit"]))
	{
	$uname=$_POST["uname"];
	$uemail=$_POST["uemail"];
	$usubject=$_POST["ur_sub"];
	$ucontent=$_POST["umailcontent"]." from ".$uname;

	//mail('freejavaster@gmail.com', $usubject, $ucontent);
	$conn=@mysql_connect("localhost","root","root")or die ("mysql can not connect!"); 
	@mysql_select_db("lte",$conn) or die ("db can not connect!`".mysql_error()); 
	mysql_query('SET NAMES UTF8')or die ("UTF8 can not work!"); 
	$sql="SELECT `id`, `user_id`, `mail_read`, `mail_to_from_id`, `mail_subject`, `mail_content`, `mail_star`, `mail_datetime`, `mail_recieve_send`, `mail_del`, `mail_draft_id` FROM `mail_box` WHERE user_id= 12";
	echo $sql;
	$result=+


	echo "Sent mail successe!<br><a href='../index.html'>back to Homepage</a>";
	}
?>