@extends('template.layout')
@section('content')
<form action="{{ route('user.update',$user->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="" class="form-label">Title</label>
      <input type="text" class="form-control" name="Title" value="{{ $user->Title }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">SubTitle</label>
        <input type="text" class="form-control" name="SubTitle" value="{{ $user->SubTitle }}">
    </div>
    <div class="">
        <label for="">BodyContent</label>
        <textarea class="form-control" id="floatingTextarea" name="BodyContent" value="{{ $user->BodyContent }}"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
  </form>
@endsection
