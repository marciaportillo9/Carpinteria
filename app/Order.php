<?php

namespace App;

use App\Product;
use App\Entities\Clients;
use App\User;
use Illuminate\Database\Eloquent\Model;



class Order extends Model
{

//use LogsActivity

    protected $fillable = ['deliver_date', 'initial_payment','quantity', 'status', 'product_id','client_id', 'user_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function client(){
        return $this->belongsTo(Clients::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusTextAttribute()
    {
        return $this->arrayStatus($this->status);
    }


    public function arrayStatus($number_status){
        $status = [];
        $status [1] = trans('validation attributes.created');
        $status [2] = trans('validation attributes.purchasedMaterials');
        $status [3] = trans('validation attributes.heavyWorkDone');
        $status [4] = trans('validation attributes.fineWorkDone');
        $status [5] = trans('validation attributes.delivered');
        $status [6] = trans('validation attributes.finalized');

        return $status[$number_status];
    }
}

