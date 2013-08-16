<?php
namespace Application\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Application\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('testuser');
        $user->setPassword('test123');
        $user->setEmail('test@example.com');

        $manager->persist($user);
        $manager->flush();
    }
}
