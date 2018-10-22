<?php
/*
 * This file is part of the Symfony bundle Seven/Rpc.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Weggla\RpcBundle\JsonRpc;
use Weggla\RpcBundle\Rpc\Client as BaseClient;
use Weggla\RpcBundle\Rpc\Method\MethodCall;
use Weggla\RpcBundle\Rpc\Transport\TransportInterface;

class Client extends BaseClient
{

    public function __construct($webServiceUrl, TransportInterface $transport = null)
    {
        parent::__construct($webServiceUrl, new Implementation(), $transport);
    }

    public function call($methodName, $parameters = array(), $id = null)
    {
        return $this->_call(new MethodCall($methodName, $parameters, $id));
    }

}
