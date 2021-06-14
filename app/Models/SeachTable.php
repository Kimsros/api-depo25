<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SeachTable extends Model
{
    use HasFactory;
    public static function getSearch($table_name,$search,$columns=[],$per_page=0){
        $searchs=explode(" ",$search);
        $query =DB::table($table_name)->select('*');
        if(count($columns)>0){
            foreach($columns as $column){
                foreach($searchs as $search_){
                    $query->orWhere($column, 'LIKE', "%{$search_}%")->where([['status','!=',0]]);
                }
            }
            return $query->paginate($per_page);
        }else{
            $columns = Schema::getColumnListing($table_name);
            foreach($columns as $column){
                foreach($searchs as $search_){
                    $query->orWhere($column, 'LIKE', "%{$search_}%")->where([['status','!=',0]]);
                }
            }
            return $query->paginate($per_page);
        }
    }
}
