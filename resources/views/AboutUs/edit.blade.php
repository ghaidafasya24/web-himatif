@extends('layouts.app')

@section('content')
<div class="container mx-auto py-4">
    <h2 class="text-lg font-semibold mb-4">Edit About Us</h2>

    <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-6">
        <form method="POST" action="{{ route('aboutus.update', $aboutusgit->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" id="title" name="title" class="form-input mt-1 block w-full" value="{{ $aboutus->title }}" placeholder="Enter title">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea id="description" name="description" class="form-textarea mt-1 block w-full" rows="4" placeholder="Enter description">{{ $aboutus->description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Update</button>
        </form>
    </div>
</div>
@endsection
