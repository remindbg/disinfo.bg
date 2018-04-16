<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Desinfo;
class DesinfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');


    }



    public function single($id) {
        $desinfo = Desinfo::findOrFail($id);
        return view('desinfo.single', ['desinfo' => $desinfo]);



    }

    public function create(Request $request) {
        return view('admin.desinfo.create');
    }

    public function all() {
        $all = Desinfo::all();
        return view('admin.desinfo.all',['all' => $all]);

    }
    public function store(Request $request)
    {
        $desinfo = new Desinfo();
        $data = $this->validate($request, [
            'title'=>'required',
            'summaryDesinfo'=> 'required',
            'disproof' => 'required'
        ]);

        $desinfo->saveDesinfo($data);
        return redirect('/administration/desinfo/all')->with('успешно', 'New desinfo has been created! Wait sometime to get resolved');
    }


}
