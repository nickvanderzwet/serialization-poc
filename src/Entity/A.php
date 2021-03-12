<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class A
 * @package App\Entity
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"a:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"a:write"}, "swagger_definition_name"="Write"}
 * )

 */
class A
{

    /**
     * @var int
     *
     * @Groups({"a:read"})
     */
    private $id;

    /**
     * @var string
     *
     * @Groups({"a:read", "a:write", "b:read", "b:write"})
     */
    private $fieldA;

    /**
     * @var B
     *
     * @Groups({"a:read", "a:write"})
     */
    private $b;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     *
     */
    public function getFieldA(): string
    {
        return $this->fieldA;
    }

    /**
     * @param string $fieldA
     */
    public function setFieldA(string $fieldA): void
    {
        $this->fieldA = $fieldA;
    }

    /**
     * @return B
     */
    public function getB(): B
    {
        return $this->b;
    }

    /**
     * @param B $b
     */
    public function setB(B $b): void
    {
        $this->b = $b;
    }

}
