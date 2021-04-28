<?php

namespace App\Controller\Admin;

use App\Entity\PaiementClient;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PaiementClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaiementClient::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            MoneyField::new('montant')->setCurrency('EUR'),
            DateTimeField::new('datePaiement'),
            TextEditorField::new('description'),
            TextField::new('modePaiement'),
            AssociationField::new('clientId'),
        ];
    }
}
