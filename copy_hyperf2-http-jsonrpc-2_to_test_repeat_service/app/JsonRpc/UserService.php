<?php
/**
 * UserService.php
 * @group(name="testgroup", description="测试模块")
 * @author fjj
 * @time 2020/7/21 16:09
 */

namespace App\JsonRpc;


use Hyperf\RpcServer\Annotation\RpcService;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="UserService", protocol="jsonrpc-http", server="jsonrpc-http")
 * // , publishTo="consul" 同一节点名称重复不能注册
 */
class UserService implements UserServiceInterface
{

    public function info(int $id):array
    {
        return ['id'=>$id,'name'=>'hyperf2'];
    }
}