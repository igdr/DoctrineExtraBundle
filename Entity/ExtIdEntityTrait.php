<?php

namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extend entity to using extId.
 */
trait ExtIdEntityTrait
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $extId;

    /**
     * Set extId.
     *
     * @param string $extId
     *
     * @return $this
     */
    public function setExtId(string $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Get extId.
     *
     * @return string
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
}
