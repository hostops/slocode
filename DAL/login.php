<?php
$s=include "dbConfig.php";
if($==false){
  echo "error"
}
try{
  //get posted data
  $userName = htmlspecialchars($_POST["user"]);
  $password= htmlspecialchars($_POST["password"]);
  $sqli = dbConfig::connectDb();
  // Check connection
  if ($sqli->connect_error) {
      $sqli->exit();
      echo json_encode(array( "result"=>0));
  }
  //insert variables
  $stmt = $sqli->prepare("CALL userPassCheck(?,?);");
  $stmt->bind_param('ss',$userName, $password);
  if ($stmt->execute() === TRUE) {
    $stmt->bind_result($result, $name, $id);
    while ($stmt->fetch()) {
        echo json_encode(array( "result"=>$result,"name"=>$name,"id"=>$id ));
    }
  } else {
    echo json_encode(array( "result"=>0));
  }
  $stmt->close();
  $sqli->close();
} catch (Exception $e) {
    echo json_encode(array( "result"=>0));
}
?>
