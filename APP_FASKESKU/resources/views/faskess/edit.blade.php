<x-layout>
    <x-slot name="page_name">Halaman Provinsis  / create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('faskess/update', $faskess->id) }}" method="post">
           @csrf
           @method('put')
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Provinsi" value="{{ $faskess->nama}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="nama_pengelola" class="col-sm-4 col-form-label">Nama_pengelola</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola"
                      placeholder="Masukkan Nama nama_pengelola" value="{{ $faskess->nama_pengelola}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">Nama alamat</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Nama alamat" value="{{ $faskess->alamat}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="website" class="col-sm-4 col-form-label">Nama website</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="website" name="website"
                      placeholder="Masukkan Nama website" value="{{ $faskess->website}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Nama email</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" name="email"
                      placeholder="Masukkan Nama email" value="{{ $faskess->email}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="kabkota_id" class="col-sm-4 col-form-label">Nama kabkota_id</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kabkota_id" name="kabkota_id"
                      placeholder="Masukkan Nama kabkota_id" value="{{ $faskess->kabkota_id}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="rating" class="col-sm-4 col-form-label">Nama rating</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="rating" name="rating"
                      placeholder="Masukkan Nama rating" value="{{ $faskess->rating}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="latitude" class="col-sm-4 col-form-label">Nama latitude</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="latitude" name="latitude"
                      placeholder="Masukkan Nama latitude" value="{{ $faskess->latitude}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="longitude" class="col-sm-4 col-form-label">Nama longitude</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="longitude" name="longitude"
                      placeholder="Masukkan Nama longitude" value="{{ $faskess->longitude}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="jenis_faskes_id" class="col-sm-4 col-form-label">Nama jenis_faskes_id</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="jenis_faskes_id" name="jenis_faskes_id"
                      placeholder="Masukkan Nama jenis_faskes_id" value="{{ $faskess->jenis_faskes_id}}">
              </div>
          </div>
          <div class="form-group row">
              <label for="kategori_id" class="col-sm-4 col-form-label">Nama kategori_id</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="kategori_id" name="kategori_id"
                      placeholder="Masukkan Nama kategori_id" value="{{ $faskess->kategori_id}}">
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