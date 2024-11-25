@extends('layouts.main_layout')
@section('content')

{{-- Apresenta myName a partir da Route::view --}}
@if(!@empty($myName))
    <p>{{$myName}}</p>
@endif

@endsection