@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                            <a href="/words" class="list-group-item list-group-item-action active">
                              My Word List
                            </a>
                            {{-- <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in
                            </a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus
                            </a> --}}
                          </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
