<?php

namespace App;

class Make extends Model
{
    public function models() {
        return $this->hasMany(Model::class);
    }

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
