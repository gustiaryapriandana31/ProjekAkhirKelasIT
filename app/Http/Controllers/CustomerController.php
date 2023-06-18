<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index() {
        return view('customer.index', [
            'title' => 'Data Seluruh Customer',
            'customers' => Customer::all()
        ]);
    }

    public function create() {
        return view('customer.create', [
            'title' => 'Tambah Customer Baru'
        ]);
    }

    public function store(Request $request) {
        $customer = new Customer();

        $customer->id_customer = $request->id_customer;
        $customer->nama_customer = $request->nama;
        $customer->no_telp = $request->notelp;
        $customer->jenis_kelamin = $request->jenkel;
        $customer->alamat = $request->alamat;

        $customer->save();
        
        return redirect(route('create-transaction', [$customer->id_customer]))->with('success', 'Data Customer Berhasil Ditambahkan!');
    }

    public function edit(Customer $customer) {
        return view('customer.edit', [
            'title' => 'Edit Data Customer',
            'customer' => Customer::where('id_customer', $customer->id_customer)->first()
        ]);
    }

    public function update(Request $request, Customer $customer) {
        $customers = Customer::where('id_customer', $customer->id_customer)->first();
        
        $customers->id_customer = $request->id_customer;
        $customers->nama_customer = $request->nama;
        $customers->no_telp = $request->notelp;
        $customers->jenis_kelamin = $request->jenkel;
        $customers->alamat = $request->alamat;

        $customers->save();

        return redirect(route('all-customers'))->with('success', 'Data Customer Berhasil Diubah!');
    }

    public function delete(Customer $customer) {
        Customer::destroy($customer->id_customer);

        return redirect(route('all-customers'))->with('success', 'Data Customer Berhasil Dihapus!');
    }
}