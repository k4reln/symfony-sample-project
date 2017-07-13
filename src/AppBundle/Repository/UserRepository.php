<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use AppBundle\Exception\Model\NotFoundException;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{

    /**
     * @param int $id
     * @return User
     * @throws NotFoundException
     */
    public function get($id)
    {
        $user = $this->find($id);

        if (!$user) {
            throw new NotFoundException("User with id $id not found.");
        }

        return $user;
    }

}
