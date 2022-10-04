<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Controllers\Controller;
 use App\lists;
 
//  use App\Providers\table;
class todo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //todos is table name ,making variable and calling model {list } by all method 
    // compact for display all the array then for each loop in home.blade.php for fecthing data from database table 
    {  $todos = lists::all();
        return view('todo.home',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    // new list is model ,assining model and retreving data from it very imp step
         $todo= new lists();
         $this->validate($request,[
            'body'=> 'required | unique:todos',
         ]);
        $todo->body = $request->body;
     
        $todo->save();
      
         return redirect('todo');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
