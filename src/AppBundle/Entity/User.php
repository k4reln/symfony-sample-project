<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $contracts;

    public function __construct()
    {
        parent::__construct();

        $this->contracts = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}
