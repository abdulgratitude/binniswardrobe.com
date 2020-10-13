<?php

use App\Continental;
use App\Country;
use App\Currency;

if (!function_exists('getSelectOptions')) {
    function getSelectOptions($arr, $selected = NULL, $default = NULL)
    {
        $options = array();
        if (is_array($arr)) {
            if ($default != '') {
                array_push($options, '<option value="" disabled selected>' . ucwords($default) . '</options>');
            }
            foreach ($arr as $key => $value) {
                if ($selected === $key) {
                    array_push($options, '<option value="' . $key . '" selected>' . ucwords($value) . '</options>');
                } else {
                    array_push($options, '<option value="' . $key . '" >' . ucwords($value) . '</options>');
                }
            }
            return implode('', $options);
        }
    }
}


if (!function_exists('getContinental')) {
    function getContinental($id = NULL)
    {
        $arr = null;
        $array = Continental::select(
            'continent_code as code',
            'continent_name as name'
        )->get()->toArray();
        foreach ($array as $ele) {
            $arr[$ele['code']] = ucwords($ele['name']);
        }
        return $arr;
    }
}

if (!function_exists('getCountry')) {
    function getCountry($id = NULL)
    {
        $arr = null;
        $array = Country::select(
            'country_code as code',
            'country_name as name'
        )->get()->toArray();
        foreach ($array as $ele) {
            $arr[$ele['code']] = ucwords($ele['name']);
        }
        return $arr;
    }
}

if (!function_exists('getCurrency')) {
    function getCurrency($id = NULL)
    {
        $arr = null;
        $array = Currency::select(
            'currency_code as code',
            'currency_name as name'
        )->get()->toArray();
        foreach ($array as $ele) {
            $arr[$ele['code']] = ucwords($ele['name']);
        }
        return $arr;
    }
}

