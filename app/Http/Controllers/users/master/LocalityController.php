<?php

namespace App\Http\Controllers\users\master;

use App\Continental;
use App\Country;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocalityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function getContinental()
    {
        $continental = Continental::select('*')->get();
        return response()->json(['status'=>true, 'data'=>$continental]);
    }


    public function getCountries(){
        $countries = Country::select('*')->get();
        return response()->json(['status'=>true, 'data'=>$countries]);
    }
    public function getStates(Request $request){

        $country_id = $request->input('country_id');
        if(!$country_id){
            return response()->json(['status'=>false, 'data'=>'']);
        }

        $states = State::select('*');

        if ($country_id) {
            if (is_array($country_id)) {
                $states = $states->whereIn('country_id', $country_id);
            } else {
                $states = $states->where('country_id', $country_id);
            }
        }

        $states = $states->get();

        if(!$states->isEmpty()){
            return response()->json(['status'=>true, 'data'=>$states]);
        }else{
            return response()->json(['status'=>false, 'data'=>'']);
        }

    }


    public function createCountry(Request $request){
        $rules = [
            'create_country' => 'required',
        ];
        $customMessages = [
            'create_country.required' => 'Country name is required',
        ];
        $validators = Validator::make($request->all(), $rules, $customMessages);
        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $create_country = new Country();
        $create_country->name = $request->create_country;
        $create_country->save();

        $countries = Country::select('*')->get();

        if($create_country){
            return response()->json(['status'=>true, 'message'=>'Country Created Successfully', 'data'=>$countries]);
        }else{
            return response()->json(['status'=>false, 'message'=>'Something wrong with database, please refresh the page and try again']);
        }
    }

    public function createState(Request $request){
        $rules = [
            'country_id_create_state' => 'required|integer',  // country_id_create_state is country_id
            'create_state' => 'required',
        ];
        $customMessages = [
            'country_id_create_state.required' =>'Select country',
            'create_state.required' => 'State name is required',
        ];
        $validators = Validator::make($request->all(), $rules, $customMessages);
        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $create_state = new State();
        $create_state->country_id = $request->country_id_create_state;
        $create_state->name = $request->create_state;
        $create_state->save();

        $states = State::select('*')->where('country_id', $request->country_id_create_state)->get();

        if($create_state){
            return response()->json(['status'=>true, 'message'=>'State Created Successfully', 'data'=>$states]);
        }else{
            return response()->json(['status'=>false, 'message'=>'Something wrong with database, please refresh the page and try again']);
        }
    }

}
