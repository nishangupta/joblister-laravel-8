@extends('layouts.account')

@section('content')
  <div class="account-layout  border">
    <div class="account-hdr bg-primary text-white border">
      Job Applications
    </div>
    <div class="account-bdy p-3">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <p class="mb-3 alert alert-primary">Listing all the Applicants who applied for your <strong>job listings</strong>.</p>
          <div class="table-responsive pt-3">
            <table class="table table-hover table-striped small">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant Name</th>
                  <th>Email</th>
                  <th>Job Title</th>
                  <th>Applied on</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if($applications && $applications->count())
                  @foreach($applications as $application)
                  <tr>
                    <td>1</td>
                    <td>{{$application->user->name}}</td>
                    <td><a href="mailto:{{$application->user->email}}">{{$application->user->email}}</a></td>
                    <td><a href="{{route('post.show',['job'=>$application->post->id])}}">{{substr($application->post->job_title,0,14)}}...</a></td>
                    <td>{{$application->created_at}}</td>
                    <td><a href="{{route('jobApplication.show',['id'=>$application])}}" class="btn primary-outline-btn">View</a>
                      <form action="{{route('jobApplication.destroy')}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="application_id" value="{{$application->id}}">
                        <button type="submit" class="btn danger-btn">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                @else
                  <tr>
                    <td>You haven't received any job applications.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center mt-4 custom-pagination">
            {{ $applications && $applications->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endSection
