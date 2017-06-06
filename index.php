<?php
$day = date("N");
switch ($day) {
	case 1:
	case 2:
	case 3:
	case 4:
		$mess1 = "Alas...";
		$mess2 = "Now is working week.";
		break;
	case 5:
		$mess1 = "Hooray!";
		$mess2 = "Friday!";
		break;
	case 6:
	case 7:
		$mess1 = "Congratulations!";
		$mess2 = "It's the weekend.";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day of Week</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<p><?=$mess1?></p>
<p><?=$mess2?></p>


</body>
</html>