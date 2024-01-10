@extends('admin.layouts.main')

@section('admin-dashboard-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title text-center">Analytics</h5>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div style="height: 300px;">
                                    <!-- Placeholder code for course progress chart -->
                                    <canvas id="courseProgressChart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div style="height: 300px;">
                                    <!-- Placeholder code for student performance chart -->
                                    <canvas id="studentPerformanceChart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Student Attendance</h5>
                                        <div style="height: 300px;">
                                            <!-- Placeholder code for attendance chart -->
                                            <canvas id="attendanceChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
