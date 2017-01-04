<?php

namespace CategoriesDataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;

class CategoriesFixtureLoader implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fantasy = new Categories();
        $fantasy->setName('fantasy');
        
        $horror = new Categories();
        $horror->setName('horror');
        
        $dramat = new Categories();
        $dramat->setName('dramat');
        
        $scifi = new Categories();
        $scifi->setName('scifi');

        $manager->persist($fantasy);
        $manager->persist($horror);
        $manager->persist($dramat);
        $manager->persist($scifi);
        $manager->flush();
    }
}
