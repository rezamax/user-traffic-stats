<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 25/04/2019
 * Time: 09:50 PM
 */
namespace Uts\Interfaces;
interface UserDayStatsInterface{
    public function setUserId($id);
    public function getUserId();
    public function findUser();
    public function enterNewViewCount();
    public function getUserViewCount();
}