<?php
namespace BMVI\Datarun\Models\Auth;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

echo 888;

/**
 * @Entity
 */
class User extends _DataObjects\User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $name;
    
    /**
     * @Column(type="string")
     */
    protected $firstName;
}