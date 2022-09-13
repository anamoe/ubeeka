<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slideshow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingLandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function courosel()
    {
        $s = Slideshow::all();
        return view('admin.setting.courosel.index',compact('s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $req =$request->all();

        
        $tujuan_upload = public_path('admin/slideshow');
        $file = $request->file('gambar');
        $namaFile = Carbon::now()->format('Ymd') .$file->getClientOriginalName();
        $file->move($tujuan_upload, $namaFile);
        $req['gambar'] = $namaFile;

        Slideshow::create($req);
        return redirect('setting_courosel')->with('message','Sukses tambah Slideshow');
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
        


        if($request->hasFile('gambar')){
            $tujuan_upload = public_path('admin/slideshow');
            $file = $request->file('gambar');
            $namaFile = Carbon::now()->format('Ymd') .$file->getClientOriginalName();
            File::delete($tujuan_upload . '/' .Slideshow::find($id)->gambar);
            $file->move($tujuan_upload, $namaFile);
            // $req['gambar'] = $namaFile;
            Slideshow::where('id',$id)->update([
                'keterangan'=>$request->keterangan,'gambar'=>$namaFile,
            ]);
      
        }else{
            Slideshow::where('id',$id)->update([
                'keterangan'=>$request->keterangan, 'keterangan2'=>$request->keterangan2
            ]);

        }
    

      
        return redirect('setting_courosel')->with('message','Sukses Update Slideshow Carousel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroys($id)
    {
        //
        $tujuan_upload2 = public_path('admin/slideshow');
        $del =Slideshow::where('id',$id)->first();
        $del->delete();
        if($del){

            File::delete($tujuan_upload2.'/'.$del->gambar);
        
            
        }

        return redirect()->back()->with('message','Sukses menghapus Slideshow');
    }
}
