<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $table="bca_cv";
protected $primaryKey="id";
protected $fillable=['tanggal','keterangan','cabang','jumlah','status','saldo'];
}
