@extends('template.masterlimbad')

@section('judul')

@endsection

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="NIS" name="NIS" class="form-control" id="inputNIS" placeholder="Enter NIS">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNAMA">Nama Siswa</label>
                    <input type="NAMA" name="Nama" class="form-control" id="inputNAMA" placeholder="Enter NAMA">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputALAMAT">ALAMAT</label>
                    <textarea class="form-control" name="ALAMAT" rows="3" placeholder="Enter ALAMAT"></textarea>
                  </div>
                  <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection