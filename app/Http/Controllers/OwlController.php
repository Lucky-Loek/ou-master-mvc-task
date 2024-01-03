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
        $grades = Grade::all();
        $average = $grades->sum('mark')/$grades->count();
        return view('owls.index', [
            'owls' => $owls,
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
