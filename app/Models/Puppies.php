<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use DateTime;
class Puppies extends Model {
    
    protected $table = 'tbl_puppies';
    protected $guarded = [];
    public $timestamps = false;
    protected $appends = ['weeks'];
    public function getweeksAttribute(){
        if(!empty($this->dob)){
            $datefrom = DateTime::createFromFormat('Y-m-d H:i:s',date('Y-m-d H:i:s'));
            $dateto = DateTime::createFromFormat('Y-m-d',$this->dob);            
            $interval = $datefrom->diff($dateto);
            $week_total = $interval->format('%a')/7;
            return floor($week_total).' weeks';
        }else{
            return '';
        }
    }
}
