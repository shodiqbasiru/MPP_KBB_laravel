@extends('layout.main')

@section('jumbroton')
    <div style="padding-top: 9rem">
        <h1>Mal Pelayanan Publik (MPP)</h1>
        <h2>Kabupaten Bandung Barat</h2>
    </div>
@endsection

@section('container')

    {{-- @foreach ($features as $feature)
        <div class="col-xxl-2 col-md-4 col-sm-12 mb-2">
            <a href="/features/{{ $feature->slug }}" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">{{ $feature->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
    @endforeach --}}

<div class="row">
    <div class="col-xxl-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
        <a href="/profil-mpp" class="fitur">
            <div class="card">
                <div class=" d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3">Profil MPP</h5>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xxl-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
        <a href="/antrian" class="fitur">
            <div class="card">
                <div class=" d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3">Antrian</h5>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xxl-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
        <a href="/layanans" class="fitur">
            <div class="card">
                <div class=" d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3">Layanan</h5>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xxl-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
        <a href="/monitoring" class="fitur">
            <div class="card">
                <div class=" d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3">Monitoring</h5>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xxl-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
        <a href="/survey" class="fitur">
            <div class="card">
                <div class=" d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3">Survey</h5>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xxl-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
        <a href="/pengaduan" class="fitur">
            <div class="card">
                <div class=" d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3">Pengaduan</h5>
                </div>
            </div>
        </a>
    </div>

</div>  
        

@endsection


