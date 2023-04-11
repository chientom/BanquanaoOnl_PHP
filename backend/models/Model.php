<?php
    class Model{
        public $connection;
        const DB_DSN= 'mysql:host=localhost;dbname=coloshop;port=3306';
        const DB_USERNAME='root';
        const DB_PASSWORD='';
        public function __construct()
        {
            try {
                //code...
                $this-> connection = new PDO(Model::DB_DSN,Model::DB_USERNAME,Model::DB_PASSWORD);
                
            } catch (PDOException $e) {
                //throw $th;
                die('lỗi kết nối'.$e->getMessage());
            }
        }
    }
?>