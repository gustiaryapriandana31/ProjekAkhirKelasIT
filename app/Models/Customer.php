<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

 
    protected $fillable = ['id_customer', 'nama_customer', 'no_telp', 'jenis_kelamin', 'alamat'];

    protected $primaryKey = 'id_customer';
    public $incrementing = false;
    protected $keyType = 'string';

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}