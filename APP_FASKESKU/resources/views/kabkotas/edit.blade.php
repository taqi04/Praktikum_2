<x-layout>
    <x-slot name="page_name">Halaman Jenis_Faskes / create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('kabkotas/update', $kabkotas->id) }}" method="post">
           @csrf
           @method('put')
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Jenis_Faskes" value="{{ $kabkotas->nama}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="latitude" class="col-sm-4 col-form-label">latitude </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="latitude" name="latitude"
                      placeholder="Masukkan latitude Jenis_Faskes" value="{{ $kabkotas->latitude}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="longitude" class="col-sm-4 col-form-label">longitude </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="longitude" name="longitude"
                      placeholder="Masukkan longitude Jenis_Faskes" value="{{ $kabkotas->longitude}}">
              </div>
          </div>          <div class="form-group row">
              <label for="provinsi_id" class="col-sm-4 col-form-label">provinsi_id </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="provinsi_id" name="provinsi_id"
                      placeholder="Masukkan provinsi_id Jenis_Faskes" value="{{ $kabkotas->provinsi_id}}">
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