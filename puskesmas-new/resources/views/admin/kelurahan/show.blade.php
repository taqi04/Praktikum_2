<x-layout>
    <x-slot name="page_name">Halaman kelurahan  / Detail       </x-slot>
    <x-slot name="page_content">

        <table class="table table-bordered">
            <tr class="table-success">
                <th>no</th>
                <th>id</th>
                <th>Nama kelurahan</th>
                <th>Nama kecamatan</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kelurahan->id}}</td>
                <td>{{ $kelurahan->nama}}</td>
                <td>{{ $kelurahan->kecamatan_nama}}</td>
                <td>{{ $kelurahan->created_at}}</td>
                <td>{{ $kelurahan->update_at}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>