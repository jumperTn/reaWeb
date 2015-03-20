<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur',);
            }

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::showAction',));
            }

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }

            // utilisateur_create
            if ($pathinfo === '/utilisateur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateur_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::createAction',  '_route' => 'utilisateur_create',);
            }
            not_utilisateur_create:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::editAction',));
            }

            // utilisateur_update
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::updateAction',));
            }
            not_utilisateur_update:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_utilisateur_delete:

        }

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/rendezvous')) {
                // rendezvous
                if (rtrim($pathinfo, '/') === '/rendezvous') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rendezvous');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::indexAction',  '_route' => 'rendezvous',);
                }

                // rendezvous_show
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::showAction',));
                }

                // rendezvous_new
                if ($pathinfo === '/rendezvous/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::newAction',  '_route' => 'rendezvous_new',);
                }

                // rendezvous_create
                if ($pathinfo === '/rendezvous/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rendezvous_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::createAction',  '_route' => 'rendezvous_create',);
                }
                not_rendezvous_create:

                // rendezvous_edit
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::editAction',));
                }

                // rendezvous_update
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_rendezvous_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::updateAction',));
                }
                not_rendezvous_update:

                // rendezvous_delete
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_rendezvous_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RendezvousController::deleteAction',));
                }
                not_rendezvous_delete:

            }

            if (0 === strpos($pathinfo, '/rapport')) {
                if (0 === strpos($pathinfo, '/rapportp')) {
                    if (0 === strpos($pathinfo, '/rapportprorpriete')) {
                        // rapportprorpriete
                        if (rtrim($pathinfo, '/') === '/rapportprorpriete') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'rapportprorpriete');
                            }

                            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::indexAction',  '_route' => 'rapportprorpriete',);
                        }

                        // rapportprorpriete_show
                        if (preg_match('#^/rapportprorpriete/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportprorpriete_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::showAction',));
                        }

                        // rapportprorpriete_new
                        if ($pathinfo === '/rapportprorpriete/new') {
                            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::newAction',  '_route' => 'rapportprorpriete_new',);
                        }

                        // rapportprorpriete_create
                        if ($pathinfo === '/rapportprorpriete/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_rapportprorpriete_create;
                            }

                            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::createAction',  '_route' => 'rapportprorpriete_create',);
                        }
                        not_rapportprorpriete_create:

                        // rapportprorpriete_edit
                        if (preg_match('#^/rapportprorpriete/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportprorpriete_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::editAction',));
                        }

                        // rapportprorpriete_update
                        if (preg_match('#^/rapportprorpriete/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_rapportprorpriete_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportprorpriete_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::updateAction',));
                        }
                        not_rapportprorpriete_update:

                        // rapportprorpriete_delete
                        if (preg_match('#^/rapportprorpriete/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_rapportprorpriete_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportprorpriete_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportprorprieteController::deleteAction',));
                        }
                        not_rapportprorpriete_delete:

                    }

                    if (0 === strpos($pathinfo, '/rapportpersonne')) {
                        // rapportpersonne
                        if (rtrim($pathinfo, '/') === '/rapportpersonne') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'rapportpersonne');
                            }

                            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::indexAction',  '_route' => 'rapportpersonne',);
                        }

                        // rapportpersonne_show
                        if (preg_match('#^/rapportpersonne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportpersonne_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::showAction',));
                        }

                        // rapportpersonne_new
                        if ($pathinfo === '/rapportpersonne/new') {
                            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::newAction',  '_route' => 'rapportpersonne_new',);
                        }

                        // rapportpersonne_create
                        if ($pathinfo === '/rapportpersonne/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_rapportpersonne_create;
                            }

                            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::createAction',  '_route' => 'rapportpersonne_create',);
                        }
                        not_rapportpersonne_create:

                        // rapportpersonne_edit
                        if (preg_match('#^/rapportpersonne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportpersonne_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::editAction',));
                        }

                        // rapportpersonne_update
                        if (preg_match('#^/rapportpersonne/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_rapportpersonne_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportpersonne_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::updateAction',));
                        }
                        not_rapportpersonne_update:

                        // rapportpersonne_delete
                        if (preg_match('#^/rapportpersonne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_rapportpersonne_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportpersonne_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportpersonneController::deleteAction',));
                        }
                        not_rapportpersonne_delete:

                    }

                }

                // rapport
                if (rtrim($pathinfo, '/') === '/rapport') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rapport');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::indexAction',  '_route' => 'rapport',);
                }

                // rapport_show
                if (preg_match('#^/rapport/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::showAction',));
                }

                // rapport_new
                if ($pathinfo === '/rapport/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::newAction',  '_route' => 'rapport_new',);
                }

                // rapport_create
                if ($pathinfo === '/rapport/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rapport_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::createAction',  '_route' => 'rapport_create',);
                }
                not_rapport_create:

                // rapport_edit
                if (preg_match('#^/rapport/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::editAction',));
                }

                // rapport_update
                if (preg_match('#^/rapport/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_rapport_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::updateAction',));
                }
                not_rapport_update:

                // rapport_delete
                if (preg_match('#^/rapport/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_rapport_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\RapportController::deleteAction',));
                }
                not_rapport_delete:

            }

        }

        if (0 === strpos($pathinfo, '/o')) {
            if (0 === strpos($pathinfo, '/operation')) {
                // operation
                if (rtrim($pathinfo, '/') === '/operation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'operation');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::indexAction',  '_route' => 'operation',);
                }

                // operation_show
                if (preg_match('#^/operation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::showAction',));
                }

                // operation_new
                if ($pathinfo === '/operation/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::newAction',  '_route' => 'operation_new',);
                }

                // operation_create
                if ($pathinfo === '/operation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_operation_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::createAction',  '_route' => 'operation_create',);
                }
                not_operation_create:

                // operation_edit
                if (preg_match('#^/operation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::editAction',));
                }

                // operation_update
                if (preg_match('#^/operation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_operation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::updateAction',));
                }
                not_operation_update:

                // operation_delete
                if (preg_match('#^/operation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_operation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OperationController::deleteAction',));
                }
                not_operation_delete:

            }

            if (0 === strpos($pathinfo, '/offre')) {
                // offre
                if (rtrim($pathinfo, '/') === '/offre') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'offre');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::indexAction',  '_route' => 'offre',);
                }

                // offre_show
                if (preg_match('#^/offre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::showAction',));
                }

                // offre_new
                if ($pathinfo === '/offre/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::newAction',  '_route' => 'offre_new',);
                }

                // offre_create
                if ($pathinfo === '/offre/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_offre_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::createAction',  '_route' => 'offre_create',);
                }
                not_offre_create:

                // offre_edit
                if (preg_match('#^/offre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::editAction',));
                }

                // offre_update
                if (preg_match('#^/offre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_offre_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::updateAction',));
                }
                not_offre_update:

                // offre_delete
                if (preg_match('#^/offre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_offre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\OffreController::deleteAction',));
                }
                not_offre_delete:

            }

        }

        if (0 === strpos($pathinfo, '/no')) {
            if (0 === strpos($pathinfo, '/nouveau')) {
                // nouveau
                if (rtrim($pathinfo, '/') === '/nouveau') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'nouveau');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::indexAction',  '_route' => 'nouveau',);
                }

                // nouveau_show
                if (preg_match('#^/nouveau/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouveau_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::showAction',));
                }

                // nouveau_new
                if ($pathinfo === '/nouveau/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::newAction',  '_route' => 'nouveau_new',);
                }

                // nouveau_create
                if ($pathinfo === '/nouveau/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_nouveau_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::createAction',  '_route' => 'nouveau_create',);
                }
                not_nouveau_create:

                // nouveau_edit
                if (preg_match('#^/nouveau/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouveau_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::editAction',));
                }

                // nouveau_update
                if (preg_match('#^/nouveau/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_nouveau_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouveau_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::updateAction',));
                }
                not_nouveau_update:

                // nouveau_delete
                if (preg_match('#^/nouveau/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_nouveau_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nouveau_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NouveauController::deleteAction',));
                }
                not_nouveau_delete:

            }

            if (0 === strpos($pathinfo, '/notification')) {
                // notification
                if (rtrim($pathinfo, '/') === '/notification') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'notification');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification',);
                }

                // notification_show
                if (preg_match('#^/notification/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::showAction',));
                }

                // notification_new
                if ($pathinfo === '/notification/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::newAction',  '_route' => 'notification_new',);
                }

                // notification_create
                if ($pathinfo === '/notification/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notification_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::createAction',  '_route' => 'notification_create',);
                }
                not_notification_create:

                // notification_edit
                if (preg_match('#^/notification/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::editAction',));
                }

                // notification_update
                if (preg_match('#^/notification/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_notification_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::updateAction',));
                }
                not_notification_update:

                // notification_delete
                if (preg_match('#^/notification/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_notification_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\NotificationController::deleteAction',));
                }
                not_notification_delete:

            }

        }

        if (0 === strpos($pathinfo, '/maison')) {
            // maison
            if (rtrim($pathinfo, '/') === '/maison') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'maison');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::indexAction',  '_route' => 'maison',);
            }

            // maison_show
            if (preg_match('#^/maison/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maison_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::showAction',));
            }

            // maison_new
            if ($pathinfo === '/maison/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::newAction',  '_route' => 'maison_new',);
            }

            // maison_create
            if ($pathinfo === '/maison/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_maison_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::createAction',  '_route' => 'maison_create',);
            }
            not_maison_create:

            // maison_edit
            if (preg_match('#^/maison/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maison_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::editAction',));
            }

            // maison_update
            if (preg_match('#^/maison/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_maison_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maison_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::updateAction',));
            }
            not_maison_update:

            // maison_delete
            if (preg_match('#^/maison/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_maison_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maison_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\MaisonController::deleteAction',));
            }
            not_maison_delete:

        }

        if (0 === strpos($pathinfo, '/immeuble')) {
            // immeuble
            if (rtrim($pathinfo, '/') === '/immeuble') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'immeuble');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::indexAction',  '_route' => 'immeuble',);
            }

            // immeuble_show
            if (preg_match('#^/immeuble/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'immeuble_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::showAction',));
            }

            // immeuble_new
            if ($pathinfo === '/immeuble/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::newAction',  '_route' => 'immeuble_new',);
            }

            // immeuble_create
            if ($pathinfo === '/immeuble/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_immeuble_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::createAction',  '_route' => 'immeuble_create',);
            }
            not_immeuble_create:

            // immeuble_edit
            if (preg_match('#^/immeuble/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'immeuble_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::editAction',));
            }

            // immeuble_update
            if (preg_match('#^/immeuble/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_immeuble_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'immeuble_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::updateAction',));
            }
            not_immeuble_update:

            // immeuble_delete
            if (preg_match('#^/immeuble/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_immeuble_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'immeuble_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ImmeubleController::deleteAction',));
            }
            not_immeuble_delete:

        }

        if (0 === strpos($pathinfo, '/gallerie')) {
            // gallerie
            if (rtrim($pathinfo, '/') === '/gallerie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gallerie');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::indexAction',  '_route' => 'gallerie',);
            }

            // gallerie_show
            if (preg_match('#^/gallerie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallerie_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::showAction',));
            }

            // gallerie_new
            if ($pathinfo === '/gallerie/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::newAction',  '_route' => 'gallerie_new',);
            }

            // gallerie_create
            if ($pathinfo === '/gallerie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gallerie_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::createAction',  '_route' => 'gallerie_create',);
            }
            not_gallerie_create:

            // gallerie_edit
            if (preg_match('#^/gallerie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallerie_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::editAction',));
            }

            // gallerie_update
            if (preg_match('#^/gallerie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_gallerie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallerie_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::updateAction',));
            }
            not_gallerie_update:

            // gallerie_delete
            if (preg_match('#^/gallerie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_gallerie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallerie_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\GallerieController::deleteAction',));
            }
            not_gallerie_delete:

        }

        if (0 === strpos($pathinfo, '/favoris')) {
            // favoris
            if (rtrim($pathinfo, '/') === '/favoris') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'favoris');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::indexAction',  '_route' => 'favoris',);
            }

            // favoris_show
            if (preg_match('#^/favoris/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::showAction',));
            }

            // favoris_new
            if ($pathinfo === '/favoris/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::newAction',  '_route' => 'favoris_new',);
            }

            // favoris_create
            if ($pathinfo === '/favoris/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_favoris_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::createAction',  '_route' => 'favoris_create',);
            }
            not_favoris_create:

            // favoris_edit
            if (preg_match('#^/favoris/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::editAction',));
            }

            // favoris_update
            if (preg_match('#^/favoris/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_favoris_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::updateAction',));
            }
            not_favoris_update:

            // favoris_delete
            if (preg_match('#^/favoris/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_favoris_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\FavorisController::deleteAction',));
            }
            not_favoris_delete:

        }

        if (0 === strpos($pathinfo, '/demande')) {
            if (0 === strpos($pathinfo, '/demandemaison')) {
                // demandemaison
                if (rtrim($pathinfo, '/') === '/demandemaison') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demandemaison');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::indexAction',  '_route' => 'demandemaison',);
                }

                // demandemaison_show
                if (preg_match('#^/demandemaison/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandemaison_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::showAction',));
                }

                // demandemaison_new
                if ($pathinfo === '/demandemaison/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::newAction',  '_route' => 'demandemaison_new',);
                }

                // demandemaison_create
                if ($pathinfo === '/demandemaison/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_demandemaison_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::createAction',  '_route' => 'demandemaison_create',);
                }
                not_demandemaison_create:

                // demandemaison_edit
                if (preg_match('#^/demandemaison/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandemaison_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::editAction',));
                }

                // demandemaison_update
                if (preg_match('#^/demandemaison/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_demandemaison_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandemaison_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::updateAction',));
                }
                not_demandemaison_update:

                // demandemaison_delete
                if (preg_match('#^/demandemaison/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_demandemaison_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandemaison_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandemaisonController::deleteAction',));
                }
                not_demandemaison_delete:

            }

            if (0 === strpos($pathinfo, '/demandeimmeuble')) {
                // demandeimmeuble
                if (rtrim($pathinfo, '/') === '/demandeimmeuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demandeimmeuble');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::indexAction',  '_route' => 'demandeimmeuble',);
                }

                // demandeimmeuble_show
                if (preg_match('#^/demandeimmeuble/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeimmeuble_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::showAction',));
                }

                // demandeimmeuble_new
                if ($pathinfo === '/demandeimmeuble/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::newAction',  '_route' => 'demandeimmeuble_new',);
                }

                // demandeimmeuble_create
                if ($pathinfo === '/demandeimmeuble/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_demandeimmeuble_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::createAction',  '_route' => 'demandeimmeuble_create',);
                }
                not_demandeimmeuble_create:

                // demandeimmeuble_edit
                if (preg_match('#^/demandeimmeuble/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeimmeuble_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::editAction',));
                }

                // demandeimmeuble_update
                if (preg_match('#^/demandeimmeuble/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_demandeimmeuble_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeimmeuble_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::updateAction',));
                }
                not_demandeimmeuble_update:

                // demandeimmeuble_delete
                if (preg_match('#^/demandeimmeuble/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_demandeimmeuble_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeimmeuble_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeimmeubleController::deleteAction',));
                }
                not_demandeimmeuble_delete:

            }

            if (0 === strpos($pathinfo, '/demandeapartement')) {
                // demandeapartement
                if (rtrim($pathinfo, '/') === '/demandeapartement') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demandeapartement');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::indexAction',  '_route' => 'demandeapartement',);
                }

                // demandeapartement_show
                if (preg_match('#^/demandeapartement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeapartement_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::showAction',));
                }

                // demandeapartement_new
                if ($pathinfo === '/demandeapartement/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::newAction',  '_route' => 'demandeapartement_new',);
                }

                // demandeapartement_create
                if ($pathinfo === '/demandeapartement/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_demandeapartement_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::createAction',  '_route' => 'demandeapartement_create',);
                }
                not_demandeapartement_create:

                // demandeapartement_edit
                if (preg_match('#^/demandeapartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeapartement_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::editAction',));
                }

                // demandeapartement_update
                if (preg_match('#^/demandeapartement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_demandeapartement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeapartement_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::updateAction',));
                }
                not_demandeapartement_update:

                // demandeapartement_delete
                if (preg_match('#^/demandeapartement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_demandeapartement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeapartement_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeapartementController::deleteAction',));
                }
                not_demandeapartement_delete:

            }

            // demande
            if (rtrim($pathinfo, '/') === '/demande') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'demande');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::indexAction',  '_route' => 'demande',);
            }

            // demande_show
            if (preg_match('#^/demande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::showAction',));
            }

            // demande_new
            if ($pathinfo === '/demande/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::newAction',  '_route' => 'demande_new',);
            }

            // demande_create
            if ($pathinfo === '/demande/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_demande_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::createAction',  '_route' => 'demande_create',);
            }
            not_demande_create:

            // demande_edit
            if (preg_match('#^/demande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::editAction',));
            }

            // demande_update
            if (preg_match('#^/demande/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_demande_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::updateAction',));
            }
            not_demande_update:

            // demande_delete
            if (preg_match('#^/demande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_demande_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DemandeController::deleteAction',));
            }
            not_demande_delete:

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact
            if (rtrim($pathinfo, '/') === '/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contact');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

            // contact_show
            if (preg_match('#^/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::showAction',));
            }

            // contact_new
            if ($pathinfo === '/contact/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::newAction',  '_route' => 'contact_new',);
            }

            // contact_create
            if ($pathinfo === '/contact/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::createAction',  '_route' => 'contact_create',);
            }
            not_contact_create:

            // contact_edit
            if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::editAction',));
            }

            // contact_update
            if (preg_match('#^/contact/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_contact_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::updateAction',));
            }
            not_contact_update:

            // contact_delete
            if (preg_match('#^/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_contact_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ContactController::deleteAction',));
            }
            not_contact_delete:

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/appartement')) {
                // appartement
                if (rtrim($pathinfo, '/') === '/appartement') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'appartement');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::indexAction',  '_route' => 'appartement',);
                }

                // appartement_show
                if (preg_match('#^/appartement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::showAction',));
                }

                // appartement_new
                if ($pathinfo === '/appartement/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::newAction',  '_route' => 'appartement_new',);
                }

                // appartement_create
                if ($pathinfo === '/appartement/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_appartement_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::createAction',  '_route' => 'appartement_create',);
                }
                not_appartement_create:

                // appartement_edit
                if (preg_match('#^/appartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::editAction',));
                }

                // appartement_update
                if (preg_match('#^/appartement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_appartement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::updateAction',));
                }
                not_appartement_update:

                // appartement_delete
                if (preg_match('#^/appartement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_appartement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AppartementController::deleteAction',));
                }
                not_appartement_delete:

            }

            if (0 === strpos($pathinfo, '/agence')) {
                // agence
                if (rtrim($pathinfo, '/') === '/agence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'agence');
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::indexAction',  '_route' => 'agence',);
                }

                // agence_show
                if (preg_match('#^/agence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::showAction',));
                }

                // agence_new
                if ($pathinfo === '/agence/new') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::newAction',  '_route' => 'agence_new',);
                }

                // agence_create
                if ($pathinfo === '/agence/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_agence_create;
                    }

                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::createAction',  '_route' => 'agence_create',);
                }
                not_agence_create:

                // agence_edit
                if (preg_match('#^/agence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::editAction',));
                }

                // agence_update
                if (preg_match('#^/agence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_agence_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::updateAction',));
                }
                not_agence_update:

                // agence_delete
                if (preg_match('#^/agence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_agence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\AgenceController::deleteAction',));
                }
                not_agence_delete:

            }

        }

        if (0 === strpos($pathinfo, '/client')) {
            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_create;
                }

                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

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

        // zone
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'zone');
            }

            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::indexAction',  '_route' => 'zone',);
        }

        // zone_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_show')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::showAction',));
        }

        // zone_new
        if ($pathinfo === '/new') {
            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::newAction',  '_route' => 'zone_new',);
        }

        // zone_create
        if ($pathinfo === '/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_zone_create;
            }

            return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::createAction',  '_route' => 'zone_create',);
        }
        not_zone_create:

        // zone_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_edit')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::editAction',));
        }

        // zone_update
        if (preg_match('#^/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_zone_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_update')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::updateAction',));
        }
        not_zone_update:

        // zone_delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_zone_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_delete')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\ZoneController::deleteAction',));
        }
        not_zone_delete:

        // pidev_rea_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_rea_homepage')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/stat')) {
            // agenceZone
            if ($pathinfo === '/stat/agenceZone') {
                return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::agenceZoneAction',  '_route' => 'agenceZone',);
            }

            if (0 === strpos($pathinfo, '/stat/nbr')) {
                // nbrInscritMois
                if ($pathinfo === '/stat/nbrInscritMois') {
                    return array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::nbrInscritMoisAction',  '_route' => 'nbrInscritMois',);
                }

                // nbrOffreClientAgence
                if (0 === strpos($pathinfo, '/stat/nbrOffreClientAgence') && preg_match('#^/stat/nbrOffreClientAgence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nbrOffreClientAgence')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::nbrOffreClientAgenceAction',));
                }

            }

            // nbrOffreAgence
            if (0 === strpos($pathinfo, '/stat/offreAgence') && preg_match('#^/stat/offreAgence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nbrOffreAgence')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::offreAgenceAction',));
            }

            if (0 === strpos($pathinfo, '/stat/nbr')) {
                if (0 === strpos($pathinfo, '/stat/nbrRdv')) {
                    // nbrRdvClientAgence
                    if (0 === strpos($pathinfo, '/stat/nbrRdvClientAgence') && preg_match('#^/stat/nbrRdvClientAgence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nbrRdvClientAgence')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::nbrRdvClientAgenceAction',));
                    }

                    // nbrRdvAgentAgence
                    if (0 === strpos($pathinfo, '/stat/nbrRdvAgentAgence') && preg_match('#^/stat/nbrRdvAgentAgence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nbrRdvAgentAgence')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::nbrRdvAgentAgenceAction',));
                    }

                }

                // nbrOperationClientAgence
                if (0 === strpos($pathinfo, '/stat/nbrOperationClientAgence') && preg_match('#^/stat/nbrOperationClientAgence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nbrOperationClientAgence')), array (  '_controller' => 'Pidev\\ReaBundle\\Controller\\StatController::nbrOperationClientAgenceAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
