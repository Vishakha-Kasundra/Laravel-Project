@extends('template.layout')
@section('content')
<div>
    <table class="table table-bordered">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>SubTitle</td>
            <td>BodyContent</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

        @foreach ($stock as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{ $data->Title }}</td>
            <td>{{ $data->SubTitle}}</td>
            <td>{{ $data->BodyContent}}</td>
            <td><a href="{{ route('user.edit',$data->id) }}">Edit</a></td>
</tr>
        @endforeach

      </table>
</div>
@endsection

