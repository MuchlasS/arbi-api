<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        try {
            $data = Role::all();
            return response()->json([
                'status' => '200',
                'message' => 'get data successfully',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'=>'400',
                'message'=>$e->getMessage()
            ]);
        }
    }
}
