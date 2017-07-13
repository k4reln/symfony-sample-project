<?php

namespace AppBundle\Listener\Timestampable\Mapping\Event\Adapter;

use Gedmo\Mapping\Event\Adapter\ORM as BaseAdapterORM;
use Gedmo\Timestampable\Mapping\Event\TimestampableAdapter;

class ORM extends BaseAdapterORM implements TimestampableAdapter
{

    /**
     * {@inheritDoc}
     */
    public function getDateValue($meta, $field)
    {
        $mapping = $meta->getFieldMapping($field);

        if (isset($mapping['type']) && $mapping['type'] === 'integer') {
            return time();

        } elseif (isset($mapping['type']) && $mapping['type'] == 'zenddate') {
            return new \Zend_Date();

        }

        return \DateTime::createFromFormat('U.u', number_format(microtime(true), 6, '.', ''))
            ->setTimeZone(new \DateTimeZone(date_default_timezone_get()));
    }

}
