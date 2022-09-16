<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>


<?php
$data = file_get_contents('info.json');
$data = json_decode($data);
?>


<?php 
foreach ($data as $value) {
	echo $value->value;
	echo '
<form method="GET" action="request.php">
<input type="hidden" name="name" value="' . $value->value . '">
<input type="submit">
</form>
';
}
?>

</body>
</html>
</body>
</html>
