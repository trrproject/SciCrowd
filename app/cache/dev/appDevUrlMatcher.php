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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\AuthenticationController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // users_signup
            if ($pathinfo === '/admin/signup') {
                return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::signupAction',  '_route' => 'users_signup',);
            }

            // obs_teste_homepage
            if (rtrim($pathinfo, '/') === '/admin/teste') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'obs_teste_homepage');
                }

                return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\DefaultController::testeAction',  '_route' => 'obs_teste_homepage',);
            }

            // homepage_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homepage_admin');
                }

                return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // users
                if (rtrim($pathinfo, '/') === '/admin/users') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'users');
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::indexAction',  '_route' => 'users',);
                }

                // users_show
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::showAction',));
                }

                // users_new
                if ($pathinfo === '/admin/users/new') {
                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::newAction',  '_route' => 'users_new',);
                }

                // users_signup_create
                if ($pathinfo === '/admin/users/signup/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_signup_create;
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::signupcreateAction',  '_route' => 'users_signup_create',);
                }
                not_users_signup_create:

                // users_create
                if ($pathinfo === '/admin/users/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_users_create;
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::createAction',  '_route' => 'users_create',);
                }
                not_users_create:

                // users_edit
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::editAction',));
                }

                // users_update
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_users_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_update')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::updateAction',));
                }
                not_users_update:

                // users_delete
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_users_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\UsersController::deleteAction',));
                }
                not_users_delete:

            }

            if (0 === strpos($pathinfo, '/admin/groups')) {
                // groups
                if (rtrim($pathinfo, '/') === '/admin/groups') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'groups');
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::indexAction',  '_route' => 'groups',);
                }

                // groups_show
                if (preg_match('#^/admin/groups/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_show')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::showAction',));
                }

                // groups_new
                if ($pathinfo === '/admin/groups/new') {
                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::newAction',  '_route' => 'groups_new',);
                }

                // groups_create
                if ($pathinfo === '/admin/groups/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_groups_create;
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::createAction',  '_route' => 'groups_create',);
                }
                not_groups_create:

                // groups_edit
                if (preg_match('#^/admin/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_edit')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::editAction',));
                }

                // groups_update
                if (preg_match('#^/admin/groups/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_groups_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_update')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::updateAction',));
                }
                not_groups_update:

                // groups_delete
                if (preg_match('#^/admin/groups/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_groups_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_delete')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\GroupsController::deleteAction',));
                }
                not_groups_delete:

            }

            if (0 === strpos($pathinfo, '/admin/roles')) {
                // roles
                if (rtrim($pathinfo, '/') === '/admin/roles') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'roles');
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::indexAction',  '_route' => 'roles',);
                }

                // roles_show
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_show')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::showAction',));
                }

                // roles_new
                if ($pathinfo === '/admin/roles/new') {
                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::newAction',  '_route' => 'roles_new',);
                }

                // roles_create
                if ($pathinfo === '/admin/roles/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_roles_create;
                    }

                    return array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::createAction',  '_route' => 'roles_create',);
                }
                not_roles_create:

                // roles_edit
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_edit')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::editAction',));
                }

                // roles_update
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_roles_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_update')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::updateAction',));
                }
                not_roles_update:

                // roles_delete
                if (preg_match('#^/admin/roles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_roles_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'roles_delete')), array (  '_controller' => 'Obs\\SecurityBundle\\Controller\\RolesController::deleteAction',));
                }
                not_roles_delete:

            }

            if (0 === strpos($pathinfo, '/admin/author')) {
                // author
                if (rtrim($pathinfo, '/') === '/admin/author') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'author');
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::indexAction',  '_route' => 'author',);
                }

                // author_show
                if (preg_match('#^/admin/author/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::showAction',));
                }

                // author_new
                if ($pathinfo === '/admin/author/new') {
                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::newAction',  '_route' => 'author_new',);
                }

                // author_create
                if ($pathinfo === '/admin/author/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_author_create;
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::createAction',  '_route' => 'author_create',);
                }
                not_author_create:

                // author_edit
                if (preg_match('#^/admin/author/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::editAction',));
                }

                // author_update
                if (preg_match('#^/admin/author/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_author_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::updateAction',));
                }
                not_author_update:

                // author_delete
                if (preg_match('#^/admin/author/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_author_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'author_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\AuthorController::deleteAction',));
                }
                not_author_delete:

            }

            if (0 === strpos($pathinfo, '/admin/country')) {
                // country
                if (rtrim($pathinfo, '/') === '/admin/country') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'country');
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::indexAction',  '_route' => 'country',);
                }

                // country_show
                if (preg_match('#^/admin/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::showAction',));
                }

                // country_new
                if ($pathinfo === '/admin/country/new') {
                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::newAction',  '_route' => 'country_new',);
                }

                // country_create
                if ($pathinfo === '/admin/country/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_country_create;
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::createAction',  '_route' => 'country_create',);
                }
                not_country_create:

                // country_edit
                if (preg_match('#^/admin/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::editAction',));
                }

                // country_update
                if (preg_match('#^/admin/country/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_country_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::updateAction',));
                }
                not_country_update:

                // country_delete
                if (preg_match('#^/admin/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_country_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\CountryController::deleteAction',));
                }
                not_country_delete:

            }

            if (0 === strpos($pathinfo, '/admin/editor')) {
                // editor
                if (rtrim($pathinfo, '/') === '/admin/editor') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'editor');
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::indexAction',  '_route' => 'editor',);
                }

                // editor_show
                if (preg_match('#^/admin/editor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editor_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::showAction',));
                }

                // editor_new
                if ($pathinfo === '/admin/editor/new') {
                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::newAction',  '_route' => 'editor_new',);
                }

                // editor_create
                if ($pathinfo === '/admin/editor/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_editor_create;
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::createAction',  '_route' => 'editor_create',);
                }
                not_editor_create:

                // editor_edit
                if (preg_match('#^/admin/editor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editor_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::editAction',));
                }

                // editor_update
                if (preg_match('#^/admin/editor/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_editor_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editor_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::updateAction',));
                }
                not_editor_update:

                // editor_delete
                if (preg_match('#^/admin/editor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_editor_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editor_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\EditorController::deleteAction',));
                }
                not_editor_delete:

            }

            if (0 === strpos($pathinfo, '/admin/i')) {
                if (0 === strpos($pathinfo, '/admin/institution')) {
                    // institution
                    if (rtrim($pathinfo, '/') === '/admin/institution') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'institution');
                        }

                        return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::indexAction',  '_route' => 'institution',);
                    }

                    // institution_show
                    if (preg_match('#^/admin/institution/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'institution_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::showAction',));
                    }

                    // institution_new
                    if ($pathinfo === '/admin/institution/new') {
                        return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::newAction',  '_route' => 'institution_new',);
                    }

                    // institution_create
                    if ($pathinfo === '/admin/institution/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_institution_create;
                        }

                        return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::createAction',  '_route' => 'institution_create',);
                    }
                    not_institution_create:

                    // institution_edit
                    if (preg_match('#^/admin/institution/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'institution_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::editAction',));
                    }

                    // institution_update
                    if (preg_match('#^/admin/institution/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_institution_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'institution_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::updateAction',));
                    }
                    not_institution_update:

                    // institution_delete
                    if (preg_match('#^/admin/institution/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_institution_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'institution_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\InstitutionController::deleteAction',));
                    }
                    not_institution_delete:

                }

                if (0 === strpos($pathinfo, '/admin/isntype')) {
                    // isntype
                    if (rtrim($pathinfo, '/') === '/admin/isntype') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'isntype');
                        }

                        return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::indexAction',  '_route' => 'isntype',);
                    }

                    // isntype_show
                    if (preg_match('#^/admin/isntype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'isntype_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::showAction',));
                    }

                    // isntype_new
                    if ($pathinfo === '/admin/isntype/new') {
                        return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::newAction',  '_route' => 'isntype_new',);
                    }

                    // isntype_create
                    if ($pathinfo === '/admin/isntype/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_isntype_create;
                        }

                        return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::createAction',  '_route' => 'isntype_create',);
                    }
                    not_isntype_create:

                    // isntype_edit
                    if (preg_match('#^/admin/isntype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'isntype_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::editAction',));
                    }

                    // isntype_update
                    if (preg_match('#^/admin/isntype/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_isntype_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'isntype_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::updateAction',));
                    }
                    not_isntype_update:

                    // isntype_delete
                    if (preg_match('#^/admin/isntype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_isntype_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'isntype_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\IsnTypeController::deleteAction',));
                    }
                    not_isntype_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/publisher')) {
                // publisher
                if (rtrim($pathinfo, '/') === '/admin/publisher') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publisher');
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::indexAction',  '_route' => 'publisher',);
                }

                // publisher_show
                if (preg_match('#^/admin/publisher/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publisher_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::showAction',));
                }

                // publisher_new
                if ($pathinfo === '/admin/publisher/new') {
                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::newAction',  '_route' => 'publisher_new',);
                }

                // publisher_create
                if ($pathinfo === '/admin/publisher/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publisher_create;
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::createAction',  '_route' => 'publisher_create',);
                }
                not_publisher_create:

                // publisher_edit
                if (preg_match('#^/admin/publisher/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publisher_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::editAction',));
                }

                // publisher_update
                if (preg_match('#^/admin/publisher/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_publisher_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publisher_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::updateAction',));
                }
                not_publisher_update:

                // publisher_delete
                if (preg_match('#^/admin/publisher/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_publisher_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publisher_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublisherController::deleteAction',));
                }
                not_publisher_delete:

            }

            if (0 === strpos($pathinfo, '/admin/typepub')) {
                // typepub
                if (rtrim($pathinfo, '/') === '/admin/typepub') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typepub');
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::indexAction',  '_route' => 'typepub',);
                }

                // typepub_show
                if (preg_match('#^/admin/typepub/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepub_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::showAction',));
                }

                // typepub_new
                if ($pathinfo === '/admin/typepub/new') {
                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::newAction',  '_route' => 'typepub_new',);
                }

                // typepub_create
                if ($pathinfo === '/admin/typepub/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_typepub_create;
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::createAction',  '_route' => 'typepub_create',);
                }
                not_typepub_create:

                // typepub_edit
                if (preg_match('#^/admin/typepub/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepub_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::editAction',));
                }

                // typepub_update
                if (preg_match('#^/admin/typepub/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_typepub_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepub_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::updateAction',));
                }
                not_typepub_update:

                // typepub_delete
                if (preg_match('#^/admin/typepub/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_typepub_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typepub_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\TypePubController::deleteAction',));
                }
                not_typepub_delete:

            }

            if (0 === strpos($pathinfo, '/admin/notes')) {
                // notes
                if (rtrim($pathinfo, '/') === '/admin/notes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'notes');
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::indexAction',  '_route' => 'notes',);
                }

                // notes_show
                if (preg_match('#^/admin/notes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::showAction',));
                }

                // notes_new
                if ($pathinfo === '/admin/notes/new') {
                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::newAction',  '_route' => 'notes_new',);
                }

                // notes_create
                if ($pathinfo === '/admin/notes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notes_create;
                    }

                    return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::createAction',  '_route' => 'notes_create',);
                }
                not_notes_create:

                // notes_edit
                if (preg_match('#^/admin/notes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::editAction',));
                }

                // notes_update
                if (preg_match('#^/admin/notes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_notes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::updateAction',));
                }
                not_notes_update:

                // notes_delete
                if (preg_match('#^/admin/notes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_notes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notes_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\NotesController::deleteAction',));
                }
                not_notes_delete:

            }

        }

        if (0 === strpos($pathinfo, '/publication')) {
            // publication
            if (rtrim($pathinfo, '/') === '/publication') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'publication');
                }

                return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::indexAction',  '_route' => 'publication',);
            }

            // publication_show
            if (preg_match('#^/publication/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_show')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::showAction',));
            }

            // publication_new
            if ($pathinfo === '/publication/new') {
                return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::newAction',  '_route' => 'publication_new',);
            }

            // publication_create
            if ($pathinfo === '/publication/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_publication_create;
                }

                return array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::createAction',  '_route' => 'publication_create',);
            }
            not_publication_create:

            // publication_edit
            if (preg_match('#^/publication/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_edit')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::editAction',));
            }

            // publication_update
            if (preg_match('#^/publication/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_publication_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_update')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::updateAction',));
            }
            not_publication_update:

            // publication_delete
            if (preg_match('#^/publication/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_publication_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_delete')), array (  '_controller' => 'Obs\\CoreBundle\\Controller\\PublicationController::deleteAction',));
            }
            not_publication_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
