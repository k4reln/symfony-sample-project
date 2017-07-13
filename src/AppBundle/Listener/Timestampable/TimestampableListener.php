<?php

namespace AppBundle\Listener\Timestampable;

use Gedmo\Timestampable\TimestampableListener as BaseTimestampableListener;

class TimestampableListener extends BaseTimestampableListener
{

    /**
     * {@inheritDoc}
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }

}
