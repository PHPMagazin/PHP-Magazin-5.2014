<?php
namespace WM2014Bet\Form;

use Zend\Form\Form;

class BetForm extends Form
{
    public function init()
    {
        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'goals1',
                'options'    => array(
                    'label'  => 'Tore Team 1',
                ),
                'attributes' => array(
                    'class'  => 'span1',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'goals2',
                'options'    => array(
                    'label'  => 'Tore Team 2',
                ),
                'attributes' => array(
                    'class'  => 'span1',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Submit',
                'name'       => 'save_bet',
                'options'    => array(),
                'attributes' => array(
                    'value' => 'Tipp abgeben',
                    'id'    => 'save',
                    'class' => 'btn btn-primary btn-sm',
                ),
            )
        );
    }
}
