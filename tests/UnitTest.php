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
        $id = rand(25000,120000);
        $user_day->setUserId($id);
        $results = [];
        $results []= $user_day->enterNewViewCount();
        if(count($results)>1) {
            foreach ($results as $result) {
                if ($result->id == $id) {
                    $test = True;
                }
            }
        }else{
            $test = False;
        }
        $this->assertTrue($test);
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