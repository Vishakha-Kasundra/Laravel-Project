@extends('template.layout')
@section('content')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Title</label>
      <input type="text" class="form-control" name="Title">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">SubTitle</label>
        <input type="text" class="form-control" name="SubTitle">
    </div>
    <div class="">
        <label for="">BodyContent</label>
        <textarea class="form-control" id="floatingTextarea" name="BodyContent"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
  </form>
@endsection
