<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

$messages = array();

// do some form processing stuff like register the user for something or whatever
if ($name == '') {
    $messages[] = 'Please provide your name';
}

if ($email == '') {
    $messages[] = 'Please provide your email address';
} 


if (count($messages) > 0) {
    
    $ret = array('rc' => 0, 'msg' => $messages);
    
} else {
    
    // do whatever needs to be done
    $confirmationNumber = '12093439';
    
    $messages[] = "Thanks for registering! Your confirmation number is $confirmationNumber.";
    
    $ret = array('rc' => 1, 'msg' => $messages);    
}

header('Content-Type: application/json');
echo json_encode($ret);