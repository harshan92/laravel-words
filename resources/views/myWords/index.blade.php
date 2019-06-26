@extends('layouts.layout1')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>My Word List</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th width="80px">No</th>
        <th>Word</th>
        <th>Meaning</th>
        <th  class="text-center">
            <a class="btn btn-success " href="{{ route('mywords.create') }}">Add</a>
        </th>
    </tr>
    @foreach ($words as $word)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $word->word }}</td>
        <td>{{ $word->meaning }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('words.show',['id'=>$word->id]) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('words.edit',['id'=>$word->id]) }}">Edit</a>
            <Form method ='post' action="{{route('words.destroy',['id'=>$word->id])}}" style='display:inline'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
            <button type="submit" style="display: inline;" class="btn btn-danger">Delete</button>
            </Form>
        </td>
    </tr>
@endforeach
</table>
{!! $words->render() !!}
@endsection
