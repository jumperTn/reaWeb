<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/ban')) {
            // ban
            if (rtrim($pathinfo, '/') === '/ban') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ban');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::indexAction',  '_route' => 'ban',);
            }

            // ban_show
            if (preg_match('#^/ban/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ban_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::showAction',));
            }

            // ban_new
            if ($pathinfo === '/ban/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::newAction',  '_route' => 'ban_new',);
            }

            // ban_create
            if ($pathinfo === '/ban/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ban_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::createAction',  '_route' => 'ban_create',);
            }
            not_ban_create:

            // ban_edit
            if (preg_match('#^/ban/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ban_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::editAction',));
            }

            // ban_update
            if (preg_match('#^/ban/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ban_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ban_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::updateAction',));
            }
            not_ban_update:

            // ban_delete
            if (preg_match('#^/ban/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ban_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ban_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\BanController::deleteAction',));
            }
            not_ban_delete:

        }

        if (0 === strpos($pathinfo, '/zone')) {
            // zone
            if (rtrim($pathinfo, '/') === '/zone') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zone');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::indexAction',  '_route' => 'zone',);
            }

            // zone_show
            if (preg_match('#^/zone/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::showAction',));
            }

            // zone_new
            if ($pathinfo === '/zone/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::newAction',  '_route' => 'zone_new',);
            }

            // zone_create
            if ($pathinfo === '/zone/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_zone_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::createAction',  '_route' => 'zone_create',);
            }
            not_zone_create:

            // zone_edit
            if (preg_match('#^/zone/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::editAction',));
            }

            // zone_update
            if (preg_match('#^/zone/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_zone_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::updateAction',));
            }
            not_zone_update:

            // zone_delete
            if (preg_match('#^/zone/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_zone_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::deleteAction',));
            }
            not_zone_delete:

        }

        // pidev_rea_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_rea_homepage')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
