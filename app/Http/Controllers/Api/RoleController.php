<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data=Role::all()->toArray();
        return response()->json([
            'message'=>'Role Data fetched Successfully',
            'data'=>$data,
        ]);
    }
    
    public function store(Request $request)
    {
        if(!empty($request))
        {
            $role=new Role();
            $role['role_name']=$request->name;
            if($role->save())
            {
               return response()->json([
                   'message'=>'Data Stored SuccessFully', 
                   'data'=>$role,
               ]);
            }else{
                return response()->json([
                    'message'=>'Data Not Stored',
                    
                ]);
            }

        }

    }



    public function updateuser($id,Request $request)
    {   $role=Role::find($id);
              
                $role->role_name=$request->name;
                $role->save();
                
                    return response()->json([
                        'message'=>'Role Updated',
                        'data'=>$role,
                    ]);
          }

          public function deleteuser($id)
          {
              Role::find($id)->delete();
              $role=Role::all();
                  return response()->json([
                      'message'=>'User Deleted Successfully',
                      'data'=>$role,
                  ]);
              
          }

}
    
    



 
