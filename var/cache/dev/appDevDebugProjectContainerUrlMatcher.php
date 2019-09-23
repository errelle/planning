<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/domaine')) {
            // domaine_index
            if ('/domaine' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DomaineController::indexAction',  '_route' => 'domaine_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_domaine_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'domaine_index'));
                }

                return $ret;
            }
            not_domaine_index:

            // domaine_new
            if ('/domaine/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DomaineController::newAction',  '_route' => 'domaine_new',);
            }

            // domaine_show
            if (preg_match('#^/domaine/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'domaine_show']), array (  '_controller' => 'AppBundle\\Controller\\DomaineController::showAction',));
            }

            // domaine_edit
            if (preg_match('#^/domaine/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'domaine_edit']), array (  '_controller' => 'AppBundle\\Controller\\DomaineController::editAction',));
            }

            // domaine_delete
            if (preg_match('#^/domaine/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'domaine_delete']), array (  '_controller' => 'AppBundle\\Controller\\DomaineController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/formateur')) {
            // formateur_index
            if ('/formateur' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\FormateurController::indexAction',  '_route' => 'formateur_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_formateur_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'formateur_index'));
                }

                return $ret;
            }
            not_formateur_index:

            // formateur_new
            if ('/formateur/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FormateurController::newAction',  '_route' => 'formateur_new',);
            }

            // formateur_show
            if (preg_match('#^/formateur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'formateur_show']), array (  '_controller' => 'AppBundle\\Controller\\FormateurController::showAction',));
            }

            // formateur_edit
            if (preg_match('#^/formateur/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'formateur_edit']), array (  '_controller' => 'AppBundle\\Controller\\FormateurController::editAction',));
            }

            // formateur_delete
            if (preg_match('#^/formateur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'formateur_delete']), array (  '_controller' => 'AppBundle\\Controller\\FormateurController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/planning')) {
            // planning_index
            if ('/planning' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PlanningController::indexAction',  '_route' => 'planning_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_planning_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'planning_index'));
                }

                return $ret;
            }
            not_planning_index:

            // planning_new
            if ('/planning/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PlanningController::newAction',  '_route' => 'planning_new',);
            }

            // planning_show
            if (preg_match('#^/planning/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'planning_show']), array (  '_controller' => 'AppBundle\\Controller\\PlanningController::showAction',));
            }

            // planning_edit
            if (preg_match('#^/planning/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'planning_edit']), array (  '_controller' => 'AppBundle\\Controller\\PlanningController::editAction',));
            }

            // planning_delete
            if (preg_match('#^/planning/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'planning_delete']), array (  '_controller' => 'AppBundle\\Controller\\PlanningController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/promo')) {
            // promo_index
            if ('/promo' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PromoController::indexAction',  '_route' => 'promo_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_promo_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'promo_index'));
                }

                return $ret;
            }
            not_promo_index:

            // promo_new
            if ('/promo/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PromoController::newAction',  '_route' => 'promo_new',);
            }

            // promo_show
            if (preg_match('#^/promo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'promo_show']), array (  '_controller' => 'AppBundle\\Controller\\PromoController::showAction',));
            }

            // promo_edit
            if (preg_match('#^/promo/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'promo_edit']), array (  '_controller' => 'AppBundle\\Controller\\PromoController::editAction',));
            }

            // promo_delete
            if (preg_match('#^/promo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'promo_delete']), array (  '_controller' => 'AppBundle\\Controller\\PromoController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/resultat')) {
            // resultat_index
            if ('/resultat' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ResultatController::indexAction',  '_route' => 'resultat_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_resultat_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'resultat_index'));
                }

                return $ret;
            }
            not_resultat_index:

            // resultat_new
            if ('/resultat/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ResultatController::newAction',  '_route' => 'resultat_new',);
            }

            // resultat_show
            if (preg_match('#^/resultat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'resultat_show']), array (  '_controller' => 'AppBundle\\Controller\\ResultatController::showAction',));
            }

            // resultat_edit
            if (preg_match('#^/resultat/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'resultat_edit']), array (  '_controller' => 'AppBundle\\Controller\\ResultatController::editAction',));
            }

            // resultat_delete
            if (preg_match('#^/resultat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'resultat_delete']), array (  '_controller' => 'AppBundle\\Controller\\ResultatController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/salle')) {
            // salle_index
            if ('/salle' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_salle_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'salle_index'));
                }

                return $ret;
            }
            not_salle_index:

            // salle_new
            if ('/salle/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
            }

            // salle_show
            if (preg_match('#^/salle/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'salle_show']), array (  '_controller' => 'AppBundle\\Controller\\SalleController::showAction',));
            }

            // salle_edit
            if (preg_match('#^/salle/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'salle_edit']), array (  '_controller' => 'AppBundle\\Controller\\SalleController::editAction',));
            }

            // salle_delete
            if (preg_match('#^/salle/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'salle_delete']), array (  '_controller' => 'AppBundle\\Controller\\SalleController::deleteAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
