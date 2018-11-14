<?php

use MailPoet\Dependencies\Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use MailPoet\Dependencies\Symfony\Component\DependencyInjection\ContainerInterface;
use MailPoet\Dependencies\Symfony\Component\DependencyInjection\Container;
use MailPoet\Dependencies\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use MailPoet\Dependencies\Symfony\Component\DependencyInjection\Exception\LogicException;
use MailPoet\Dependencies\Symfony\Component\DependencyInjection\Exception\RuntimeException;
use MailPoet\Dependencies\Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class CachedContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->services = array();
        $this->normalizedIds = array(
            'mailpoet\\config\\accesscontrol' => 'MailPoet\\Config\\AccessControl',
            'mailpoet\\cron\\daemon' => 'MailPoet\\Cron\\Daemon',
            'mailpoet\\cron\\daemonhttprunner' => 'MailPoet\\Cron\\DaemonHttpRunner',
            'mailpoet\\router\\endpoints\\crondaemon' => 'MailPoet\\Router\\Endpoints\\CronDaemon',
            'mailpoet\\router\\endpoints\\subscription' => 'MailPoet\\Router\\Endpoints\\Subscription',
            'mailpoet\\router\\endpoints\\track' => 'MailPoet\\Router\\Endpoints\\Track',
            'mailpoet\\router\\endpoints\\viewinbrowser' => 'MailPoet\\Router\\Endpoints\\ViewInBrowser',
        );
        $this->methodMap = array(
            'MailPoet\\Config\\AccessControl' => 'getAccessControlService',
            'MailPoet\\Cron\\Daemon' => 'getDaemonService',
            'MailPoet\\Cron\\DaemonHttpRunner' => 'getDaemonHttpRunnerService',
            'MailPoet\\Router\\Endpoints\\CronDaemon' => 'getCronDaemonService',
            'MailPoet\\Router\\Endpoints\\Subscription' => 'getSubscriptionService',
            'MailPoet\\Router\\Endpoints\\Track' => 'getTrackService',
            'MailPoet\\Router\\Endpoints\\ViewInBrowser' => 'getViewInBrowserService',
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'MailPoet\\Dependencies\\Psr\\Container\\ContainerInterface' => true,
            'MailPoet\\Dependencies\\Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'MailPoet\Config\AccessControl' shared autowired service.
     *
     * @return \MailPoet\Config\AccessControl
     */
    protected function getAccessControlService()
    {
        return $this->services['MailPoet\Config\AccessControl'] = new \MailPoet\Config\AccessControl();
    }

    /**
     * Gets the public 'MailPoet\Cron\Daemon' shared autowired service.
     *
     * @return \MailPoet\Cron\Daemon
     */
    protected function getDaemonService()
    {
        return $this->services['MailPoet\Cron\Daemon'] = new \MailPoet\Cron\Daemon();
    }

    /**
     * Gets the public 'MailPoet\Cron\DaemonHttpRunner' shared autowired service.
     *
     * @return \MailPoet\Cron\DaemonHttpRunner
     */
    protected function getDaemonHttpRunnerService()
    {
        return $this->services['MailPoet\Cron\DaemonHttpRunner'] = new \MailPoet\Cron\DaemonHttpRunner(${($_ = isset($this->services['MailPoet\Cron\Daemon']) ? $this->services['MailPoet\Cron\Daemon'] : $this->services['MailPoet\Cron\Daemon'] = new \MailPoet\Cron\Daemon()) && false ?: '_'});
    }

    /**
     * Gets the public 'MailPoet\Router\Endpoints\CronDaemon' shared autowired service.
     *
     * @return \MailPoet\Router\Endpoints\CronDaemon
     */
    protected function getCronDaemonService()
    {
        return $this->services['MailPoet\Router\Endpoints\CronDaemon'] = new \MailPoet\Router\Endpoints\CronDaemon(${($_ = isset($this->services['MailPoet\Cron\DaemonHttpRunner']) ? $this->services['MailPoet\Cron\DaemonHttpRunner'] : $this->getDaemonHttpRunnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'MailPoet\Router\Endpoints\Subscription' shared autowired service.
     *
     * @return \MailPoet\Router\Endpoints\Subscription
     */
    protected function getSubscriptionService()
    {
        return $this->services['MailPoet\Router\Endpoints\Subscription'] = new \MailPoet\Router\Endpoints\Subscription();
    }

    /**
     * Gets the public 'MailPoet\Router\Endpoints\Track' shared autowired service.
     *
     * @return \MailPoet\Router\Endpoints\Track
     */
    protected function getTrackService()
    {
        return $this->services['MailPoet\Router\Endpoints\Track'] = new \MailPoet\Router\Endpoints\Track();
    }

    /**
     * Gets the public 'MailPoet\Router\Endpoints\ViewInBrowser' shared autowired service.
     *
     * @return \MailPoet\Router\Endpoints\ViewInBrowser
     */
    protected function getViewInBrowserService()
    {
        return $this->services['MailPoet\Router\Endpoints\ViewInBrowser'] = new \MailPoet\Router\Endpoints\ViewInBrowser(${($_ = isset($this->services['MailPoet\Config\AccessControl']) ? $this->services['MailPoet\Config\AccessControl'] : $this->services['MailPoet\Config\AccessControl'] = new \MailPoet\Config\AccessControl()) && false ?: '_'});
    }
}
