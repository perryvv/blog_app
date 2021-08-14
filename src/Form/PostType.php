<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Required;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titel', TextType::class, ['constraints' => [new NotBlank()],
                     'attr' => ['class' => 'form-control']])

            ->add('subtitel', TextType::class, ['constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']])

            
            ->add('publishdate', DateType::class, ['constraints' => [new NotBlank()]])

            ->add('content', TextareaType::class, ['constraints' => [new NotBlank()],
            'attr' => ['class' => 'form-control']
            ])

            ->add('img_url', FileType::class, ['label' => 'image (JPEG, JPG, PNG)',
            'mapped' => false,
            'required' => false,
            'constraints' => [new File(['maxSize' => '1024k',
                                        ])],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
