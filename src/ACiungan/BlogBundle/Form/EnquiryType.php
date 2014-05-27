<?php

namespace ACiungan\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title');
        $builder->add('body', 'textarea');
        $builder->add('author');
        $builder->add('tags');
    }

    public function getName()
    {
        return 'newentry';
    }
}