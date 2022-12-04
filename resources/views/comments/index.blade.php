@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
                <div class="col-sm-6">
                    <h1>Comments</h1>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-primary float-right"
                       href="{{ route('comments.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('comments.table')
        </div>
    </div>

@endsection
