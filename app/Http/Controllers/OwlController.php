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
        return view('owls.show', [
            'owl' => $owl
        ]);
    }
}
