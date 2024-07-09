<x-layout>
    <x-slot name="page_name">Halaman Provinsi</x-slot>

    <x-slot name="page_content">
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
             </button>
        </div>
        @endif


        <a href="{{ url('provinsis/create') }}" class="btn btn-primary">+ Provinsis</a>
        <table class="table table-bordered">
            <tr class="table-succsess">
                <th>id</th>
                <th>Nama</th>
                <th>Ibu Kota</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_provinsis as $provinsis)
                <tr>
                    <td>{{ $provinsis-> id}}</td>
                    <td>{{ $provinsis-> nama}}</td>
                    <td>{{ $provinsis-> ibukota}}</td>
                    <td>{{ $provinsis-> latitude}}</td>
                    <td>{{ $provinsis-> longitude}}</td>
                    <td>
                        <a href="{{url('provinsis/show', $provinsis->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('provinsis/edit', $provinsis->id)}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        
                        <form action="{{ url('provinsis/destroy', $provinsis->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('bener nih mau di hapus!!')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>