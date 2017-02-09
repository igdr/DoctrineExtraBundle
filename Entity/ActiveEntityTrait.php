<?php

namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extend entity to use active field.
 */
trait ActiveEntityTrait
{
    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $active = false;

    /**
     * @param bool $active
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function isActive(): bool
    {
        return (bool) $this->active;
    }
}
