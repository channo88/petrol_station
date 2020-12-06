<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\AutoType;
use App\Models\City;
use App\Models\Country;
use App\Models\Town;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $brands = Brand::when($req->type, function(Builder $q, $type) {
            $q->where('type_id', $type);
        })->when($req->cif, function(Builder $q, $cif) {
            $q->where('cif', 'LIKE', $cif . '%');
        })->when($req->fiscal_name, function(Builder $q, $fiscal_name) {
            $q->where('fiscal_name', 'LIKE', $fiscal_name . '%');
        })->when($req->trade_name, function(Builder $q, $trade_name) {
            $q->where('trade_name', 'LIKE', $trade_name . '%');
        })->when($req->town, function(Builder $q, $town) {
            $q->where('town_id', $town);
        })->when($req->city, function(Builder $q, $city) {
            $q->where('city_id', $city);
        })->when($req->country, function(Builder $q, $country) {
            $q->where('country_id', $country);
        })->with(['town', 'city', 'country'])->paginate();

        return view('admin.brands.index',[
            'brands' => $brands,
            'brand_type' => AutoType::all(),
            'towns' => Town::all(),
            'cities' => City::all(),
            'countries' => Country::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
