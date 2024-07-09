<x-layout>
    <x-slot name="page_name">Halaman Jenis_Faskes / create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('kategoris/update', $kategoris->id) }}" method="post">
           @csrf
           @method('put')
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Jenis_Faskes" value="{{ $kategoris->nama}}">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
</form>
    </x-slot>
</x-layout>