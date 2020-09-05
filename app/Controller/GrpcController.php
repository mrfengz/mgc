<?php
/**
 * Created by PhpStorm.
 * User: august
 * Date: 2020/9/5
 * Time: 13:42
 */

namespace App\Controller;

use App\Grpc\HiClient;

class GrpcController
{
    public function hello()
    {
        $client = new HiClient('127.0.0.1:8812', [
            'credentials' => null,
        ]);

        $request = new \Grpc\HiUser();
        $request->setName('hyperf');
        $request->setSex(1);

        /**
         * @var \Grpc\HiReply $reply
         */
        list($reply, $status) = $client->sayHello($request);

        $message = $reply->getMessage();
        $user = $reply->getUser();

        var_dump(memory_get_usage(true));
        return $message;
    }
}