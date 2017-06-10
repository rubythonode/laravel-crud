@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
             <h1>This is the profile page @if(auth()->check())of <b>{{$user->name}}</b>@endif</h1>
            </div>
        </div>
    </div>
@stop