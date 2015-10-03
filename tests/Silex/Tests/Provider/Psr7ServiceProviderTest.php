<?php

/*
 * This file is part of Psr-7 Service Provider.
 *
 * (c) 2015 Marvin Butkereit
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Silex\Tests\Provider;

use Silex\Application;
use Silex\WebTestCase;
use Symfony\Component\HttpKernel\Client;
use Symfony\Component\HttpFoundation\Request;

/**
 * Psr7ServiceProvider.
 *
 * @author Marvin Butkereit
 */
class Psr7ServiceProviderTest extends WebTestCase
{
'Psr\Http\Message\ServerRequestInterface' => true,
'Psr\Http\Message\RequestInterface' => true,
'Psr\Http\Message\MessageInterface' => true,
    public function testGetArguments()
    {
        $app = new Application();
        $resolver = new ControllerResolver($app);

        $controller = function (Application $app) {};

        $args = $resolver->getArguments(Request::create('/'), $controller);
        $this->assertSame($app, $args[0]);
    }

}
