<?php

namespace App\Http\Controllers\users\master;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index()
    {
        return view('locality.country.index');
    }

    public function show(Request $request)
    {
        $noOfRecords = $request->input('no_of_records');
        $res = null;
        $query = Country::select('*');

        $country_code = $request->input('country_code');
        if (!empty($country_code)) {
            $query = $query->where('country_code', 'like', '\\' . $country_code . '%');
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
            'country_code'        => 'required|unique:core_country_master,country_code',
            'country_name'        => 'required',
            'country_description' => 'required',
            'is_active'             => 'required',
        ];

        $customMessages = [
            'country_code.required'        => 'country Code is required',
            'country_code.unique'          => 'country Code is already exists in system',
            'country_name.required'        => 'country Name is required',
            'country_description.required' => 'country Description is required',
            'is_active.required'             => 'Status is required',
        ];

        $validators = Validator::make($request->all(), $rules, $customMessages);

        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $saveData = new Country();
        $saveData->country_code = $request->input('country_code');
        $saveData->country_name = $request->input('country_name');
        $saveData->country_description = $request->input('country_description');
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
        $selected_data = Country::select('*')
            ->where('country_code', '=', $request->input('country_code'))
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
            'country_code'        => 'required',
            'country_name'        => 'required',
            'country_description' => 'required',
            'is_active'             => 'required',
        ];

        $customMessages = [
            'country_code.required'        => 'country Code is required',
            'country_name.required'        => 'country Name is required',
            'country_description.required' => 'country Description is required',
            'is_active.required'             => 'Status is required',
        ];

        $validators = Validator::make($request->all(), $rules, $customMessages);

        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $old_country_code = $request->input('old_country_code');


        $saveData =  Country::where('country_code',$old_country_code)->first();

        if($saveData){
            $data = array(
                'country_code' => $request->input('country_code'),
                'country_name' => $request->input('country_name'),
                'country_description' => $request->input('country_description'),
                'is_active' => $request->input('is_active'),
                'created_by' => 'system',
                'modified_by' => 'system',
            );
            $saveData->update($data);

            return response()->json([ 'status' => true, 'message' => "country details updated successfully" , "last_update_user_name" => "" ], 200);
        } else {
            return response()->json(['status' => false, 'message' => "Server Error.."], 200);
        }
    }
}
