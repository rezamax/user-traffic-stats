<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 25/04/2019
 * Time: 10:03 PM
 */

namespace Uts\Repository;
use Uts\Interfaces\UserDayStatsRepositoryInterface;
use Uts\DataBase;
require_once __DIR__.'..\..\..\vendor\autoload.php';
class UserDayStatsRepository implements UserDayStatsRepositoryInterface
{
    public $db;
    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function all()
    {
        return $this->db->query("SELECT * FROM user_day_stats");
    }
    public function find($id)
    {
        return $this->db->query("SELECT * FROM user_day_stats WHERE id=$id");
    }
    public function findByUserId($user_id)
    {
        return $this->db->query("SELECT * FROM user_day_stats WHERE user_id=$user_id");
    }
    public function findByDate($date)
    {
        $results = $this->db->query("SELECT * FROM user_day_stats");
        foreach ($results as $result){
            if ($result->date == $date){
               return $result;
            }
        }
    }
}