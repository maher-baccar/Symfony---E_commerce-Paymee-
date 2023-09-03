<?php

namespace ContainerFjad3xf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1bd53 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer24dcf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese0daf = [
        
    ];

    public function getConnection()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getConnection', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getMetadataFactory', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getExpressionBuilder', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'beginTransaction', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getCache', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getCache();
    }

    public function transactional($func)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'transactional', array('func' => $func), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'wrapInTransaction', array('func' => $func), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'commit', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->commit();
    }

    public function rollback()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'rollback', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getClassMetadata', array('className' => $className), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'createQuery', array('dql' => $dql), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'createNamedQuery', array('name' => $name), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'createQueryBuilder', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'flush', array('entity' => $entity), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'clear', array('entityName' => $entityName), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->clear($entityName);
    }

    public function close()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'close', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->close();
    }

    public function persist($entity)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'persist', array('entity' => $entity), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'remove', array('entity' => $entity), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'detach', array('entity' => $entity), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'merge', array('entity' => $entity), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getRepository', array('entityName' => $entityName), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'contains', array('entity' => $entity), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getEventManager', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getConfiguration', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'isOpen', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getUnitOfWork', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getProxyFactory', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'initializeObject', array('obj' => $obj), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'getFilters', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'isFiltersStateClean', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'hasFilters', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return $this->valueHolder1bd53->hasFilters();
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

        $instance->initializer24dcf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder1bd53) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1bd53 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1bd53->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, '__get', ['name' => $name], $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        if (isset(self::$publicPropertiese0daf[$name])) {
            return $this->valueHolder1bd53->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd53;

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

        $targetObject = $this->valueHolder1bd53;
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
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd53;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1bd53;
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
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, '__isset', array('name' => $name), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd53;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1bd53;
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
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, '__unset', array('name' => $name), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bd53;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1bd53;
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
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, '__clone', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        $this->valueHolder1bd53 = clone $this->valueHolder1bd53;
    }

    public function __sleep()
    {
        $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, '__sleep', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;

        return array('valueHolder1bd53');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer24dcf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer24dcf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer24dcf && ($this->initializer24dcf->__invoke($valueHolder1bd53, $this, 'initializeProxy', array(), $this->initializer24dcf) || 1) && $this->valueHolder1bd53 = $valueHolder1bd53;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1bd53;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1bd53;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
