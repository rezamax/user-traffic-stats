<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 12/02/2019
 * Time: 04:35 PM
 */
namespace Uts\Test;
require '..\vendor\autoload.php';
use PHPUnit\Framework\TestCase;
use Uts\UserDayStats;

class UnitTest extends TestCase
{
    public function testCanSetUserId()
    {
        $user_day = new UserDayStats();
        $id = 1;
        $user_day->setUserId($id);
        $this->assertEquals($id,$user_day->getUserId());
    }

    public function testEnterNewViewCount()
    {
        $user_day = new UserDayStats();
        $id = 1;
        $user_day->setUserId($id);
        $user_day->enterNewViewCount();
    }

    public function testFindUserById()
    {
        $user_day = new UserDayStats();
        $id = 1;
        $user_day->setUserId($id);
        $users = $user_day->findUser();
        if(count($users)>0) {
            foreach ($users as $user) {
                if ($user->id == $id) {
                    $result = True;
                }
            }
        }else{
            $result = False;
        }
        $this->assertTrue($result);
    }



}