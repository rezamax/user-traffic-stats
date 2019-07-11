<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 25/04/2019
 * Time: 12:26 AM
 */

namespace Uts;
require '..\vendor\autoload.php';
use Uts\Interfaces\UserDayStatsInterface;
use Uts\Queries\UserDayQueries;
class UserDayStats implements UserDayStatsInterface
{
   public $user_id;
   public $user_day_stats;
   public function setUserId($id)
   {
       $this->user_id = $id;
   }

    public function getUserId()
    {
        return $this->user_id ;
    }

   public function findUser()
   {
       $repository = new UserDayQueries();
       return $this->user_day_stats = $repository->findByUserId($this->user_id);
   }

   public function enterNewViewCount()
   {
       $exist_user_stats = new UserDayQueries();
       if(count($exist_user_stats)){

       }else{

       }

   }

   public function getUserViewCount()
   {
       // TODO: Implement getUserViewCount() method.
   }
}