@extends('layouts.temp')
@section('content')


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Products</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <div class="form-group">
                                <a type="button" class="btn btn-primary" href="{{ route('product.add') }}">Add Product</a>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" name="keyword"
                                           value="{{ isset($filters['keyword']) ? $filters['keyword'] : ''}}"
                                           class="form-control"
                                           placeholder="Enter keyword (store name or shop id or shop email)">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <select name="shop_status" class="form-control">
                                        <option value="">- All status -</option>
                                        <option
                                            value="1" {{ isset($filters['shop_status']) && $filters['shop_status'] == 1 ? 'selected' : '' }}>
                                            - Install -
                                        </option>
                                        <option
                                            value="0" {{ isset($filters['shop_status']) && $filters['shop_status'] == 0 ? 'selected' : '' }}>
                                            - Uninstall -
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mx-sm-3">
                                    <select name="app_plan" class="form-control">
                                        <option value="">- All app plans -</option>
                                        <option
                                            value="free" {{ isset($filters['app_plan']) && $filters['app_plan'] == 'free' ? 'selected' : '' }}>
                                            - Free -
                                        </option>
                                        <option
                                            value="economy" {{ isset($filters['app_plan']) && $filters['app_plan'] == 'economy' ? 'selected' : '' }}>
                                            - Economy -
                                        </option>
                                        <option
                                            value="starter" {{ isset($filters['app_plan']) && $filters['app_plan'] == 'starter' ? 'selected' : '' }}>
                                            - Starter -
                                        </option>
                                        <option
                                            value="essential" {{ isset($filters['app_plan']) && $filters['app_plan'] == 'essential' ? 'selected' : '' }}>
                                            - Essential -
                                        </option>
                                        <option
                                            value="premium" {{ isset($filters['app_plan']) && $filters['app_plan'] == 'premium' ? 'selected' : '' }}>
                                            - Premium -
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="date" name="date_from"
                                           value="{{ !empty($filters['date_from']) ? $filters['date_from'] : ''}}"
                                           class="form-control date-picker" placeholder="From...">
                                </div>

                                <div class="form-group mx-sm-3">
                                    <input type="date" name="date_end"
                                           value="{{ !empty($filters['date_end']) ? $filters['date_end'] : ''}}"
                                           class="form-control date-picker" placeholder="To...">
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>

                            </form>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>status</th>
                                            <th>link Shoppe</th>
                                            <th>description</th>
                                            <th>price</th>
                                            <th>quantity</th>
                                            <th>images</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->status == 1 ? 'Publish':'draff' }}</td>
                                            <td>{{ $product->link_shoppe }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->images }}</td>
                                            <td>{{ $product->category_id }}</td>
                                            <td>
                                                <a href="{{ route('product.update', $product->id) }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Edit</a>
                                                <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash-xmark"></i></i> Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="dataTables_paginate paging_simple_numbers cnt_paginate">
                                {!! $products->appends([
                                "keyword" => isset($filters['keyword'])?$filters['keyword']:"",
                                "shop_status" => isset($filters['shop_status'])?$filters['shop_status']:"",
                                "date_from" => isset($filters['date_from'])?$filters['date_from']:"",
                                "date_end" => isset($filters['date_end'])?$filters['date_end']:"",
                                "app_plan" => isset($filters['app_plan'])?$filters['app_plan']:"",
                                ])->render() !!}
                            </div>
                        </div>
                    </div>



@endsection
