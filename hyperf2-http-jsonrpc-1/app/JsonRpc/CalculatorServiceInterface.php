<?php
/**
 * CalculatorServiceInterface.php
 * @author fjj
 * @time 2020/7/21 16:00
 */

namespace App\JsonRpc;


interface CalculatorServiceInterface
{
    public function add(int $a,int $b): int;
}