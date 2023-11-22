<?php
    require 'vendor/autoload.php';

    use Esn\Entity\Company;
    use Esn\Entity\Employee;



    $e1 = new Employee();
    $e2 = new Employee();
    $e3 = new Employee();
    $e4 = new Employee();


    $e1->setName('Toi');
    $e2->setName('Moi');
    $e3->setName('Lui');
    $e4->setName('Elle');

    $e1->setProfile('s');
    $e2->setProfile('j');
    $e3->setProfile('s');
    $e4->setProfile('c');

    //Utilisateur malveillant
    $e1->setSalary(9500000);

    $employees = [$e1,$e2,$e3,$e4];
    foreach($employees as $e)
        print("Nom : " . $e->getName() . " / Salaire : " . $e->getSalary() . "\n");


    $c = new Company();
    $c->setName('Company');

    $c->addCollabs($e1);
    $c->addCollabs($e2);
    $c->addCollabs($e3);

    //Utilisateur imprudent
    $c->addCollabs($e2);

    //Utilisateur malveillant
    $c->setNbDev(150);

    print("\nNom Societe : " . $c->getName() . " / Nombre Dev " . $c->getNbDev(). "\n");

    $c->delCollabs($e1);
    $c->delCollabs($e2);
    $c->delCollabs($e3);

    //Utilisateur imprudent
    $c->delCollabs($e3);
    print("\nNom Societe : " . $c->getName() . " / Nombre Dev " . $c->getNbDev(). "\n");




    