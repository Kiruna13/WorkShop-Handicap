<?php

namespace ContainerJWIgcnO;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb6201 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7dd58 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4641a = [
        
    ];

    public function getConnection()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getConnection', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getMetadataFactory', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getExpressionBuilder', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'beginTransaction', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getCache', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'transactional', array('func' => $func), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'commit', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->commit();
    }

    public function rollback()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'rollback', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getClassMetadata', array('className' => $className), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'createQuery', array('dql' => $dql), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'createNamedQuery', array('name' => $name), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'createQueryBuilder', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'flush', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'clear', array('entityName' => $entityName), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->clear($entityName);
    }

    public function close()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'close', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->close();
    }

    public function persist($entity)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'persist', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'remove', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'refresh', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'detach', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'merge', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'contains', array('entity' => $entity), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getEventManager', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getConfiguration', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'isOpen', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getUnitOfWork', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getProxyFactory', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'initializeObject', array('obj' => $obj), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'getFilters', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'isFiltersStateClean', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'hasFilters', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return $this->valueHolderb6201->hasFilters();
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

        $instance->initializer7dd58 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb6201) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb6201 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb6201->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, '__get', ['name' => $name], $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        if (isset(self::$publicProperties4641a[$name])) {
            return $this->valueHolderb6201->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6201;

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

        $targetObject = $this->valueHolderb6201;
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
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6201;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb6201;
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
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, '__isset', array('name' => $name), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6201;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb6201;
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
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, '__unset', array('name' => $name), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6201;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb6201;
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
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, '__clone', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        $this->valueHolderb6201 = clone $this->valueHolderb6201;
    }

    public function __sleep()
    {
        $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, '__sleep', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;

        return array('valueHolderb6201');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7dd58 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7dd58;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7dd58 && ($this->initializer7dd58->__invoke($valueHolderb6201, $this, 'initializeProxy', array(), $this->initializer7dd58) || 1) && $this->valueHolderb6201 = $valueHolderb6201;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb6201;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb6201;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
