@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title' , 'Add New Categories |' . env('APP_NAME'))


@section('content')

    <h1> Add New Category </h1>

    @include('admin.errors')

    <form enctype="multipart/form-data" action="{{ route('admin.categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>English Name</label>
            <input type="text" name="" id="name_en" placeholder="English Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Arabic Name</label>
            <input type="text" name="" id="name_ar" placeholder="Arabic Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Parent</label>
            <select name="parent_id" class="form-control">
                <option value="">Select</option>
                @foreach ($categories as $category )
                    <option value="{{ $category->id }}"> {{ $category->name_en }} </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success px-5">Add</button>
    </form>

@stop

