<?php

namespace AppBundle\Listener\Timestampable\Mapping\Driver;

use Gedmo\Timestampable\Mapping\Driver\Annotation as BaseAnnotation;

class Annotation extends BaseAnnotation
{

    /**
     * {@inheritDoc}
     */
    protected $validTypes = array(
        'date',
        'time',
        'datetime',
        'datetimetz',
        'timestamp',
        'zenddate',
        'vardatetime',
        'integer',
        'chronos_datetime',
    );

}
