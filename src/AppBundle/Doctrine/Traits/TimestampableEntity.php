<?php

namespace AppBundle\Doctrine\Traits;

use Cake\Chronos\Chronos;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

trait TimestampableEntity
{

    /**
     * @var Chronos
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="chronos_datetime")
     */
    protected $createdAt;

    /**
     * @var Chronos
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="chronos_datetime")
     */
    protected $updatedAt;

    /**
     * @param  Chronos $createdAt
     * @return $this
     */
    public function setCreatedAt(Chronos $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Chronos
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param  Chronos $updatedAt
     * @return $this
     */
    public function setUpdatedAt(Chronos $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Chronos
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}
