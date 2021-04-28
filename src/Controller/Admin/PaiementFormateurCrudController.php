<?php

namespace App\Controller\Admin;

use App\Entity\PaiementFormateur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class PaiementFormateurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaiementFormateur::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            MoneyField::new('montant')->setCurrency('EUR'),
            DateTimeField::new('datePaiement'),
            TextEditorField::new('description'),
            AssociationField::new('formateurId'),
        ];
    }
}
