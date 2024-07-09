<x-layout>
    <x-slot name="page_name">Halaman Kategori  / Detail       </x-slot>
    <x-slot name="page_content">

        <table class="table table-bordered">
            <tr class="table-success">
                <th>no</th>
                <th>id</th>
                <th>Nama </th>
                <th>Latitude </th>
                <th>Longitude </th>
                <th>ID provinsi </th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
                
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kabkotas->id}}</td>
                <td>{{ $kabkotas->nama}}</td>
                <td>{{ $kabkotas->latitude}}</td>
                <td>{{ $kabkotas->longitude}}</td>
                <td>{{ $kabkotas->provinsi_id}}</td>
                <td>{{ $kabkotas->created_at}}</td>
                <td>{{ $kabkotas->updated_at}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>