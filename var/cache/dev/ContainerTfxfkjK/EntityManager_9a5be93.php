<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getConnection', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getMetadataFactory', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getExpressionBuilder', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'beginTransaction', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getCache', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'transactional', array('func' => $func), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'commit', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->commit();
    }

    public function rollback()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'rollback', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'createQuery', array('dql' => $dql), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'createQueryBuilder', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'flush', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'clear', array('entityName' => $entityName), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'close', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->close();
    }

    public function persist($entity)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'persist', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'remove', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'refresh', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'detach', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'merge', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'contains', array('entity' => $entity), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getEventManager', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getConfiguration', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'isOpen', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getUnitOfWork', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getProxyFactory', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'getFilters', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'isFiltersStateClean', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, 'hasFilters', array(), $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        return $this->valueHolderf85cf->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf9bde = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf85cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf85cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf85cf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9bde && ($this->initializerf9bde->__invoke($valueHolderf85cf, $this, '__get', ['name' => $name], $this->initializerf9bde) || 1) && $this->valueHolderf85cf = $valueHolderf85cf;

        if (isset(self::$publicPropertiesa8fb4[$name])) {
            return $this->valueHolderf85cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
