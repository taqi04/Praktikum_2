<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>

    <x-slot name="page_content">
    <a href="{{ url('dashboard/pasien/create') }}" class="btn btn-primary">+ Pasien</a>
        <table class="table table-bordered">
            <tr class="table-succsess">
                <th>id</th>
                <th>kode</th>
                <th>Nama Pasien</th>
                <th>tmp_lahir</th>
                <th>tgl_lahir</th>
                <th>gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
                
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $pasien-> id}}</td>
                    <td>{{ $pasien-> kode}}</td>
                    <td>{{ $pasien-> nama}}</td>
                    <td>{{ $pasien-> tmp_lahir}}</td>
                    <td>{{ $pasien-> tgl_lahir}}</td>
                    <td>{{ $pasien-> gender}}</td>
                    <td>{{ $pasien-> email}}</td>
                    <td>{{ $pasien-> alamat}}</td>
                    <td>{{ $pasien-> kec_nama}}</td>
                    <td><a href="{{url('dashboard/pasien/show', $pasien->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>