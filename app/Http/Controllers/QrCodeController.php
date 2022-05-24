<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class QrCodeController extends Controller
{
   public function genqr(Request $request){

   $qrcheck =  DB::table('projects')
   ->select('*')
   ->where('id',$request->id)
   ->get();
   if($qrcheck[0]->qrimg == null){
     $filename = "qrgen".$request->id;
     
    \QrCode::format('png')
    
    ->size(500)->errorCorrection('H')
    ->generate('https://melonrmutttest.xyz/greennet?id='.$request->id,public_path('uploads/qr/'.$filename.'.png'));
    Projects::where('id',$request->id)
    ->update(['qrimg' => $filename]);
    return $filename;
   }else{
    return $qrcheck[0]->qrimg;
   }
    
   }


   public function downloadqr(Request $request){
    return response()->download(public_path('uploads/qr/qrgen'.$request->id.'.png'));
   }
}
