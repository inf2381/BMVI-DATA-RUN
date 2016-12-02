<?php
namespace BMVI\Datarun\Models\Auth\_DataObjects;

use codex\codex\DataObject\BaseClass,
    Doctrine\ORM\Mapping\MappedSuperclass,
    Doctrine\ORM\Mapping\HasLifecycleCallbacks,
    Doctrine\ORM\Mapping\PrePersist,
    Doctrine\ORM\Mapping\ClassMetadata;

abstract class User extends \codex\codex\DataObject\BaseClass
{
    private static $_classMetadata;
    private static $_proxyProperties = array ();

    public function getId() : int
    {
        return $this->_get('id');
    }

    protected function setId(int $newValue)
    {
        $this->_set('id', $newValue);
    }

    public function getName() : string
    {
        return $this->_get('name');
    }

    public function setName(string $newValue)
    {
        $this->_set('name', $newValue);
    }

    public function getFirstName() : string
    {
        return $this->_get('firstName');
    }

    public function setFirstName(string $newValue)
    {
        $this->_set('firstName', $newValue);
    }

    public function clearProxyPropertyCache(string $propertyName = NULL)
    {
        parent::_clearProxyPropertyCache($propertyName);
    }

    public static function createObject(array $properties = array ()) : \BMVI\Datarun\Models\Auth\User
    {
        return parent::_createObject($properties);
    }

    public function delete()
    {
        parent::_delete();
    }

    /**
     * @return array[]
     */
    public static function &getObjects(array $filter = NULL, int $limit = 100, int $offset = 0)
    {
        return parent::_getObjects($filter, $limit, $offset);
    }

    public static function &getObject($filterOrId = NULL) : \BMVI\Datarun\Models\Auth\User
    {
        return parent::_getObject($filterOrId);
    }
    
    final public static function _getProxyProperties() : array
    {
        return self::$_proxyProperties;
    }
    
    final public static function _getMetadata() : ClassMetadata
    {
        if (self::$_classMetadata === null) {
            self::$_classMetadata = \codex\codex\DataObject\Doctrine\ClassMetadata::__set_state(array( 'name' => '\\BMVI\\Datarun\\Models\\Auth\\User', 'namespace' => NULL, 'rootEntityName' => '\\BMVI\\Datarun\\Models\\Auth\\User', 'customGeneratorDefinition' => NULL, 'customRepositoryClassName' => NULL, 'isMappedSuperclass' => false, 'isEmbeddedClass' => false, 'parentClasses' => array (), 'subClasses' => array (), 'embeddedClasses' => array (), 'namedQueries' => array (), 'namedNativeQueries' => array (), 'sqlResultSetMappings' => array (), 'identifier' => array (0 => 'id',), 'inheritanceType' => 1, 'generatorType' => 4, 'fieldMappings' => array ('id' => array ('fieldName' => 'id','type' => 'integer','scale' => 0,'length' => NULL,'unique' => false,'nullable' => false,'precision' => 0,'id' => true,'columnName' => 'id',),'name' => array ('fieldName' => 'name','type' => 'string','scale' => 0,'length' => NULL,'unique' => false,'nullable' => false,'precision' => 0,'columnName' => 'name',),'firstName' => array ('fieldName' => 'firstName','type' => 'string','scale' => 0,'length' => NULL,'unique' => false,'nullable' => false,'precision' => 0,'columnName' => 'firstName',),), 'fieldNames' => array ('id' => 'id','name' => 'name','firstName' => 'firstName',), 'columnNames' => array ('id' => 'id','name' => 'name','firstName' => 'firstName',), 'discriminatorValue' => 0, 'discriminatorMap' => array (0 => 'BMVI\\Datarun\\Models\\Auth\\User',), 'discriminatorColumn' => NULL, 'table' => array ('name' => '_Auth_User','options' => array ('charset' => 'utf8','collate' => 'utf8_general_ci',),), 'lifecycleCallbacks' => array (), 'entityListeners' => array (), 'associationMappings' => array (), 'isIdentifierComposite' => false, 'containsForeignIdentifier' => false, 'idGenerator' => NULL, 'sequenceGeneratorDefinition' => NULL, 'tableGeneratorDefinition' => NULL, 'changeTrackingPolicy' => 1, 'isVersioned' => NULL, 'versionField' => NULL, 'cache' => NULL, 'reflClass' => NULL, 'isReadOnly' => false, 'namingStrategy' => \codex\codex\DataObject\Doctrine\DefaultNamingStrategy::__set_state(array()), 'reflFields' => array (), 'instantiator' => \codex\codex\DataObject\Doctrine\Instantiator::__set_state(array()),));
            static::_registerDataTypes(self::$_classMetadata);
        }
        return self::$_classMetadata;
    }
}