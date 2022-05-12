<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostImportanteController extends Controller
{
    /**
     * Prepare and returns the most important reported spam
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param       
     * @return      view
     */
    public function template()
    {
        return view('mostImportant');
    }
}
