<?php
namespace Igdr\DoctrineExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DescriptionEntityTrait
 */
trait DescriptionEntityTrait
{
    /**
     * @ORM\Column(name="description", type="text", nullable=true)
     *
     * @var string
     */
    protected $description = "";

    /**
     * Set description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description = null)
    {
        $this->description = is_null($description) ? "" : $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription():string
    {
        return (string) $this->description;
    }
}