<?php
// Is parent Database connect us autoload the system
class Database extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=xnvebabr_base', 'xnvebabr_phpcode', 'ghbrjkbcn1');
    }
}
