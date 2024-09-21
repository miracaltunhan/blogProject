@extends('layouts.app')

@section('content') <!-- Content alanını başlatıyoruz -->

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div>

@if(Auth::user()->hasRole('admin'))
<div class="py-4" style="text-align: center;">
    <a href="{{ route('blogs.index') }}" class="btn" style="display: block; width: 200px; margin: 10px auto; padding: 10px; font-size: 16px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">Blogs</a>
    <a href="{{ route('dashboard.users') }}" class="btn" style="display: block; width: 200px; margin: 10px auto; padding: 10px; font-size: 16px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">Users</a>
    <a href="{{ route('categories.create') }}" class="btn" style="display: block; width: 200px; margin: 10px auto; padding: 10px; font-size: 16px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">Categories</a>
</div>

@endif

@endsection
