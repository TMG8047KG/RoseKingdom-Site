<?php

namespace App\Http\Controllers;

use App\Models\Issues;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class IssuesController extends Controller
{

    public function index()
    {
        $issue = Issues::all();
        return view('issues.main', ['issue' => $issue]);
    }

    public function show($id)
    {
        $issue = Issues::findOrFail($id);
        return view('issues.panel', ['issue' => $issue]);
    }

    public function form()
    {
        return view('bug-report');
    }


    public function create(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $data['tag'] = 1;
        auth()->user()->issues()->create($data);

        return redirect('/issues')->with('status', 'Bug report created successfully!');
    }


    public function destroy(Issues $issue){
        Gate::authorize('delete', $issue);
        $issue->delete();
        return redirect('/issues');
    }
}
