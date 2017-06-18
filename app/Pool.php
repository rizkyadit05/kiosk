<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CostumsClass\ModelTrait;

class Pool extends Model{

    use ModelTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pools';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['user_id', 'order_product_id', 'price', 'courier_id'];
    protected $guarded = ['_token','id'];

    // public function admin()
    // {
    //     return $this->belongsTo('App\Admin', 'admin_id');
    // }

    // public function city()
    // {
    //     return $this->belongsTo('App\Models\City', 'city_id');
    // }

    // public function createdBy()
    // {
    //     return $this->belongsTo('App\Admin', 'created_by');
    // }

    // public function updatedBy()
    // {
    //     return $this->belongsTo('App\Admin', 'created_by');
    // }
}