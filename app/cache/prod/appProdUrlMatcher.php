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

        // aplicacion_emisiones_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'aplicacion_emisiones_default_index')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/agencia')) {
                // agencia
                if (rtrim($pathinfo, '/') === '/agencia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'agencia');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::indexAction',  '_route' => 'agencia',);
                }

                // agencia_show
                if (preg_match('#^/agencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::showAction',));
                }

                // agencia_new
                if ($pathinfo === '/agencia/new') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::newAction',  '_route' => 'agencia_new',);
                }

                // agencia_create
                if ($pathinfo === '/agencia/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_agencia_create;
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::createAction',  '_route' => 'agencia_create',);
                }
                not_agencia_create:

                // agencia_edit
                if (preg_match('#^/agencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::editAction',));
                }

                // agencia_update
                if (preg_match('#^/agencia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_agencia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::updateAction',));
                }
                not_agencia_update:

                // agencia_delete
                if (preg_match('#^/agencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_agencia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenciaController::deleteAction',));
                }
                not_agencia_delete:

            }

            if (0 === strpos($pathinfo, '/aerolinea')) {
                // aerolinea
                if (rtrim($pathinfo, '/') === '/aerolinea') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aerolinea');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::indexAction',  '_route' => 'aerolinea',);
                }

                // aerolinea_show
                if (preg_match('#^/aerolinea/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aerolinea_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::showAction',));
                }

                // aerolinea_new
                if ($pathinfo === '/aerolinea/new') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::newAction',  '_route' => 'aerolinea_new',);
                }

                // aerolinea_create
                if ($pathinfo === '/aerolinea/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_aerolinea_create;
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::createAction',  '_route' => 'aerolinea_create',);
                }
                not_aerolinea_create:

                // aerolinea_edit
                if (preg_match('#^/aerolinea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aerolinea_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::editAction',));
                }

                // aerolinea_update
                if (preg_match('#^/aerolinea/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_aerolinea_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aerolinea_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::updateAction',));
                }
                not_aerolinea_update:

                // aerolinea_delete
                if (preg_match('#^/aerolinea/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_aerolinea_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aerolinea_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AerolineaController::deleteAction',));
                }
                not_aerolinea_delete:

            }

        }

        if (0 === strpos($pathinfo, '/register/agente')) {
            // agente
            if (rtrim($pathinfo, '/') === '/register/agente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agente');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::indexAction',  '_route' => 'agente',);
            }

            // agente_show
            if (preg_match('#^/register/agente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agente_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::showAction',));
            }

            // agente_new
            if ($pathinfo === '/register/agente/new/agente/agencia/68as6da4s6d4AjhjC45687f55gb2f1g8sd78sdf') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::newAction',  '_route' => 'agente_new',);
            }

            // agente_create
            if ($pathinfo === '/register/agente/create') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::registerAction',  '_route' => 'agente_create',);
            }

            // agente_edit
            if (preg_match('#^/register/agente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agente_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::editAction',));
            }

            // agente_update
            if (preg_match('#^/register/agente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_agente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agente_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::updateAction',));
            }
            not_agente_update:

            // agente_delete
            if (preg_match('#^/register/agente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_agente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agente_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::deleteAction',));
            }
            not_agente_delete:

            // agente_vista_agente
            if (rtrim($pathinfo, '/') === '/register/agente/pantalla/agente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agente_vista_agente');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AgenteController::vistaAgenteAction',  '_route' => 'agente_vista_agente',);
            }

        }

        if (0 === strpos($pathinfo, '/supervisor')) {
            // EmisionesBundle_supervisor_dashboard
            if (rtrim($pathinfo, '/') === '/supervisor/supervisor/dashboard') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'EmisionesBundle_supervisor_dashboard');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexSupervisorAction',  '_route' => 'EmisionesBundle_supervisor_dashboard',);
            }

            // supervisor_all_orders
            if (rtrim($pathinfo, '/') === '/supervisor/all/orders') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_all_orders');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::allOrdersAction',  '_route' => 'supervisor_all_orders',);
            }

            // supervisor_load_ordenes
            if (rtrim($pathinfo, '/') === '/supervisor/load/ordenes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_load_ordenes');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadOrdenesAction',  '_route' => 'supervisor_load_ordenes',);
            }

            if (0 === strpos($pathinfo, '/supervisor/reporte')) {
                // supervisor_report_pie_window
                if ($pathinfo === '/supervisor/reporte/ventana/pie') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::report_pie_windowAction',  '_route' => 'supervisor_report_pie_window',);
                }

                if (0 === strpos($pathinfo, '/supervisor/reportes')) {
                    // supervisor_report_porcentaje_vs_estados
                    if ($pathinfo === '/supervisor/reportes/porcentaje/estados') {
                        return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::maximizarPorcentajeVsEstadosAction',  '_route' => 'supervisor_report_porcentaje_vs_estados',);
                    }

                    // supervisor_report_estados_vs_counters
                    if ($pathinfo === '/supervisor/reportes/estados/counters') {
                        return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::maximizarEstadosVsCountersAction',  '_route' => 'supervisor_report_estados_vs_counters',);
                    }

                    // supervisor_report_tipos_vs_counters
                    if ($pathinfo === '/supervisor/reportes/tipos/counters') {
                        return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::maximizarTiposVsCountersAction',  '_route' => 'supervisor_report_tipos_vs_counters',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/supervisor/load')) {
                // supervisor_load_pie
                if (rtrim($pathinfo, '/') === '/supervisor/load/pie') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_pie');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadPieAction',  '_route' => 'supervisor_load_pie',);
                }

                // supervisor_load_bar
                if (rtrim($pathinfo, '/') === '/supervisor/load/bar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_bar');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadBarAction',  '_route' => 'supervisor_load_bar',);
                }

                // supervisor_load_line
                if (rtrim($pathinfo, '/') === '/supervisor/load/line') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_line');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadLineAction',  '_route' => 'supervisor_load_line',);
                }

                // supervisor_load_incumplimientoSla
                if (rtrim($pathinfo, '/') === '/supervisor/load/incumplimientossla') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_incumplimientoSla');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::ReporteIncumplimientoSlaAction',  '_route' => 'supervisor_load_incumplimientoSla',);
                }

            }

            // supervisor_index_agentes
            if (rtrim($pathinfo, '/') === '/supervisor/agentes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_index_agentes');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexAction',  '_route' => 'supervisor_index_agentes',);
            }

            // supervisor_index_daemons
            if (rtrim($pathinfo, '/') === '/supervisor/daemons') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_index_daemons');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexDaemonsAction',  '_route' => 'supervisor_index_daemons',);
            }

            // supervisor_index_counters
            if (rtrim($pathinfo, '/') === '/supervisor/counters') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_index_counters');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexCountersAction',  '_route' => 'supervisor_index_counters',);
            }

            // supervisor_index_agencias
            if (rtrim($pathinfo, '/') === '/supervisor/agencias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_index_agencias');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexAgenciasAction',  '_route' => 'supervisor_index_agencias',);
            }

            // supervisor_index_cola
            if (rtrim($pathinfo, '/') === '/supervisor/cola') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_index_cola');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexColaAction',  '_route' => 'supervisor_index_cola',);
            }

            // supervisor_index_configuraciones
            if (rtrim($pathinfo, '/') === '/supervisor/all/configuraciones') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_index_configuraciones');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexConfiguracionesAction',  '_route' => 'supervisor_index_configuraciones',);
            }

            if (0 === strpos($pathinfo, '/supervisor/load')) {
                // supervisor_load_cola
                if (rtrim($pathinfo, '/') === '/supervisor/load/cola') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_cola');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadColaAction',  '_route' => 'supervisor_load_cola',);
                }

                // supervisor_load_daemons
                if (rtrim($pathinfo, '/') === '/supervisor/load/daemons') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_daemons');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadDaemonsAction',  '_route' => 'supervisor_load_daemons',);
                }

                // supervisor_load_configuraciones
                if (rtrim($pathinfo, '/') === '/supervisor/load/configuraciones') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_load_configuraciones');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::loadConfiguracionesAction',  '_route' => 'supervisor_load_configuraciones',);
                }

            }

            // supervisor_reasignar_orden
            if ($pathinfo === '/supervisor/reasignar/orden') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::reasignarOrdenAction',  '_route' => 'supervisor_reasignar_orden',);
            }

            // supervisor_asignar_orden_manual
            if (rtrim($pathinfo, '/') === '/supervisor/asignar/orden/manual') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_asignar_orden_manual');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::asignarOrdenManualAction',  '_route' => 'supervisor_asignar_orden_manual',);
            }

            if (0 === strpos($pathinfo, '/supervisor/load')) {
                // load_agentes_ajax
                if ($pathinfo === '/supervisor/load/agentes/ajax') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::load_ajax_agentesAction',  '_route' => 'load_agentes_ajax',);
                }

                // load_counters_ajax
                if ($pathinfo === '/supervisor/load/counters/ajax') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::load_ajax_countersAction',  '_route' => 'load_counters_ajax',);
                }

                // supervisor_load_agencias_ajax
                if ($pathinfo === '/supervisor/load/agencias/ajax') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::load_ajax_agenciasAction',  '_route' => 'supervisor_load_agencias_ajax',);
                }

            }

            // supervisor_agente_edit
            if (0 === strpos($pathinfo, '/supervisor/agente') && preg_match('#^/supervisor/agente/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_agente_edit');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_agente_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editAction',));
            }

            // supervisor_counter_edit
            if (0 === strpos($pathinfo, '/supervisor/counter') && preg_match('#^/supervisor/counter/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_counter_edit');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_counter_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editCounterAction',));
            }

            // supervisor_agencia_edit
            if (0 === strpos($pathinfo, '/supervisor/agencia') && preg_match('#^/supervisor/agencia/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_agencia_edit');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_agencia_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editAgenciaAction',));
            }

            // supervisor_empresa_edit
            if (0 === strpos($pathinfo, '/supervisor/empresa') && preg_match('#^/supervisor/empresa/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_empresa_edit');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_empresa_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editEmpresaAction',));
            }

            if (0 === strpos($pathinfo, '/supervisor/configuracion')) {
                // supervisor_configuracion_edit
                if (preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/edit/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_configuracion_edit');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_configuracion_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editConfiguracionAction',));
                }

                // supervisor_configuracion_remove
                if (preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/remove/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_configuracion_remove');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_configuracion_remove')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::removeConfiguracionAction',));
                }

            }

            // supervisor_agente_edit_clave
            if (0 === strpos($pathinfo, '/supervisor/agente') && preg_match('#^/supervisor/agente/(?P<id>[^/]++)/render/agente/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_agente_edit_clave');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_agente_edit_clave')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editClaveAction',));
            }

            // supervisor_counter_edit_clave
            if (0 === strpos($pathinfo, '/supervisor/counter') && preg_match('#^/supervisor/counter/(?P<id>[^/]++)/render/counter/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_counter_edit_clave');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_counter_edit_clave')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::editClaveCounterAction',));
            }

            if (0 === strpos($pathinfo, '/supervisor/lock_unlock')) {
                // supervisor_lock_unlock_agente
                if (0 === strpos($pathinfo, '/supervisor/lock_unlock/agente') && preg_match('#^/supervisor/lock_unlock/agente/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_lock_unlock_agente');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_lock_unlock_agente')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::lock_unlockAction',));
                }

                // supervisor_lock_unlock_counter
                if (0 === strpos($pathinfo, '/supervisor/lock_unlock/counter') && preg_match('#^/supervisor/lock_unlock/counter/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_lock_unlock_counter');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_lock_unlock_counter')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::lock_unlockCounterAction',));
                }

            }

            // supervisor_member_unmember_agencia
            if (0 === strpos($pathinfo, '/supervisor/member_unmember') && preg_match('#^/supervisor/member_unmember/(?P<id>[^/]++)/(?P<id_empresa>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_member_unmember_agencia');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_member_unmember_agencia')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::member_unmemberAction',));
            }

            if (0 === strpos($pathinfo, '/supervisor/unable_enable')) {
                // supervisor_unable_enable_agente
                if (0 === strpos($pathinfo, '/supervisor/unable_enable/agente') && preg_match('#^/supervisor/unable_enable/agente/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_unable_enable_agente');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_unable_enable_agente')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::unable_enableAction',));
                }

                // supervisor_unable_enable_counter
                if (0 === strpos($pathinfo, '/supervisor/unable_enable/counter') && preg_match('#^/supervisor/unable_enable/counter/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_unable_enable_counter');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_unable_enable_counter')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::unable_enableCounterAction',));
                }

            }

            if (0 === strpos($pathinfo, '/supervisor/activar/desactivar')) {
                // supervisor_activar_desactivar_configuracion
                if (0 === strpos($pathinfo, '/supervisor/activar/desactivar/configuracion') && preg_match('#^/supervisor/activar/desactivar/configuracion/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_activar_desactivar_configuracion');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_activar_desactivar_configuracion')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::activar_desactivarConfiguracionAction',));
                }

                // supervisor_activar_desactivar_daemon
                if (0 === strpos($pathinfo, '/supervisor/activar/desactivar/daemon') && preg_match('#^/supervisor/activar/desactivar/daemon/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_activar_desactivar_daemon');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_activar_desactivar_daemon')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::activar_desactivarDaemonAction',));
                }

            }

            // supervisor_copiar_configuracion
            if (0 === strpos($pathinfo, '/supervisor/copiar') && preg_match('#^/supervisor/copiar/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_copiar_configuracion');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_copiar_configuracion')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::copiarConfiguracionAction',));
            }

            // supervisor_agente_update
            if (0 === strpos($pathinfo, '/supervisor/agente') && preg_match('#^/supervisor/agente/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_agente_update');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_agente_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateAction',));
            }

            // supervisor_activar_desactivar_plan_piloto
            if (0 === strpos($pathinfo, '/supervisor/plan/plapiloto') && preg_match('#^/supervisor/plan/plapiloto/(?P<agencia>[^/]++)/(?P<aerolinea>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_activar_desactivar_plan_piloto');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_activar_desactivar_plan_piloto')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::activar_desactivarPlanPilotoAction',));
            }

            if (0 === strpos($pathinfo, '/supervisor/co')) {
                // supervisor_index_plan_piloto
                if (rtrim($pathinfo, '/') === '/supervisor/conf/planpiloto') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_index_plan_piloto');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::indexPlanPilotoAction',  '_route' => 'supervisor_index_plan_piloto',);
                }

                // supervisor_counter_update
                if (0 === strpos($pathinfo, '/supervisor/counter') && preg_match('#^/supervisor/counter/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_counter_update');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_counter_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateCounterAction',));
                }

                // supervisor_configuracion_update
                if (0 === strpos($pathinfo, '/supervisor/configuracion') && preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_configuracion_update');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_configuracion_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateConfiguracionAction',));
                }

            }

            // supervisor_empresa_update
            if (0 === strpos($pathinfo, '/supervisor/empresa') && preg_match('#^/supervisor/empresa/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_empresa_update');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_empresa_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateEmpresaAction',));
            }

            if (0 === strpos($pathinfo, '/supervisor/agen')) {
                // supervisor_agencia_update
                if (0 === strpos($pathinfo, '/supervisor/agencia') && preg_match('#^/supervisor/agencia/(?P<id>[^/]++)/update/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_agencia_update');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_agencia_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateAgenciaAction',));
                }

                // supervisor_agente_update_clave
                if (0 === strpos($pathinfo, '/supervisor/agente') && preg_match('#^/supervisor/agente/(?P<id>[^/]++)/update/clave/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'supervisor_agente_update_clave');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_agente_update_clave')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateClaveAction',));
                }

            }

            // supervisor_counter_update_clave
            if (0 === strpos($pathinfo, '/supervisor/counter') && preg_match('#^/supervisor/counter/(?P<id>[^/]++)/update/clave/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_counter_update_clave');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_counter_update_clave')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::updateClaveCounterAction',));
            }

            // supervisor_new_agente
            if (rtrim($pathinfo, '/') === '/supervisor/agente/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_new_agente');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::newAction',  '_route' => 'supervisor_new_agente',);
            }

            // supervisor_new_counter
            if (rtrim($pathinfo, '/') === '/supervisor/counter/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_new_counter');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::newCounterAction',  '_route' => 'supervisor_new_counter',);
            }

            // supervisor_new_agencia
            if (rtrim($pathinfo, '/') === '/supervisor/agencia/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_new_agencia');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::newAgenciaAction',  '_route' => 'supervisor_new_agencia',);
            }

            // supervisor_new_configuracion
            if (rtrim($pathinfo, '/') === '/supervisor/configuracion/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_new_configuracion');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::newConfiguracionAction',  '_route' => 'supervisor_new_configuracion',);
            }

            // supervisor_register_agente
            if (rtrim($pathinfo, '/') === '/supervisor/agente/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_register_agente');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::registerAction',  '_route' => 'supervisor_register_agente',);
            }

            // supervisor_register_counter
            if (rtrim($pathinfo, '/') === '/supervisor/counter/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_register_counter');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::registerCounterAction',  '_route' => 'supervisor_register_counter',);
            }

            // supervisor_register_agencia
            if (rtrim($pathinfo, '/') === '/supervisor/agencia/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_register_agencia');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::registerAgenciaAction',  '_route' => 'supervisor_register_agencia',);
            }

            // supervisor_register_configuracion
            if (rtrim($pathinfo, '/') === '/supervisor/configuracion/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_register_configuracion');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::registerConfiguracionAction',  '_route' => 'supervisor_register_configuracion',);
            }

            // supervisor_asignar_manual
            if (0 === strpos($pathinfo, '/supervisor/asignar/manual') && preg_match('#^/supervisor/asignar/manual/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_asignar_manual');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_asignar_manual')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\SupervisorController::asignarManualAction',));
            }

        }

        if (0 === strpos($pathinfo, '/counter')) {
            if (0 === strpos($pathinfo, '/counter/counter')) {
                // EmisionesBundle_counter_dashboard
                if (rtrim($pathinfo, '/') === '/counter/counter/dashboard') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'EmisionesBundle_counter_dashboard');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::indexCounterDashboardAction',  '_route' => 'EmisionesBundle_counter_dashboard',);
                }

                // counter_load_cola
                if (rtrim($pathinfo, '/') === '/counter/counter/cola') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_load_cola');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::loadColaCounterAction',  '_route' => 'counter_load_cola',);
                }

                // counter_exportar_pdf
                if (rtrim($pathinfo, '/') === '/counter/counter/exportar/pdf') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_exportar_pdf');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::makePdfAction',  '_route' => 'counter_exportar_pdf',);
                }

                // counter_new_exportar_pdf
                if (preg_match('#^/counter/counter/(?P<orden>[^/]++)/exportar_nonsave/pdf/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_new_exportar_pdf');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_new_exportar_pdf')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::makePdfAction',));
                }

                // counter_render_email
                if (0 === strpos($pathinfo, '/counter/counter/render/email') && preg_match('#^/counter/counter/render/email/(?P<entity>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_render_email');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_render_email')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::renderMailAction',));
                }

                // counter_enviar_email
                if ($pathinfo === '/counter/counter/enviar/email') {
                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::sendMailAction',  '_route' => 'counter_enviar_email',);
                }

            }

            // counter_render_reporte
            if (rtrim($pathinfo, '/') === '/counter/render/reporte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'counter_render_reporte');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::renderReporteAction',  '_route' => 'counter_render_reporte',);
            }

            // counter_make_reporte
            if (rtrim($pathinfo, '/') === '/counter/make/reporte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'counter_make_reporte');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::makeReporteAction',  '_route' => 'counter_make_reporte',);
            }

            if (0 === strpos($pathinfo, '/counter/counter')) {
                if (0 === strpos($pathinfo, '/counter/counter/emision')) {
                    // counter_emision_edit
                    if (0 === strpos($pathinfo, '/counter/counter/emision/procesar') && preg_match('#^/counter/counter/emision/procesar/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'counter_emision_edit');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_emision_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::editEmisionAction',));
                    }

                    // counter_emision_update
                    if (0 === strpos($pathinfo, '/counter/counter/emision/update') && preg_match('#^/counter/counter/emision/update/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_emision_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::updateEmisionAction',));
                    }

                    // counter_emision_show
                    if (preg_match('#^/counter/counter/emision/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_emision_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::showEmisionAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/counter/counter/anulacion')) {
                    // counter_anulacion_edit
                    if (0 === strpos($pathinfo, '/counter/counter/anulacion/procesar') && preg_match('#^/counter/counter/anulacion/procesar/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'counter_anulacion_edit');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_anulacion_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::editAnulacionAction',));
                    }

                    // counter_anulacion_update
                    if (0 === strpos($pathinfo, '/counter/counter/anulacion/update') && preg_match('#^/counter/counter/anulacion/update/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_anulacion_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::updateAnulacionAction',));
                    }

                    // counter_anulacion_show
                    if (preg_match('#^/counter/counter/anulacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_anulacion_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::showAnulacionAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/counter/counter/revision')) {
                    // counter_revision_edit
                    if (0 === strpos($pathinfo, '/counter/counter/revision/procesar') && preg_match('#^/counter/counter/revision/procesar/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'counter_revision_edit');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_revision_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::editRevisionAction',));
                    }

                    // counter_revision_update
                    if (0 === strpos($pathinfo, '/counter/counter/revision/update') && preg_match('#^/counter/counter/revision/update/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_revision_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::updateRevisionAction',));
                    }

                    // counter_revision_show
                    if (preg_match('#^/counter/counter/revision/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_revision_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::showRevisionAction',));
                    }

                }

            }

            // counter_formas_pago
            if (preg_match('#^/counter/(?P<orden>[^/]++)/formas/pago$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_formas_pago')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::indexFormasPagoAction',));
            }

            if (0 === strpos($pathinfo, '/counter/counter')) {
                // counter_tarjetacredito_show
                if (0 === strpos($pathinfo, '/counter/counter/tarjetacredito') && preg_match('#^/counter/counter/tarjetacredito/(?P<id>[^/]++)/show/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_tarjetacredito_show');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_tarjetacredito_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::showTarjetaCreditoAction',));
                }

                // counter_pagodirecto_show
                if (0 === strpos($pathinfo, '/counter/counter/pagodirecto') && preg_match('#^/counter/counter/pagodirecto/(?P<id>[^/]++)/show/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_pagodirecto_show');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_pagodirecto_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::showPagoDirectoAction',));
                }

                // counter_depefectivotransferenciabancaria_show
                if (0 === strpos($pathinfo, '/counter/counter/depefectivotransferenciabancaria') && preg_match('#^/counter/counter/depefectivotransferenciabancaria/(?P<id>[^/]++)/show/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'counter_depefectivotransferenciabancaria_show');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'counter_depefectivotransferenciabancaria_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CounterController::showDETBAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/register/usuariointerno')) {
            // usuariointerno
            if (rtrim($pathinfo, '/') === '/register/usuariointerno') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuariointerno');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::indexAction',  '_route' => 'usuariointerno',);
            }

            // usuariointerno_show
            if (preg_match('#^/register/usuariointerno/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariointerno_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::showAction',));
            }

            // usuariointerno_new
            if ($pathinfo === '/register/usuariointerno/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::newAction',  '_route' => 'usuariointerno_new',);
            }

            // usuariointerno_create
            if ($pathinfo === '/register/usuariointerno/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuariointerno_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::registerAction',  '_route' => 'usuariointerno_create',);
            }
            not_usuariointerno_create:

            // usuariointerno_edit
            if (preg_match('#^/register/usuariointerno/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariointerno_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::editAction',));
            }

            // usuariointerno_update
            if (preg_match('#^/register/usuariointerno/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariointerno_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::updateAction',));
            }

            // usuariointerno_delete
            if (preg_match('#^/register/usuariointerno/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuariointerno_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuariointerno_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\UsuariointernoController::deleteAction',));
            }
            not_usuariointerno_delete:

        }

        if (0 === strpos($pathinfo, '/orden')) {
            // orden
            if (rtrim($pathinfo, '/') === '/orden') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orden');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::indexAction',  '_route' => 'orden',);
            }

            // orden_show
            if (preg_match('#^/orden/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orden_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::showAction',));
            }

            // orden_new
            if ($pathinfo === '/orden/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::newAction',  '_route' => 'orden_new',);
            }

            // orden_create
            if ($pathinfo === '/orden/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orden_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::createAction',  '_route' => 'orden_create',);
            }
            not_orden_create:

            // orden_edit
            if (preg_match('#^/orden/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orden_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::editAction',));
            }

            // orden_update
            if (preg_match('#^/orden/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orden_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::updateAction',));
            }

            // orden_delete
            if (preg_match('#^/orden/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_orden_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orden_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\OrdenController::deleteAction',));
            }
            not_orden_delete:

        }

        if (0 === strpos($pathinfo, '/continente')) {
            // continente
            if (rtrim($pathinfo, '/') === '/continente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'continente');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::indexAction',  '_route' => 'continente',);
            }

            // continente_show
            if (preg_match('#^/continente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'continente_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::showAction',));
            }

            // continente_new
            if ($pathinfo === '/continente/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::newAction',  '_route' => 'continente_new',);
            }

            // continente_create
            if ($pathinfo === '/continente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_continente_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::createAction',  '_route' => 'continente_create',);
            }
            not_continente_create:

            // continente_edit
            if (preg_match('#^/continente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'continente_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::editAction',));
            }

            // continente_update
            if (preg_match('#^/continente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_continente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'continente_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::updateAction',));
            }
            not_continente_update:

            // continente_delete
            if (preg_match('#^/continente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_continente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'continente_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\ContinenteController::deleteAction',));
            }
            not_continente_delete:

        }

        if (0 === strpos($pathinfo, '/pais')) {
            // pais
            if (rtrim($pathinfo, '/') === '/pais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pais');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::indexAction',  '_route' => 'pais',);
            }

            // pais_show
            if (preg_match('#^/pais/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::showAction',));
            }

            // pais_new
            if ($pathinfo === '/pais/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::newAction',  '_route' => 'pais_new',);
            }

            // pais_create
            if ($pathinfo === '/pais/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pais_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::createAction',  '_route' => 'pais_create',);
            }
            not_pais_create:

            // pais_edit
            if (preg_match('#^/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::editAction',));
            }

            // pais_update
            if (preg_match('#^/pais/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pais_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::updateAction',));
            }
            not_pais_update:

            // pais_delete
            if (preg_match('#^/pais/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pais_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PaisController::deleteAction',));
            }
            not_pais_delete:

        }

        if (0 === strpos($pathinfo, '/ciudad')) {
            // ciudad
            if (rtrim($pathinfo, '/') === '/ciudad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ciudad');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::indexAction',  '_route' => 'ciudad',);
            }

            // ciudad_show
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::showAction',));
            }

            // ciudad_new
            if ($pathinfo === '/ciudad/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::newAction',  '_route' => 'ciudad_new',);
            }

            // ciudad_create
            if ($pathinfo === '/ciudad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ciudad_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::createAction',  '_route' => 'ciudad_create',);
            }
            not_ciudad_create:

            // ciudad_edit
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::editAction',));
            }

            // ciudad_update
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ciudad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::updateAction',));
            }
            not_ciudad_update:

            // ciudad_delete
            if (preg_match('#^/ciudad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ciudad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CiudadController::deleteAction',));
            }
            not_ciudad_delete:

        }

        if (0 === strpos($pathinfo, '/emision')) {
            // emision
            if (rtrim($pathinfo, '/') === '/emision') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'emision');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::indexAction',  '_route' => 'emision',);
            }

            // emision_show
            if (preg_match('#^/emision/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emision_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::showAction',));
            }

            // emision_new
            if ($pathinfo === '/emision/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::newAction',  '_route' => 'emision_new',);
            }

            // emision_create
            if ($pathinfo === '/emision/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_emision_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::createAction',  '_route' => 'emision_create',);
            }
            not_emision_create:

            // emision_edit
            if (preg_match('#^/emision/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emision_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::editAction',));
            }

            // emision_update
            if (preg_match('#^/emision/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emision_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::updateAction',));
            }

            // emision_delete
            if (preg_match('#^/emision/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_emision_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emision_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\EmisionController::deleteAction',));
            }
            not_emision_delete:

        }

        if (0 === strpos($pathinfo, '/revision')) {
            // revision
            if (rtrim($pathinfo, '/') === '/revision') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'revision');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::indexAction',  '_route' => 'revision',);
            }

            // revision_show
            if (preg_match('#^/revision/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'revision_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::showAction',));
            }

            // revision_new
            if ($pathinfo === '/revision/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::newAction',  '_route' => 'revision_new',);
            }

            // revision_create
            if ($pathinfo === '/revision/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_revision_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::createAction',  '_route' => 'revision_create',);
            }
            not_revision_create:

            // revision_edit
            if (preg_match('#^/revision/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'revision_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::editAction',));
            }

            // revision_update
            if (preg_match('#^/revision/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_revision_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'revision_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::updateAction',));
            }
            not_revision_update:

            // revision_delete
            if (preg_match('#^/revision/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_revision_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'revision_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\RevisionController::deleteAction',));
            }
            not_revision_delete:

        }

        if (0 === strpos($pathinfo, '/anulacion')) {
            // anulacion
            if (rtrim($pathinfo, '/') === '/anulacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'anulacion');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::indexAction',  '_route' => 'anulacion',);
            }

            // anulacion_show
            if (preg_match('#^/anulacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anulacion_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::showAction',));
            }

            // anulacion_new
            if ($pathinfo === '/anulacion/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::newAction',  '_route' => 'anulacion_new',);
            }

            // anulacion_create
            if ($pathinfo === '/anulacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_anulacion_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::createAction',  '_route' => 'anulacion_create',);
            }
            not_anulacion_create:

            // anulacion_edit
            if (preg_match('#^/anulacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anulacion_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::editAction',));
            }

            // anulacion_update
            if (preg_match('#^/anulacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_anulacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anulacion_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::updateAction',));
            }
            not_anulacion_update:

            // anulacion_delete
            if (preg_match('#^/anulacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_anulacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anulacion_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\AnulacionController::deleteAction',));
            }
            not_anulacion_delete:

        }

        if (0 === strpos($pathinfo, '/formapago')) {
            // formapago
            if (preg_match('#^/formapago/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formapago');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formapago')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::indexAction',));
            }

            // formapago_show
            if (preg_match('#^/formapago/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formapago_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::showAction',));
            }

            // formapago_new
            if ($pathinfo === '/formapago/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::newAction',  '_route' => 'formapago_new',);
            }

            // formapago_create
            if ($pathinfo === '/formapago/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formapago_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::createAction',  '_route' => 'formapago_create',);
            }
            not_formapago_create:

            // formapago_edit
            if (preg_match('#^/formapago/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formapago_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::editAction',));
            }

            // formapago_update
            if (preg_match('#^/formapago/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formapago_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formapago_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::updateAction',));
            }
            not_formapago_update:

            // formapago_delete
            if (preg_match('#^/formapago/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_formapago_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formapago_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\FormapagoController::deleteAction',));
            }
            not_formapago_delete:

        }

        if (0 === strpos($pathinfo, '/tarjetacredito')) {
            // tarjetacredito
            if (rtrim($pathinfo, '/') === '/tarjetacredito') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tarjetacredito');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::indexAction',  '_route' => 'tarjetacredito',);
            }

            // tarjetacredito_show
            if (preg_match('#^/tarjetacredito/(?P<id>[^/]++)/show/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tarjetacredito_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjetacredito_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::showAction',));
            }

            // tarjetacredito_new
            if ($pathinfo === '/tarjetacredito/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::newAction',  '_route' => 'tarjetacredito_new',);
            }

            // tarjetacredito_create
            if ($pathinfo === '/tarjetacredito/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tarjetacredito_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::createAction',  '_route' => 'tarjetacredito_create',);
            }
            not_tarjetacredito_create:

            // tarjetacredito_edit
            if (preg_match('#^/tarjetacredito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjetacredito_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::editAction',));
            }

            // tarjetacredito_update
            if (preg_match('#^/tarjetacredito/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tarjetacredito_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjetacredito_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::updateAction',));
            }
            not_tarjetacredito_update:

            // tarjetacredito_delete
            if (preg_match('#^/tarjetacredito/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tarjetacredito_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjetacredito_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\TarjetacreditoController::deleteAction',));
            }
            not_tarjetacredito_delete:

        }

        if (0 === strpos($pathinfo, '/pagodirecto')) {
            // pagodirecto
            if (rtrim($pathinfo, '/') === '/pagodirecto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pagodirecto');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::indexAction',  '_route' => 'pagodirecto',);
            }

            // pagodirecto_show
            if (preg_match('#^/pagodirecto/(?P<id>[^/]++)/show/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pagodirecto_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagodirecto_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::showAction',));
            }

            // pagodirecto_new
            if ($pathinfo === '/pagodirecto/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::newAction',  '_route' => 'pagodirecto_new',);
            }

            // pagodirecto_create
            if ($pathinfo === '/pagodirecto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pagodirecto_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::createAction',  '_route' => 'pagodirecto_create',);
            }
            not_pagodirecto_create:

            // pagodirecto_edit
            if (preg_match('#^/pagodirecto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagodirecto_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::editAction',));
            }

            // pagodirecto_update
            if (preg_match('#^/pagodirecto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pagodirecto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagodirecto_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::updateAction',));
            }
            not_pagodirecto_update:

            // pagodirecto_delete
            if (preg_match('#^/pagodirecto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pagodirecto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagodirecto_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\PagodirectoController::deleteAction',));
            }
            not_pagodirecto_delete:

        }

        if (0 === strpos($pathinfo, '/depefectivotransferenciabancaria')) {
            // depefectivotransferenciabancaria
            if (rtrim($pathinfo, '/') === '/depefectivotransferenciabancaria') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'depefectivotransferenciabancaria');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::indexAction',  '_route' => 'depefectivotransferenciabancaria',);
            }

            // depefectivotransferenciabancaria_show
            if (preg_match('#^/depefectivotransferenciabancaria/(?P<id>[^/]++)/show/(?P<orden>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'depefectivotransferenciabancaria_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depefectivotransferenciabancaria_show')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::showAction',));
            }

            // depefectivotransferenciabancaria_new
            if ($pathinfo === '/depefectivotransferenciabancaria/new') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::newAction',  '_route' => 'depefectivotransferenciabancaria_new',);
            }

            // depefectivotransferenciabancaria_create
            if ($pathinfo === '/depefectivotransferenciabancaria/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_depefectivotransferenciabancaria_create;
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::createAction',  '_route' => 'depefectivotransferenciabancaria_create',);
            }
            not_depefectivotransferenciabancaria_create:

            // depefectivotransferenciabancaria_edit
            if (preg_match('#^/depefectivotransferenciabancaria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depefectivotransferenciabancaria_edit')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::editAction',));
            }

            // depefectivotransferenciabancaria_update
            if (preg_match('#^/depefectivotransferenciabancaria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_depefectivotransferenciabancaria_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depefectivotransferenciabancaria_update')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::updateAction',));
            }
            not_depefectivotransferenciabancaria_update:

            // depefectivotransferenciabancaria_delete
            if (preg_match('#^/depefectivotransferenciabancaria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_depefectivotransferenciabancaria_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depefectivotransferenciabancaria_delete')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\DepefectivoTransferenciabancariaController::deleteAction',));
            }
            not_depefectivotransferenciabancaria_delete:

        }

        if (0 === strpos($pathinfo, '/caja')) {
            // dashboard_cobranza
            if (rtrim($pathinfo, '/') === '/caja/dashboard_cobranza') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dashboard_cobranza');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CajaController::dashboardAction',  '_route' => 'dashboard_cobranza',);
            }

            // operador_conciliar_manual
            if (0 === strpos($pathinfo, '/caja/conciliar/manual') && preg_match('#^/caja/conciliar/manual/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'operador_conciliar_manual');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operador_conciliar_manual')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CajaController::conciliarManualAction',));
            }

            // supervisor_cobranza_index_agencias
            if (rtrim($pathinfo, '/') === '/caja/agencias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_cobranza_index_agencias');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CajaController::indexAgenciasAction',  '_route' => 'supervisor_cobranza_index_agencias',);
            }

            // supervisor_cobranza_load_agencias_ajax
            if ($pathinfo === '/caja/load/agencias/ajax') {
                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CajaController::load_ajax_agenciasAction',  '_route' => 'supervisor_cobranza_load_agencias_ajax',);
            }

            // supervisor_cobranza_member_unmember_agencia
            if (0 === strpos($pathinfo, '/caja/member_unmember') && preg_match('#^/caja/member_unmember/(?P<id>[^/]++)/(?P<id_empresa>[^/]++)/(?P<referencia>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'supervisor_cobranza_member_unmember_agencia');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supervisor_cobranza_member_unmember_agencia')), array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CajaController::member_unmemberAction',  'referencia' => NULL,));
            }

            // operador_supervisor_cobranza_load_pie
            if (rtrim($pathinfo, '/') === '/caja/cobranza/load/pie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'operador_supervisor_cobranza_load_pie');
                }

                return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CajaController::loadPieAction',  '_route' => 'operador_supervisor_cobranza_load_pie',);
            }

        }

        // EmisionesBundle_queue_manger
        if (rtrim($pathinfo, '/') === '/queue/manager') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'EmisionesBundle_queue_manger');
            }

            return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\GlobalController::GridAction',  '_route' => 'EmisionesBundle_queue_manger',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cyborg')) {
                // EmisionesBundle_Cyborg_Save
                if (rtrim($pathinfo, '/') === '/cyborg/save') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'EmisionesBundle_Cyborg_Save');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CyborgController::saveAction',  '_route' => 'EmisionesBundle_Cyborg_Save',);
                }

                // EmisionesBundle_Cyborg_Login
                if (rtrim($pathinfo, '/') === '/cyborg/verify/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'EmisionesBundle_Cyborg_Login');
                    }

                    return array (  '_controller' => 'aplicacion\\EmisionesBundle\\Controller\\CyborgController::loginAction',  '_route' => 'EmisionesBundle_Cyborg_Login',);
                }

            }

            // your_examplebundle_crontasks_test
            if ($pathinfo === '/crontasks/test') {
                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\CronTaskController::testAction',  '_route' => 'your_examplebundle_crontasks_test',);
            }

        }

        // aplicacion_base_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'aplicacion_base_default_index')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\DefaultController::indexAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\AplicacionController::indexAction',  '_route' => 'index',);
        }

        // lock_screen
        if (rtrim($pathinfo, '/') === '/lock/screen') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lock_screen');
            }

            return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\AplicacionController::lockScreenAction',  '_route' => 'lock_screen',);
        }

        // organigrama
        if (preg_match('#^/(?P<empresa>[^/]++)/(?P<tipo>[^/]++)/organigrama/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'organigrama');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'organigrama')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\AplicacionController::organigramaAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if (rtrim($pathinfo, '/') === '/user/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_new');
                }

                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::registerAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa
            if (rtrim($pathinfo, '/') === '/empresa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresa');
                }

                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::indexAction',  '_route' => 'empresa',);
            }

            // empresa_show
            if (preg_match('#^/empresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::showAction',));
            }

            // empresa_new
            if ($pathinfo === '/empresa/new') {
                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_new',);
            }

            // empresa_create
            if ($pathinfo === '/empresa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresa_create;
                }

                return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::createAction',  '_route' => 'empresa_create',);
            }
            not_empresa_create:

            // empresa_edit
            if (preg_match('#^/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::editAction',));
            }

            // empresa_update
            if (preg_match('#^/empresa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_empresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_update')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::updateAction',));
            }
            not_empresa_update:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\EmpresaController::deleteAction',));
            }
            not_empresa_delete:

        }

        if (0 === strpos($pathinfo, '/supervisor')) {
            if (0 === strpos($pathinfo, '/supervisor/feriado')) {
                // feriado
                if (rtrim($pathinfo, '/') === '/supervisor/feriado') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'feriado');
                    }

                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::indexAction',  '_route' => 'feriado',);
                }

                // feriado_show
                if (preg_match('#^/supervisor/feriado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feriado_show')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::showAction',));
                }

                if (0 === strpos($pathinfo, '/supervisor/feriado/new')) {
                    // feriado_new
                    if ($pathinfo === '/supervisor/feriado/new') {
                        return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::newAction',  '_route' => 'feriado_new',);
                    }

                    // feriado_new_ajax
                    if ($pathinfo === '/supervisor/feriado/new/feriado') {
                        return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::new_ajaxAction',  '_route' => 'feriado_new_ajax',);
                    }

                }

                // feriado_load_ajax
                if ($pathinfo === '/supervisor/feriado/load/feriados') {
                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::load_ajaxAction',  '_route' => 'feriado_load_ajax',);
                }

                // feriado_update_ajax
                if ($pathinfo === '/supervisor/feriado/update/feriado') {
                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::update_ajaxAction',  '_route' => 'feriado_update_ajax',);
                }

                // feriado_delete_ajax
                if ($pathinfo === '/supervisor/feriado/delete/feriado') {
                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::delete_ajaxAction',  '_route' => 'feriado_delete_ajax',);
                }

                // feriado_create
                if ($pathinfo === '/supervisor/feriado/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_feriado_create;
                    }

                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::createAction',  '_route' => 'feriado_create',);
                }
                not_feriado_create:

                // feriado_edit
                if (preg_match('#^/supervisor/feriado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feriado_edit')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::editAction',));
                }

                // feriado_update
                if (preg_match('#^/supervisor/feriado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_feriado_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feriado_update')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::updateAction',));
                }
                not_feriado_update:

                // feriado_delete
                if (preg_match('#^/supervisor/feriado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_feriado_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feriado_delete')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\FeriadoController::deleteAction',));
                }
                not_feriado_delete:

            }

            if (0 === strpos($pathinfo, '/supervisor/configuracion')) {
                // configuracion
                if (rtrim($pathinfo, '/') === '/supervisor/configuracion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'configuracion');
                    }

                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::indexAction',  '_route' => 'configuracion',);
                }

                // configuracion_show
                if (preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuracion_show')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::showAction',));
                }

                // configuracion_new
                if ($pathinfo === '/supervisor/configuracion/new') {
                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::newAction',  '_route' => 'configuracion_new',);
                }

                // configuracion_create
                if ($pathinfo === '/supervisor/configuracion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_configuracion_create;
                    }

                    return array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::createAction',  '_route' => 'configuracion_create',);
                }
                not_configuracion_create:

                // configuracion_edit
                if (preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuracion_edit')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::editAction',));
                }

                // configuracion_update
                if (preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_configuracion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuracion_update')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::updateAction',));
                }
                not_configuracion_update:

                // configuracion_delete
                if (preg_match('#^/supervisor/configuracion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_configuracion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'configuracion_delete')), array (  '_controller' => 'aplicacion\\BaseBundle\\Controller\\ConfiguracionController::deleteAction',));
                }
                not_configuracion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                if (0 === strpos($pathinfo, '/resetting/re')) {
                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                    }
                    not_fos_user_resetting_reset:

                    // fos_user_resetting_success
                    if ($pathinfo === '/resetting/request/success') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_success;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestSuccessAction',  '_route' => 'fos_user_resetting_success',);
                    }
                    not_fos_user_resetting_success:

                }

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/cambiarclave/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/group')) {
            // fos_user_group_list
            if ($pathinfo === '/group/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/group/new') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/group/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/group/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/group/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
