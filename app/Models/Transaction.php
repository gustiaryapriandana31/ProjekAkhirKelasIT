<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id_trx';
    public $incrementing = false;
    protected $keyType = 'string';

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}