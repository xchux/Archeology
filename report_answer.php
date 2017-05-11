<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$user_id = $_SESSION['user_ID'];
$answer_id = $_GET['id'];
$title = $_POST['title'];
$comments = $_POST['comments'];
$sql = "insert into report_answer (answer_ID,user_ID, report_title, report_comments) values ('$answer_id','$user_id', '$title', '$comments')";
if(mysql_query($sql))
{
    echo '新增成功!';
    echo '	<SCRIPT language=javascript>
			function go()
			{
			window.history.go(-1);
			}
			setTimeout("go()",3000);
			</SCRIPT>';
}
else
{
    echo '新增失敗!';
    echo '	<SCRIPT language=javascript>
			function go()
			{
			window.history.go(-1);
			}
			setTimeout("go()",3000);
			</SCRIPT>';
}
?>