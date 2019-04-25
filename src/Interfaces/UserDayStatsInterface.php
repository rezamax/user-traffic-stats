<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 25/04/2019
 * Time: 09:50 PM
 */
interface UserDayStatsInterface{
    public function setUserId();
    public function findUser();
    public function enterNewViewCount();
    public function getUserViewCount();
}