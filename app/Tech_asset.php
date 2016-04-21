<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Tech_asset extends Model
{
    protected $fillable = ['serial_number','manufacturer','model','purchase_date', 'cpu','ram','storage_size','warranty_expiration'];

}
