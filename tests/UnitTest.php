<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 12/02/2019
 * Time: 04:35 PM
 */

namespace Uts\Test;
require_once '..\vendor\autoload.php';
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

    public function testEnterNewViewCountNotExist()
    {
        $user_day = new UserDayStats();
        $id = rand(25000,120000);
        $user_day->setUserId($id);
        $user_day->enterNewViewCount();
        $exist = $user_day->findUser();
        if(!is_null($exist)) {
            $test = True;
        }else{
            $test = False;
        }
        $this->assertTrue($test);
    }

    public function testFindUserById()
    {
        $user_day = new UserDayStats();
        $id = rand(25000,120000);
        $user_day->setUserId($id);
        $user_day->enterNewViewCount();
        $exist = $user_day->findUser();
        if(!is_null($exist)) {
            $test = True;
        }else{
            $test = False;
        }
        $this->assertTrue($test);
    }

    public function testEnterNewViewCountExist()
    {
        $user_day = new UserDayStats();
        $id = rand(25000, 120000);
        $user_day->setUserId($id);
        $user_day->enterNewViewCount();
        $first = $user_day->findUser();
        $user_day->enterNewViewCount();
        $second = $user_day->findUser();
        $first = $first[0]->view_count + 1;
        $second = $second[0]->view_count;
        echo $second;
        $this->assertEquals($first,$second);
    }

    public function testGetUserViewCount()
    {
        $user_day = new UserDayStats();
        $id = rand(25000,120000);
        $user_day->setUserId($id);
        $user_day->enterNewViewCount();
        $exist = $user_day->getUserViewCount();
        if(!is_null($exist)) {
            $test = True;
        }else{
            $test = False;
        }
        $this->assertTrue($test);
    }


}