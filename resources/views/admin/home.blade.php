@extends('admin.layout.master')
@section('title', 'Dashboard')
@push('css')
    <link href="{{ asset('assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css"/>
    @endpush
@push('js')
    <script src="{{ asset('assets/js/widgets/modules-widgets.js') }}"></script>
@endpush
@section('content')
    <div class="row widget-statistic layout-top-spacing">
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-referral" style="background: #ffdd92">
                <div class="widget-heading">
                    <a href="">
                        <div class="w-title d-flex justify-content-evenly">
                            <div class="w-icon" style="background:#ffdd92;  color:#1b55e2; border: 1px solid #1b55e2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                            </div>
                            <div class="ml-2">
                                <p class="w-value">{{ $admins }}</p>
                                <h5 class="">Admins</h5>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-referral" style="background:#f1f2f3">
                <div class="widget-heading">
                    <a href="">
                        <div class="w-title d-flex justify-content-evenly">
                            <div class="w-icon" style=" background:#f1f2f3;color:#1b55e2; border: 1px solid #1b55e2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            <div class="ml-2">
                                <p class="w-value">{{ $inqueries }}</p>
                                <h5 class="">Inqueries</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection