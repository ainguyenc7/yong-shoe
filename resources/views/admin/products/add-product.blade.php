@extends('layouts.temp')
@section('content')


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Product</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form action="{{ route('product.addProductHandle') }}" method="post" enctype="multipart/form-data">
                                <!-- Name Field -->
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" value="Giày thể thao" name="name" required>
                                </div>

                                <!-- Description Field -->
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>

                                <!-- Slug Field -->
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Price</label>
                                    <input step="0.1" type="number" min="0" class="form-control" id="price" name="price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Quantity</label>
                                    <input step="1" type="number" min="1" class="form-control" id="quantity" name="quantity" required>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="checkbox" id="vehicle1" name="status" value=1>
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Category</label>
                                    <select class="form-select form-control"  aria-label="Default select example" name="category_id">

                                    @foreach ($categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    </select>
                                    </div>

                                <!-- Image Upload Field -->
                                <div class="mb-3">
                                    <label for="image" class="form-label">Add Image</label>
                                    <input class="form-control" type="file" id="image" name="images" accept="image/*">
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>



@endsection
