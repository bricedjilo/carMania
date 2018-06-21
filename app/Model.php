<?php

namespace App;

class Model extends ObjectModel
{
    public function make() {
        return $this->belongsTo(Make::class);
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
