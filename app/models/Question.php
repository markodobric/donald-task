<?php

class Question extends Eloquent
{
    protected $fillable = ['name'];
    protected $guarded = ['id', 'test_id'];

    public $timestamps = null;

    public function test()
    {
        return $this->belongsTo('Test');
    }
}
