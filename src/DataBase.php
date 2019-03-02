<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 22/02/2019
 * Time: 02:10 PM
 */
namespace Uts\DataBase;
use Uts\Config;
class DataBase
{
    public $connect;
    public function __construct()
    {
         $config = new Config\Config();
         $this->connect = $pdo = new \PDO("mysql:host=localhost;dbname:$config->NAME",$config->USERNAME,$config->PASSWORD);
    }

    public function query($query)
    {
        $result = $this->connect->query("$query")->fetch();
        return $result;
    }



}