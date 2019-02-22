<?php
/**
 * Created by PhpStorm.
 * User: pc_mx
 * Date: 22/02/2019
 * Time: 02:10 PM
 */

namespace Uts\DataBase;


class DataBase
{
    /**
     * database name
     * @var  string
     */
    protected $NAME ;


    /**
     * database username
     * @var  string
     */
    protected $USERNAME ;


    /**
     * database password
     * @var  string
     */
    protected $PASSWORD ;



    public function connect()
    {
        return $pdo = new \PDO("mysql:host=localhost;dbname:$this->NAME",$this->USERNAME,$this->PASSWORD);
    }



}