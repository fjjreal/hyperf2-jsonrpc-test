<?php
/**
 * UserServiceInface.php
 * @group(name="testgroup", description="测试模块")
 * @author fjj
 * @time 2020/7/21 16:08
 */

namespace App\JsonRpc;


interface UserServiceInterface
{
    public function info(int $id):array ;
}