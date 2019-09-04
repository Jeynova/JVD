<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Picture;
use App\Entity\Tag;
use Faker\Factory;
use Faker\Generator;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserPictureFixtures extends Fixture
{


  private static $tags = [
  'national',
  'coths',
  'shop',
  'home',
  'maitreya',
  'outside',
  'design',
  'sunset',
  'beach',
  'water',
  'sky',
  'flower',
  'nature',
  'blue',
  'night',
  'white',
  'tree',
  'green',
  'food',
  'old',
  'music',
  'new',
  'moon',
  'orange',
  'garden'
];

private static $tabId = [];

public function __construct(UserPasswordEncoderInterface $passwordEncoder)
{
    $this->passwordEncoder = $passwordEncoder;
}

    public function load(ObjectManager $manager)
    {

      $faker = Factory::create();




        for ($i=0; $i <=25; $i++) {

            //$tabId[]=$a[$i]->getId();

            $user = new User();
            $user->setUsername($faker->firstName)
                ->setCountry($faker->countryCode)
                ->setIsValidated(1)
                ->setRoles(["ROLE_USER"])
                ->setEmail($faker->email)
                ->setPassword(
                  $this->passwordEncoder->encodePassword(
                    $user,
                    "123456"
                    )
                  )
            ->setAvatar('3_avatar512-5d6e12f2463d8.png');
                  $manager->persist($user);
}
$manager->flush();
$a= $manager->getRepository(User::class);
$a=$a->findAll();


for ($i=0; $i <=25 ; $i++) {
    $rand=rand(0,(count($a)-1));
    $picture = new Picture();
    $picture->setName($faker->company)
          ->setTitle($faker->catchPhrase)
          ->setImage($faker->imageUrl($width = rand(500,2000), $height = rand(500,2000)))
          ->setDate(new \DateTime())
          ->setDescription($faker->sentence($nbWords = 6, $variableNbWords = true))
          ->setUser($a[$rand]);
    $manager->persist($picture);
}




    $manager->flush();
    for ($i=0; $i < count(self::$tags) ; $i++) {

        $tag = new Tag();
        $tag->setName(self::$tags[$i]);
        $manager->persist($tag);
}




    $manager->flush();
}
}
