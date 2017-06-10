@extends('layouts.app')
@section('css')
    <style>
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .title {
            font-size: 100px;
        }
        .full-height {
            height: 80vh;
        }
    </style>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="flex-center full-height">
            <div class="title">
                HOMEPAGE
            </div>
        </div>
    </div>
</div>
@endsection
