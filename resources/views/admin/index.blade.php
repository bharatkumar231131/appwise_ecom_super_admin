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
        <!-- Total Packages Card -->
        <div class="col-12 col-md-4 d-flex">
            <a href="{{ url('admin/packages') }}" class="card saw-indicator flex-grow-1 d-block text-black dashcrds">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Packages</h2>
                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">{{ $totalPackages }}</div>
                    <div class="text-end"><i class="fas fa-cube"></i></div>
                </div>
            </a>
        </div>

        <!-- Active Packages Card -->
        <div class="col-12 col-md-4 d-flex">
            <a href="{{ url('admin/packages') }}" class="card saw-indicator flex-grow-1 d-block text-black dashcrds">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Active Packages</h2>
                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">{{ $activePackages }}</div>
                    <div class="text-end"><i class="fas fa-th"></i></div>
                </div>
            </a>
        </div>

        <!-- Total Shop Owners Card -->
        <div class="col-12 col-md-4 d-flex">
            <a href="{{ url('admin/shop-owners') }}" class="card saw-indicator flex-grow-1 d-block text-black dashcrds">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Shop-Owner</h2>
                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">{{ $totalShopOwner }}</div>
                    <div class="text-end"><i class="fas fa-dolly-flatbed"></i></div>
                </div>
            </a>
        </div>

        <!-- Monthly Packages Bought Chart -->
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-grow-1 saw-chart">
                <div class="sa-widget-header saw-chart__header">
                    <h2 class="sa-widget-header__title">Monthly Packages Bought</h2>
                </div>
                <div>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Inquiry Section -->
        <div class="col-12 col-xxl-12 d-flex">
            <div class="card flex-grow-1 saw-table">
                <div class="sa-widget-header saw-table__header">
                    <h2 class="sa-widget-header__title">Recent Inquiry</h2>
                    <a href="{{ url('admin/inquiries') }}" class="ms-auto">
                        <button class="btn btn-primary px-4 py-2 rounded shadow-sm">
                            All Inquiry
                        </button>
                    </a>
                </div>
                <div class="saw-table__body sa-widget-table">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Message</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentInquiries as $inquiry)
                            <tr>
                                <td>{{ $inquiry->id  }}</td>
                                <td>{{ $inquiry->name ?? 'N/A' }}</td>
                                <td>{{ $inquiry->email ?? 'N/A' }}</td>
                                <td>{{ $inquiry->phone ?? 'N/A' }}</td>
                                <td>{{ $inquiry->address ?? 'N/A' }}</td>
                             {{--   <td>{{ Str::limit($inquiry->message ?? 'N/A') }}</td> --}}
                                <td>
                                @if (strlen($inquiry->message) > 50)
                                <span>{{ substr($inquiry->message, 0, 30) }}...</span>
                                <span data-bs-toggle="modal" data-bs-target="#messageModal{{ $inquiry->id }}" class="badge bg-info"
                                    style="cursor:pointer; color:black;">Read
                                    More</span>
                                @endif
                                </td>
                               
                                <!-- <td>
                                    @if ($inquiry->status == 'in_progress')
                                    <span class="badge bg-warning">In Progress</span>
                                    @elseif ($inquiry->status == 'resolved')
                                    <span class="badge bg-success">Resolved</span>
                                    @else
                                    <span class="badge bg-info">New</span>
                                    @endif
                                </td> -->
                            </tr>
                            <div class="modal fade" id="messageModal{{ $inquiry->id }}" tabindex="-1"
                            aria-labelledby="messageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="messageModalLabel">Inquiry Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $inquiry->message }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-12 col-xxl-12 d-flex">
            {{--
    <div class="card flex-grow-1 saw-table">
        <div class="sa-widget-header saw-table__header">
            <h2 class="sa-widget-header__title">Sales Report</h2>
        </div>
        <div class="saw-table__body sa-widget-table text-nowrap">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Shop Owner Name</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
    </div>
    --}}
        </div>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Get data from PHP to JavaScript
    var labels = @json($labels); // Month-Year labels
    var data = @json($data); // Package count per month

    // Chart.js setup
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar', // You can change this to 'line' if you prefer a line chart
        data: {
            labels: labels,
            datasets: [{
                label: 'Packages Bought',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Bar color
                borderColor: 'rgba(75, 192, 192, 1)', // Border color
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection