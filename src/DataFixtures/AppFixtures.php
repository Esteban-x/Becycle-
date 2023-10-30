<?php

namespace App\DataFixtures;

use Symfony\Component\Validator\Constraints\DateTime;
use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Tag;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class  AppFixtures extends Fixture
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

        $casques = [
            ['Casque KENNY FURTIF Gris/Jaune Fluo 2019', 'casque1.jpg'], ['Casque MAVIC AKSIUM ELITE Blanc/Noir', 'casque2.jpg'], ['Casque MAVIC AKSIUM ELITE Noir/Blanc', 'casque3.jpg'], ['Casque MET STRALE Noir/Rouge', 'casque4.jpg'], ['Casque MET STRALE Noir', 'casque5.jpg'], ['Casque GIRO ATMOS 2 Blanc Mat/Argent','casque6.jpg'], 
        ['Casque ZERO RH+ LAMBO Noir/Argent','casque7.jpg'], ['Casque GIRO SYNTAX MIPS Noir Mat 2019','casque8.jpg'], ['Casque KASK MOJITO Blanc','casque9.jpg'], ['Casque KASK MOJITO X Noir Mat 2019','casque10.jpg'], ['Casque KASK MOJITO Noir Mat/Blanc','casque11.jpg'], ['Casque MAVIC KSYRIUM PRO MIPS Jaune Fluo/Noir','casque12.jpg'],
        ['Casque KASK MOJITO Noir Mat','casque13.jpg'], ['Casque KASK MOJITO Noir Mat/Rouge','casque14.jpg'], ['Casque ZERO RH+ Z ALPHA MIPS Noir','casque15.jpg']
        ];

        $lunettes = [
            ['Lunettes XLC TAHITI Argent/Noir', 'lunette1.jpg'], ['Lunettes UVEX SPORTSTYLE 204 Noir','lunette2.jpg'], ['Lunettes UVEX SPORTSTYLE 223 Noir','lunette3.jpg'], ['Lunettes UVEX SPORTSTYLE 204 Bleu','lunette4.jpg'], ['Lunettes UVEX SPORTSTYLE 223 Blanc','lunette5.jpg'], ['Lunettes UVEX SPORTSTYLE 223 Noir/Orange','lunette6.jpg'], ['Lunettes UVEX SPORTSTYLE 204 Gris','lunette7.jpg'],['Lunettes XLC JAMAICA Blanc','lunette8.jpg'],['Lunettes XLC MALDIVES Noir','lunette9.jpg'],['Lunettes NORTHWAVE TEAM Rouge/Noir','lunette10.jpg']
        ];

        $gants = [
            ['Gants DEXSHELL ULTRA FEX Jaune','gant1.jpg'],['Gants ENDURA DELUGE II Noir','gant2.jpg'],['Gants WOWOW DARK GLOVES 1.0 Réfléchissants Gris','gant3.jpg'],['Gants GORE WEAR C3 URBAN Noir','gant4.jpg'],['Gants GORE WEAR C3 URBAN Rouge','gant5.jpg'],['Gants BBB WINTER COLDSHIELD Gris','gant6.jpg'],['Gants BBB WINTER COLDSHIELD Gris','gant7.jpg'],['Gants Courts GORE WEAR C3 URBAN Noir','gant8.jpg'],['Gants GORE WEAR M GORE WINDSTOPPER Noir/Jaune Fluo','gant9.jpg'],['Gants GORE WEAR M GORE WINDSTOPPER Noir/Jaune Fluo','gant10.jpg']
        ];

        $sacs = [
            ['Sac à Dos ORTLIEB MESSENGER','sac1.jpg'],['Sac à Dos BROOKS DALSTON - S','sac2.jpg'],['Sac à Dos BROOKS DALSTON - M','sac3.jpg'],['Sac à Dos ORTLIEB VELOCITY HIGH VISIBILITY','sac4.jpg'],['Sac à Dos BROOKS PICKZIP LARGE','sac5.jpg'],['Sac à Dos MOONRIDE LED CONNECT XS Gris','sac6.jpg'],['Sac à Dos MOONRIDE LED CONNECT XS Gris','sac7.jpg'],['Sac à Dos HPA DRY BACKPACK Noir','sac8.jpg'],['Sac à Dos HPA DRY BACKPACK Bleu','sac9.jpg'],['Sac à Dos BROOKS HACKNEY','sac10.jpg'],
        ];
        
        $accessories = [
            ['Casque KENNY FURTIF Gris/Jaune Fluo 2019', 'casque1.jpg'], ['Casque MAVIC AKSIUM ELITE Blanc/Noir', 'casque2.jpg'], ['Casque MAVIC AKSIUM ELITE Noir/Blanc', 'casque3.jpg'], ['Casque MET STRALE Noir/Rouge', 'casque4.jpg'], ['Casque MET STRALE Noir', 'casque5.jpg'], ['Casque GIRO ATMOS 2 Blanc Mat/Argent','casque6.jpg'], 
            ['Casque ZERO RH+ LAMBO Noir/Argent','casque7.jpg'], ['Casque GIRO SYNTAX MIPS Noir Mat 2019','casque8.jpg'], ['Casque KASK MOJITO Blanc','casque9.jpg'], ['Casque KASK MOJITO X Noir Mat 2019','casque10.jpg'], ['Casque KASK MOJITO Noir Mat/Blanc','casque11.jpg'], ['Casque MAVIC KSYRIUM PRO MIPS Jaune Fluo/Noir','casque12.jpg'],
            ['Casque KASK MOJITO Noir Mat','casque13.jpg'], ['Casque KASK MOJITO Noir Mat/Rouge','casque14.jpg'], ['Casque ZERO RH+ Z ALPHA MIPS Noir','casque15.jpg'], ['Lunettes XLC TAHITI Argent/Noir', 'lunette1.jpg'], ['Lunettes UVEX SPORTSTYLE 204 Noir','lunette2.jpg'], ['Lunettes UVEX SPORTSTYLE 223 Noir','lunette3.jpg'], ['Lunettes UVEX SPORTSTYLE 204 Bleu','lunette4.jpg'], ['Lunettes UVEX SPORTSTYLE 223 Blanc','lunette5.jpg'], ['Lunettes UVEX SPORTSTYLE 223 Noir/Orange','lunette6.jpg'], ['Lunettes UVEX SPORTSTYLE 204 Gris','lunette7.jpg'],['Lunettes XLC JAMAICA Blanc','lunette8.jpg'],['Lunettes XLC MALDIVES Noir','lunette9.jpg'],['Lunettes NORTHWAVE TEAM Rouge/Noir','lunette10.jpg'],
            ['Gants DEXSHELL ULTRA FEX Jaune','gant1.jpg'],['Gants ENDURA DELUGE II Noir','gant2.jpg'],['Gants WOWOW DARK GLOVES 1.0 Réfléchissants Gris','gant3.jpg'],['Gants GORE WEAR C3 URBAN Noir','gant4.jpg'],['Gants GORE WEAR C3 URBAN Rouge','gant5.jpg'],['Gants BBB WINTER COLDSHIELD Gris','gant6.jpg'],['Gants BBB WINTER COLDSHIELD Gris','gant7.jpg'],['Gants Courts GORE WEAR C3 URBAN Noir','gant8.jpg'],['Gants GORE WEAR M GORE WINDSTOPPER Noir/Jaune Fluo','gant9.jpg'],['Gants GORE WEAR M GORE WINDSTOPPER Noir/Jaune Fluo','gant10.jpg'], ['Sac à Dos ORTLIEB MESSENGER','sac1.jpg'],['Sac à Dos BROOKS DALSTON - S','sac2.jpg'],['Sac à Dos BROOKS DALSTON - M','sac3.jpg'],['Sac à Dos ORTLIEB VELOCITY HIGH VISIBILITY','sac4.jpg'],['Sac à Dos BROOKS PICKZIP LARGE','sac5.jpg'],['Sac à Dos MOONRIDE LED CONNECT XS Gris','sac6.jpg'],['Sac à Dos MOONRIDE LED CONNECT XS Gris','sac7.jpg'],['Sac à Dos HPA DRY BACKPACK Noir','sac8.jpg'],['Sac à Dos HPA DRY BACKPACK Bleu','sac9.jpg'],['Sac à Dos BROOKS HACKNEY','sac10.jpg']
        ];
        
        $categories = [
            ['Vtt', 'vtt.png'], ['Vtc', 'vtc.png' ], ['Ville', 'ville.png'], ['Electrique', 'electric.png'], ['Homme', 'boy.png'], ['Femme', 'girl.png'], ['Enfant', 'kid.png']
        ];

        $acategories = [
            ['Casques', 'casque.png'], ['Gants', 'gant.png'], ['Lunettes', 'lunette.png'], ['Sacs', 'sac.png']
        ];

        $l=[];

       

        //Catégories d'accessoires
        for($i=1;$i<=count($acategories);$i++)
        {
            $acategory = new Category();
            $acategoryname = $acategories[$i-1][0];
            $acategory->setName($acategoryname);
            $acategory->setLogo($acategories[$i-1][1]);
            $acategory->setType('accessoires');
            $manager->persist($acategory);
            $l[$i] = $acategory;
        }

        $j=[];
       
        //Catégories de vélos
        for($i=1;$i<=count($categories);$i++)
        {
            $category = new Category();
            $categoryname = $categories[$i-1][0];
            $category->setName($categoryname);
            $category->setLogo($categories[$i-1][1]);
            $category->setType('velo');
            $manager->persist($category);
            $j[$i] = $category;
        }

        //Tous les vélos
        for ($i = 0; $i < count($bikes); $i++)
        {   
            $bike = new Product();
            $bikeName = $bikes[$i][0];
            $bike->setName($bikeName);
            $bike->setDescription('Vélo de très bonne qualité et très confortable.');
            $bike->setPrice(mt_rand(500, 800));
            $bike->setImage($bikes[$i][1]);
            $bike->setType('bike');
            $bike->setCategory($j[mt_rand(1, 7)]);
            $manager->persist($bike);
        }

        //Les casques
        for ($i = 1; $i < count($casques); $i++)
        {   
            $casque = new Product();
            $casqueName = $casques[$i-1][0];
            $casque->setName($casqueName);
            $casque->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
            $casque->setPrice(mt_rand(50, 87));
            $casque->setImage($casques[$i-1][1]);
            $casque->setType('casque');
            $casque->setCategory($l[1]);
            $manager->persist($casque);
        }

        //les lunettes
        for ($i = 1; $i < count($lunettes); $i++)
        {   
            $lunette = new Product();
            $lunetteName = $lunettes[$i-1][0];
            $lunette->setName($lunetteName);
            $lunette->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
            $lunette->setPrice(mt_rand(17, 29.99));
            $lunette->setImage($lunettes[$i-1][1]);
            $lunette->setType('lunette');
            $lunette->setCategory($l[3]);
            $manager->persist($lunette);
        }

        //les gants
        for ($i = 1; $i < count($gants); $i++)
        {   
            $gant = new Product();
            $gantName = $gants[$i-1][0];
            $gant->setName($gantName);
            $gant->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
            $gant->setPrice(mt_rand(17, 29.99));
            $gant->setImage($gants[$i-1][1]);
            $gant->setType('gant');
            $gant->setCategory($l[2]);
            $manager->persist($gant);
        }

         //les sacs
         for ($i = 1; $i < count($sacs); $i++)
         {   
             $sac = new Product();
             $sacName = $sacs[$i-1][0];
             $sac->setName($sacName);
             $sac->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
             $sac->setPrice(mt_rand(17, 29.99));
             $sac->setImage($sacs[$i-1][1]);
             $sac->setType('sac');
             $sac->setCategory($l[4]);
             $manager->persist($sac);
         }

        //Les produits random que l'on affiche sur la page home accessoires
        for($i=1;$i<count($accessories);$i++)
        {
            $accessory = new Product();
            $accessoryname = $accessories[$i-1][0];
            $accessory->setName($accessoryname);
            $accessory->setDescription('voici un très bon accessoire pour la randonné en velo sur de grandes distances.');
            $accessory->setPrice(mt_rand(20, 47));
            $accessory->setImage($accessories[$i-1][1]);
            $accessory->setType('accessoire');
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
