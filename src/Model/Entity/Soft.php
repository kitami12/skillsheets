<?php
// src/Model/Entity/Auth_information.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Soft extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
    }