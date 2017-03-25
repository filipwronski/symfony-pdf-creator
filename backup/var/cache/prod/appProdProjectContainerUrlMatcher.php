<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // business
        if ($pathinfo === '/business') {
            return array (  '_controller' => 'AppBundle\\Controller\\ClientController::businessAction',  '_route' => 'business',);
        }

        // individual
        if ($pathinfo === '/individual') {
            return array (  '_controller' => 'AppBundle\\Controller\\ClientController::individualAction',  '_route' => 'individual',);
        }

        // business-terms
        if ($pathinfo === '/business-terms') {
            return array (  '_controller' => 'AppBundle\\Controller\\ClientController::businessTermsAction',  '_route' => 'business-terms',);
        }

        // individual-terms
        if ($pathinfo === '/individual-terms') {
            return array (  '_controller' => 'AppBundle\\Controller\\ClientController::individualTermsAction',  '_route' => 'individual-terms',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
