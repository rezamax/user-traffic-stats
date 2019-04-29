<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 25/04/2019
 * Time: 10:04 PM
 */
namespace Uts\Interfaces;
interface UserDayStatsRepositoryInterface{
    public function all();
    public function find($id);
    public function findByUserId($user_id);
    public function findByDate($date);
    public function findUserStatsByDate($user_id,$date);
    public function insertNew();
    public function updateCount($date);
}