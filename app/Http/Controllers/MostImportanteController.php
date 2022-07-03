<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportedSpam;

class MostImportanteController extends Controller
{
    /**
     * Pagination size
     * @int
     */
    private $paginationSize = 20;

    /**
     * Prepare and returns the most important reported spam
     * @version     1.0.0
     * @author      Anderson Arruda < andmarruda@gmail.com >
     * @param       
     * @return      view
     */
    public function template()
    {
        $latests = ReportedSpam::orderBy('created_at', 'DESC')->paginate($this->paginationSize);
        return view('mostImportant', ['reported' => $latests]);
    }
}
