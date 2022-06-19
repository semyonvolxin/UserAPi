<?php
namespace userApi;
    #Подключение к бд 
    class dataBase{
      private static $db;
      public function __construct($nDb){
      	 if(($ndb instanceof Adddatabase) === true){
      	 	static::$db = $ndb;
      	 }
      }
    }
	class Adddatabase{
		private $host;
		private $dbName;
		private $user;
		private $password;
		public function __construct($host,$dbName,$user,$password){
           
		}
	}



?>