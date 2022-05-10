@extends('layouts.adminbase')

@section('title', 'Show Category : ' .$data->title )


@section('content')

 <div class="main-panel" >
            <div class="content-wrapper">
                    <div class="card-body">
                        <a href="{{route('admin.product.edit',['id'=>$data->id])}}}" class="add btn btn-primary col-sm-2"> Edit</a>
                        <a href="{{route('admin.product.delete',['id'=>$data->id])}}" class="add btn btn-danger col-sm-2" onclick="return confirm('Are You Sure')" style="width: 90px"> Delete</a>
                    </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Details of Category {{$data->title}}</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 200px"><label class="badge badge-light text-black">Id</label></th>
                                        <td class="text-white">{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Category Id</label></th>
                                        <td class="text-white">
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Title</label></th>
                                        <td class="text-white">{{$data->title }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Keywords</label></th>
                                        <td class="text-white">{{$data->keywords }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Description</label></th>
                                        <td class="text-white">{{$data->description }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Price</label></th>
                                        <td class="text-white">{{$data->price }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Stock</label></th>
                                        <td class="text-white">{{$data->stock }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Detail</label></th>
                                        <td class="text-white">{{$data->detail}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Image</label></th>
                                        <td class="text-white">{{$data->image }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Status</label></th>
                                        <td class="text-white">{{$data->status }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Creat Date</label></th>
                                        <td class="text-white">{{$data->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Update Date</label></th>
                                        <td class="text-white">{{$data->updated_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
