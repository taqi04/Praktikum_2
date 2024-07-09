<x-layout>
    <x-slot name="page_name">Halaman Faskes</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <a href="{{ url('faskess/create') }}" class="btn btn-primary">+ faskess</a>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-success">
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Pengelola</th>
                                <th>Alamat</th>
                                <th>Website</th>
                                <th>Email</th>
                                <th>Kabkota Id</th>
                                <th>Rating</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Jenis Faskes Id</th>
                                <th>Kategori Id</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_faskess as $faskess)
                                <tr>
                                    <td>{{ $faskess->id }}</td>
                                    <td>{{ $faskess->nama }}</td>
                                    <td>{{ $faskess->nama_pengelola }}</td>
                                    <td>{{ $faskess->alamat }}</td>
                                    <td>{{ $faskess->website }}</td>
                                    <td>{{ $faskess->email }}</td>
                                    <td>{{ $faskess->kabkota_id }}</td>
                                    <td>{{ $faskess->rating }}</td>
                                    <td>{{ $faskess->latitude }}</td>
                                    <td>{{ $faskess->longitude }}</td>
                                    <td>{{ $faskess->jenis_faskes_id }}</td>
                                    <td>{{ $faskess->kategori_id }}</td>
                                    <td>
                                        <a href="{{ url('faskess/show', $faskess->id) }}" class="text-primary">
                                            <i class="far fa-eye"></i> Lihat
                                        </a> |
                                        <a href="{{ url('faskess/edit', $faskess->id) }}" class="text-warning">
                                            <i class="far fa-edit"></i> Edit
                                        </a> |
                                        <form action="{{ url('faskess/destroy', $faskess->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="far fa-trash-alt"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
