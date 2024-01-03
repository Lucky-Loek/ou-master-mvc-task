<?php

namespace App\Http\Controllers;

use App\Models\Owl;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Grade;

class OwlController extends Controller
{
    public function index()
    {
        $owls = Owl::orderBy('scheduled_at', 'asc')->get();
        $gradesSum = Grade::all()->sum('mark');
        $gradeCount = Grade::all()->count();
        $average = $gradesSum / $gradeCount;
        dd($average);
        return view('owls.index', [
            'owls' => $owl,
            'average' => $average
        ]);
    }

    public function show(Owl $owl)
    {
        return view('owls.show', [
            'owl' => $owl
        ]);
    }
}
