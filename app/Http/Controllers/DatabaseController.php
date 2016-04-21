<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatabaseController extends Controller {

    public function getIndex() {
        return 'Inventory: Application Homepage';
    }

    //Login Controllers

    public function getUserLogin() {
        return 'User login get';
    }

    public function postUserLogin() {
        return 'User login post';
    }

    public function getUserLogout() {
        return 'User logout post';
    }

    public function getUserCreate() {
        return 'User create';
    }

    public function postUserCreate() {
        return 'User create post';
    }

    public function getUserUpdate() {
        return 'User update get';
    }

    public function postUserUpdate() {
        return 'User update post';
    }

    public function getUserDelete() {
        return 'User delete get';
    }

    public function postUserDelete() {
        return 'User delete post';
    }

    //Tech Asset Controllers

    public function getTechShow($tech_asset = null) {
        return view('inventory_assets.showTechAsset')->with('tech_asset', $tech_asset);
    }

    public function getTechCreate() {
        return view('inventory_assets.createTechAsset');
    }

    public function postTechCreate(Request $request) {
        $this->validate($request,[
            'serial_number' => 'required'
        ]);

        $data = $request->only('serial_number','manufacturer','model','purchase_date', 'cpu','ram','storage_size','warranty_expiration');
        $tech_asset = new \p4\Tech_asset($data);
        $tech_asset->save();

        \Session::flash('message','Your technology asset was saved to the database');

        return redirect('/');
    }

    public function getTechUpdate($tech_asset) {
        return 'Tech update get'.$tech_asset;
    }

    public function postTechUpdate($tech_asset) {
        return 'Tech update post'.$tech_asset;
    }

    public function postTechDelete($tech_asset) {
        return 'Tech delete post'.$tech_asset;
    }

    //furniture Asset Controllers

    public function getFurnitureShow($furniture_asset) {
        return 'Show a Furniture item: '.$furniture_asset;
    }

    public function getFurnitureCreate() {
        return 'Furniture create get';
    }

    public function postFurnitureCreate() {
        return 'Furniture create post';
    }

    public function getFurnitureUpdate($furniture_asset) {
        return 'Furniture update get'.$furniture_asset;
    }

    public function postFurnitureUpdate($furniture_asset) {
        return 'Furniture update post'.$furniture_asset;
    }

    public function postFurnitureDelete($furniture_asset) {
        return 'Furniture delete post'.$furniture_asset;
    }

} #eoc
