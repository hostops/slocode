<?php

$Name = @trim(stripslashes($_POST['Name']));
$Email = @trim(stripslashes($_POST['Email']));
$Vpr = @trim(stripslashes($_POST['Vpr']));
$subject = 'App Submission';

$email_from = 'SloCode';
$email_to = 'jaka.music@slocode.xyz';

$body = 'Ime: ' . $Name . "\n\n" . 'Email: ' . $Email . "\n\n" . 'Vprašanje: ' . $Vpr;

$success = @mail($email_to, $subject, $body, 'From: '.$email_from.'');
  // redirect to success page
  if ($success){
    print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.slocode.xyz/forum/vprasaj.php\">";
  }
  else{
    print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.slocode.xyz/forum/vprasaj.php\">";
  }

?>
