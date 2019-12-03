<?php

use Kris\LaravelFormBuilder\Form;

class TestForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
