<?php

namespace App\Http\Controllers;

use App\Models\Owl;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OwlController extends Controller
{
    public function index()
    {
        $owls = Owl::orderBy('scheduled_at', 'asc')->get();

        return view('owls.index', compact('owls'));
    }

    public function show(Owl $owl)
    {
        $sum_of_grades = 0;

        foreach ($owl->grades as $grade) {
            $sum_of_grades = $sum_of_grades + $grade->mark;
        }

        dd($sum_of_grades / count($owl->grades));
        return view('owls.show', [
            'owl' => $owl
        ]);
    }
}
