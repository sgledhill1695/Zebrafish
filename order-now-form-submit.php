<?php

include "../scrt/recaptcha-secret-key.php";

if(isset($_POST['g-recaptcha-response'])){

    include "session/session.php";
$chosen_theme = $_POST['chosen_theme'];
$secretKey = $recaptcha_secret_key;
$ip = $_SERVER['REMOTE_ADDR'];
$response = $_POST['g-recaptcha-response'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
$file = file_get_contents($url);
$data = json_decode($file);
if($data -> success ==true){








if (isset($_POST['submit'])){

     include "session/session.php";

     $chosen_theme = $_POST['chosen_theme'];
     $full_name = $_POST['full_name'];
     $customer_email = $_POST['contact_email'];
     $contact_email = substr($customer_email,0,70);

     $contact_number = $_POST['contact_number'];
     $surgery_name = $_POST['surgery_name'];
     $surgery_postcode = $_POST['surgery_postcode'];
     $contract_expiry = $_POST['surgery_contract']; 

     $subject = "Zebrafish New Order";
     $customer_subject = "We've got your order form!";



    $mailFrom = "info@zebrafishwebdesigns.co.uk";
    $mailTo = "info@zebrafishwebdesigns.co.uk";
    $customer_mail_to = "$contact_email";
    $header = "From: ".$mailFrom;
    $customer_header = "From: noreply@zebrafishwebdesigns.co.uk";

    $message = "New order recieved through the Zebrafish website. New customer details below.\r\n\r\nChosen Theme: $chosen_theme\r\nFull Name: $full_name\r\nContact Email: $contact_email\r\nContact Number: $contact_number\r\nSurgery Name: $surgery_name\r\nSurgery Postcode: $surgery_postcode\r\nContract Expiry: $contract_expiry\r\n\r\nPlease contact customer.";

    $customer_message = "Dear $full_name\r\n\r\nThis is an email to confirm we have recieved your order form.\r\n\r\nSomebody from our team will be in touch shortly.\r\n\r\nPlease do not reply to this email.\r\n\r\nKind Regards,\r\n\r\nZebrafish Web Design";

    $mailToZebrafish = mail($mailTo, $subject, $message, $header);

    if($mailToZebrafish){
        $mail_to_customer = mail($customer_mail_to, $customer_subject, $customer_message, $customer_header);

        $_SESSION['order_form_success'] = "Your form has been successfully submitted";
        header("Location: submissions.php");  
    } else {
        $_SESSION['order_form_fail'];
        header("Location: submissions.php");  
    }





} else {
    $_SESSION['order_form_fail'] = "Your form could not be submitted, please try again. If you are still unable to submit your form please contact us on 01132 505070";
    header("Location: submissions.php");
} 


} else {

    $chosen_theme = $_POST['chosen_theme'];
    $full_name = $_POST['full_name'];
    $customer_email = $_POST['contact_email'];
    $contact_number = $_POST['contact_number'];
    $surgery_name = $_POST['surgery_name'];
    $surgery_postcode = $_POST['surgery_postcode']; 

    $_SESSION['chosen_theme'] = "$chosen_theme";
    $_SESSION['full_name'] = "$full_name";
    $_SESSION['contact_email'] = "$customer_email";
    $_SESSION['contact_number'] = "$contact_number";
    $_SESSION['surgery_name'] = "$surgery_name";
    $_SESSION['surgery_postcode'] = "$surgery_postcode";

    $_SESSION['recaptcha_fail'] = "Please confirm you are not a robot!";
    header("Location: order-now.php?theme=$chosen_theme#recapt");
}}
?>