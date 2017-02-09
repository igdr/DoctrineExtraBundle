<?php
namespace Igdr\DoctrineExtraBundle\Utils;

use Doctrine\ORM\EntityManager;

/**
 * Class EntityManagerAwareTrait
 */
trait EntityManagerAwareTrait
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $em
     *
     * @return $this
     */
    final public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;

        return $this;
    }
}