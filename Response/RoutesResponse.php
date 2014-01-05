<?php

/*
 * This file is part of the FOSJsRoutingBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\JsRoutingBundle\Response;

use Symfony\Component\Routing\RouteCollection;

class RoutesResponse
{
    private $baseUrl;
    private $routes;
    private $prefix;
    private $host;
    private $scheme;

    public function __construct($baseUrl, RouteCollection $routes = null, $prefix, $host, $scheme)
    {
        $this->baseUrl = $baseUrl;
        $this->routes = $routes ?: new RouteCollection();
        $this->prefix = $prefix;
        $this->host = $host;
        $this->scheme = $scheme;
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getScheme()
    {
        return $this->scheme;
    }
}
