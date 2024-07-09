<x-layout>
    <x-slot name="page_name">Halaman kelurahan  / Detail       </x-slot>
    <x-slot name="page_content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table ">
                        <tr class="table-success">
                            <th>no</th>
                            <th>id</th>
                            <th>Nama </th>
                            <th>Pengelola</th>
                            <th>Alamat</th>
                            <th>website</th>
                            <th>Email</th>
                            <th>Kabkota_id</th>
                            <th>Rating</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Jenis_faskes_id</th>
                            <th>Kategori</th>
                            <th>Data dibuat pada</th>
                            <th>Data diupdate pada</th>
                        </tr>
                        <tr>
                        <td>{{ $faskess-> id}}</td>
                                <td>{{ $faskess-> nama}}</td>
                                <td>{{ $faskess-> nama_pengelola}}</td>
                                <td>{{ $faskess-> alamat}}</td>
                                <td>{{ $faskess-> website}}</td>
                                <td>{{ $faskess-> email}}</td>
                                <td>{{ $faskess-> kabkota_id}}</td>
                                <td>{{ $faskess-> rating}}</td>
                                <td>{{ $faskess-> latitude}}</td>
                                <td>{{ $faskess-> longitude}}</td>
                                <td>{{ $faskess-> jenis_faskes_id}}</td>
                                <td>{{ $faskess-> kategori_id}}</td>
                                <td>{{ $faskess->created_at}}</td>
                                <td>{{ $faskess->updated_at}}</td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </x-slot>
</x-layout>