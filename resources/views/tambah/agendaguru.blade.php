@extends('layout.main')

@section('a')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Tambah Agenda</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="../agendaguru">Kembali</a>
                    </div>
                  </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="card-body">
                <form action="/insertagendaguru" method="POST" role="form text-left" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru" aria-label="Name" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" name="mapel" class="form-control" placeholder="Mapel" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" name="materi_pelajaran" class="form-control" placeholder="Materi" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="d-flex mb-3">
                    <select class="form-select" name="dari_jam" aria-label="Default select example">
                      <option selected>Silahkan Pilih Jam Pelajaran</option>
                      <option value="Jam-1">Jam Ke 1</option>
                      <option value="Jam-2">Jam Ke 2</option>
                      <option value="Jam-3">Jam Ke 3</option>
                      <option value="Jam-4">Jam Ke 4</option>
                      <option value="Jam-5">Jam Ke 5</option>
                      <option value="Jam-6">Jam Ke 6</option>
                    </select>
                    <select class="form-select" name="sampai_jam" aria-label="Default select example">
                      <option selected>Silahkan Pilih Jam Pelajaran</option>
                      <option value="Jam-1">Jam Ke 1</option>
                      <option value="Jam-2">Jam Ke 2</option>
                      <option value="Jam-3">Jam Ke 3</option>
                      <option value="Jam-4">Jam Ke 4</option>
                      <option value="Jam-5">Jam Ke 5</option>
                      <option value="Jam-6">Jam Ke 6</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <input type="text" name="siswa_yang_tidak_hadir" class="form-control" placeholder="Siswa Yang Tidak Hadir" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" name="kelas" class="form-control" placeholder="Kelas" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" name="link_pembelajaran" class="form-control" placeholder="Link Pembelajaran" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <select class="form-select" name="metode" aria-label="Default select example">
                      <option selected>Silahkan Pilih Metode Pelajaran</option>
                      <option value="Daring">Daring</option>
                      <option value="Luring">Luring</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label>Masukan Foto</label>
                    <input type="file" name="foto" class="form-control" placeholder="Foto" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('b')
        <li class="nav-item">
          <a class="nav-link active " href="../agendaguru">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Agenda</span>
          </a>
        </li>
@endsection

@section('c')
<div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Admin</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Admin</h6>
        </nav>
      </div>
@endsection