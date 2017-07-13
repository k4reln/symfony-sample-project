<?php

namespace AppBundle\Exception\Model;

class NotFoundException extends \Exception
{

    public function __construct($message)
    {
        parent::__construct($message);
    }

}
