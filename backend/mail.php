<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $date = date('Y-m-d');

    // Recipient
    $to = 'srinivas@webuniversals.com';

    // Subject
    $subject = "$fname";

    // Sender
    $fromName = 'Enquiry';
    $fromAddress = 'srinivas@webuniversals.com';

    // Headers
    $headers = "From: $fromName <$fromAddress>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Return-Path: $fromAddress\r\n";
    $headers .= "Organization: Your Choice Websites\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Message
    $message = "First Name: $fname,\nLast Name: $lname,\nEmail: $email,\nPhone Number: $phone,\nMessage: $msg";

    // Attempt to send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        // Redirect on success
        header('location:../thankyou.html');
    } else {
        // Log the error
        echo "Message could not be sent.";
    }
}
?>
