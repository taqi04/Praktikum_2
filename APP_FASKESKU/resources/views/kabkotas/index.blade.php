<x-layout>
    <x-slot name="page_name">Halaman KabKota</x-slot>

    <x-slot name="page_content">
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
             </button>
        </div>
        @endif


        <a href="{{ url ('kabkotas/create') }}" class="btn btn-primary">+ KabKota</a>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table  class="table">

                        <table class="table table-bordered">
                            <tr class="table-succsess">
                                <th>id</th>
                                <th>Nama</th>
                                
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>ID provinsi</th>
                                <th>Aksi</th>
                               

                                
                            </tr>
                            @foreach ($list_kabkotas as $kabkotas)
                                <tr>
                                    <td>{{ $kabkotas-> id}}</td>
                                    <td>{{ $kabkotas-> nama}}</td>
                                    
                                    <td>{{ $kabkotas-> latitude}}</td>
                                    <td>{{ $kabkotas-> longitude}}</td>
                                    
                                    <td>{{ $kabkotas-> provinsi_id}}</td>
                                    <td>
                                        <a href="{{url('kabkotas/show', $kabkotas->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                                        <a href="{{ url('kabkotas/edit', $kabkotas->id)}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                                        
                                        <form action="{{ url('kabkotas/destroy', $kabkotas->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('bener nih mau di hapus!!')"><i class="far fa-trash-alt"></i>Hapus</button>
                                        </form>
                                    </td>
                
                                </tr>
                            @endforeach
                        </table>
                    </table>

                </div>
            </div>

        </div>
    </x-slot>
</x-layout>