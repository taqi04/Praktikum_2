<x-layout>
    <x-slot name="page_name">Halaman kelurahan  / Detail       </x-slot>
    <x-slot name="page_content">

        <table class="table table-bordered">
            <tr class="table-success">
                <th>no</th>
                <th>id</th>
                <th>Nama Provinsi</th>
                <th>Nama ibukota</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $provinsis->id}}</td>
                <td>{{ $provinsis->nama}}</td>
                <td>{{ $provinsis->ibukota}}</td>
                <td>{{ $provinsis->latitude}}</td>
                <td>{{ $provinsis->longitude}}</td>
                <td>{{ $provinsis->created_at}}</td>
                <td>{{ $provinsis->updated_at}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>