<?php

namespace AppBundle\Doctrine\DBAL\Types;

use Cake\Chronos\Date;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\DateType;

class ChronosDateType extends DateType
{

    const CHRONOS_DATE = 'chronos_date';

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return self::CHRONOS_DATE;
    }

    /**
     * {@inheritDoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $dateTime = parent::convertToPHPValue($value, $platform);

        return Date::instance($dateTime);
    }

}
