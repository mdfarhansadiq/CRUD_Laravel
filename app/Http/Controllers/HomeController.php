<?php

namespace App\Http\Controllers;
use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(Request $req)
    {
        $data = new home();
        $data->name = $req->fname;
        $data->email = $req->email;
        $data->salary = $req->salary;
        $data->save();
        return redirect('/home');
    }
    public function show()
    {
        $data = home::all();
        return view('home', compact('data'));
    }
    public function delete($id)
    {
        $data = home::find($id);
        $data->delete();
        return redirect('/home');
    }
}
