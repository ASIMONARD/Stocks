<?php

namespace App\DataFixtures;

use App\Entity\EtatStocks;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $date = new \DateTime();

        $etatStocks = new EtatStocks();
        $etatStocks->setDate($date);
        $etatStocks->setDescription('Stock initial');
        $etatStocks->setQuantityEntered('20');
        $etatStocks->setUpEntered('30');
        $etatStocks->setQuantityStocks('20');
        $etatStocks->setUpStocks('30');
        $etatStocks->setAmountStocks();
        $etatStocks->setMethodCump(False);
        $etatStocks->setMethodPepps(True);
        $manager->persist($etatStocks);

        $etatStocks = new EtatStocks();
        $etatStocks->setDate($date);
        $etatStocks->setDescription('Sortie');
        $etatStocks->setQuantityOutput('13');
        $etatStocks->setUpOutput('30');
        $etatStocks->setAmountOutput();
        $etatStocks->setQuantityStocks('7');
        $etatStocks->setUpStocks('30');
        $etatStocks->setAmountStocks();
        $etatStocks->setMethodCump(False);
        $etatStocks->setMethodPepps(True);
        $manager->persist($etatStocks);

        $etatStocks = new EtatStocks();
        $etatStocks->setDate($date);
        $etatStocks->setDescription('Entrée');
        $etatStocks->setQuantityEntered('20');
        $etatStocks->setUpEntered('32');
        $etatStocks->setAmountEntered();
        $etatStocks->setQuantityStocks('20');
        $etatStocks->setUpStocks('32');
        $etatStocks->setAmountStocks();
        $etatStocks->setMethodCump(False);
        $etatStocks->setMethodPepps(True);
        $manager->persist($etatStocks);

        $etatStocks = new EtatStocks();
        $etatStocks->setDate($date);
        $etatStocks->setDescription('Sortie');
        $etatStocks->setQuantityOutput('7');
        $etatStocks->setUpOutput('30');
        $etatStocks->setAmountOutput();
        $etatStocks->setQuantityStocks('0');
        $etatStocks->setUpStocks('30');
        $etatStocks->setAmountStocks();
        $etatStocks->setMethodCump(False);
        $etatStocks->setMethodPepps(True);
        $manager->persist($etatStocks);

        $etatStocks = new EtatStocks();
        $etatStocks->setDate($date);
        $etatStocks->setDescription('Sortie');
        $etatStocks->setQuantityOutput('8');
        $etatStocks->setUpOutput('32');
        $etatStocks->setAmountOutput();
        $etatStocks->setQuantityStocks('12');
        $etatStocks->setUpStocks('32');
        $etatStocks->setAmountStocks();
        $etatStocks->setMethodCump(False);
        $etatStocks->setMethodPepps(True);
        $manager->persist($etatStocks);

        $manager->flush();
    }
}
