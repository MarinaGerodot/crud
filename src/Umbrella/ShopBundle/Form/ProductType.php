<?php
// Umbrella/ShopBundle/Form/ProductType.php
namespace Umbrella\ShopBundle\Form;

use Umbrella\ShopBundle\Entity\Category;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', 'hidden');
        $builder->add('title', null, array('label' => 'Name product'));
        $builder->add('photo');
        $builder->add('description');
        $builder->add('userId');
        $builder->add('category', 'entity',array('class' => 'UmbrellaShopBundle:Category',));
    }

    public function getName()//add('id', 'hidden')
    {
        return 'product';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Umbrella\ShopBundle\Entity\Product',
        );
    }

}
