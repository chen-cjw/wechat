<?php

namespace App\Http\Controllers;

use App\Models\factories\simpleFactory;
use Illuminate\Http\Request;

class SimpleFactoryController extends Controller
{
    //
    public function factory(Request $request)
    {
        // $request->width,$request->height
        $simpleFactory = new simpleFactory();
        return $simpleFactory->simple($request->width,$request->height)->getWidth();
    }
}
