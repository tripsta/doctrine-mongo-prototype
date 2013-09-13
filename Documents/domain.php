<?php

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Employee
{

	/** @ODM\Id */
    private $id=1;

    /** @ODM\String */
     public $name;

    // ...
}