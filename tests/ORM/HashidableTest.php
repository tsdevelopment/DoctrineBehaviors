<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Tests\ORM;

use Knp\DoctrineBehaviors\Tests\AbstractBehaviorTestCase;
use Knp\DoctrineBehaviors\Tests\Fixtures\Entity\HashidableEntity;

final class HashidableTest extends AbstractBehaviorTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoSettingHashId(): void
    {
        $entity = new HashidableEntity();

        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        $id = $entity->getId();
        $this->assertNotNull($id);
        $this->assertSame($id, 1);

        $hashId = $entity->getHashId();
        $this->assertNotNull($hashId);
        $this->assertNotEmpty($hashId);
        $this->assertSame($hashId, 'jR');

        $this->entityManager->clear();
    }
}
