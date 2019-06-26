@extends('layouts.layout1')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Word</h2>
        </div>
        <div class="pull-right">
            <br/>
            {{-- <a class="btn btn-primary" href="{{ route('mywords.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a> --}}
        </div>
    </div>
</div>
<form method="POST" action="{{route('words.store')}}">
    @csrf
@include('myWords.form')
</form>
@endsection
