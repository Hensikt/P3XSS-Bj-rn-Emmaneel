<?php
header('poging xss protectie');
$name = htmlspecialchars($_GET['field1'] . " " . $_GET['field2'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_GET['field3'], ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($_GET['field4'], ENT_QUOTES, 'UTF-8');;
$message = htmlspecialchars($_GET['field5'], ENT_SUBSTITUTE, 'UTF-8');;

echo "Hallo " . $name . '<br>' .
     "Dit is uw email: " . $email . '<br>' .
     "Dit heeft u geselecteerd: " . $subject . '<br>' .
     "En dit is uw bericht -> " . $message;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Action</title>
</head>
<body>

</body>
</html>