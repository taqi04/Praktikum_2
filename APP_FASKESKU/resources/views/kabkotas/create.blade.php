<x-layout>
    <x-slot name="page_name">Halaman kabkota  / create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('kabkotas/store') }}" method="post">
           @csrf
           
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama kabkotas</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama"
                      placeholder="Masukkan Nama Provinsi">
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
              <label for="provinsis" class="col-sm-4 col-form-label">Nama provinsi_id</label>
              <select name="provinsi_id" id="provinsis">
             
                 @foreach ( $provinsis as $provinsis)   
                  <option value="{{$provinsis->id}}">{{ $provinsis->nama}}</option>
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