<?php
/**
 * UserServiceInface.php
 * @author fjj
 * @time 2020/7/21 16:08
 */

namespace App\JsonRpcService;


interface UserServiceInterface
{
    public function info(int $id):array ;
}