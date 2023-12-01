<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Models\Agenda;
// use App\Models\Announcement;
// use App\Models\Gallery;
// use App\Models\News;
// use App\Models\Staff;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    
    public function index(){
        return view('home',[
            // "agendas" => Agenda::orderBy('execute_date', 'desc')->get(),
            // "announcements" => Announcement::orderBy('created_at', 'desc')->get(),
            // "galleries" => Gallery::all(),
            // "news" => News::orderBy('created_at', 'desc')->get(),
            // "staffs" => Staff::all(),
            "title" => "Divisi K3 UB | Home",
        ]);
    }
    
    public function news(){
        return view('news',[
            "agendas" => Agenda::orderBy('execute_date', 'desc')->get(),
            "announcements" => Announcement::orderBy('created_at', 'desc')->get(),
            "news" => News::orderBy('created_at', 'desc')->get(),
            "staffs" => Staff::all(),
            "title" => "Desa Curahmalang | Berita",
        ]);
    }

    public function new(News $news){
        return view('new',[
            "agendas" => Agenda::orderBy('execute_date', 'desc')->get(),
            "announcements" => Announcement::orderBy('created_at', 'desc')->get(),
            "new" => $news,
            "staffs" => Staff::all(),
            "title" => $news->title,
        ]);
    }
    
    public function postHandler(Request $request){
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/admin/news')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/admin/news')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/admin/news')->with($res['status'],$res['message']);
            // return redirect('/admin/announcement')->with("info","Fitur hapus sementara dinonaktifkan");
        }else{
            return redirect('/admin/news')->with("info","Submit not found");
        }
    }
}
