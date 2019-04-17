<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class   AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {   
        $bikes = [
            'TREK MADONE SLR 8 2019 ', 'TREK MADONE SL 6 2019', 'H6L Tempest blue', 'm6l acier vitesses lagoon blue', 'M6L Acier Flame lacquer', 'Townie Go! 8D Ladies', 'Loft Go 8I', 'Café Moto Go! Men\'s',
            'FX 2 WSD Disc 2019', 'Travel 2019', 'Editor 2019', 'Loft 7i Ladies\'EQ', 'FX 3 Disc 2019', 'DS 2 WSD 2019', 'SPEEDSTER 50', 'DOMANE AL 2', 'SPEEDSTER 40', 'CONDESSA SPEEDSTER 35',
            'AXI SPORT', 'AUDACIO 100 CP', 'STREETLAND 28', "COMFORT 42", "COMFORT 40", "X KROSS LADY TY300 3X7", "X KROSS MAN TY300 3X7", "KATU 50", "COMFORT 42 pack", "FX 1", "COMFORT 30", "COMFORT 32",
            'FX 1 STAGGER', 'TREKKING 100', 'TREKKING 100 FEMME', 'LUNAPIENA 28"LADY 7V REVO', 'LUNAPIENA 28"MAN 7V REVO', 'X KROSS LADY ACERA 3X7', 'X KROSS MAN ACERA 3X7', 'BLUECITY 28" MAN 3X7 STI',
            'BLUECITY 28" LADY 3X7 STI'
        ];


        for ($i = 0; $i < count($bikes); $i++)
        {
            $bike = new Product();
            $bikeName = $bikes[$i];
            $bike->setName($bikeName);
            $bike->setDescription('Ce vélo est exceptionel, il est equipé de pneus interactifs et d\'une selle super confort flex therma ainsi que 5 vitesses');
            $bike->setPrice(mt_rand(500, 800));
            $bike->setImage('http://placeimg.com/740/480/tech');
            $bike->setType('bike');
            $manager->persist($bike);
        }

        for($i=1;$i<10;$i++)
        {
            $accessory = new Product();
            $accessory->setName('Accessoire n°'.$i);
            $accessory->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
            $accessory->setPrice(mt_rand(6, 20));
            $accessory->setImage('https://placeimg.com/640/480/tech');
            $accessory->setType('polyvalent');
            $manager->persist($accessory);
        }

        $users = [];
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            $roles = (1 === $i) ? ['ROLE_ADMIN'] : ['ROLE_USER'];

            $user = new User();
            $user->setRoles($roles);
            $user->setPassword(
                $this->passwordEncoder->encodePassword($user, 'test')
            );
            $user->setUsername((1 === $i) ? 'admin@admin.admin' : $faker->email);
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setBirthdate($faker->dateTimeThisCentury);
            $manager->persist($user);
            $users[$i] = $user;
        }
        $manager->flush();
    }
}
