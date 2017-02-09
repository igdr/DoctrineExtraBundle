<?php
namespace Igdr\DoctrineExtraBundle\Utils;

use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class DoctrineAwareTrait
 */
trait DoctrineAwareTrait
{
    /**
     * @var Registry
     */
    protected $doctrine;

    /**
     * @param Registry $doctrine
     *
     * @return $this
     */
    final public function setDoctrine(Registry $doctrine)
    {
        $this->doctrine = $doctrine;

        return $this;
    }
}