<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'ban' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ban/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ban_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ban',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ban_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ban/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ban_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ban/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ban_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ban',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ban_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ban',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ban_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ban',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zone_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_rea_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Pidev\\ReaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
