@extends('layouts.adminbase')

@section('title', 'Show Category : ' .$data->title )


@section('content')
    <div class="container">
        <div class="main-panel" >
            <div class="content-wrapper">
                <div class="card-body">
                    <a href="{{route('admin.category.edit',['id'=>$data->id])}}}" class="add btn btn-primary col-sm-2"> Edit</a>
                    <a href="{{route('admin.category.delete',['id'=>$data->id])}}" class="add btn btn-danger col-sm-2" onclick="return confirm('Are You Sure')" style="width: 90px"> Delete</a>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Details of Category {{$data->title}}</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 200px"><label class="badge badge-light text-black">Id</label></th>
                                        <td class="text-white">{{$data->id }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Parent Id</label></th>
                                        <td class="text-white">{{$data->parent_id}}</td>
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
                                        <th style="width: 30px"><label class="badge badge-light text-black">Image</label></th>
                                        <td class="text-white"><th>
                                            @if ($data->image)
                                                <img src="{{Storage::url($data->image) }}" style="width: 35px" class="">
                                            @endif
                                        </th></td>
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
