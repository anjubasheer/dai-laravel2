<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScoreController extends Controller
{
    public function index()
    {

        $scores = Score::latest()->paginate(5);

        return view('score',compact('scores'));




    }
    public function score(){
        $scores = Score::latest()->paginate(5);
        return response()->json([
            'success' => true,
            'data' => $scores
        ], Response::HTTP_OK);

    }
}
