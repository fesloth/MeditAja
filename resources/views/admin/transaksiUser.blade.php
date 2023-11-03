@extends('layouts.main')

<div class="navbar bg-[91D086] text-slate-900 shadow-xl">
    <div class="flex-1 pl-8">
        <img src="{{ asset('img/flower.png') }}" width="40">
        <a href="/" class="normal-case text-xl ml-1" data-dropdown-ignore>MeditAja</a>
      </div>
    <div class="flex-none">
      <ul class="mr-8">
        <li>
            <a href="{{ route('admin') }}" class="hover:bg-[6EA066] p-3 rounded-md">Kembali</a>
        </li>
    </ul>  
    </div>
  </div>
<div class="container mx-auto p-4 mt-10">
    <!-- Daftar Pengguna yang Ingin Melakukan Pembayaran -->
    <h2 class="text-xl font-semibold mb-2 text-slate-900">Daftar Pengguna yang Ingin Melakukan Pembayaran</h2>
    <table class="min-w-full border rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="text-left p-3 text-slate-900">Username :</th>
                <th class="text-left p-3 text-slate-900">Email :</th>
                <th class="text-left p-3 text-slate-900">Aksi :</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="text-slate-900 p-3">{{ $user->username }}</td>
                <td class="text-slate-900 p-3">{{ $user->email }}</td>
                <td class="p-3">
                    @if ($user->is_premium)
                    <form action="{{ route('admin.cancelPremium', $user->id) }}" method="post">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">Batalkan Akses Premium</button>
                    </form>
                @else
                    <form action="{{ route('admin.makePremium', $user->id) }}" method="post">
                        @csrf
                        <button type="submit" class="text-green-600 hover:underline">Jadikan Premium</button>
                    </form>
                @endif   
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
                <th class="text-left p-3 text-slate-900">ID Paket</th>
                <th class="text-left p-3 text-slate-900">Nama Pengguna</th>
                <th class="text-left p-3 text-slate-900">Jumlah Pembayaran</th>
                <th class="text-left p-3 text-slate-900">Metode Pembayaran</th>
                <th class="text-left p-3 text-slate-900">Waktu Pembayaran</th>
                <th class="text-left p-3 text-slate-900">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td class="text-slate-900 p-3">{{ $transaction->id }}</td>
                <td class="text-slate-900 p-3">{{ $transaction->paket_id }}</td>
                <td class="text-slate-900 p-3">{{ $transaction->user->username }}</td>
                <td class="text-slate-900 p-3">Rp. {{ number_format($transaction->jumlah_pembayaran, 2) }}</td>
                <td class="text-slate-900 p-3">{{ $transaction->payment_method }}</td>
                <td class="text-slate-900 p-3">{{ \Carbon\Carbon::parse($transaction->created_at)->format('d-m-Y') }}
                </td>
                <td class="p-3">
                    <a href="{{ route('admin.deleteTransaction', $transaction->id) }}" class="text-red-500">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
