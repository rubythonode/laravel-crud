@extends('layouts.app')
@section('css')
    <style>
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .title {
            font-size: 84px;
        }
        .full-height {
            height: 100vh;
        }
    </style>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="flex-center full-height">
            <div class="title">
                This is your homepage
            </div>
        </div>
    </div>
</div>
@endsection
