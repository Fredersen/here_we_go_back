<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            DateField::new('date'),
            ImageField::new('logo')->setUploadDir('public/uploads/images')->setBasePath('uploads/images'),
            TextField::new('description'),
            ImageField::new('image')->setUploadDir('public/uploads/images')->setBasePath('uploads/images'),
            TextField::new('adress'),
            TextField::new('mail'),
            TextField::new('telephone'),
            BooleanField::new('isDeleted')
        ];
    }

}
