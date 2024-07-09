<x-layout>
    <x-slot name="page_name">Halaman Jenis_Faskes  / Detail       </x-slot>
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
                <td>{{ $jenis_faskess->id}}</td>
                <td>{{ $jenis_faskess->nama}}</td>
                <td>{{ $jenis_faskess->created_at}}</td>
                <td>{{ $jenis_faskess->updated_at}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>