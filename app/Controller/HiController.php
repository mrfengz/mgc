<?php
/**
 * Created by PhpStorm.
 * User: august
 * Date: 2020/9/5
 * Time: 13:41
 */

namespace App\Controller;


use Grpc\HiReply;
use Grpc\HiUser;

class HiController
{
    public function sayHello(HiUser $user)
    {
        $message = new HiReply();
        $message->setMessage("Hello World");
        $message->setUser($user);
        return $message;
    }
}