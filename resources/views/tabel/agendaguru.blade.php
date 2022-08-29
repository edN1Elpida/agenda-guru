@extends('layout.main')

@section('a')

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Table Agenda</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="../tambah/agendaguru"><i class="fas fa-plus"></i>&nbsp;&nbsp;</a>
                    </div>
                  </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"></h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Nama Guru</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Mapel</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Materi Pelajaran</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Jam Pelajaran</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Siswa Yang Tidak Hadir</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Kelas</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Link Pembelajaran</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Metode</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Foto</h6>
                          </div>
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                      <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Keterangan</h6>
                          </div>
                        </div>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr scope="row">
                      <th>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$no++}}</h6>
                          </div>
                        </div>
                      </th>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->nama_guru}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->mapel}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->materi_pelajaran}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Dari {{$row->dari_jam}}</h6>
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Sampai {{$row->sampai_jam}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->siswa_yang_tidak_hadir}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->kelas}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->link_pembelajaran}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->metode}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <img class="mb-0 text-sm" src="{{asset('docfoto/'.$row->foto)}}" alt="" style="width: 100px;">
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{$row->keterangan}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <a class="btn btn-link ms-auto text-end text-dark px-3 mb-0" href="/viewagendaguru/{{$row->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        <a class="btn btn-link ms-auto text-end text-danger text-gradient px-3 mb-0" href="/deleteagendaguru/{{$row->id}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
          <h6 class="font-weight-bolder mb-0">Agenda</h6>
        </nav>
      </div>
@endsection