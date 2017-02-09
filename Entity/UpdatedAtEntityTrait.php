<?php
namespace Igdr\DoctrineExtraBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * UpdatedAtTrait
 */
trait UpdatedAtEntityTrait
{
    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     *
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->setUpdatedAt(new \DateTime());
    }
}
