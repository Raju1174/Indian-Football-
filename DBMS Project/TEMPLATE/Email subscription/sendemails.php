
<!doctype html>
<html>
<title>
    Indian Football Newsletter Subscription
</title>
<body>
    <div >
            <img src="2.png" title="Newsletter" width="400px" height="400px">
            <img src="3.png" title="Newsletter" width="400px" height="400px">
    </div>
</body>
</html>



<?php

$to_email ="abhaynaik452001@gmail.com";
$subject= "Indian Football Newsletter Subscription";
$body ="Thank, You for Subscribing Newsletter....... \n Now you will receive newsletter every week!!\n";

$mail ->AddEmbeddedImage(dirname(__FILE__).'/2.png','newsletter');
$headers = "From: IndianFootballNewsletter@gmail.com";

if(mail($to_email, $subject, $body, $headers)){
echo "Email successfullly sent to $to_email...";
}else {
    echo "Email sending Failed...";
}
?>
