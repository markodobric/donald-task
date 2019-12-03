<?php

use Kris\LaravelFormBuilder\FormBuilder;

class TestsController extends BaseController
{
    private $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    public function create()
    {
        $form = $this->formBuilder->create(TestForm::class, [
            'method' => 'POST',
            'url' => route('tests.store')
        ]);

        return View::make('tests.create', ['form' => $form]);
    }

    public function store()
    {

    }
}
