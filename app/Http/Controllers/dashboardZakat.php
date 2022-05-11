<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\programModal;

class dashboardZakat extends Controller
{
    public function index(Request $request)
    {
        $list_program = programModal::all();
        // dd($list_program);
        if($request->ajax()){
            return datatables()->of($list_program)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" style="color: aliceblue" data-toggle="tooltip"  data-id="'.$data->id_program.'" data-original-title="Edit" class="edit btn btn-primary btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id_program.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('v_dashboard');
    }
    
    public function store(Request $request)
    {
        $id = $request->id_program;
        
        $post   =   programModal::updateOrCreate(['id_program' => $id],
                    [
                        'sumber_dana' => $request->sumber_dana,
                        'program' => $request->program,
                        'keterangan' => $request->keterangan,
                    ]); 

        return response()->json($post);
    }
    
    public function edit($id)
    {
        $where = array('id_program' => $id);
        $post  = programModal::where($where)->first();
     
        return response()->json($post);
    }

    
    public function destroy($id)
    {
        $post = programModal::where('id_program',$id)->delete();
     
        return response()->json($post);
    }
}
