<?php
/**
 * MyRpcConsumer.php
 * @group(name="testgroup", description="测试模块")
 * @author fjj
 * @time 2020/7/21 16:28
 */

namespace App\Controller;


use App\JsonRpcService\CalculatorServiceConsumer;
use App\JsonRpcService\CalculatorServiceInterface;
use App\JsonRpcService\UserServiceConsumer;
use App\JsonRpcService\UserServiceInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Psr7ResponseInterface;

/**
 * Class MyRpcConsumer
 * @Controller(prefix="rpctest")
 */
class MyRpcConsumerController
{

    /**
     * @Inject()
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * @Inject()
     * @var CalculatorServiceInterface
     */
    private $caculateService;

    /**
     * @RequestMapping(path="index", methods="get,post")
     */
    public function index(ResponseInterface $response): Psr7ResponseInterface
    {
        $r1 = $this->userService->info(456);
        $r2 = $this->caculateService->add(56,33);

        return $response->json(['user'=>$r1,'cal'=>"56 + 33 = ".$r2]);
    }

}