<?php
namespace OrmExample;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "roles")]
class Role
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int|null $id = null;

    #[ORM\Column(type: "string")]
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getId(): int|null
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}