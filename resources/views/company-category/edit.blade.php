@extends('layouts.account')

@section('content')
<div class="account-layout border">
  <div class="account-hdr bg-primary text-white border " >
    Edit Company Category
  </div>
  <div class="account-bdy p-3">
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
      <div class="row mb-3">
        <div class="col-12">
          <p class="alert alert-primary">You are about to change company category : {{$category->category_name}}</p>
          <form action="{{route('category.update',['id'=>$category->id])}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="">Choose a Company Category</label>
              <input type="text" placeholder="Edit your category name here" name="category_name" class="form-control @error('category_name') input-error @enderror">
            </div>
            <div class="d-flex">
              <button type="submit" class="btn secondary-btn mr-3">Update</button>
              <a href="{{route('account.dashboard')}}" class="btn primary-outline-btn">Cancel</a>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
@endsection