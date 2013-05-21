<?php
$userid = $_POST['userid'];
$email = $_POST['email'];
$employerid = $_POST['employerid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

header('location: https://service.selfhealthnet.com/www/saml2/idp/SSOService.php?userid=test
       &userid='.$userid.'&email='.$email.'&employerid='.$employerid.'&firstname='.$firstname.'&lastname='.$lastname.'
       &spentityid=https://www.mybrainsolutions.com/SSO/SelfHealth.aspx');

?>

