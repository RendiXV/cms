@extends('layouts.admin')

@section('ckeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@section('content')
    <div class="panel-header"
        style="background: rgb(255,119,31);
    background: linear-gradient(90deg, rgba(255,119,31,1) 0%, rgba(255,119,31,1) 48%, rgba(171,67,0,1) 86%);">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h1 class="text-white pb-2 fw-bold">Dashboard</h1>
                    <h4 class="text-white op-7 mb-2">Selamat Datang, <b>{{ Auth::User()->name }}</b></h4>
                </div>
                {{-- <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                    <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="page-inner mt--5">
        <div class="row row-card">
            <div class="col-sm-6 col-md-3">
                <a href="halaman" style="text-decoration: none">
                    <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa-solid fa-layer-group text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Halaman</p>
                                    <h4 class="card-title">{{ $dataHalaman }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="artikel" style="text-decoration: none">

                    <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa-solid fa-newspaper text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Artikel</p>
                                    <h4 class="card-title">{{ $dataArtikel }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </a>
                
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="menu" style="text-decoration: none">
                    <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Menu</p>
                                    <h4 class="card-title">{{ $menu }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </a>
                
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="submenu" style="text-decoration: none">
                    <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa-solid fa-list"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Sub Menu</p>
                                    <h4 class="card-title">{{ $subMenu }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                
            </div>
            
            {{-- <div class="col-sm-6 col-md-3">
                <a href="menu" style="text-decoration: none">
                    <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </div>
                            </div>
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <p class="card-category">Menu</p>
                                    <h4 class="card-title">{{ $menu }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                
            </div>
            
        </div> --}}
        
    </div>
@endsection
