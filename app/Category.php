<?php

namespace App;

class Category extends ObjectModel
{
    public function cars() {
        return $this->hasMany(Car::class);
    }
}
