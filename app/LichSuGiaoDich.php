<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuGiaoDich extends Model
{
    //
    protected $table = 'lichsugiaodich';
    public function nguoithuchien()
    {
        return $this->belongsTo('App\TaiKhoan','NguoiThucHien','id');
    }
}
