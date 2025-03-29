@extends('layouts.temp')
@section('content')


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Category</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <form action="{{ route('category.updateHandle', ['catId' => $category->id]) }}" method="post" enctype="multipart/form-data">
                                <!-- Name Field -->
                                @csrf
                                <input type="text" name="id" value="{{ $category->id }}" hidden>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $category->name }}" name="name" required>
                                </div>

                                <!-- Description Field -->
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" value={{ $category->description }} name="description" rows="3"></textarea>
                                </div>

                                <!-- Slug Field -->
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input pattern="[a-zA-Z0-9-]+" value={{ $category->slug }} type="text" class="form-control" id="slug" name="slug">
                                </div>

                                <!-- Image Upload Field -->
                                <div class="mb-3">
                                    <label for="image" class="form-label">Add Image</label>
                                    @if(!empty($category->image))
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" style="width: 100px; height: 100px;">
                                    @endif
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>



@endsection
