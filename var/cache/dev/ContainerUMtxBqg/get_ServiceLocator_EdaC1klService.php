<?php

namespace ContainerUMtxBqg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EdaC1klService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EdaC1kl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EdaC1kl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ProgController::index' => ['privates', '.service_locator.n7FCdr5', 'get_ServiceLocator_N7FCdr5Service', true],
            'App\\Controller\\ProgrammeController::delete' => ['privates', '.service_locator.Xvt.gnO', 'get_ServiceLocator_Xvt_GnOService', true],
            'App\\Controller\\ProgrammeController::edit' => ['privates', '.service_locator.Xvt.gnO', 'get_ServiceLocator_Xvt_GnOService', true],
            'App\\Controller\\ProgrammeController::index' => ['privates', '.service_locator.n7FCdr5', 'get_ServiceLocator_N7FCdr5Service', true],
            'App\\Controller\\ProgrammeController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ProgrammeController::show' => ['privates', '.service_locator.qhorb3R', 'get_ServiceLocator_Qhorb3RService', true],
            'App\\Controller\\ResController::cancelReservation' => ['privates', '.service_locator.MQl1vAe', 'get_ServiceLocator_MQl1vAeService', true],
            'App\\Controller\\ResController::confirmReservation' => ['privates', '.service_locator.MQl1vAe', 'get_ServiceLocator_MQl1vAeService', true],
            'App\\Controller\\ResController::delete' => ['privates', '.service_locator.SvWO3vg', 'get_ServiceLocator_SvWO3vgService', true],
            'App\\Controller\\ResController::edit' => ['privates', '.service_locator.SvWO3vg', 'get_ServiceLocator_SvWO3vgService', true],
            'App\\Controller\\ResController::index' => ['privates', '.service_locator.zkadRX2', 'get_ServiceLocator_ZkadRX2Service', true],
            'App\\Controller\\ResController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ResController::show' => ['privates', '.service_locator.DP5Wj8P', 'get_ServiceLocator_DP5Wj8PService', true],
            'App\\Controller\\TestController::show1' => ['privates', '.service_locator.aDkPpL7', 'get_ServiceLocator_ADkPpL7Service', true],
            'App\\Controller\\VoyageController::delete' => ['privates', '.service_locator.R3TFjLG', 'get_ServiceLocator_R3TFjLGService', true],
            'App\\Controller\\VoyageController::edit' => ['privates', '.service_locator.R3TFjLG', 'get_ServiceLocator_R3TFjLGService', true],
            'App\\Controller\\VoyageController::index' => ['privates', '.service_locator.aDkPpL7', 'get_ServiceLocator_ADkPpL7Service', true],
            'App\\Controller\\VoyageController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\VoyageController::pdf' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\VoyageController::show' => ['privates', '.service_locator.cRw86ao', 'get_ServiceLocator_CRw86aoService', true],
            'App\\Controller\\VoypersonaliseController::delete' => ['privates', '.service_locator.5QM8HVE', 'get_ServiceLocator_5QM8HVEService', true],
            'App\\Controller\\VoypersonaliseController::edit' => ['privates', '.service_locator.5QM8HVE', 'get_ServiceLocator_5QM8HVEService', true],
            'App\\Controller\\VoypersonaliseController::index' => ['privates', '.service_locator.NmVVmIc', 'get_ServiceLocator_NmVVmIcService', true],
            'App\\Controller\\VoypersonaliseController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ProgController:index' => ['privates', '.service_locator.n7FCdr5', 'get_ServiceLocator_N7FCdr5Service', true],
            'App\\Controller\\ProgrammeController:delete' => ['privates', '.service_locator.Xvt.gnO', 'get_ServiceLocator_Xvt_GnOService', true],
            'App\\Controller\\ProgrammeController:edit' => ['privates', '.service_locator.Xvt.gnO', 'get_ServiceLocator_Xvt_GnOService', true],
            'App\\Controller\\ProgrammeController:index' => ['privates', '.service_locator.n7FCdr5', 'get_ServiceLocator_N7FCdr5Service', true],
            'App\\Controller\\ProgrammeController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ProgrammeController:show' => ['privates', '.service_locator.qhorb3R', 'get_ServiceLocator_Qhorb3RService', true],
            'App\\Controller\\ResController:cancelReservation' => ['privates', '.service_locator.MQl1vAe', 'get_ServiceLocator_MQl1vAeService', true],
            'App\\Controller\\ResController:confirmReservation' => ['privates', '.service_locator.MQl1vAe', 'get_ServiceLocator_MQl1vAeService', true],
            'App\\Controller\\ResController:delete' => ['privates', '.service_locator.SvWO3vg', 'get_ServiceLocator_SvWO3vgService', true],
            'App\\Controller\\ResController:edit' => ['privates', '.service_locator.SvWO3vg', 'get_ServiceLocator_SvWO3vgService', true],
            'App\\Controller\\ResController:index' => ['privates', '.service_locator.zkadRX2', 'get_ServiceLocator_ZkadRX2Service', true],
            'App\\Controller\\ResController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ResController:show' => ['privates', '.service_locator.DP5Wj8P', 'get_ServiceLocator_DP5Wj8PService', true],
            'App\\Controller\\TestController:show1' => ['privates', '.service_locator.aDkPpL7', 'get_ServiceLocator_ADkPpL7Service', true],
            'App\\Controller\\VoyageController:delete' => ['privates', '.service_locator.R3TFjLG', 'get_ServiceLocator_R3TFjLGService', true],
            'App\\Controller\\VoyageController:edit' => ['privates', '.service_locator.R3TFjLG', 'get_ServiceLocator_R3TFjLGService', true],
            'App\\Controller\\VoyageController:index' => ['privates', '.service_locator.aDkPpL7', 'get_ServiceLocator_ADkPpL7Service', true],
            'App\\Controller\\VoyageController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\VoyageController:pdf' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\VoyageController:show' => ['privates', '.service_locator.cRw86ao', 'get_ServiceLocator_CRw86aoService', true],
            'App\\Controller\\VoypersonaliseController:delete' => ['privates', '.service_locator.5QM8HVE', 'get_ServiceLocator_5QM8HVEService', true],
            'App\\Controller\\VoypersonaliseController:edit' => ['privates', '.service_locator.5QM8HVE', 'get_ServiceLocator_5QM8HVEService', true],
            'App\\Controller\\VoypersonaliseController:index' => ['privates', '.service_locator.NmVVmIc', 'get_ServiceLocator_NmVVmIcService', true],
            'App\\Controller\\VoypersonaliseController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ProgController::index' => '?',
            'App\\Controller\\ProgrammeController::delete' => '?',
            'App\\Controller\\ProgrammeController::edit' => '?',
            'App\\Controller\\ProgrammeController::index' => '?',
            'App\\Controller\\ProgrammeController::new' => '?',
            'App\\Controller\\ProgrammeController::show' => '?',
            'App\\Controller\\ResController::cancelReservation' => '?',
            'App\\Controller\\ResController::confirmReservation' => '?',
            'App\\Controller\\ResController::delete' => '?',
            'App\\Controller\\ResController::edit' => '?',
            'App\\Controller\\ResController::index' => '?',
            'App\\Controller\\ResController::new' => '?',
            'App\\Controller\\ResController::show' => '?',
            'App\\Controller\\TestController::show1' => '?',
            'App\\Controller\\VoyageController::delete' => '?',
            'App\\Controller\\VoyageController::edit' => '?',
            'App\\Controller\\VoyageController::index' => '?',
            'App\\Controller\\VoyageController::new' => '?',
            'App\\Controller\\VoyageController::pdf' => '?',
            'App\\Controller\\VoyageController::show' => '?',
            'App\\Controller\\VoypersonaliseController::delete' => '?',
            'App\\Controller\\VoypersonaliseController::edit' => '?',
            'App\\Controller\\VoypersonaliseController::index' => '?',
            'App\\Controller\\VoypersonaliseController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ProgController:index' => '?',
            'App\\Controller\\ProgrammeController:delete' => '?',
            'App\\Controller\\ProgrammeController:edit' => '?',
            'App\\Controller\\ProgrammeController:index' => '?',
            'App\\Controller\\ProgrammeController:new' => '?',
            'App\\Controller\\ProgrammeController:show' => '?',
            'App\\Controller\\ResController:cancelReservation' => '?',
            'App\\Controller\\ResController:confirmReservation' => '?',
            'App\\Controller\\ResController:delete' => '?',
            'App\\Controller\\ResController:edit' => '?',
            'App\\Controller\\ResController:index' => '?',
            'App\\Controller\\ResController:new' => '?',
            'App\\Controller\\ResController:show' => '?',
            'App\\Controller\\TestController:show1' => '?',
            'App\\Controller\\VoyageController:delete' => '?',
            'App\\Controller\\VoyageController:edit' => '?',
            'App\\Controller\\VoyageController:index' => '?',
            'App\\Controller\\VoyageController:new' => '?',
            'App\\Controller\\VoyageController:pdf' => '?',
            'App\\Controller\\VoyageController:show' => '?',
            'App\\Controller\\VoypersonaliseController:delete' => '?',
            'App\\Controller\\VoypersonaliseController:edit' => '?',
            'App\\Controller\\VoypersonaliseController:index' => '?',
            'App\\Controller\\VoypersonaliseController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
