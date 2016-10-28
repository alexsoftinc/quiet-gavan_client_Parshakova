<?php
class Model
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertData($table, $data)
    {
        ksort($data);

        $fieldNames  = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = $this->db->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }
}
