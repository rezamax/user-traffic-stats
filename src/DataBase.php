<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 22/02/2019
 * Time: 02:10 PM
 */

namespace Uts;
use PDO;
use Uts\Config;

require '..\vendor\autoload.php';

class DataBase
{
    private $connect;
    public function __construct()
    {
         $config = new Config();
         $this->connect = new \PDO("mysql:host=localhost;dbname=$config->NAME",$config->USERNAME,$config->PASSWORD);
         $this->connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function query($query)
    {
        try{
            $result = $this->connect->prepare($query);
            $result->execute();
            $result = $result->fetchAll(PDO::FETCH_OBJ);
            return $result;
         }catch(\PDOException $e) {
            return $e->getMessage();
         }

    }



}