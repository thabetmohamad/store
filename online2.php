<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "thabetamer1990@gmail.com"; // استبدل هذا ببريدك الإلكتروني
    $subject = "رسالة جديدة من $name";
    $body = "الاسم: $name\n
    البريد الإلكتروني: $email\n
    \nالرسالة:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال رسالتك بنجاح. سنقوم بالرد عليك قريبًا.";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة. حاول مرة أخرى.";
    }
}
?>
