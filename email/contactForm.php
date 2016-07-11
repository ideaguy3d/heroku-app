<?php
/**
 * Created by PhpStorm.
 * User: julius
 * Date: 7/6/2016
 * Time: 1:49 PM
 */

// Contact
$to = 'nbr1ninrsan@gmail.com';
$subject = 'julius augustus maximus';


if (isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])) {
    $name = $_POST['c_name'];
    $from = $_POST['c_email'];
    $message = $_POST['c_message'];
    
    $formInfo = "name = ".$name.", from = ".$from.", message = ".$message; 

    //this is where the script breaks
    if (mail($to, $subject, $message, $from)) {
        $result = array(
            'message' => 'Thanks for contacting julius augustus maximus',
            'sendstatus' => 1
        );
        echo json_encode($result);
    } else {
        $result = array(
            'message' => 'Something is wrong, form info is: ' . $formInfo,
            'sendstatus' => 1
        );
        echo json_encode($result);
    }
}
