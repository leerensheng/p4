<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatabaseController extends Controller {

    public function getIndex() {

        $tech_assets = \p4\Tech_asset::orderBy('id','desc')->get();

        return view('inventory_assets.index')->with('tech_assets',$tech_assets);
    }

    //Tech Asset Controllers

    public function getTechShow($id = null) {
        $tech_asset = \p4\Tech_asset::find($id);
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

    public function getFurnitureShow($furniture_asset = null) {
        return view('inventory_assets.showFurnitureAsset')->with('furniture_asset', $furniture_asset);
    }

    public function getFurnitureCreate() {
        return view('inventory_assets.createFurnitureAsset');
    }

    public function postFurnitureCreate() {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $data = $request->only('name','description','purchase_date','purchase_price');
        $tech_asset = new \p4\Furniture_asset($data);
        $tech_asset->save();

        \Session::flash('message','Your furniture asset was saved to the database');

        return redirect('/');
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
