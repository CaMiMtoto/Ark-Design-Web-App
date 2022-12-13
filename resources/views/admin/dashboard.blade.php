@extends('layouts.master')
@section('title',"Dashboard")
@section('navigation')
    <li class="breadcrumb-item text-dark">Dashboard</li>
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row g-5 g-xl-10">
        <div class="col-sm-6 col-xl-4  mb-5">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-center align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"/>
                                </svg>

                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">
                            {{ \App\Models\Project::count() }}
                        </span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">Projects</span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->

                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <div class="col-sm-6 col-xl-4  mb-5">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-center align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
</svg>

												</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">
                            {{ \App\Models\Team::count() }}
                        </span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">
                                Team members
                            </span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->

                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
        <div class="col-sm-6 col-xl-4  mb-5">
            <!--begin::Card widget 2-->
            <div class="card h-lg-100">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-center align-items-start flex-column">
                    <!--begin::Icon-->
                    <div class="m-0">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                        <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
</svg>


												</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Section-->
                    <div class="d-flex flex-column my-7">
                        <!--begin::Number-->
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">
                            {{ \App\Models\Event::count() }}
                        </span>
                        <!--end::Number-->
                        <!--begin::Follower-->
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">
                              Events
                            </span>
                        </div>
                        <!--end::Follower-->
                    </div>
                    <!--end::Section-->

                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 2-->
        </div>
    </div>

    <div class="row g-5 mt-3 mt-md-0 g-xl-10">
        <div class="col-lg-8 mb-5">
            <div class="card card-body h-lg-100 rounded-4">
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <h5 class="text-primary fw-semibold">
                        Projects in current year
                    </h5>
                </div>

                <div>
                    <canvas id="myChart"></canvas>
                </div>

                <h6 class="text-primary">Year ({{ now()->year }})</h6>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div class="card card-body h-lg-100 rounded-4">
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <h5 class="text-primary fw-semibold">
                        Projects by project types
                    </h5>

                </div>

                <div>
                    <canvas id="pieChart"></canvas>
                </div>
                <h6 class="text-primary">Year ({{ now()->year }})</h6>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let chartData = {!! $projects !!};
        let pieChartData = {!! $projectsByTypes !!};

        console.log(pieChartData)


        function randomIntFromInterval(min, max) {
            // min and max included
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        Chart.defaults.backgroundColor = '#F28E22';
        Chart.defaults.borderColor = '#f4f0ec';
        Chart.defaults.color = '#000';

        let buildChart = function () {
            const ctx = document.getElementById("myChart");

            const labels = chartData.map((item) => item.month);

            const data = {
                labels,
                datasets: [
                    {
                        label: "Projects",
                        data: chartData.map((item) => item.count),
                        backgroundColor: "#F28E22",
                        borderWidth: 0,
                        borderColor: "red",
                        borderRadius: 20,
                        minBarLength: 1,
                        maxBarThickness: 10,
                    },
                    /*  {
                          label: "Debit",
                          data: labels.map(() => randomIntFromInterval(0, 500)),
                          backgroundColor: "#179AA9",
                          borderWidth: 0,
                          borderRadius: 20,
                          maxBarThickness: 8,
                      },*/
                ],
            };

            new Chart(ctx, {
                type: "bar",
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: "bottom",
                        },
                    },
                    scales: {
                        x: {
                            grid: {
                                color: "white",
                                borderColor: "white", // <-- this line is answer to initial question
                            },
                            ticks: {
                                color: "#243D94",
                            },
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: "#243D94",
                                font: {
                                    size: 14, // 'size' now within object 'font {}'
                                },
                                callback: function (value) {
                                    return value
                                },
                            },
                        },
                    },
                },
            });
        };

        let buildPieChart = function () {
            const data = {
                labels: pieChartData.map((item) => item.name),
                datasets: [{
                    label: 'Projects',
                    data: pieChartData.map((item) => item.value),
                    /*  backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                      ],*/
                    hoverOffset: 30
                }]
            };
            const config = {
                type: 'pie',
                data: data,
            };
            const ctx = document.getElementById("pieChart");
            new Chart(ctx, config);
        };

        (function () {

            buildChart();
            buildPieChart();

            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        })();

    </script>

@endsection
