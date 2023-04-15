<?php

namespace ContainerGenyTjy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd75ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc2bfc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3f4c9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getConnection', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getMetadataFactory', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getExpressionBuilder', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'beginTransaction', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getCache', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'transactional', array('func' => $func), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'commit', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->commit();
    }

    public function rollback()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'rollback', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getClassMetadata', array('className' => $className), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'createQuery', array('dql' => $dql), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'createNamedQuery', array('name' => $name), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'createQueryBuilder', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'flush', array('entity' => $entity), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'clear', array('entityName' => $entityName), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->clear($entityName);
    }

    public function close()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'close', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->close();
    }

    public function persist($entity)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'persist', array('entity' => $entity), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'remove', array('entity' => $entity), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'detach', array('entity' => $entity), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'merge', array('entity' => $entity), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'contains', array('entity' => $entity), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getEventManager', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getConfiguration', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'isOpen', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getUnitOfWork', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getProxyFactory', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'initializeObject', array('obj' => $obj), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'getFilters', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'isFiltersStateClean', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'hasFilters', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return $this->valueHolderd75ee->hasFilters();
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

        $instance->initializerc2bfc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderd75ee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd75ee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd75ee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, '__get', ['name' => $name], $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        if (isset(self::$publicProperties3f4c9[$name])) {
            return $this->valueHolderd75ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75ee;

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

        $targetObject = $this->valueHolderd75ee;
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
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75ee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd75ee;
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
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, '__isset', array('name' => $name), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75ee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd75ee;
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
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, '__unset', array('name' => $name), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd75ee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd75ee;
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
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, '__clone', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        $this->valueHolderd75ee = clone $this->valueHolderd75ee;
    }

    public function __sleep()
    {
        $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, '__sleep', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;

        return array('valueHolderd75ee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc2bfc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc2bfc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc2bfc && ($this->initializerc2bfc->__invoke($valueHolderd75ee, $this, 'initializeProxy', array(), $this->initializerc2bfc) || 1) && $this->valueHolderd75ee = $valueHolderd75ee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd75ee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd75ee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
