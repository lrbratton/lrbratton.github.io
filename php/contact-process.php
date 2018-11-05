<?php

    $errors = array();  	
    $data   = array(); 	
    $name   ='';
    $comment='';
    $email  = '';
    $to = "l.bratton@hotmail.co.nz";
    $email_subject = '';
    $email_body='';
    
    if (empty($_POST['name'])) {
        $errors['name'] = 'Please enter your name.';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'Please enter your email address.';
    } else {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        }
        else {
            $errors['email'] = 'Please enter a valid email address.';
        } 
    }

    if(empty($_POST['comment'])) {
        $errors['comment'] = 'Please enter your message.';
    } else {
        $comment = $_POST['comment'];
    }

    if ( ! empty($errors)) {

            // if there are items in our errors array, return those errors
            $data['success'] = false;
            $data['errors']  = $errors;
    } else {
            $email_subject = "Go Jo Webpage Email";
            $email_body = "Hi,\n\n You have received a new email from $name.\n".
                                    "Here is the message:\n $comment.\n".
                                    "$name's email is $email";
            mail($to,$email_subject,$email_body);
            $data['success'] = true;
            $data['message'] = 'We have received your message.';
            
    }	
    
    echo json_encode($data);
        
