<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class B
 * @package App\Entity
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"b:read"}, "swagger_definition_name"="Read"},
 *     denormalizationContext={"groups"={"b:write"}, "swagger_definition_name"="Write"}
 * )
 */
class B
{
    /**
     * @var int
     *
     * @Groups({"b:read"})
     */
    private $id;

    /**
     * @var string
     *
     * @Groups({"b:read", "b:write", "a:read", "a:write"})
     */
    private $fieldB;

    /**
     * @var A
     *
     * @Groups({"b:read", "b:write"})
     */
    private $a;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFieldB(): string
    {
        return $this->fieldB;
    }

    public function setFieldB(string $fieldB): void
    {
        $this->fieldB = $fieldB;
    }

    public function getA(): A
    {
        return $this->a;
    }

    public function setA(A $a): void
    {
        $this->a = $a;
    }

}