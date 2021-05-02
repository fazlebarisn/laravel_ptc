@extends('layout')

@section('title' , 'Contact US' )

@section('content')
    <div>
        <form action="{{ route('contact.store') }}" method="POST" class="p-6 bg-gray-100 mx-auto w-1/2 rounded shadow">
            @csrf
            <div class="grid grid-cols-12 gap-4">
                <x-input name="first_name" label="First Name" class="col-span-6" />
                <x-input name="last_name" label="Last Name" class="col-span-6" />
                <x-input name="city" label="City" class="col-span-6" />
                <x-input name="district" label="District" class="col-span-6" />
                <div class="col-span-12">
                    <button class="px-4 py-2 bg-purple-600 rounded text-white">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection