<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 25/04/2019
 * Time: 10:03 PM
 */

namespace Uts\Queries;
use Uts\Interfaces\UserDayStatsQueriesInterface;
use Uts\DataBase;
require_once __DIR__.'..\..\..\vendor\autoload.php';
class UserDayQueries implements UserDayStatsQueriesInterface
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
        if(count($results)>0) {
            foreach ($results as $result) {
                if ($result->date == $date) {
                    return $result;
                }
            }
        }else{
            return null;
        }
    }
    public function findUserStatsByDate($user_id, $date)
    {
        $results = $this->db->query("SELECT * FROM user_day_stats WHERE user_id=$user_id");
        if(count($results)>0){
            foreach ($results as $result){
                if ($result->date == $date){
                    return $result;
                }
            }
        }else{
            return null;
        }
    }
    public function insertNew($user_id)
    {
        $results = $this->db->query("INSERT INTO user_day_stats  VALUES ('',$user_id,1, NOW())");
        return $results;
    }
    public function updateCount($id)
    {
        $results = $this->db->query("UPDATE user_day_stats SET view_count=+1 WHERE id=$id") ;
        return $results;
    }
}