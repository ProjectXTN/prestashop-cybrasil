<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf85cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9bde = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa8fb4 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getList', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getInstalledModules', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getMustBeConfiguredModules', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getUpgradableModules', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializerf9bde = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolderf85cf) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderf85cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolderf85cf->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__get', ['name' => $name], $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        if (isset(self::$publicPropertiesa8fb4[$name])) {
            return $this->valueHolderf85cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf85cf;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf85cf;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf85cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf85cf;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__isset', array('name' => $name), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf85cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf85cf;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__unset', array('name' => $name), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf85cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf85cf;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__clone', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        $this->valueHolderf85cf = clone $this->valueHolderf85cf;
    }

    public function __sleep()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__sleep', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return array('valueHolderf85cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9bde = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9bde;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'initializeProxy', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf85cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf85cf;
    }
}
