<?php

namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extend entity to using id.
 */
trait EntityIdTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
