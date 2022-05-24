<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Crypt;
use App\Models\User;
use App\Models\Projects;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function test()
    {
        return view('admin.adminrmutt');
    }
    public function teacherdashboard()
    {
        return view('teacher.teacherdashboard');
    }
    public function addmember()
    {
        return view('teacher.addmember');
    }
    public function addproject()
    {
        // $id = $request->id;
        // $project = DB::table('projects')->select('species','projectname')->where('id',$id)->get();
        
        // return view('teacher.teacherprojectinfo',compact('id','project'));
        return view('teacher.addproject');
    }
    public function adminlogin()
    {
        return view('teacher.adminlogin');
    }
    // Article //
    public function article1()
    {
        return view('article.article-1');
    }
    public function article2()
    {
        return view('article.article-2');
    }
    public function article3()
    {
        return view('article.article-3');
    }
    public function article4()
    {
        return view('article.article-4');
    }
    //
    // stdgraph
    public function stdgraph()
    {
        $project = DB::table('projects')
            ->select('*')
            ->where('status', 'success')
            ->get();
        return view('student.stdgraph', compact('project'));
    }
    // teachergraph
    public function teachergraph()
    {
        $speciesarr = array();
        $project = DB::table('projects')
            ->select('*')
            ->where('status', 'success')
            ->get();

            for($i=0;$i<count($project);$i++){
                $speciesarr[$project[$i]->projectname]=$project[$i]->species ;
            }
        return view('teacher.teachergraph', compact('project','speciesarr'));
    }
    // QRcode melon detail. ------------------------------------

    //kaitongkum.
    public function kaitongkum()
    {
        return view('QRcode.kaitongkum');
    }

    //green net.
    public function greennet(Request $request)
    {
        $qr =  DB::table('infoproject')->select('*')->where('idproject',$request->id)->orderby('created_at','DESC')->limit(1)->get();
        $head =  DB::table('projects')->select('*')->where('id',$request->id)->get();
        // Projects::select('*')->where('id', $request->id)->get();
        return view('QRcode.greennet', compact('qr','head'));
    }

    //hamigua.
    public function hamigua()
    {
        return view('QRcode.hamigua');
    }

    //inthanon.
    public function inthanon()
    {
        return view('QRcode.inthanon');
    }

    // QRcode melon detail end -----------------------------------

    public function queryuser()
    {
        $users =  User::select('*')->get();
        $data = array();
        for ($i = 0; $i < sizeof($users); $i++) {
            $col_arr["id"] = '<div class="tdblue justify-content-center d-flex" >' . $users[$i]->id . ' </div>';
            $col_arr["name"] = '<div class="tdblue justify-content-center d-flex">' . $users[$i]->username . ' </div>';
            $col_arr["username"] = '<div class="tdblue justify-content-center d-flex">' . $users[$i]->name . $users[$i]->lastname . '</div>';
            $col_arr["phone"] = '<div class="tdblue justify-content-center d-flex">' . $users[$i]->phone . '</div>';
            $col_arr["email"] = '<div class="tdblue justify-content-center d-flex">' . $users[$i]->email . '</div>';
            $col_arr["button"] = '<div class="tdblue justify-content-center d-flex">
        <button class="btn edit" name="id" value=' . $users[$i]->id . ' data-bs-toggle="modal" data-bs-target="#edituserModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          </button> 
          <form action="/deleteuser" method="get">
          <button class="btn" name="id" value=' . $users[$i]->id . '><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
        </svg>
        </button>
        </form>
        </div>';
            // $col_arr["foodimg"] = '<div class="tdblue justify-content-center d-flex">'.$users[$i]->foodimg .'</div>';
            // $col_arr["username"] = '<img src="uploads/foodimg/'.$users[$i]->name.'" alt="" width="150" height="150">';
            array_push($data, $col_arr);
        }
        $data_array = array('rows' => $data);
        return response()->json($data_array);
    }
    public function edituser(Request $request)
    {
        $userdata = User::select('*')->where('id', $request->id)->get();
        $dataarr = [];
        foreach ($request->all() as $key => $value) {
            if ($value == null) {
                $dataarr[] = $userdata[0][$key];
            } else {
                $dataarr[] = $value;
            }
        }
        $userupdate = User::find($request->id);
        $userupdate->username = $dataarr[1];
        $userupdate->name = $dataarr[2];
        $userupdate->lastname = $dataarr[3];
        $userupdate->phone = $dataarr[4];
        $userupdate->email = $dataarr[5];
        $userupdate->update();
        return back()->with('success', 'success');
    }
    public function queryedit(Request $request)
    {
        $dataedit = DB::table('users')
            ->select('*')
            ->where('id', $request->id)
            ->get();
        return $dataedit;
    }
    public function deleteuser(Request $request)
    {
        User::where('id', '=', $request->id)
            ->delete();
        return back();
    }
    //student route
    public function stdprofile()
    {
        return view('student.stdprofile');
    }
    public function intoproject(Request $request)
    {

        $validator = Validator::make($request->all(), array(
            'projectname' => [
                'required',
                'string',
                Rule::unique('projects')->where('projectname', $request->projectname)
            ],


        ));
        if ($validator->fails()) {
            $error = [];
            foreach ($validator->messages()->get('*') as $key => $value) {
                $error[] = $value;
            };
            return back()->with('error', 'มีชื่อโปรเจคนี้แล้ว');
        }
        $projects = new Projects();
        $projects->projectname = $request->projectname;
        $projects->species = $request->species;
        $projects->plot = $request->plot;
        $projects->colum = $request->colum;
        $projects->treenumber = $request->treenumber;
        $projects->dateproject = $request->dateproject;
        $projects->save();
        return back()->with('addsuccess', 'addsuccess');
    }
    public function teacherqueryprojects()
    {
        $projects =  Projects::select('*')->where('status', 'unsuccess')->get();
        $data = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $number=$i+1;
            $col_arr["id"] = '<div class="tdblue justify-content-center d-flex" >' . $number . ' </div>';
            $col_arr["projectname"] = '<div class="tdblue justify-content-center d-flex"><form method="get" action="teacherprojectinfo"><button type="submit" name="id" value=' . $projects[$i]->id . ' style="text-decoration:none;background:none;border:none;">' . $projects[$i]->projectname . ' </button></form></div>';
            $col_arr["button"] = '<div class="tdblue justify-content-center d-flex">
            <button class="btn edit" name="id" value=' . $projects[$i]->id . ' data-bs-toggle="modal" data-bs-target="#editprojectsModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
              </button> 
              <form action="/deleteprojects" method="get">
              <button class="btn" name="id" value=' . $projects[$i]->id . '><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </button>
            </form>
            </div>';
            $col_arr["species"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->species . '</div>';
            $col_arr["plot"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->plot . '</div>';
            $col_arr["colum"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->colum . '</div>';
            $col_arr["treenumber"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->treenumber . '</div>';
            $col_arr["dateproject"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->dateproject . '</div>';

            // $col_arr["foodimg"] = '<div class="tdblue justify-content-center d-flex">'.$users[$i]->foodimg .'</div>';
            // $col_arr["username"] = '<img src="uploads/foodimg/'.$users[$i]->name.'" alt="" width="150" height="150">';
            array_push($data, $col_arr);
        }
        $data_array = array('rows' => $data);
        return response()->json($data_array);
    }
    public function teacherqueryprojectssuccess()
    {
        $projects =  Projects::select('*')->where('status', 'success')->get();
        $data = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $col_arr["id"] = '<div class="tdblue justify-content-center d-flex" >' . $projects[$i]->id . ' </div>';
            $col_arr["projectname"] = '<div class="tdblue justify-content-center d-flex"><form method="get" action="teacherprojectinfo"><button type="submit" name="id" value=' . $projects[$i]->id . ' style="text-decoration:none;background:none;border:none;">' . $projects[$i]->projectname . ' </button></form></div>';
            $col_arr["button"] = '<div class="tdblue justify-content-center d-flex">

           

              <button type="button" class="btn btn-primary genqr" value=' . $projects[$i]->id . ' data-bs-toggle="modal" data-bs-target="#qrModal" style="text-decoration:none;background:none;border:none;color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5 1H1v4h4V1ZM1 11v4h4v-4H1ZM15 1h-4v4h4V1ZM5 0h1v6H0V0h5Zm0 10h1v6H0v-6h5Zm6-10h-1v6h6V0h-5ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Zm-2 4.5V12h1v3h4v1H7v-.5Zm9-1.5v2h-3v-1h2v-1h1ZM2 2h2v2H2V2Zm10 0h2v2h-2V2ZM4 12H2v2h2v-2Z"></path>
          </svg></button>

         
          <button  name="id" class="btn btn-primary exceldl" value=' . $projects[$i]->id . ' style="text-decoration:none;background:none;border:none;color:black;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z"/></svg>
          </button>
    

              <form action="/deleteprojects" method="get">
              <button class="btn" name="id" value=' . $projects[$i]->id . '><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </button>
            </form>
            </div>';
            $col_arr["species"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->species . '</div>';
            $col_arr["plot"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->plot . '</div>';
            $col_arr["colum"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->colum . '</div>';
            $col_arr["treenumber"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->treenumber . '</div>';
            $col_arr["dateproject"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->dateproject . '</div>';

            // $col_arr["foodimg"] = '<div class="tdblue justify-content-center d-flex">'.$users[$i]->foodimg .'</div>';
            // $col_arr["username"] = '<img src="uploads/foodimg/'.$users[$i]->name.'" alt="" width="150" height="150">';
            array_push($data, $col_arr);
        }
        $data_array = array('rows' => $data);
        return response()->json($data_array);
    }
    public function stdqueryprojects()
    {
        $projects =  Projects::select('*')->where('status', 'unsuccess')->get();
        $data = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $number=$i+1;
            $col_arr["id"] = '<div class="tdblue justify-content-center d-flex" >' . $number. ' </div>';
            $col_arr["projectname"] = '<div class="tdblue justify-content-center d-flex"><form method="get" action="stdaddinfo"><button type="submit" name="id" value=' . $projects[$i]->id . ' style="text-decoration:none;background:none;border:none;">' . $projects[$i]->projectname . ' </button></form></div>';
            $col_arr["button"] = '<div class="tdblue justify-content-center d-flex">
            <button class="btn edit" name="id" value=' . $projects[$i]->id . ' data-bs-toggle="modal" data-bs-target="#editprojectsModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
              </button> 
        
            </div>';
            $col_arr["species"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->species . '</div>';
            $col_arr["plot"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->plot . '</div>';
            $col_arr["colum"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->colum . '</div>';
            $col_arr["treenumber"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->treenumber . '</div>';
            $col_arr["dateproject"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->dateproject . '</div>';

            // $col_arr["foodimg"] = '<div class="tdblue justify-content-center d-flex">'.$users[$i]->foodimg .'</div>';
            // $col_arr["username"] = '<img src="uploads/foodimg/'.$users[$i]->name.'" alt="" width="150" height="150">';
            array_push($data, $col_arr);
        }
        $data_array = array('rows' => $data);
        return response()->json($data_array);
    }


    public function stdqueryprojectssuccess()
    {
        $projects =  Projects::select('*')->where('status', 'success')->get();
        $data = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $col_arr["id"] = '<div class="tdblue justify-content-center d-flex" >' . $projects[$i]->id . ' </div>';
            $col_arr["projectname"] = '<div class="tdblue justify-content-center d-flex"><form method="get" action="stdaddinfo"><button type="submit" name="id" value=' . $projects[$i]->id . ' style="text-decoration:none;background:none;border:none;">' . $projects[$i]->projectname . ' </button></form></div>';
            $col_arr["button"] = '<div class="tdblue justify-content-center d-flex">
           
            <button class="btn edit" name="id" value=' . $projects[$i]->id . ' data-bs-toggle="modal" data-bs-target="#editprojectsModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
 
              </button>

              <button type="button" class="btn btn-primary" style="text-decoration:none;background:none;border:none;color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5 1H1v4h4V1ZM1 11v4h4v-4H1ZM15 1h-4v4h4V1ZM5 0h1v6H0V0h5Zm0 10h1v6H0v-6h5Zm6-10h-1v6h6V0h-5ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Zm-2 4.5V12h1v3h4v1H7v-.5Zm9-1.5v2h-3v-1h2v-1h1ZM2 2h2v2H2V2Zm10 0h2v2h-2V2ZM4 12H2v2h2v-2Z"></path>
          </svg></button>

              <form action="/deleteprojects" method="get">
              <button class="btn" name="id" value=' . $projects[$i]->id . '><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </button>
            </form>
            
            </div>';
            $col_arr["species"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->species . '</div>';
            $col_arr["plot"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->plot . '</div>';
            $col_arr["colum"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->colum . '</div>';
            $col_arr["treenumber"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->treenumber . '</div>';
            $col_arr["dateproject"] = '<div class="tdblue justify-content-center d-flex">' . $projects[$i]->dateproject . '</div>';

            // $col_arr["foodimg"] = '<div class="tdblue justify-content-center d-flex">'.$users[$i]->foodimg .'</div>';
            // $col_arr["username"] = '<img src="uploads/foodimg/'.$users[$i]->name.'" alt="" width="150" height="150">';
            array_push($data, $col_arr);
        }
        $data_array = array('rows' => $data);
        return response()->json($data_array);
    }
    public function deleteprojects(Request $request)
    {
        Projects::where('id', '=', $request->id)
            ->delete();
        return back();
    }

    public function queryeditprojects(Request $request)
    {
        $dataeditprojects = DB::table('projects')
            ->select('*')
            ->where('id', $request->id)
            ->get();
        return $dataeditprojects;
    }


    public function editprojects(Request $request)
    {
        $info = projects::select('*')->where('id', $request->id)->get();
        $dataarr = [];
        foreach ($request->all() as $key => $value) {
            if ($value == null) {
                $dataarr[$key] = $info[0][$key];
            } else {
                $dataarr[$key] = $value;
            }
        }

        Projects::where('id', $request->id)
      ->update(['projectname' => $dataarr['projectname'],'species' => $dataarr['species'],'plot' => $dataarr['plot'],'colum' => $dataarr['colum'],'treenumber' => $dataarr['treenumber'],'dateproject' => $dataarr['dateproject']]);
        // dd($dataarr['projectname']);
        // $editproject = Projects::find($request->id);
        // $editproject->projectname = $request->projectname;
        // $editproject->species = $dataarr['species'];
        // $editproject->plot = $dataarr['plot'];
        // $editproject->colum = $dataarr['colum'];
        // $editproject->treenumber = $dataarr['treenumber'];
        // $editproject->dateproject = $dataarr['dateproject'];

        // $editproject->update();
        return back()->with('success', 'success');
    }






    public function teacherprojectinfo(Request $request)
    {
        // $id = $request->id;
        // return view('teacher.teacherprojectinfo', compact('id'));
           $id = $request->id;
        $project = DB::table('projects')->select('species','projectname')->where('id',$id)->get();
        
        return view('teacher.teacherprojectinfo',compact('id','project'));
    }

    public function editteacherprofile(Request $request)
    {

        $ckarr['name'] = $request->name;
        $ckarr['lastname'] = $request->lastname;
        $ckarr['phone'] = $request->phone;
        $ckarr['email'] = $request->email;
        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extention = $file->getClientOriginalExtension();
            $filename =  auth()->user()->id . time() . '.' . $extention;
            $file->move('uploads/profileimg', $filename);
            if (auth()->user()->profileimg != null || auth()->user()->profileimg != '') {
                $file_path = public_path() . '/uploads/profileimg/' . auth()->user()->profileimg;
                unlink($file_path);
            }
            $ckarr['profileimg'] = $filename;
        }
        User::where('id', '=', auth()->user()->id)
            ->update($ckarr);
        return redirect()->route('teacherdashboard');
    }

    //calendar events
    public function calendar()
    {
        $student  = DB::table('users')->select('name')->where('is_admin',0)->get();
        $calender  = DB::table('events')->select('*')->get();
        for ($i=0; $i < count($calender) ; $i++) { 

            if($calender[$i]->allDay == 1){
                $calender[$i]->allDay = true;
             
            }else{
                $calender[$i]->allDay = false;
            }
            $calender[$i]->free = false;  
        }
        return view('events.calendar',compact('student','calender'));
    }
    public function teachercalendar()
    {   
        $student  = DB::table('users')->select('name')->where('is_admin',0)->get();
        $calender  = DB::table('events')->select('*')->get();
        for ($i=0; $i < count($calender) ; $i++) { 

            if($calender[$i]->allDay == 1){
                $calender[$i]->allDay = true;
             
            }else{
                $calender[$i]->allDay = false;
            }
            $calender[$i]->free = false;  
        }
        
        return view('events.teachercalendar',compact('student','calender'));
    }
    public function calendardata()
    {
        // $events = Events::select('*')->get();
        
        return 'success';
    }
    public function addevent(Request $request)
    {
        $add = new Events();
        $add->title = $request->title;
        $add->description = $request->detail;
        $add->allDay = $request->allday;
         $add->start = $request->startdate;
          $add->end = $request->enddate;
        $add->studentname = $request->studentname;
        $add->status = "-";
        $add->save();
        return 'success';
    }
    public function editevent(Request $request){
        Events::where('id', $request->id)
      ->update(['title' => $request->title,
                'description'=>$request->detail,
                'allDay'=>$request->allday,
                'start'=>$request->startdate,
                'end'=>$request->enddate,
                'studentname'=>$request->studentname
                ]);
                return 'success';
    }
    public function deleteevent(Request $request)
    {
        Events::where('id', '=', $request->id)
            ->delete();
        return 'success';
    }
    public function successevent(Request $request)
    {
        Events::where('id', $request->id)
            ->update(['status' => 'success']);
        return 'success';
    }
    public function successproject(Request $request)
    {
        $editproject = projects::find($request->id);
        $editproject->status = 'success';
        $editproject->update();
        return  redirect()->route('addproject');
    }
    public function graphdata(Request $request)
    {
        $grapharr = array();
        $graph = DB::table('infoproject')
        ->select('heighttree','infoproject.created_at')
            ->join('projects', 'infoproject.idproject', '=', 'projects.id')
            ->where('projects.status', 'success')
            ->where('projects.projectname', $request->projectname)
            ->get();

            for($i=0;$i<count($graph);$i++){
                $grapharr['height'][] = $graph[$i]->heighttree;
                $grapharr['createat'][] = "ครั้งที่".$i+1;
            }
        return $grapharr;
    }
    //export to Excel
    public function exportExcel(Request $request)
    {
        $dataproject  = DB::table('infoproject')->select('*')->where('idproject',$request->id)->Orderby('created_at','ASC')->get();
        $projectsdata = DB::table('projects')->select('*')->where('id',$request->id)->get();
        // "B1"=>"วันลงบันทึกเวลา","C1"=>"เวลา",=>"D1"=>"ความกว้างใบ","E1"=>"คลอโรฟิลด์","F1"=>"จำนวนข้อ","G1"=>"จำนวนใบ","H1"=>"ความกว้างผล","I1"=>"น้ำหนักผล","J1"=>"ค่าความหวาน","K1"=>"ความสูงต้น"
        $arrdata = array();
        $id = 2;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();  
        $sheet->setCellValue('A1',"รายการ");
        $sheet->setCellValue('B1',"วันลงบันทึกเวลา");
        $sheet->setCellValue('C1',"เวลา");
        $sheet->setCellValue('D1',"ความกว้างใบ");
        $sheet->setCellValue('E1',"คลอโรฟิลด์");
        $sheet->setCellValue('F1',"จำนวนข้อ");
        $sheet->setCellValue('G1',"จำนวนใบ");
        $sheet->setCellValue('H1',"ความกว้างผล");
        $sheet->setCellValue('I1',"น้ำหนักผล");
        $sheet->setCellValue('J1',"ค่าความหวาน");
        $sheet->setCellValue('K1',"ความสูงต้น");
        $sheet->setCellValue('M1',"ชื่อกิจกรรม");
        $sheet->setCellValue('M2', $projectsdata[0]->projectname);
        $sheet->setCellValue('N1',"สายพันธ์");
        $sheet->setCellValue('N2',$projectsdata[0]->species);
        for($i=0;$i<count( $dataproject );$i++){
            $splitdate = explode(" ", $dataproject[$i]->created_at);
            $excelid = $id-1;
            $sheet->setCellValue('A'.$id,$excelid);
            $sheet->setCellValue('B'.$id,$splitdate[0]);
            $sheet->setCellValue('C'.$id,$splitdate[1]);
            $sheet->setCellValue('D'.$id,$dataproject[$i]->leafwidth);
            $sheet->setCellValue('E'.$id,$dataproject[$i]->chlorophyll);
            $sheet->setCellValue('F'.$id,$dataproject[$i]->numberofverses);
            $sheet->setCellValue('G'.$id,$dataproject[$i]->numberofleaf);
            $sheet->setCellValue('H'.$id,$dataproject[$i]->widthofyield);
            $sheet->setCellValue('I'.$id,$dataproject[$i]->weight);
            $sheet->setCellValue('J'.$id,$dataproject[$i]->chlorophyll);
            $sheet->setCellValue('K'.$id,$dataproject[$i]->heighttree);
            $id++;
        }
        // $sheet->setCellValue($arrdata);
        $sheet->fromArray($arrdata);
        $writer = new Xlsx($spreadsheet);
        // $writer->save('hello world.xlsx');
        // redirect output to client browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$projectsdata[0]->projectname.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
