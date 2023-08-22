<?php
//Custom Exception

// class MyException extends Exception{}
  
// class NetworkException extends Exception{}

// function testException(){
//   throw new NetworkException('NetworkException');
// }

// try{
//   testException();
// }catch(MyException $e){ 
//   echo "MyException Caught";
// }catch(NetworkException $e){
//   echo "NetworkException";
// }catch(Exception $e){
//   echo "Exception";
// }

//Exception Example
class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage{
  function connect();
  function getName();
}

class MySqlServer implements NetworkStorage{
  function connect(){
    throw new DiskFullException();
  }

  function getName(){
    return "MySql Server"."<br>";
  }

}

class PostgreSqlServer implements NetworkStorage{
  function connect(){
   return $this;
  }

  function getName(){
    return "PostgreSql Server"."<br>";
  }
}

class MSSqlServer implements NetworkStorage{
  function connect(){
  throw new NetworkException();
  }

  function getName(){
    return "MS Sql Server"."<br>";
  }
}

class ConnectionPool{
  private $connection;
  private $storage;
  function __construct(){
    $this->storage = array();
  }

  function addStorage(NetworkStorage $storage){
   array_push($this->storage, $storage);
  }

  function getConnection(){

   foreach($this->storage as $storage){
     try{
      $this->connection = $storage->connect();
     }catch(ServerLoadException $e){
       echo $storage->getName()." Server is busy"."<br>";
     }catch(NetworkException $e){
       echo $storage->getName()." Server is down"."<br>";
     }catch(DiskFullException $e){
       echo $storage->getName()." Server is full"."<br>";
     }
     if($this->connection){
       break;
     }
   }

   if($this->connection){
     return $this->connection;
  }
  return false;
  }
}

$mySql = new MySqlServer();
$postgreSql = new PostgreSqlServer();
$msSql = new MSSqlServer();

$connectionPool = new ConnectionPool();
$connectionPool->addStorage($mySql);
$connectionPool->addStorage($postgreSql);
$connectionPool->addStorage($msSql);

$connection = $connectionPool->getConnection();

print_r($connection);