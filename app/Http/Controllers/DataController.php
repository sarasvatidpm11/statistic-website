<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Requests\DataFormRequest;


class DataController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    //function to create data
    public function create()
    {
        return view('data.create');
    }

    //function to store data to the database
    public function store(Request $request)
    {
        Data::create([

            'stu_id' => $request->id,
            'stu_name' => $request->name,
            'class' => $request->class,
            'email' => $request->email,
            'score' => $request->score
        ]);
        return redirect('/tables');
        // $new = $request->validated();
        // $data = Data::create($new);
        // return redirect('/data')->with('message','Student data successfully added!']);
    }

    //function to read data
    public function index()
    {
        $data = Data::all();
        return view('data.index', compact('data'));
    }

    //function to delete data
    public function destroy($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect('/tables');
    }

    // function to edit and update data
    public function edit($id)
    {
        $data = Data::find($id);
        return view('/data.update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Data::find($id);
        $data->update($request->except(['_token', 'submit']));
        return redirect('/tables');
    }
}
// ->with('message', 'Data Remove Successfully')
