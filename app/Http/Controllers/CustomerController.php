<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

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
        // $transaction = Transaction::findOrFail($transaction->id);
        $customer = new Customer();

        $customer->nama_customer = $request->nama;
        $customer->no_telp = $request->notelp;
        $customer->jenis_kelamin = $request->jenkel;
        $customer->alamat = $request->alamat;

        $customer->save();
        
        return redirect(route('create-transaction', [$transaction->id]))->with('success', 'Data Customer Berhasil Ditambahkan!');
    }

    public function edit($customer_id) {
        return view('customer.edit', [
            'title' => 'Edit Data Customer',
            'customer' => Customer::findOrFail($customer_id)
        ]);
    }

    public function update(Request $request, $customer_id) {
        $customers = Customer::Find($customer_id);

        $customers->nama_customer = $request->nama;
        $customers->no_telp = $request->notelp;
        $customers->jenis_kelamin = $request->jenkel;
        $customers->alamat = $request->alamat;

        $customers->save();

        return redirect(route('all-customers'))->with('success', 'Data Customer Berhasil Diubah!');
    }

    public function delete(Customer $customer) {
        Customer::destroy($customer->id);

        return redirect(route('all-customers'))->with('success', 'Data Customer Berhasil Dihapus!');
    }
}