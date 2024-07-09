<x-layout>
    <x-slot name="page_name">Halaman Jenis Faskes</x-slot>

    <x-slot name="page_content">

    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
             </button>
        </div>
        @endif

        <a href="{{ url('jenis_faskess/create') }}" class="btn btn-primary">+ Jenis_faskes</a>
        <table class="table table-bordered">
            <tr class="table-succsess">
                <th>id</th>
                <th>Nama</th>
              
            </tr>
            @foreach ($list_jenis_faskess as $jenis_faskess)
                <tr>
                    <td>{{ $jenis_faskess-> id}}</td>
                    <td>{{ $jenis_faskess-> nama}}</td>
                    <td>
                        <a href="{{url('jenis_faskess/show', $jenis_faskess->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('jenis_faskess/edit', $jenis_faskess->id)}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        
                        <form action="{{ url('jenis_faskess/destroy', $jenis_faskess->id) }}" method="post" class="d-inline">
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