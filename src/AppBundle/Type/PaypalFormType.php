<?php
namespace AppBundle\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/13/16
 * Time: 10:53 AM
 */
class PaypalFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount',ChoiceType::class,[
            'label'=> 'Choix Compte',
            'choices'=> ['Compte 1'=> 10,'Compte 2'=> 25],
            'choices_as_values'=>true,
            'attr'=>['name'=>'amount']
            ])
            ->add('currency_code', HiddenType::class, [
                'data'=>'EUR'
            ])
            ->add('shipping', HiddenType::class, [
                'data'=>0.00
            ])
            ->add('tax', HiddenType::class, [
                'data'=>0.00
            ])
            ->add('return', HiddenType::class, [
                'data'=>'http://127.0.0.1/PaypalPrototype/web/public/success.php'
            ])
            ->add('cancel_return', HiddenType::class, [
                'data'=>'http://127.0.0.1/PaypalPrototype/web/public/cancel.php'
            ])
            ->add('notify_url', HiddenType::class, [
                'data'=>'http://127.0.0.1/PaypalPrototype/web/public/ipn.php'
            ])
            ->add('cmd', HiddenType::class, [
                'data'=>'_xclick'
            ])
            ->add('business', HiddenType::class, [
                'data'=>'vendeur@threeshells.ovh'
            ])
            ->add('item_name', HiddenType::class, [
                'data'=>'compte premium'
            ])
            ->add('no_note', HiddenType::class, [
                'data'=>'1'
            ])
            ->add('lc', HiddenType::class, [
                'data'=>'FR'
            ])
            ->add('bn', HiddenType::class, [
                'data'=>'PP-BuyNowBF'
            ])
            ->add('custom', HiddenType::class, [
                'data'=>'user_id=1'
            ]);

    }

    public function getBlockPrefix()
    {
        return '';
    }


}