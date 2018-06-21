<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;

class ModelsController extends Controller
{
    public function models($make_id) {
        return Model::where('make_id', $make_id)->get();
    }
}
