<?php

namespace App\Http\Controllers;

use App\Models\Issues;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function form()
    {
        return view('report-form');
    }

    public function createIssue(Request $request){
        Issues::create([
            'title' => $request->title,
            'description' => $request->description,
            'tag' => 0
        ]);
        return redirect('/issues')->with('status', 'Bug report created successfully!');
    }
}
