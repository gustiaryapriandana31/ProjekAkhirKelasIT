<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index() {
        return view('transaction.index', [
            'title' => 'Data Seluruh Transaction',
            'transactions' => Transaction::all()
        ]);
    }

    public function create(Transaction $transaction) {
        return view('transaction.create', [
            'title' => 'Tambah Transaksi Baru',
            'transaction' => Transaction::findOrFail($transaction->id)
        ]);
    }

    public function store(Request $request) {
        $transaction = new Transaction();

        $transaction->nama_customer = $request->nama;
        $transaction->no_telp = $request->notelp;
        $transaction->jenis_kelamin = $request->jenkel;
        $transaction->alamat = $request->alamat;

        $transaction->save();
        
        return redirect(route('all-transactions'))->with('success', 'Data Transaksi Berhasil Ditambahkan!');
    }

    public function edit($transaction_id) {
        return view('transaction.edit', [
            'title' => 'Edit Data Layanan',
            'transaction' => Transaction::findOrFail($transaction_id)
        ]);
    }

    public function update(Request $request, $transaction_id) {
        $transactions = Transaction::Find($transaction_id);

        $transactions->nama_customer = $request->nama;
        $transactions->no_telp = $request->notelp;
        $transactions->jenis_kelamin = $request->jenkel;
        $transactions->alamat = $request->alamat;

        $transactions->save();

        return redirect(route('all-transactions'))->with('success', 'Data Transaksi Berhasil Diubah!');
    }

    public function delete(Transaction $transaction) {
        Transaction::destroy($transaction->id);

        return redirect(route('all-transactions'))->with('success', 'Data Transaksi Berhasil Dihapus!');
    }
}