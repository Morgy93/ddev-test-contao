<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\RoutingBundle\Tests\Functional\Doctrine\Orm;

use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Orm\Route;
use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Orm\RouteProvider;
use Symfony\Component\HttpFoundation\Request;

class RouteProviderTest extends OrmTestCase
{
    private RouteProvider $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->clearDb(Route::class);

        $this->repository = self::getContainer()->get('cmf_routing.route_provider');
    }

    public function testGetRouteCollectionForRequest(): void
    {
        $this->createRoute('route1', '/test');
        $this->createRoute('route2', '/test/child');
        $this->createRoute('route3', '/test/child/testroutechild');

        $this->getDm()->clear();

        $routes = $this->repository->getRouteCollectionForRequest(Request::create('/test/child/testroutechild'));
        $this->assertCount(3, $routes);
        $this->assertContainsOnlyInstancesOf(Route::class, $routes);
    }
}
