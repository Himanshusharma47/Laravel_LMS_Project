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
              <div class="col-md-12 mb-4">
                <div style="height: 650px;">
                  <!-- Placeholder code for course progress chart -->
                  <canvas id="courseProgressChart1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Custom JavaScript for Chart.js -->
  <!-- Custom JavaScript for Chart.js -->
<!-- Custom JavaScript for Chart.js -->
<!-- Custom JavaScript for Chart.js -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
      // Sample data for courses and their progress timelines
      var courses = ['HTML', 'CSS', 'JS', 'jQuery', 'AJAX', 'PHP', 'Laravel', 'MySQL'];
      var timelines = [2, 2, 3, 2, 2, 8, 12, 2];
      var colors = ['#FF5733', '#33FF57', '#5733FF', '#FF33D1', '#FFD133', '#336BFF', '#FF3366', '#33FFEC'];
  
      // Generate random progress values for each course (replace with actual data)
      var progressData = [];
      var totalWeeks = timelines.reduce((a, b) => a + b, 0);
      var uniqueMonthLabels = generateUniqueMonthLabels(totalWeeks);
      for (var i = 0; i < courses.length; i++) {
        var progressValues = [];
        for (var j = 0; j < timelines[i]; j++) {
          progressValues.push(Math.floor(Math.random() * 100) + 1);
        }
        progressData.push({
          label: courses[i],
          data: progressValues,
          borderColor: colors[i],
          backgroundColor: 'rgba(255, 255, 255, 0)', // Transparent background
        });
      }
  
      // Create the chart
      var ctx = document.getElementById('courseProgressChart1').getContext('2d');
      var courseProgressChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: uniqueMonthLabels,
          datasets: progressData,
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              title: {
                display: true,
                text: 'Timeline',
              },
            },
            y: {
              title: {
                display: true,
                text: 'Progress (%)',
              },
              beginAtZero: true,
              max: 100,
            },
          },
        },
      });
  
      // Function to generate unique month labels based on total weeks
      function generateUniqueMonthLabels(totalWeeks) {
        var monthLabels = [];
        var monthNames = ['May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        for (var i = 0; i < totalWeeks; i++) {
          if (i % 4 === 0) { // Display only once every 4 weeks (adjust as needed)
            var monthIndex = Math.floor(i / 4) % monthNames.length;
            monthLabels.push(monthNames[monthIndex]);
          } else {
            monthLabels.push('');
          }
        }
        return monthLabels;
      }
    });
  </script>
  
  
  
@endsection
