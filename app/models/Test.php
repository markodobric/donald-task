<?php

class Test extends Eloquent
{
    protected $fillable = ['name'];

    public $timestamps = null;

    public function questions()
    {
        return $this->hasMany('Question');
    }
}
