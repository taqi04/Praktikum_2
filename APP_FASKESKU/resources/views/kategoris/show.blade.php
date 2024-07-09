<x-layout>
    <x-slot name="page_name">Halaman Kategori  / Detail       </x-slot>
    <x-slot name="page_content">

        <table class="table table-bordered">
            <tr class="table-success">
                <th>no</th>
                <th>id</th>
                <th>Nama </th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
                
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kategoris->id}}</td>
                <td>{{ $kategoris->nama}}</td>
                <td>{{ $kategoris->created_at}}</td>
                <td>{{ $kategoris->updated_at}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>