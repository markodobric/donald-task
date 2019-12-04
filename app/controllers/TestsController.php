<?php

class TestsController extends BaseController
{
    public function index()
    {
        return View::make('tests.index', ['message' => Session::get('message')]);
    }

    public function create()
    {
        return View::make('tests.create');
    }

    public function store()
    {
        $rules = [
            'name' => 'required|min:2',
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::to('tests/create')->withErrors($validator);
        }

        Test::create(
            [
                'name' => Input::get('name'),
            ]
        );

        return Redirect::to('tests')->with('message', 'Test successfully created');
    }
}
