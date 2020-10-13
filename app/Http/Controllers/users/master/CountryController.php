<?php

namespace App\Http\Controllers\users\master;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'country_code'                          => 'required|unique:core_country_master,country_code',
            'country_name'                          => 'required',
            'country_description'                   => 'required',
            'default_currency_code'                 => 'required',
            'country_image'                         => 'sometimes|nullable|mimes:jpeg,png,jpg',
            'continent_code'                        => 'required',
            'country_code_iso3'                     => 'required',
            'country_prefix'                        => 'required',
            'is_active'                             => 'required',
            'shipping_enabled'                      => 'required',
            'check_pincode_delivery_serviceable'    => 'required',
        ];

        $customMessages = [
            'country_code.required'                       => 'country Code is required',
            'country_code.unique'                         => 'country Code is already exists in system',
            'country_name.required'                       => 'country Name is required',
            'country_description.required'                => 'country Description is required',
            'default_currency_code.required'              => 'Default Currency Code is required',
            'country_image.required'                      => 'Country Image is required',
            'continent_code.required'                     => 'Continent Code is required',
            'country_code_iso3.required'                  => 'Country Code ISO3 is required',
            'country_prefix.required'                     => 'Country Prefix is required',
            'is_active.required'                          => 'Active Status is required',
            'shipping_enabled.required'                   => 'Shipping Enabled is required',
            'check_pincode_delivery_serviceable.required' => 'Pincode Delivery Serviceable is required',
        ];

        $validators = Validator::make($request->all(), $rules, $customMessages);

        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }


        if ($request->hasFile('country_image')) {
            $country_image           = $request->file('country_image')->getClientOriginalName();
            $country_image_name      = pathinfo($country_image, PATHINFO_FILENAME);
            $country_image_extension = $request->file('country_image')->getClientOriginalExtension();

            $country_image_with_extension   = str_replace(' ', '', $country_image_name) . time() . '.' . $country_image_extension;
            $destinationPathPublic          = $request->file('country_image')->storeAs('public/images/country', $country_image_with_extension);

            $destinationPathStorage         = $request->file('country_image')->storeAs('public/storage/images/country', $country_image_with_extension);
                Storage::disk('public')->putFileAs('images/country', $country_image, $country_image_with_extension);
        } else {
            $country_image_with_extension = '';
        }

        $saveData = new Country();
        $saveData->country_code                         = $request->input('country_code');
        $saveData->country_name                         = $request->input('country_name');
        $saveData->country_description                  = $request->input('country_description');
        $saveData->default_currency_code                = $request->input('default_currency_code');
        $saveData->country_image                        = $country_image_with_extension;
        $saveData->continent_code                       = $request->input('continent_code');
        $saveData->country_code_iso3                    = $request->input('country_code_iso3');
        $saveData->country_prefix                       = $request->input('country_prefix');
        $saveData->is_active                            = $request->input('is_active');
        $saveData->shipping_enabled                     = $request->input('shipping_enabled');
        $saveData->check_pincode_delivery_serviceable   = $request->input('check_pincode_delivery_serviceable');
        $saveData->created_date                         = $request->input('created_date');
        $saveData->modified_date                        = $request->input('modified_date');
        $saveData->created_by                           = 'admin';
        $saveData->modified_by                          = 'admin';
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

        $currencySelectPicker = getSelectOptions(getCurrency(null), $selected_data->default_currency_code, null);
        $continentSelectPicker = getSelectOptions(getContinental(null), $selected_data->default_currency_code, null);
        $selected_data['currencySelectPicker'] = $currencySelectPicker;
        $selected_data['continentSelectPicker'] = $continentSelectPicker;
        if($selected_data){
            return json_encode(['status'=>true,'message'=>'data found',  'data'=>$selected_data]);
        }else{
            return json_encode(['status'=>false,'message'=>'data not found',  'data'=>'']);
        }
    }

    public function update(Request $request)
    {

        $rules = [
            'country_code'                          => 'required',
            'country_name'                          => 'required',
            'country_description'                   => 'required',
            'default_currency_code'                 => 'required',
            'country_image'                         => 'sometimes|nullable|mimes:jpeg,png,jpg',
            'continent_code'                        => 'required',
            'country_code_iso3'                     => 'required',
            'country_prefix'                        => 'required',
            'is_active'                             => 'required',
            'shipping_enabled'                      => 'required',
            'check_pincode_delivery_serviceable'    => 'required',
        ];


        $customMessages = [
            'country_code.required'                       => 'country Code is required',
            'country_name.required'                       => 'country Name is required',
            'country_description.required'                => 'country Description is required',
            'default_currency_code.required'              => 'Default Currency Code is required',
            'country_image.required'                      => 'Country Image is required',
            'continent_code.required'                     => 'Continent Code is required',
            'country_code_iso3.required'                  => 'Country Code ISO3 is required',
            'country_prefix.required'                     => 'Country Prefix is required',
            'is_active.required'                          => 'Active Status is required',
            'shipping_enabled.required'                   => 'Shipping Enabled is required',
            'check_pincode_delivery_serviceable.required' => 'Pincode Delivery Serviceable is required',
        ];

        $validators = Validator::make($request->all(), $rules, $customMessages);

        if ($validators->fails()) {
            $output['status'] = false;
            $output['message'] = $validators->errors()->first();
            return json_encode($output);
        }

        $old_country_code = $request->input('old_country_code');

        $saveData =  Country::where('country_code',$old_country_code)->first();

        if ($request->hasFile('country_image')) {
            $country_image           = $request->file('country_image')->getClientOriginalName();
            $country_image_name      = pathinfo($country_image, PATHINFO_FILENAME);
            $country_image_extension = $request->file('country_image')->getClientOriginalExtension();

            $country_image_with_extension   = str_replace(' ', '', $country_image_name) . time() . '.' . $country_image_extension;
            $destinationPathPublic          = $request->file('country_image')->storeAs('public/images/country', $country_image_with_extension);

            $destinationPathStorage         = $request->file('country_image')->storeAs('public/storage/images/country', $country_image_with_extension);
            Storage::disk('public')->putFileAs('images/country', $country_image, $country_image_with_extension);
        } else {
            $country_image_with_extension = '';
        }

        if($saveData){
            $data = array(
            'country_code'                         => $request->input('country_code'),
            'country_name'                         => $request->input('country_name'),
            'country_description'                  => $request->input('country_description'),
            'default_currency_code'                => $request->input('default_currency_code'),
            'country_image'                        => $country_image_with_extension,
            'continent_code'                       => $request->input('continent_code'),
            'country_code_iso3'                    => $request->input('country_code_iso3'),
            'country_prefix'                       => $request->input('country_prefix'),
            'is_active'                            => $request->input('is_active'),
            'shipping_enabled'                     => $request->input('shipping_enabled'),
            'check_pincode_delivery_serviceable'   => $request->input('check_pincode_delivery_serviceable'),
            'created_date'                         => $request->input('created_date'),
            'modified_date'                        => $request->input('modified_date'),
            'created_by'                           => 'admin',
            'modified_by'                          => 'admin',
            );
            $saveData->update($data);

            return response()->json([ 'status' => true, 'message' => "country details updated successfully" , "last_update_user_name" => "" ], 200);
        } else {
            return response()->json(['status' => false, 'message' => "Server Error.."], 200);
        }
    }
}
