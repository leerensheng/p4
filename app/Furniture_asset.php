<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Furniture_asset extends Model
{
    protected $fillable = ['name','description','purchase_price','purchase_date'];

}
