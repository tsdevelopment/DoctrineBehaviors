<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Tests\Fixtures\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\HashidableInterface;
use Knp\DoctrineBehaviors\Model\Hashidable\HashidableTrait;

/**
 * @ORM\Entity
 */
class HashidableEntity implements HashidableInterface
{
    use HashidableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function getHashidableField(): string
    {
        return 'id';
    }
}
