<?php
/**
 * Класс для инициализации подключения к Базе данных методами PDO
 */
class DB {

    private static $_dbHost = 'localhost';
    private static $_dbName = 'xnvebabr_base';
    private static $_dbUser = 'xnvebabr_phpcode';
    private static $_dbPswd = 'ghbrjkbcn1';

    private static $_instance = null;

    private function __construct() {}
    private function __clone() {}

    public static function run()
    {
        if (!isset(self::$_instance)) {
            try {
                self::$_instance = new PDO('mysql:host='.self::$_dbHost.';dbname='.self::$_dbName, self::$_dbUser, self::$_dbPswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            } catch (PDOException $e) {
                throw new Exception('Ошибка соединения с базой данных '.$e->getMessage());
            }
        }
        return self::$_instance;
    }

    final public function __destruct() {
        self::$_instance = null;
    }

    public static function insertData($table, $data)
    {
        ksort($data);

        $fieldNames  = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $query = DB::run()->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $query->execute();
    }
}
