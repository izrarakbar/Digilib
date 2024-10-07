@extends('layout.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('sneat/vendor/libs/apex-charts/apex-charts.css') }}" />
@endpush

@push('script')
    <script src="{{ asset('sneat/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script>
        const options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: '{{ __('dashboard.letter_transaction') }}',
                data: [
                    {{ $totalOutgoingLetter ?? 0 }},
                    {{ $totalPerdirLetter ?? 0 }},
                    {{ $totalPemberitahuanLetter ?? 0 }},
                    {{ $totalKptsLetter ?? 0 }},
                    {{ $totalPaktaLetter ?? 0 }},
                    {{ $totalNotulenLetter ?? 0 }}
                ]
            }],
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                categories: [
                    '{{ __('dashboard.outgoing_letter') }}',
                    '{{ __('dashboard.perdir') }}',
                    '{{ __('dashboard.pemberitahuan') }}',
                    '{{ __('dashboard.kpts') }}',
                    '{{ __('dashboard.pakta') }}',
                    '{{ __('dashboard.notulen') }}',
                ],
            }
        }

        const chart = new ApexCharts(document.querySelector("#today-graphic"), options);
        chart.render();
    </script>
@endpush

@section('content')
    <div class="row">
        <!-- Content for Letter Transactions and Charts -->
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h4 class="card-title text-primary">{{ $greeting }}</h4>
                            <p class="mb-4">{{ $currentDate }}</p>
                            <p style="font-size: smaller" class="text-gray">*) </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('sneat/img/man-with-laptop-light.png') }}" height="140"
                                 alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                 data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart and Statistics Section -->
            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                             style="position: relative;">
                            <div>
                                <div class="card-title">
                                    <h5 class="text-nowrap mb-2">{{ __('dashboard.today_graphic') }}</h5>
                                    <span class="badge bg-label-warning rounded-pill"></span>
                                </div>
                                <div class="mt-sm-auto">
                                    @if($percentageLetterTransaction > 0)
                                    <small class="text-success text-nowrap fw-semibold">
                                        <i class="bx bx-chevron-up"></i> {{ $percentageLetterTransaction }}%
                                    </small>
                                    @elseif($percentageLetterTransaction < 0)
                                    <small class="text-danger text-nowrap fw-semibold">
                                        <i class="bx bx-chevron-down"></i> {{ $percentageLetterTransaction }}%
                                    </small>
                                    @endif
                                    <h3 class="mb-0 display-4">{{ $todayLetterTransaction }}</h3>
                                </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px; width: 80%">
                                <div id="today-graphic"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards Section for each type of letter -->
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.outgoing_letter')"
                        :value="$totalOutgoingLetter"
                        :daily="true"
                        color="danger"
                        icon="bx-envelope"
                        :percentage="$percentageOutgoingLetter"
                    />
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.perdir')"
                        :value="$totalPerdirLetter"
                        :daily="true"
                        color="danger"
                        icon="bx-envelope"
                        :percentage="$percentagePerdirLetter"
                    />
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.pemberitahuan')"
                        :value="$totalPemberitahuanLetter"
                        :daily="true"
                        color="danger"
                        icon="bx-envelope"
                        :percentage="$percentagePemberitahuanLetter"
                    />
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.kpts')"
                        :value="$totalKptsLetter"
                        :daily="true"
                        color="danger"
                        icon="bx-envelope"
                        :percentage="$percentageKptsLetter"
                    />
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.pakta')"
                        :value="$totalPaktaLetter"
                        :daily="true"
                        color="danger"
                        icon="bx-envelope"
                        :percentage="$percentagePaktaLetter"
                    />
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.notulen')"
                        :value="$totalNotulenLetter"
                        :daily="true"
                        color="danger"
                        icon="bx-envelope"
                        :percentage="$percentageNotulenLetter"
                    />
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <x-dashboard-card-simple
                        :label="__('dashboard.active_user')"
                        :value="$activeUser"
                        :daily="false"
                        color="info"
                        icon="bx-user-check"
                        :percentage="0"
                    />
                </div>
            </div>
        </div>
    </div>
@endsection
