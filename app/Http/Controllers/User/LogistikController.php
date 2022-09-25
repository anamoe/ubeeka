<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Logistik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class LogistikController extends Controller
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

    public function user_detail_paket_logistik($id)

    {
        $v = Logistik::where('id',$id)->first();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        return view('user.logistik.detail_paket_logistik',compact('v'));
    }

    public function user_pilihan_paket_logistik(Request $request)
    {

        $dari = $request->dari;
        $ke = $request->ke;
  

        if($dari!=null &&$ke!=null){

            $logistik = Logistik::where('dari',$dari)->where('ke',$ke)->get();
      

        }else if($dari!=null){
            $logistik = Logistik::where('dari',$dari)->get();
            
            

        }else if($ke!=null){
            $logistik = Logistik::where('ke',$ke)->get();
           
            
        }else{

            $logistik = Logistik::get();
           

        }
        if($request->has('dari')&&$request->has('ke')){
            return $logistik;
        }
           if($request->has('ke')){
            return $logistik;
        }

        if($request->has('dari')){
            return $logistik;
        }
        // $logistik = Logistik::orderBy('paket','asc')->get();
        $dari = Logistik::orderBy('dari','asc')->get();
        $ke = Logistik::orderBy('ke','asc')->get();

        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        return view('user.logistik.pilihan_paket_logistik',compact('logistik','dari','ke'));
    }

    public function filterlogistik(Request $request){

        $dari = $request->dari;
        $ke = $request->ke;
  

        if($dari!=null &&$ke!=null){

            $logistik = Logistik::where('dari',$dari)->where('ke',$ke)->get();
      

        }else if($dari!=null){
            $logistik = Logistik::where('dari',$dari)->get();
            
            

        }else if($ke!=null){
            $logistik = Logistik::where('ke',$ke)->get();
           
            
        }else{

            $logistik = Logistik::get();
           

        }
           if($request->has('ke')){
            return $logistik;
        }
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
