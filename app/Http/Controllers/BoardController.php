<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class BoardController extends Controller
{
    public function index() {
        // $board = DB::table('boards')->get();
        $list = DB::table('boards')->paginate(10);
        return view('index', ['lists' => $list]);
    }
    public function create() {
  
        return view('create');
    }
    /*
      $table->id();        
    $table->string('name');
    $table->string('job');
    $table->string('address');
    $table->text('content')->nullable();
    */
    public function store(Request $request) {
        //dd($request);
        DB::table('boards')->insert([
            'name' => $request->name,
            'job' => $request->job,
            'address' => $request->address,
            'content' => $request->content
        ]);
        return redirect('/board');
    }
    public function edit($id) {
        $edit = DB::table('boards')->where('id', $id)->get();
        return view('edit', ['edits' => $edit]);
    }
    public function update(Request $request) {
        
        DB::table('boards')->where('id', $request->id)->update([
            'name' => $request->name,
            'job' => $request->job,
            'address' => $request->address,
            'content' => $request->content
        ]);
        return redirect('/board');
    }
    public function destroy($id) {
        //ddd($id);
        DB::table('boards')->where('id', $id)->delete();
        return redirect('/board');
    }
    public function search(Request $request) {
        $search = $request->search;
        $list = DB::table('boards')->where('name', 'like', "%".$search."%")->paginate(10);
        return view('index', ['lists' => $list]);
    }
}
