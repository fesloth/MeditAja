@extends('layouts.main')

<div class="navbar bg-[91D086] text-slate-900 shadow-xl fixed top-0 left-0 w-full z-[10]">
    <div class="flex-1 pl-8">
      <img src="{{ asset('img/flower.png') }}" width="40">
      <a href="/" class="normal-case text-xl ml-1" data-dropdown-ignore>MeditAja</a>
  
    </div>
    <div class="flex-none">
        <ul class="mr-8 flex space-x-4">
            <li>
                <a href="{{ route('adminTransaksi') }}" class="hover:bg-[6EA066] p-3 rounded-md">Data Transaksi</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="hover:bg-[6EA066] p-3 rounded-md">Keluar</a>
            </li>
        </ul>
    </div>
</div>
<div class="flex flex-col justify-center items-center my-20 mt-40">
    <h1 class="text-3xl mb-4 text-slate-800">Selamat Datang <span class="text-[6EA066]">Admin!</span></h1>
    <div class="relative overflow-x-auto overflow-y-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full shadow-lg divide-gray-200">
            <thead class="bg-[6EA066] text-center">
                <tr>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                        Daftar User
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                        Aksi
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                       Lapor
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">
                       Hapus User
                    </th>
                </tr>
            </thead>
            <tbody class="bg-[91D086] divide-y divide-gray-200 text-center">
                @foreach($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-slate-900">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-slate-900">
                        {{ $user->username }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">                                     
                        @if ($user->is_premium)
                            <form action="{{ route('admin.cancelPremium', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="text-red-600 hover:underline">
                                    <i class="fas fa-times"></i> Batalkan Akses Premium
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.makePremium', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="text-green-600 hover:underline">
                                    <i class="fas fa-crown"></i> Jadikan Premium
                                </button>
                            </form>
                        @endif
                    </td>                                 
                    <td class="px-6 py-4 whitespace-nowrap text-slate-800">
                        @if ($user->is_premium && $user->premium_start_date)
                            @php
                                $now = now();
                            
                                // Hitung selisih waktu dalam hari
                                $daysDifference = $now->diffInDays($user->premium_start_date);
                            
                                // Tampilkan pesan dengan selisih waktu dalam hari
                                $message = $daysDifference . " hari";
                            @endphp
                            
                            {{ $message }}
                        @else
                            Belum Premium
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($user->report_reason)
                            <form action="{{ route('admin.deleteReport', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-green-600 hover:underline">
                                   Hapus Laporan
                                </button>
                            </form>
                        @else
                            <a href="{{ route('admin.form', ['id' => $user->id]) }}" class="text-blue-700 hover:underline">Laporkan Pengguna</a>
                        @endif
                    </td>       
                    <td class="whitespace-nowrap">
                        <form action="{{ route('admin.deleteUser', $user->id) }}" method="post" id="delete-form-{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete({{ $user->id }});" class="text-red-600 hover:underline">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>                        
                    </td>                        
                </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example" class="mt-10">
        {{ $users->links() }}
    </nav>
</div>
<script>
    function confirmDelete(userId) {
        if (confirm("Yakin ingin menghapus user ini?")) {
            document.getElementById('delete-form-' + userId).submit();
        } else {
            alert("Gagal menghapus user.");
        }
    }
</script>