<?php
class Database{

    // specify your own database credentials
    public $conn;

    function __construct(){
        $this->conn = null;

        try{
            $this->conn = new pdo(
              'mysql:unix_socket=/cloudsql/tag-push:us-central1:tagpush',
              'root',           // username
              '954203tlC612r0w' // password
            );
        }catch(PDOException $exception){
            echo "Conexão com o banco de dados falhou: " . $exception->getMessage();
        }
    }

    // get the database connection
    public function getConnection(){
        return $this->conn;
    }

}
// Using PDO_MySQL (connecting from App Engine)
// $db = new pdo(
//   'mysql:unix_socket=/cloudsql/tag-push:us-central1:tagpush',
//   'root',  // username
//   '954203tlC612r0w'       // password
// );​
// Using mysqli (connecting from App Engine)
// $sql = new mysqli(
//   null, // host
//   'root', // username
//   '954203tlC612r0w',     // password
//   '', // database name
//   null,
//   '/cloudsql/tag-push:us-central1:tagpush'
//   );​
// Using MySQL API (connecting from App Engine)
// $conn = mysql_connect(':/cloudsql/tag-push:us-central1:tagpush',
//   'root', // username
//   '954203tlC612r0w'      // password
//   );
// };
