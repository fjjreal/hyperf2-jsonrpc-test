<?php
/**
 * UserServiceConsumer.php
 * @author fjj
 * @time 2020/7/21 16:21
 */

namespace App\JsonRpcService;


use Hyperf\RpcClient\AbstractServiceClient;

class UserServiceConsumer extends AbstractServiceClient implements UserServiceInterface
{

    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'UserService';

    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';

    public function info(int $id): array
    {
        return $this->__request(__FUNCTION__,compact('id'));
    }
}