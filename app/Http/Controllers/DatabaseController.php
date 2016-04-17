<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

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

    public function getTechShow($tech_asset) {
        return 'Show a tech item: '.$tech_asset;
    }

    public function getTechCreate() {
        return 'Tech create get';
    }

    public function postTechCreate() {
        return 'Tech create post';
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
