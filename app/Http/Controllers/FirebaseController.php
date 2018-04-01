<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Firebase\Firebase;
use DateTime;

class FirebaseController extends Controller
{

    public function PushServer(Request $request){

    $Valve = $request->input('Valve');
    $Deteksi = $request->input('Deteksi');

    $fb = Firebase::initialize("https://call-poseidon.firebaseio.com");

    $timeNow = Carbon::now()->timestamp;
    $ts = intval($timeNow / 1000);
    $date = DateTime::createFromFormat('U', $ts);
    $str = $date->format(date('d-m-Y_H:i:s'));

    $idarduino = 'alat1';

    $nodeWriteContent = $fb->set('/monitoring/'.$idarduino.'/'.$timeNow, [

    	'Valve' => $Valve,

    	'Deteksi' => $Deteksi,


    	]);
    return response()->json(['berhasil diinput']);

}

}
