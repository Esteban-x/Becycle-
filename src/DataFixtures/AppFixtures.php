<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Tag;
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
            ['TREK MADONE SLR 8 2019', 'velo-homme-01.jpg'], ['TREK MADONE SL 6 2019', 'velo-homme-02.jpg'], ['H6L Tempest blue', 'velo-homme-03.jpg'], ['m6l acier vitesses lagoon blue', 'velo-homme-04.jpg'], ['M6L Acier Flame lacquer','velo-homme-05.jpg'], ['Townie Go! 8D Ladies','velo-femme-01.jpg'], ['Loft Go 8I','velo-homme-06.jpg'], ['Café Moto Go! Men\'s','velo-homme-07.jpg'],
            ['FX 2 WSD Disc 2019','velo-homme-08.jpg'], ['Travel 2019','velo-homme-09.jpg'], ['Editor 2019','velo-homme-10.jpg'], ['Loft 7i Ladies\'EQ','velo-femme-02.jpg'], ['FX 3 Disc 2019','velo-homme-11.jpg'],
            ['AXI SPORT','velo-homme-12.jpg'], ['AUDACIO 100 CP','velo-homme-13.jpg'], ['STREETLAND 28','velo-homme-14.jpg'], ["COMFORT 42",'velo-homme-15.jpg'],[ "COMFORT 40",'velo-homme-16.jpg'], ["X KROSS LADY TY300 3X7",'velo-femme-03.jpg'], ["X KROSS MAN TY300 3X7",'velo-homme-17.jpg'], ["KATU 50 LADY",'velo-femme-04.jpg'], ["COMFORT 42 LADY pack",'velo-femme-05.jpg'], ["FX 1 LADY",'velo-femme-06.jpg'], ["COMFORT 30 ladie's",'velo-femme-07.jpg'], ["COMFORT 32 ladie's",'velo-femme-08.jpg'],
            ['FX 1 STAGGER','velo-femme-09.jpg'], ['TREKKING 100 FEMME','velo-femme-10.jpg'], ['TREKKING 100 FEMME','velo-femme-11.jpg'], ['LUNAPIENA 28"LADY 7V REVO','velo-femme-12.jpg'], ['LUNAPIENA 28"MAN 7V REVO','velo-homme-03.jpg'],[ 'X KROSS LADY ACERA 3X7','velo-femme-13.jpg'], ['X KROSS MAN ACERA 3X7','velo-homme-08.jpg'], ['BLUECITY 28" FEMME 3X7 STI','velo-femme-14.jpg'],
            ['BLUECITY 28 ladie\'s','velo-femme-15.jpg'],['LADY 3X7 STI LADY','velo-femme-16.jpg']
        ];

      
        
        $categories = [
            ['Vtt', 'vtt.png'], ['Vtc', 'vtc.png' ], ['Ville', 'ville.png'], ['Electrique', 'electric.png']
        ];

        $j=[];
       


        for($i=1;$i<=count($categories);$i++)
        {
            $category = new Category();
            $categoryname = $categories[$i-1][0];
            $category->setName($categoryname);
            $category->setLogo($categories[$i-1][1]);
            $manager->persist($category);
            $j[$i] = $category;
        }


        for ($i = 0; $i < count($bikes); $i++)
        {   
            $bike = new Product();
            $bikeName = $bikes[$i][0];
            $bike->setName($bikeName);
            $bike->setDescription('Vélo de très bonne qualité et très confortable.');
            $bike->setPrice(mt_rand(500, 800));
            $bike->setImage($bikes[$i][1]);
            $bike->setType('bike');
            $bike->setCategory($j[mt_rand(1, 4)]);
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
