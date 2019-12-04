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
        $test_rules = [
            'name' => 'required|min:2',
            'question' => 'required',
        ];

        $validator = Validator::make(Input::all(), $test_rules);

        if ($validator->fails()) {
            return Redirect::to('tests/create')->withErrors($validator);
        }

        DB::transaction(function()
        {
            $test = Test::create([
                'name' => Input::get('name'),
            ]);

            $questions = Input::get('question');

            $data = [];
            foreach ($questions as $question) {
                $data[] = new Question(['name' => $question]);
            }

            $test->questions()->saveMany($data);
        });


        return Redirect::to('tests')->with('message', 'Test successfully created');
    }
}
