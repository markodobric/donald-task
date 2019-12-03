<?php

use Kris\LaravelFormBuilder\Form;

class TestForm extends Form
{
    public function buildForm()
    {
        $this->formOptions = [
            'method' => 'POST',
            'url' => action('TestsController@store'),
        ];

        $this
            ->add('name', 'text', [
                'label' => 'Test title',
                'rules' => 'required|min:2',
                'error_messages' => [
                    'name.required' => 'The name of test field is mandatory.'
                ]
            ])
        ->add('submit', 'submit', [
            'label' => 'Create',
        ]);
    }
}
