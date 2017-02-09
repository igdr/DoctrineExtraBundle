<?php
namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * DatePeriodTrait
 */
trait DatePeriodEntityTrait
{
    /**
     * @ORM\Column(name="date_start", type="date", nullable=true)
     *
     * @var DateTime
     */
    private $dateStart;

    /**
     * @ORM\Column(name="date_end", type="date", nullable=true)
     *
     * @var DateTime
     */
    private $dateEnd;

    /**
     * @return DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param DateTime $dateEnd
     *
     * @return $this
     */
    public function setDateEnd(DateTime $dateEnd = null)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param DateTime $dateStart
     *
     * @return $this
     */
    public function setDateStart(DateTime $dateStart = null)
    {
        $this->dateStart = $dateStart;

        return $this;
    }
} 