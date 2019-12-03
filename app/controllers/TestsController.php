<?php

use Kris\LaravelFormBuilder\FormBuilder;

class TestsController extends BaseController
{
    private $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    public function index()
    {
        return View::make('tests.index', ['form' => $this->getForm(), 'message' => Session::get('message')]);
    }

    public function create()
    {
        return View::make('tests.create', ['form' => $this->getForm()]);
    }

    public function store()
    {
        $form = $this->getForm();

        Test::create(
            [
                'name' => $form->getRequest()->get('name'),
            ]
        );

        return Redirect::to('tests')->with('message', 'Test successfully created');
    }

    private function getForm()
    {
        return $this->formBuilder->create(TestForm::class);
    }
}
