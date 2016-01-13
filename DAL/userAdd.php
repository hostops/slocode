<?php
include "dbConfig.php";
try{
  $name = htmlspecialchars($_POST["Name"]);
  $email= htmlspecialchars($_POST["Email"]);
  $userName = htmlspecialchars($_POST["Usrname"]);
  $password= htmlspecialchars($_POST["Pass"]);
  //connect db
  $sqli = dbConfig->connectDb();
  // Check connection
  if ($sqli->connect_error) {
        echo json_encode(array( "status"=>0,"users"=>0,"emails"=>0 ));
      $sqli->exit();
  }
  //insert variables
  $stmt = $sqli->prepare("CALL userAdd(?,?,?,?);");
  $stmt->bind_param('ssss',$userName, $password, $name, $email);
  if ($stmt->execute() === TRUE) {
    $stmt->bind_result($status, $users, $emails);
    while ($stmt->fetch()) {
          echo json_encode(array( "status"=>$status,"users"=>$users,"emails"=>$emails ));
    }
  } else {
      echo json_encode(array( "status"=>0,"users"=>0,"emails"=>0 ));
  }
  $stmt->close();
  $sqli->close();
} catch (Exception $e) {
      echo json_encode(array( "status"=>0,"users"=>0,"emails"=>0 ));
}
?>
