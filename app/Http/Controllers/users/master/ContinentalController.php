<?php

namespace App\Http\Controllers\users\master;

use App\Continental;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContinentalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
        return view('locality.continental.index');
    }

    public function show(Request $request)
    {
        $noOfRecords = $request->input('no_of_records');
        $res = null;
        $query = Continental::select('*');

        $continent_code = $request->input('continent_code');
        if (!empty($continent_code)) {
            $query = $query->where('continent_code', 'like', '\\' . $continent_code . '%');
        }

        $query = $query->paginate($noOfRecords);

        foreach ($query as $data) {
            $res[] = $data;
        }

        $response['data'] = $res;
        if ($query->total()>0){
            $response['status'] = true;
        }else{
            $response['status'] = false;
        }
        $response['records'] = $query->total();
        $response['webPagination'] = str_replace("\r\n", "", $query->links('layouts.pagination'));
        return response()->json($response);
    }

    public function store(Request $request)
    {
        $rules = [
            'continent_code'        => 'required|unique:core_continent_master,continent_code',
            'continent_name'        => 'required',
            'continent_description' => 'required',
            'is_active'             => 'required',
        ];

        $customMessages = [
            'continent_code.required'        => 'Continent Code is required',
            'continent_code.unique'          => 'Continent Code is already exists in system',
            'continent_name.required'        => 'Continent Name is required',
            'continent_description.required' => 'Continent Description is required',
            'is_active.required'             => 'Status is required',
        ];

        $validators = Validator::make($request->all(), $rules, $customMessages);

        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $saveData = new Continental();
        $saveData->continent_code = $request->input('continent_code');
        $saveData->continent_name = $request->input('continent_name');
        $saveData->continent_description = $request->input('continent_description');
        $saveData->is_active = $request->input('is_active');
        $saveData->created_by = 'system';
        $saveData->modified_by = 'system';
        $saveData->save();

        if ($saveData) {
            $output['status'] = true;
            $output['message'] = 'Data Saved successfully';
            return json_encode($output);
        }else{
            $output['status'] = false;
            $output['message'] = 'Something wrong with database insertion, please refresh and try again';
            return json_encode($output);
        }
    }


    public function edit(Request $request)
    {
        $selected_data = Continental::select('*')
            ->where('continent_code', '=', $request->input('continent_code'))
            ->first();

        if($selected_data){
            return json_encode(['status'=>true,'message'=>'data found',  'data'=>$selected_data]);
        }else{
            return json_encode(['status'=>false,'message'=>'data not found',  'data'=>'']);
        }
    }

    public function update(Request $request)
    {

        $rules = [
            'continent_code'        => 'required',
            'continent_name'        => 'required',
            'continent_description' => 'required',
            'is_active'             => 'required',
        ];

        $customMessages = [
            'continent_code.required'        => 'Continent Code is required',
            'continent_name.required'        => 'Continent Name is required',
            'continent_description.required' => 'Continent Description is required',
            'is_active.required'             => 'Status is required',
        ];

        $validators = Validator::make($request->all(), $rules, $customMessages);

        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $old_continent_code = $request->input('old_continent_code');


        $saveData =  Continental::where('continent_code',$old_continent_code)->first();

        if($saveData){
            $data = array(
                'continent_code' => $request->input('continent_code'),
                'continent_name' => $request->input('continent_name'),
                'continent_description' => $request->input('continent_description'),
                'is_active' => $request->input('is_active'),
                'created_by' => 'system',
                'modified_by' => 'system',
            );
            $saveData->update($data);

            return response()->json([ 'status' => true, 'message' => "Continent details updated successfully" , "last_update_user_name" => "" ], 200);
        } else {
            return response()->json(['status' => false, 'message' => "Server Error.."], 200);
        }
    }
}
