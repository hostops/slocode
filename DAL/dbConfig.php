<?php
class dbConfig{
  //properties
  public static $server = "mysql.hostinger.co.uk";
  public static $user="u115822113_scode";
  public static $passwrod="slocode123";
  public static $database ="u115822113_forum";
  //methods
  public static function connectDb(){
    return new mysqli($server, $user, $password, $databse);
  }
}
?>
