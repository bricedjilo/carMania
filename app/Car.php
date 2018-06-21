<?php

namespace App;

class Car extends ObjectModel
{
    protected $fillable = [
        'make_id', 'model_id', 'year', 'description', 'image', 'category_id'
    ];

    public function make() {
        return $this->belongsTo(Make::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function model() {
        return $this->belongsTo(Model::class);
    }
}
