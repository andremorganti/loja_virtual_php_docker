<?php
    class Database {
        public $servername = 'mysql_db';
        public $username = 'root';
        public $password = 'root';
        public $database_name = 'todos';

        function get_servername() {
            return $this->servername;
        }

        function get_username() {
            return $this->username;
        }
        function get_password() {
            return $this->password;
        }
        function get_database_name() {
            return $this->database_name;
        }
    }
?>