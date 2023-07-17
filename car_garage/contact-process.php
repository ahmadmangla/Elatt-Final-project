<?php

$is_submitted = false;

if (isset($_POST['submit'])) {

    echo '<script type="text/javascript">
           window.location = "http://localhost/Muhammad_Ahmad-project-1/car_garage/#contact";
      </script>';

    if (empty($_POST['name'])) {
        $error_name = "Please enter full Name!";
    } else {
        $name = sanitize_user_input($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $error_email = "Please enter your email!";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error_email = "Please enter a valid email";
    } else {
        $email = sanitize_user_input($_POST['email']);
    }

    if (empty($_POST['subject'])) {
        $error_subject = "Please enter Subject!";
    } else {
        $subject = sanitize_user_input($_POST['subject']);
    }

    if (empty($_POST['message'])) {
        $error_message = "Please enter message!";
    } else {
        $message = sanitize_user_input($_POST['message']);
    }


    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $sql = " INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
        (?, ?, ?,?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $subject, $message);
            mysqli_stmt_execute($stmt);
        }

        if (mysqli_affected_rows($conn) != 0) {
            $is_submitted = true;
            $submit_message = "Form Submitted Successfully!";
        } else {
            $submit_message = "There was a problem submitting your form. Please try again later.";
        }
        $name = $email = $subject = $message = "";
    }
}

function sanitize_user_input($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = addslashes($data);
    return $data;
}