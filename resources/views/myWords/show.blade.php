@extends('layouts.layout1')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show words</h2>
        </div>
        <div class="pull-right">
            <br/>
            {{-- <a class="btn btn-primary" href="{{ route('mywords.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a> --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $word->word}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Meaning:</strong>
             {{ $word->meaning}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Example:</strong>
                {{ $word->example}}
            </div>
        </div>
</div>
@endsection
