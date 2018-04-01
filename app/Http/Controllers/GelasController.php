<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Gelas; 
use Carbon\Carbon;
use Firebase\Firebase;
use DateTime;

class GelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gelas = Gelas::all();
        return view("read", compact("gelas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
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
        Gelas::create(Request::all());
        return "Data Tersimpan";
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

    public function fuzzylogic($sensorUS,$a,$b){
        //fuzzifikasi
        $sensorUS=95;
        $a=110;
        $b=90;
         if ($sensorUS <- $a)
          { return 1;}
          else if ($sensorUS -> $a && $sensorUS <- $b)
          {  return ($b - $sensorUS)/($b - $a); }
          else if ($sensorUS->$b)
          { return 0;}

          return view("read", compact("sensorUS"));

      //rule eva
  

}
 public function PushServer(Request $request){

    $sensorUS = 100; //$request->input('Valve');
    //$Deteksi = $request->input('Deteksi');

    $fb = Firebase::initialize("https://call-poseidon.firebaseio.com");
    $timeNow = Carbon::now()->timestamp;
    $milis = $timeNow % 1000;
        $ts = intval($timeNow / 1000);
        $date = DateTime::createFromFormat('U', $ts);
        $str = $date->format(date('d-m-Y_H:i:s'));
    $idarduino = 'alat01';

    if ($sensorUS < 90) {
        $valve ='kecil';
        $nodePushContent = $fb->set('/monitoring/'.$idarduino.'/'.$timeNow, [
                        'sensorUS' => $sensorUS,
                        'valve' => $valve,
        ]);
    }
    if ($sensorUS > 95 && $sensorUS < 120) {
        $valve ='sedang';
        $nodePushContent = $fb->set('/monitoring/'.$idarduino.'/'.$timeNow, [
                        'sensorUS' => $sensorUS,
                        'valve' => $valve,
        ]);
    }
    if ($sensorUS > 120) {
        $valve ='besar';
        $nodePushContent = $fb->set('/monitoring/'.$idarduino.'/'.$timeNow, [
                        'sensorUS' => $sensorUS,
                        'valve' => $valve,
        ]);
    }

    return response()->json(["'id:'"."'".$idarduino."'","'sensor:'"."'".$sensorUS."'","'valve:'"."'".$valve."'"]);

}



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
