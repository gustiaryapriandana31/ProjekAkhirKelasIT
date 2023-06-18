<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class TransactionController extends Controller
{
    public function index() {
        return view('transaction.index', [
            'title' => 'Data Seluruh Transaction',
            'transactions' => Transaction::where('status', 'Lunas')->get()
        ]);
    }
    
    public function index_unsettled() {
        return view('transaction.index_unsettled', [
            'title' => 'Data Seluruh Transaction Belum Lunas',
            'transactions' => Transaction::where('status', 'Belum Lunas')->get()
        ]);
    }

    public function show(Transaction $transaction) {
        return view('transaction.show', [
            'title' => 'Detail Data Transaction',
            'transaction' => Transaction::where('id_trx', $transaction->id_trx)->first()
        ]);
    }

    public function create(Customer $customer) {
        return view('transaction.create', [
            'title' => 'Tambah Transaksi Baru',
            'customer' => Customer::where('id_customer', $customer->id_customer)->first()
        ]);
    }

    public function store(Request $request, Customer $customer) {
        $transaction = new Transaction();

        $transaction->id_trx = $request->id_trx;
        $transaction->customer_id = $customer->id_customer;
        $transaction->jenis_barang = $request->jenis_barang;
        $transaction->berat = $request->berat;
        $transaction->harga = $request->harga;
        $transaction->total_harga = $request->total_harga;
        $transaction->tanggal_masuk = $request->tanggal_masuk;
        $transaction->tanggal_keluar = $request->tanggal_keluar;
        $transaction->status = $request->status;

        $transaction->save();
        
        return redirect(route('all-transactions-unsettled'))->with('success', 'Data Transaksi Berhasil Ditambahkan!');
    }

    public function edit(Transaction $transaction) {
        return view('transaction.edit', [
            'title' => 'Edit Data Layanan',
            'transaction' => Transaction::where('id_trx', $transaction->id_trx)->first()
        ]);
    }

    public function update(Request $request, Transaction $transaction) {
        $transactions = Transaction::where('id_trx', $transaction->id_trx)->first();

        $transactions->id_trx = $request->id_trx;
        // $transactions->customer_id = $customer->id_customer;
        $transactions->jenis_barang = $request->jenis_barang;
        $transactions->berat = $request->berat;
        $transactions->harga = $request->harga;
        $transactions->total_harga = $request->total_harga;
        $transactions->tanggal_masuk = $request->tanggal_masuk;
        $transactions->tanggal_keluar = $request->tanggal_keluar;
        $transactions->status = $request->status;


        $transactions->save();

        return redirect(route('all-transactions'))->with('success', 'Data Transaksi Berhasil Diubah!');
    }

    public function delete(Transaction $transaction) {
        Transaction::destroy($transaction->id_trx);

        return redirect(route('all-transactions'))->with('success', 'Data Transaksi Berhasil Dihapus!');
    }
}