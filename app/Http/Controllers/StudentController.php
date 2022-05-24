<?php

namespace App\Http\Controllers;


use Crypt;
use App\Models\User;
use App\Models\Projects;
use App\Models\infoproject;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function stdproject(){
        return view('student.stdproject');
    }
    public function stdaddinfo(Request $request){
        $id = $request->id;
        $project = DB::table('projects')->select('species','projectname')->where('id',$id)->get();
        
        return view('student.stdaddinfo',compact('id','project'));
    }
    public function addinfo(Request $request)
        {
            
            $info= new infoproject();
            $info ->idproject=$request->projectid;
            // $info ->species=$request->species;
            $info ->leafwidth=$request->leafwidth;
            $info ->heighttree=$request->heighttree;
            $info ->numberofverses=$request->numberofverses;
            $info ->chlorophyll=$request->chlorophyll;
            $info ->numberofleaf=$request->numberofleaf;
            $info ->widthofyield=$request->widthofyield;
            $info ->Brix=$request->Brix;
            $info ->weight=$request->weight;
            $info->save();
            return back();
        }
        public function queryinfo(Request $request)
        {
            $info =  infoproject::select('*')
            ->where('idproject',$request->id)
            ->get();
            $data = array();
            for ($i = 0; $i < sizeof($info); $i++) {
                $pieces = explode(" ", $info[$i]->created_at);
                $number=$i+1;
                $col_arr["id"] = '<div class="tdblue justify-content-center d-flex" >' . $number . ' </div>';
                $col_arr["createat"] = '<div class="tdblue justify-content-center d-flex" >' . $pieces[0] . ' </div>';
                $col_arr["time"] = '<div class="tdblue justify-content-center d-flex" >' . $pieces[1] . ' </div>';
                $col_arr["species"] = '<div class="tdblue justify-content-center d-flex"><button>' . $info[$i]->species .' </button></div>';
                $col_arr["leafwidth"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->leafwidth . '</div>';
                $col_arr["heighttree"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->heighttree . '</div>';
                $col_arr["numberofverses"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->numberofverses . '</div>';
                $col_arr["chlorophyll"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->chlorophyll . '</div>';
                $col_arr["numberofleaf"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->numberofleaf . '</div>';
                $col_arr["widthofyield"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->widthofyield . '</div>';
                $col_arr["Brix"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->Brix . '</div>';
                $col_arr["weight"] = '<div class="tdblue justify-content-center d-flex">' . $info[$i]->weight . '</div>';
                $col_arr["button"] = '<div class="tdblue justify-content-center d-flex">
            <button class="btn edit" name="id" value='.$info[$i]->id.' data-bs-toggle="modal" data-bs-target="#editstdaddproject"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
              </button> 
              <form action="/deleteinfo" method="get">
              <button class="btn" name="id" value='.$info[$i]->id.'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </button>
            </form>
            </div>';
                // $col_arr["foodimg"] = '<div class="tdblue justify-content-center d-flex">'.$users[$i]->foodimg .'</div>';
                // $col_arr["username"] = '<img src="uploads/foodimg/'.$users[$i]->name.'" alt="" width="150" height="150">';
                array_push($data, $col_arr);
            }
            // $data_array = array($data);
            return response()->json($data);
        }
        public function deleteinfo(Request $request)
        {
            infoproject::where('id','=',$request->id)
            ->delete();
           return back();
        }

        public function queryeditinfo(Request $request){
            $editinfo = DB::table('infoproject')
            ->select('*')
            ->where('id',$request->id)
            ->get();
            return $editinfo;
        }

        public function editinfo(Request $request)
    {
        $info = infoproject::select('*')->where('id',$request->id)->get();
    $dataarr = [];
    foreach($request->all() as $key => $value){
        if($value == null){
            $dataarr[$key] = $info[0][$key] ;
        }else{
            $dataarr[$key] = $value;
        }
    }
        $editinfo = infoproject::find($request->id);
        // $editinfo->species = $dataarr['species'];
        $editinfo->leafwidth = $dataarr['leafwidth'];
        $editinfo->heighttree =$dataarr['heighttree'];
        $editinfo->numberofverses = $dataarr['numberofverses'];
        $editinfo->chlorophyll =$dataarr['chlorophyll'];
        $editinfo->numberofleaf =$dataarr['numberofleaf'];
        $editinfo->widthofyield =$dataarr['widthofyield'];
        $editinfo->Brix =$dataarr['Brix'];
        $editinfo->weight =$dataarr['weight'];
        $editinfo->update();
        return back()->with('success','success');
    }
    public function stdintoprofile(){
        return view('student.stdintoprofile');
    }

    public function editstdintoprofile(Request $request){
$ckarr['name'] = $request->name;
$ckarr['lastname'] = $request->lastname;
$ckarr['phone'] = $request->phone;
$ckarr['email'] = $request->email;
        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extention = $file->getClientOriginalExtension();
            $filename =  auth()->user()->id.time() . '.' . $extention;
            $file->move('uploads/profileimg', $filename);
            if(auth()->user()->profileimg != null || auth()->user()->profileimg != '' ){
                 $file_path = public_path().'/uploads/profileimg/'.auth()->user()->profileimg;
            unlink($file_path);
            }
            $ckarr['profileimg'] = $filename;
        }
       
        User::where('id','=',auth()->user()->id)
        ->update($ckarr);
     return redirect()->route('stdintoprofile');
    }
   
}

