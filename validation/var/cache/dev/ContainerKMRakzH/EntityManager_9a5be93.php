<?php

namespace ContainerKMRakzH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89fa3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3ca09 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa8dfc = [
        
    ];

    public function getConnection()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getConnection', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getMetadataFactory', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getExpressionBuilder', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'beginTransaction', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getCache', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'transactional', array('func' => $func), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'commit', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->commit();
    }

    public function rollback()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'rollback', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'createQuery', array('dql' => $dql), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'createQueryBuilder', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'flush', array('entity' => $entity), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'clear', array('entityName' => $entityName), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->clear($entityName);
    }

    public function close()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'close', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->close();
    }

    public function persist($entity)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'persist', array('entity' => $entity), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'remove', array('entity' => $entity), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'detach', array('entity' => $entity), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'merge', array('entity' => $entity), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'contains', array('entity' => $entity), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getEventManager', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getConfiguration', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'isOpen', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getUnitOfWork', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getProxyFactory', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'getFilters', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'isFiltersStateClean', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'hasFilters', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return $this->valueHolder89fa3->hasFilters();
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

        $instance->initializer3ca09 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder89fa3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89fa3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89fa3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, '__get', ['name' => $name], $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        if (isset(self::$publicPropertiesa8dfc[$name])) {
            return $this->valueHolder89fa3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fa3;

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

        $targetObject = $this->valueHolder89fa3;
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
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fa3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89fa3;
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
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, '__isset', array('name' => $name), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fa3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89fa3;
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
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, '__unset', array('name' => $name), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89fa3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89fa3;
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
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, '__clone', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        $this->valueHolder89fa3 = clone $this->valueHolder89fa3;
    }

    public function __sleep()
    {
        $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, '__sleep', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;

        return array('valueHolder89fa3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ca09 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ca09;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3ca09 && ($this->initializer3ca09->__invoke($valueHolder89fa3, $this, 'initializeProxy', array(), $this->initializer3ca09) || 1) && $this->valueHolder89fa3 = $valueHolder89fa3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89fa3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89fa3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
