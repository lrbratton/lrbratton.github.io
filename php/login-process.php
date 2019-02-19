<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
$username = '';
$password = '';

// validate the variables ======================================================
	if (empty($_POST['username'])) {
		$errors['username'] = 'Username is required.';
        }
        else {
            if($_POST['username'] === 'admin') {
                $username = $_POST['username'];
            }
            else {
                $errors['username'] = 'Please enter a valid username.';
            }
        }

	if (empty($_POST['password'])) {
		$errors['password'] = 'Password is required.';
        }
        else {
            if($_POST['password'] === 'brattonfamily7789#') {
                $username = $_POST['password'];
            }
            else {
                $errors['password'] = 'Please enter a valid password.';
            }
        }
        

// return a response ===========================================================

	// response if there are errors
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors, return a message
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);
