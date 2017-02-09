<?php
namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SortableEntityTrait
 */
trait SortableEntityTrait
{
    /**
     * @ORM\Column(name="ordering", nullable=false, options={"default"="500", "unsigned"="true"})
     *
     * @var int
     */
    protected $ordering = 500;

    /**
     * @param int $ordering
     *
     * @return $this
     */
    public function setOrdering(int $ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrdering(): int
    {
        return (int) $this->ordering;
    }
} 