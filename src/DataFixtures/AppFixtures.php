<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Iphone 14");
        $product->setDescription("Apple iPhone 14 with advanced features and sleek design.");
        $product->setSize(10);

        $manager->persist($product);

        $manager->flush();
    }
}
