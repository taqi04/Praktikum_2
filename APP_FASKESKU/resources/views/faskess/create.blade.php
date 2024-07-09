<x-layout>
    <x-slot name="page_name">Halaman Faskes  / create</x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('faskess/store') }}" method="post">
  
           @csrf
        
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama </label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama faskes">
              </div>
          </div>
          <div class="form-group row">
              <label for="nama_pengelola" class="col-sm-4 col-form-label">Nama_pengelola</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola"
                      placeholder="Masukkan Nama nama_pengelola">
              </div>
          </div>
          <div class="form-group row">
              <label for="alamat" class="col-sm-4 col-form-label">Nama alamat</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat"
                      placeholder="Masukkan Nama alamat">
              </div>
          </div>
          <div class="form-group row">
              <label for="website" class="col-sm-4 col-form-label">Nama website</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="website" name="website"
                      placeholder="Masukkan Nama website">
              </div>
          </div>
          <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label">Nama email</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" name="email"
                      placeholder="Masukkan Nama email">
              </div>
          </div>
          <div class="form-group row">
              <label for="kabkotas" class="col-sm-4 col-form-label">ID KabKota</label>
              <select name="kabkota_id" id="kabkotas">
             
                 @foreach ( $kabkotas as $kabkota)   
                  <option value="{{$kabkota->id}}">{{ $kabkota->nama}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group row">
              <label for="rating" class="col-sm-4 col-form-label">Nama rating</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="rating" name="rating"
                      placeholder="Masukkan Nama rating">
              </div>
          </div>
          <div class="form-group row">
              <label for="latitude" class="col-sm-4 col-form-label">Nama latitude</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="latitude" name="latitude"
                      placeholder="Masukkan Nama latitude">
              </div>
          </div>
          <div class="form-group row">
              <label for="longitude" class="col-sm-4 col-form-label">Nama longitude</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="longitude" name="longitude"
                      placeholder="Masukkan Nama longitude">
              </div>
          </div>
          <div class="form-group row">
              <label for="jenis_faskess" class="col-sm-4 col-form-label">Id Jenis</label>
              <select name="jenis_faskes_id" id="jenis_faskess">
             
                 @foreach ( $jenis_faskess as $jenis)   
                  <option value="{{$jenis->id}}">{{ $jenis->nama}}</option>
              @endforeach
              </select>
          </div>
          <div class="form-group row">
              <label for="kategoris" class="col-sm-4 col-form-label">Id Kategori</label>
              <select name="kategori_id" id="kategoris">
             
                 @foreach ( $kategoris as $kategori)   
                  <option value="{{$kategori->id}}">{{ $kategori->nama}}</option>
              @endforeach
              </select>
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