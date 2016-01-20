<?php
class dbConfig{
  //properties
  public static $dbServer = "server";
  public static $dbUser = "user";
  public static $dbPassword = "password";
  public static $dbDatabase = "database";
  //methods
  public static function connectDb(){
    return (new mysqli(dbConfig::$dbServer, dbConfig::$dbUser, dbConfig::$dbPassword, dbConfig::$dbDatabase));
  }
}
?>
