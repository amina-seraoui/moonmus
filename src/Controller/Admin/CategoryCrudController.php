<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $uploadsDir = $this->getParameter('app.uploads_dir');
        yield TextField::new('name');
        yield SlugField::new('slug')->setTargetFieldName('name');
        yield TextField::new('imageFile')
            ->setFormType(VichImageType::class)
            ->hideOnIndex()
        ;
        yield ImageField::new('fileName')
            ->setBasePath($uploadsDir . 'img/categories/')
            ->setUploadedFileNamePattern('[slug]-[uuid].[extension]')
            ->onlyOnIndex()
        ;

    }

}
