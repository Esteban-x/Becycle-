<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use App\Entity\Bike;
use App\Entity\Accessory;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1;$i<30;$i++)
        {
            $bike = new Bike();
            $bike->setName('Velo n°'.$i);
            $bike->setDescription('Ce velo est exceptionel, il est equipé de pneus interactive et d\'une selle supert confort flex therma ainsi que 5vitesses homologué');
            $bike->setPrice(mt_rand(500, 800));
            $bike->setImage('http://placeimg.com/640/480/people');   
            $manager->persist($bike);
        }
        $manager->flush();

        for($i=1;$i<10;$i++)
        {
            $accessory = new Accessory();
            $accessory->setName('Accessoire n°'.$i);
            $accessory->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
            $accessory->setPrice(mt_rand(6, 20));
            $accessory->setImage('https://placeimg.com/640/480/tech');
            $accessory->setCaract('polyvalent');
            $manager->persist($accessory);
        }

        $manager->flush();
    }
}
