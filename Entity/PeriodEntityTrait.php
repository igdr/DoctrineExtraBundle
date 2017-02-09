<?php

namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extend entity to start and stop date field.
 */
trait PeriodEntityTrait
{
    /**
     * @var \Datetime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \Datetime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $stopDate;

    /**
     * @param \Datetime $startDate
     *
     * @return $this
     */
    public function setStartDate(\Datetime $startDate = null)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getStartDate(): ?\Datetime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $stopDate
     *
     * @return $this
     */
    public function setStopDate(\DateTime $stopDate = null)
    {
        $this->stopDate = $stopDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStopDate(): ?\Datetime
    {
        return $this->stopDate;
    }
}
