<?php

namespace App\Form;

use App\Entity\Picture;
use App\Entity\Tag;
use App\Repository\TagRepository;
use Doctrine\DBAL\Types\TextType as DoctrineTextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use function Sodium\add;

class PictureType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('title')
            ->add('description')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '10000k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'S\'il vous plait veuillez mettre un image valide',
                    ])
                ],
            ])
            ->add('tempotags', HiddenType::class, [
                'mapped' => false
            ]);
//            ->add('tags', EntityType::class, [ // add this
//                'class' => Tag::class,
//                'expanded' => true,
//                'multiple' => true,
//                'query_builder' => function (TagRepository $tr) {
//                    return $tr->createQueryBuilder('t')
//                        ->orderBy('t.name', 'ASC');
//                }
//            ])
//            ->add('tags',ChoiceType::class,[
//                'mapped'=>false,
//                'multiple'=>true
//            ])
//            ->add('tags', CollectionType::class, [
//                'entry_type' => TagType::class,
//                'entry_options' => ['label' => false],
//                'allow_add' => true,
//                'by_reference'=>false
//            ])
           
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Picture::class,
        ]);
    }
}
