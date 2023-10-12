@extends('layouts.main')

<div class="navbar bg-[91D086] text-slate-900 shadow-xl">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl">PAM</a>
    </div>
    <div class="flex-none">
      <ul class="mr-8">
        <li>
            <a href="{{ route('admin') }}" class="hover:bg-orange-300 p-3 rounded-md">Kembali</a>
        </li>
    </ul>  
    </div>
  </div>
<div class="container mx-auto p-4">
    <!-- Daftar Pengguna yang Ingin Melakukan Pembayaran -->
    <h2 class="text-xl font-semibold mb-2 text-slate-900">Daftar Pengguna yang Ingin Melakukan Pembayaran</h2>
    <table class="min-w-full border rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="text-left p-3 text-slate-900">Nama :</th>
                <th class="text-left p-3 text-slate-900">Email :</th>
                <th class="text-left p-3 text-slate-900">Aksi :</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="text-slate-900 p-3">{{ $user->name }}</td>
                <td class="text-slate-900 p-3">{{ $user->email }}</td>
                <td class="p-3">
                    <a href="{{ route('admin.showUserTransactions', $user->id) }}" class="text-slate-900 cursor-pointer">Lihat Transaksi</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Riwayat Transaksi -->
    <h2 class="text-xl font-semibold mt-8 mb-2 text-slate-900">Riwayat Transaksi</h2>
    <table class="table min-w-full border rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="text-left p-3 text-slate-900">ID Transaksi</th>
                <th class="text-left p-3 text-slate-900">Nama Pengguna</th>
                <th class="text-left p-3 text-slate-900">Jumlah Pembayaran</th>
                <th class="text-left p-3 text-slate-900">Waktu Pembayaran</th>
                <th class="text-left p-3 text-slate-900">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td class="text-slate-900 p-3">{{ $transaction->id }}</td>
                <td class="text-slate-900 p-3">{{ $transaction->user->username }}</td>
                <td class="text-slate-900 p-3">Rp. {{ number_format($transaction->jumlah_pembayaran, 2) }}</td>
                <td class="text-slate-900 p-3">{{ $transaction->waktu_pembayaran }}</td>
                <td class="p-3">
                    <a href="{{ route('admin.deleteTransaction', $transaction->id) }}" class="text-red-500">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
