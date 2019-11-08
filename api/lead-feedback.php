<?

$phone = $_POST["phone"];
$name = $_POST["name"];
$email = $_POST["email"];
$post = $_POST["post"];
$company = $_POST["company"];
$experience = $_POST["experience"];
$interests = $_POST["interests"];
$subject = "".$name." / ".$phone." / ".date('m-d-Y')."";
$to = "hn@wnstudio.ru";

$headers = "From: " . strip_tags("leader@keaz.ru") . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "MIME-Version: 1.0\r\n";
// $text =  "Написал(а): $surname $name\n Контактный телефон - $phone\n email - $email \n\n $text \n\n $tasting \n\n";
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px solid #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Должность:</strong> ".$post."</p>\r\n";
$msg .= "<p><strong>Компания:</strong> ".$company."</p>\r\n";
$msg .= "<p><strong>Опыт:</strong> ".$experience."</p>\r\n";
$msg .= "<p><strong>Интересы:</strong> ".$interests."</p>\r\n";
$msg .= "</body></html>";


if(mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $msg, $headers)){
	echo "success";
} else {
	echo "errorMSG";
}

?>
