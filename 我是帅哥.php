<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>11</title>
	<style type="text/css">
		.td{color: black}
		.td1{color: red}
	</style>
</head>
<?php
    $today = date('N');
    echo "$today";
?>
<body>
<p <?php echo $today<6?'class="td1"':'class="td"'; ?> >我是帅哥</p>
</body>
</html>