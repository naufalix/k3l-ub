<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    
    public function index(){
        return view('home',[
            // "agendas" => Agenda::orderBy('execute_date', 'desc')->get(),
            // "announcements" => Announcement::orderBy('created_at', 'desc')->get(),
            // "galleries" => Gallery::all(),
            "news" => News::orderBy('created_at', 'desc')->limit(6)->get(),
            // "staffs" => Staff::all(),
            "title" => "Divisi K3L Universitas Brawijaya",
        ]);
    }

    public function about(){
        return view('about',[
            "title" => "Tentang Kami",
        ]);
    }
    public function contact(){
        return view('contact',[
            "title" => "Kontak",
        ]);
    }
    public function infographic(){
        return view('infographic',[
            "title" => "Infografis",
        ]);
    }
    public function regulation(){
        return view('regulation',[
            "title" => "Peraturan Rektor",
        ]);
    }
    public function sop(){
        return view('sop',[
            "title" => "Standar Operasional Prosedur",
        ]);
    }

    public function sample(){
        return view('sample',[
            "title" => "Sample Page",
        ]);
    }
    
    // public function news(){
    //     return view('news',[
    //         "agendas" => Agenda::orderBy('execute_date', 'desc')->get(),
    //         "announcements" => Announcement::orderBy('created_at', 'desc')->get(),
    //         "news" => News::orderBy('created_at', 'desc')->get(),
    //         "staffs" => Staff::all(),
    //         "title" => "Desa Curahmalang | Berita",
    //     ]);
    // }

    public function news(News $news){
        return view('news',[
            "news" => $news,
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
