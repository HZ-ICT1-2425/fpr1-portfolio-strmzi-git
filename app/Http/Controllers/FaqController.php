<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{

    protected $table = 'faq';
    public function faq():View {
        // get faq questions and answers from DB
        $faq_data = FaqModel::all();
        // return view w the data
        return view('faq', ['data' => $faq_data]);
    }
}
