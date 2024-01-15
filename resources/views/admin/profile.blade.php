@extends('admin.layouts.main')

@section('admin-profile-section')
  @include('admin.layouts.sidebar')

      <!-- User Details -->
      <div class="container-fluid mt-6 text-center">
        <div class="col-md-6 mt-5 mx-auto">
          <div class="card shadow-lg rounded">
            <div class="card-body">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-3">
                  <img src="https://i.imgur.com/hczKIze.jpg" alt="User Image" class="img-fluid" style="border-radius: 50%; width:200px;">
                </div>
                <div class="col-md-8">
                  <h2 class="mb-4">Harbans (Chota don)</h2>
                  <p class="mb-2"><strong>Position:</strong> Super Admin</p>
                  <p class="mb-2"><strong>Email:</strong> user@example.com</p>
                  <p class="mb-2"><strong>Phone:</strong> +1234567890</p>
                  <p class="mb-2"><strong>Age:</strong> 55</p>uuuiii8
                  <button class="btn btn-primary">Edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection