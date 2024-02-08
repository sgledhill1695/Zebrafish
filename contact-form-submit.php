<?php
    include "../scrt/recaptcha-secret-key.php";

/* GOOGLE RECAPTCHA */
if(isset($_POST['g-recaptcha-response'])){

    include "session/session.php";

$secretKey = $recaptcha_secret_key;
$ip = $_SERVER['REMOTE_ADDR'];
$response = $_POST['g-recaptcha-response'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
$file = file_get_contents($url);
$data = json_decode($file);
if($data -> success ==true){



    if(isset($_POST['submit'])){

    
        /* FORM DATA */
        $full_name = $_POST['full_name'];
        $customer_email = $_POST['email'];
        $customer_number = $_POST['number'];
        $surgery_name = $_POST['surgery_name'];
        $surgery_postcode = $_POST['surgery_postcode'];
        $customer_message = $_POST['message'];
    
        /*EMAIL TO ZEBRAFISH  */
        $to = "info@zebrafishwebdesigns.co.uk";
        $subject = "Zebrafish Customer Contact";
        $message = "The below message has been submitted through the Zebrafish website\r\n\r\nName: $full_name\r\nContact Email: $customer_email\r\nContact Number: $customer_number\r\nSurgery Name: $surgery_name\r\nSurgery Postcode: $surgery_postcode\r\nCustomer Message:\r\n\r\n$customer_message";
        $header = "From: noreply@zebrafishwebdesigns.co.uk";
    
        /* EMAIL TO CUSTOMER */
        $customer_to = "$customer_email";
        $customer_subject = "We've recieved your message!";
        $customer_message = "Dear $full_name\r\n\r\nThis is an email to confirm we have recieved your message.\r\n\r\nSomebody from our team will be in touch shortly.\r\n\r\nPlease do not reply to this email.\r\n\r\nKind Regards,\r\n\r\nZebrafish Web Design";
        $customer_header = "From: noreply@zebrafishwebdesigns.co.uk";
    
    
    
    
        $mail_to_zebrafish = mail($to, $subject, $message, $header);
    
        if($mail_to_zebrafish){
            $mail_to_customer = mail($customer_to, $customer_subject, $customer_message, $customer_header);
    
            $_SESSION['order_form_success'] = "Your form has been successfully submitted";
            echo"error2";
            header("Location: submissions.php");
        } else {
            $_SESSION['order_form_fail'];
            echo"error3";
            header("Location: submissions.php");  
        }
    
        
    } else {
        $_SESSION['order_form_fail'];
        echo"error1";
        header("Location: submissions.php");
    } 




} else {

    $full_name = $_POST['full_name'];
    $customer_email = $_POST['email'];
    $customer_number = $_POST['number'];
    $surgery_name = $_POST['surgery_name'];
    $surgery_postcode = $_POST['surgery_postcode'];
    $customer_message = $_POST['message'];

    $_SESSION['full_name'] = "$full_name";
    $_SESSION['customer_email'] = "$customer_email";
    $_SESSION['customer_number'] = "$customer_number";
    $_SESSION['surgery_name'] = "$surgery_name";
    $_SESSION['surgery_postcode'] = "$surgery_postcode";
    $_SESSION['customer_message'] = "$customer_message";

    $_SESSION['recaptcha_fail'] = "Please confirm you are not a robot!";
    header("Location: contact.php#recapt");





}
} 



?>