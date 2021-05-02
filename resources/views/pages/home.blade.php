@extends('layout')

@section('title' , $title )

@push('style')
    <style>
        .brr{
            background:red;
        }
    </style>
@endpush

@section('content')
    <div>
        <x-alert data-id="23" class="h-30">
            <p> Hello</p>
        </x-alert>
    </div>
@endsection