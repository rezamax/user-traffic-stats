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

         $this->query("CREATE TABLE IF NOT EXISTS user_day_stats (
            id     INT AUTO_INCREMENT PRIMARY KEY,
            user_id     INT (11)        NOT NULL,
            view_count  INT (11)                NOT NULL,
            date    DATE                 NOT NULL
          );");

         $this->query("CREATE TABLE IF NOT EXISTS user_total_stats (
            id     INT AUTO_INCREMENT PRIMARY KEY,
            user_id     INT (11)        NOT NULL,
            view_count  INT (11)                NOT NULL,
            start_date    DATE                 NOT NULL
          );");

        $this->query("CREATE TABLE IF NOT EXISTS day_stats (
            id     INT AUTO_INCREMENT PRIMARY KEY,
            view_count  INT (11)                NOT NULL,
            date    DATE                 NOT NULL
          );");

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