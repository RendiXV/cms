@php
    use App\Models\Tb_setting;
    use App\Models\Tb_menu;
    use App\Models\Tb_submenu;
    $setting = Tb_setting::find(1);
    $menu = Tb_menu::orderBy('urutan', 'asc')->get();
@endphp

{{-- === HEADER START === --}}
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live
                With
                Your Family</h1>
            <p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                {{-- @foreach ($slide as $data) --}}
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{ asset('assets/frontend/img/carousel-1.jpg')}} " alt="Blog">
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</div>
{{-- {{$data->gambar()}} --}}
{{-- === HEADER START === --}}
