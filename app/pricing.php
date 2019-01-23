<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    protected $table = 'pricing';
    protected $fillable = [
        'id',
        'optone',
        'opttwo',
        'optthree',
        'price',
    ];
    public static function findprice($id){
        $prices = pricing::where('id','=',$id)->get()->toArray();
        return $prices[0]['price'];
    }
}
