@extends('layouts.master')
@section('title','Halaman Dashboard')
@section('content')
    {{-- Navbar --}}
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h4 class="font-weight-bolder mb-0">Dashboard</h4>
      </nav>
      
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          {{-- Leave This Empty --}}
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">
                {{-- {{ Auth::user()->username }} --}}
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- End Navbar --}}
  
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <a href="/" class="text-sm mb-0 text-capitalize font-weight-bold text-info">Today's Money</a>
                  <h5 class="font-weight-bolder mb-0">
                    $53,000
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <a href="/" class="text-sm mb-0 text-capitalize font-weight-bold text-info">Today's Users</a>
                  <h5 class="font-weight-bolder mb-0">
                    2,300
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <a href="/" class="text-sm mb-0 text-capitalize font-weight-bold text-info">New Clients</a>
                  <h5 class="font-weight-bolder mb-0">
                    +3,462
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <a href="/" class="text-sm mb-0 text-capitalize font-weight-bold text-info">Sales</a>
                  <h5 class="font-weight-bolder mb-0">
                    $103,430
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <br>
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Histori Transaksi</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-responsive align-content-center" id="example">
                <thead>
                  <tr>
                    <th>Data</th>
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach($data as $id) --}}
                    <tr>
                      <td>
                          <div class="d-flex px-3 py-1">
                              Data
                          </div>
                      </td>
                      <td>
                          <div class="d-flex px-3 py-1">
                              Data
                          </div>    
                      </td>
                      {{-- <td>
                        <div class="d-flex px-3 py-1">
                          <a href="/id/show" class="btn btn-warning me-1">Ubah</a>
                          <a href="/id/destroy" class="btn btn-danger">Hapus</a>
                        </div>                        
                      </td> --}}
                    </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection