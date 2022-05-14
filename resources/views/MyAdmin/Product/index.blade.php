@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')
    <div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
            <a class="nav-link btn btn-success create-new-button col-sm-3" href="{{route('admin.product.create')}}">Add New Product</a>
        </div>

        <div class="content-wrapper">
            <div class="col-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <td class="text-white">Id</td>
                                <th class="text-white">Category</th>
                                <th class="text-white">Title</th>
                                <th class="text-white">Price</th>
                                <th class="text-white">Stock</th>
                                <th class="text-white">Image</th>
                                <th class="text-white">Image Gallery</th>
                                <th class="text-white">Status</th>
                                <th style="width: 40px" class="text-white">Edit</th>
                                <th style="width: 40px" class="text-white">Delete</th>
                                <th style="width: 40px" class="text-white">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <th>{{$rs->id}}</th>
                                        <th>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</th>
                                        <th>{{$rs->title}}</th>
                                        <th>{{$rs->price}}</th>
                                        <th>{{$rs->stock}}</th>
                                        <th>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image) }}" style="width: 35px" class="">
                                            @endif
                                        </th>
                                        <th>
                                            <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                               onclick="return !window.open(this.href, '' ,'top=50 left=100 width=1100 height=700')">
                                                <img src="{{asset('assets')}}/adminasset/images/image-galery-icon.png" style="width: 35px">
                                            </a>
                                        </th>
                                        <th>{{$rs->status}}</th>
                                        <th><a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="add btn btn-primary "> Edit</a></th>
                                        <th><a href="{{route('admin.product.delete',['id'=>$rs->id])}}" onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Delete</a></th>
                                        <th><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="add btn btn-success "> Show</a></th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
