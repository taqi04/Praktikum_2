<x-layout>
    <x-slot name="page_name">Halaman Kategori</x-slot>

    <x-slot name="page_content">
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
             </button>
        </div>
        @endif

        <a href="{{ url('kategoris/create') }}" class="btn btn-primary">+ Kategori</a>
        <table class="table table-bordered">
            <tr class="table-succsess">
                <th>id</th>
                <th>Nama</th>
              
            </tr>
            @foreach ($list_kategoris as $kategoris)
                <tr>
                    <td>{{ $kategoris-> id}}</td>
                    <td>{{ $kategoris-> nama}}</td>
                    <td>
                        <a href="{{url('kategoris/show', $kategoris->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('kategoris/edit', $kategoris->id)}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        
                        <form action="{{ url('kategoris/destroy', $kategoris->id) }}" method="post" class="d-inline">
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