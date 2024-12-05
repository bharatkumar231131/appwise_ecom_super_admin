@extends('components.admin.layouts')
@section('content')
<div class="container pb-6">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col">
                <h1 class="h3 m-0">Dashboard</h1>

            </div>
        </div>
    </div>
    <div class="row g-4 g-xl-5">
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Packages</h2>
                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value"></div>
                    <div class="text-end">
                        <i class="fas fa-cube"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Active Packages</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value"></div>
                    <div class="text-end"><i class="fas fa-th"></i></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Orders</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value"></div>
                    <div class="text-end">
                        <i class="fas fa-dolly-flatbed"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1" data-sa-container-query='{"340":"saw-indicator--size--lg"}'>
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Coupons</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value"></div>
                    <div class="text-end">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                </div>
            </div>
        </div>
       

        {{--<div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-grow-1 saw-chart"
                data-sa-data='[{"label":"Jan","value":50},{"label":"Feb","value":130},{"label":"Mar","value":525},{"label":"Apr","value":285},{"label":"May","value":470},{"label":"Jun","value":130},{"label":"Jul","value":285},{"label":"Aug","value":240},{"label":"Sep","value":710},{"label":"Oct","value":470},{"label":"Nov","value":640},{"label":"Dec","value":1110}]'>
                <div class="sa-widget-header saw-chart__header">
                    <h2 class="sa-widget-header__title">Income statistics</h2>
                    <div class="sa-widget-header__actions">
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm btn-sa-muted d-block" id="widget-context-menu-5"
                                data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                    <path
                                        d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="widget-context-menu-5">
                                <li>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Move</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item text-danger" href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="saw-chart__body">
                    <div class="saw-chart__container"><canvas></canvas></div>
                </div>
            </div>
        </div>--}}
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-grow-1 saw-chart">
                <div class="sa-widget-header saw-chart__header">
                    <h2 class="sa-widget-header__title">Monthly Sales Statistics</h2>
                </div>
                <div>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-xxl-12 d-flex">
            <div class="card flex-grow-1 saw-table">
                <div class="sa-widget-header saw-table__header">
                    <h2 class="sa-widget-header__title">Recent Inquiry</h2>
                    <a href="{{ url('admin/inquiries') }}" class="ms-auto">
                        <button class="btn btn-primary px-4 py-2 rounded shadow-sm">
                            All Inquiry
                        </button>
                    </a>

                    <div class="sa-widget-header__actions">
                    </div>
                </div>
                <div class="saw-table__body sa-widget-table text-nowrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      
    </div>
</div>

@endsection

