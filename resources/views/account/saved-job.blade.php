@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr border bg-primary text-white shadow">
      My saved Jobs
    </div>
    <div class="account-bdy p-3">
      <div class="my-2">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="bg-light small">
              <tr>
                <th>Job Position</th>
                <th>Job Level</th>
                <th>Company</th>
                <th>No of vacancy</th>
                <th>Apply Before</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <td><a href="{{route('post.show',['job'=>$post])}}">{{$post->job_title}}</a></td>
                <td><a href="#">{{$post->job_level}}</a></td>
                <td><a href="{{route('account.employer',['employer'=>$post->company])}}">{{substr($post->company->title,0,14)}}..</a></td>
                <td>{{$post->vacancy_count}}</td>
                <td>{{date('d/m/Y',$post->deadlineTimestamp())}}, {{date('d',$post->remainingDays()) }} days</td>
                <td><form action="{{route('savedJob.destroy',['id'=>$post])}}" method="POST">
                  @csrf
                  @method("delete")
                  <button type="submit" href="#" class="btn secondary-outline-btn">Unsave</button>
                </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endSection

@push('css')

@endpush