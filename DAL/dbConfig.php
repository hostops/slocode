<?php
class dbConfig{
  //properties
  public static $server = "mySqlServer";
  public static $user="user";
  public static $passwrod="password";
  public static $database ="database";
  //methods
  public static function connectDb(){
    return (new mysqli("$server", "$user", "$password", "$databse" ));
  }
}
?>
