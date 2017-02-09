<?php

namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extend entity to using slug.
 */
trait SlugEntityTrait
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $slug;

    /**
     * @param string $slug
     *
     * @return $this
     */
    public function setSlug(string $slug = null)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
}
