<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        return view('customer.index', [
            'customers' => Customer::all()
        ]
        );
    }

    public function create() {
        return view('customer.create');
    }

    public function store(Request $request) {
        
    }
}