<?php
namespace AppBundle\Form;

use AppBundle\Entity\Termsfile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TermsfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pdf_file_murapol', FileType::class, array('label' => 'Dodaj załącznik Murapol HRE'))
            ->add('pdf_file_saturn', FileType::class, array('label' => 'Dodaj załącznik Saturn TFI S'))
            ->add('save', SubmitType::class, array('label' => 'Dalej', "attr" => ['class' => 'btn-fill btn-fill--next']))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' =>Termsfile::class,
        ));
    }
}
