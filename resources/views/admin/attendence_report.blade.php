@extends('admin.layouts.main')

@section('admin-attendence-section')

    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title text-center">Analytics</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Student Attendance</h5>
                                        <div style="height: 650px;">
                                            <!-- Placeholder code for attendance chart -->
                                            <canvas id="attendance"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Define placeholder data for the attendance chart
                const attendanceData = [75, 80, 85, 90];

                const attendanceCanvas = document.getElementById('attendance');
                new Chart(attendanceCanvas.getContext('2d'), {
                    type: 'bar',
                    data: {
                        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                        datasets: [{
                            label: 'Attendance',
                            data: attendanceData,
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
</div>
@endsection
