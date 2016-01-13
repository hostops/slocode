<?php
include "dbConfig.php";
try{
  $title = htmlspecialchars($_POST["Title"]);
  $tags= htmlspecialchars($_POST["Tags"]);
  $content = htmlspecialchars($_POST["Content"]);
  $textContent= htmlspecialchars($_POST["TextContent"]);
  $idUser= htmlspecialchars($_POST["IDUser"]);
  $idCategory= htmlspecialchars($_POST["idCategory"]);
  //db connect
  $sqli = dbConfig->connectDb();
  // Check connection
  if ($sqli->connect_error) {
        echo "<script>window.location.href = '/notavailable.php';</script>";
      $sqli->exit();
  }
  //insert variables
  $stmt = $sqli->prepare("CALL threadAdd(?,?,?,?,?,?);");
  $stmt->bind_param('ssssss',$idUser,$idCategory, $title, $content, $textContent,$tags);
  if ($stmt->execute() === TRUE) {
    $stmt->bind_result($id);
    while ($stmt->fetch()) {
          echo "<script>window.location.href = '/forum/#sites/thread.php?id=$id';</script>";
    }
  } else {
      echo "<script>window.location.href = '/notavailable.php';</script>";
  }

  $stmt->close();
  $sqli->close();
} catch (Exception $e) {
      echo "<script>window.location.href = '/notavailable.php';</script>";
}
?>
