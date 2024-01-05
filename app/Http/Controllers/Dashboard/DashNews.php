<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashNews extends Controller
{

    public function index(){
        return view('dashboard.news',[
            "title" => "Dashboard | Berita",
            "news" => News::orderBy("id","DESC")->get(),
        ]);
    }

    public function postHandler(Request $request){
        //dd($request);
        if($request->submit=="store"){
            $res = $this->store($request);
            return redirect('/dashboard/news')->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return redirect('/dashboard/news')->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return redirect('/dashboard/news')->with($res['status'],$res['message']);
            // return redirect('/dashboard/news')->with("info","Fitur hapus sementara dinonaktifkan");
        }
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);

        //Check if has image
        if($request->file('image')){
                
            $validatedData = $request->validate([
                'title'=>'required',
                'slug'=>'required',
                'body'=>'required',
                'image' => 'image|file|max:1024',
            ]);

            // Upload new image
            $validatedData['image'] = time().".jpg";
            $request->file('image')->move(public_path('assets/img/news'), $validatedData['image']);
            
            if(!News::whereSlug($request->slug)->first()){
                News::create($validatedData);
                return ['status'=>'success','message'=>'Berita berhasil ditambahkan'];
            }else{
                return ['status'=>'error','message'=>'Judul telah terpakai'];
            }
        }else{
            if(!News::whereSlug($request->slug)->first()){
                News::create($validatedData);
                return ['status'=>'success','message'=>'Berita berhasil ditambahkan'];
            }else{
                return ['status'=>'error','message'=>'Judul telah terpakai'];
            }
        }

        
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);
        
        $news = News::find($request->id);

        //Check if the news is found
        if($news){
            
            // Check if the slug is different from before
            if($news->slug!=$request->slug){
                
                // Check if the slug has not been used
                if(!News::whereSlug($request->slug)->first()){

                    //Check if has image
                    if($request->file('image')){
                            
                        $validatedData = $request->validate([
                            'id'=>'required|numeric',
                            'title'=>'required',
                            'slug'=>'required',
                            'body'=>'required',
                            'image' => 'image|file|max:1024',
                        ]);


                        // Delete old image
                        $image_path = public_path().'/assets/img/news/'.$news->image;
                        unlink($image_path);
                        
                        // Upload new image
                        $validatedData['image'] = time().".jpg";
                        $request->file('image')->move(public_path('assets/img/news'), $validatedData['image']);
                        
                        $news->update($validatedData);
                        return ['status'=>'success','message'=>'Berita berhasil diupdate'];
                        
                    }else{
                        // Update data
                        $news->update($validatedData);    
                        return ['status'=>'success','message'=>'Berita berhasil diedit'];
                    }
                }else{
                    return ['status'=>'error','message'=>'Slug telah terpakai'];
                }
            }else{
                
                //Check if has image
                if($request->file('image')){
                            
                    $validatedData = $request->validate([
                        'id'=>'required|numeric',
                        'title'=>'required',
                        'slug'=>'required',
                        'body'=>'required',
                        'image' => 'image|file|max:1024',
                    ]);

                    // Delete old image
                    $image_path = public_path().'/assets/img/news/'.$news->image;
                    unlink($image_path);
                    
                    // Upload new image
                    $validatedData['image'] = time().".jpg";
                    $request->file('image')->move(public_path('assets/img/news'), $validatedData['image']);
                    
                    $news->update($validatedData);
                    return ['status'=>'success','message'=>'Berita berhasil diupdate'];
                    
                }else{
                    // Update data
                    $news->update($validatedData);    
                    return ['status'=>'success','message'=>'Berita berhasil diedit'];
                }
            }
        }else{
            return ['status'=>'error','message'=>'Region tidak ditemukan'];
        }
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id'=>'required|numeric',
        ]);

        $news = News::find($request->id);

        //Check if the news is found
        if($news){
            $image_path = public_path().'/assets/img/news/'.$news->image;
            unlink($image_path);
            News::destroy($request->id);
            return ['status'=>'success','message'=>'Berita berhasil dihapus'];
        }else{
            return ['status'=>'error','message'=>'Berita tidak ditemukan'];
        }
    }
}
