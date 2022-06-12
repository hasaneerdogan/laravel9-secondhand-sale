@extends('layouts.adminwindow')

@section('title', 'User Detail :'.$data->id )
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')


    <div class="content-wrapper">
        <div class="card-body">
            <a href="{{route('admin.message.destroy',['id'=>$data->id])}}" class="add btn btn-danger col-sm-2"
               onclick="return confirm('Are You Sure')" style="width: 90px"> Delete</a>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Details of Message</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 200px"><label class="badge badge-light text-black">Id</label></th>
                                <td class="text-white">{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Name</label></th>
                                <td class="text-white">{{$data->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Email</label></th>
                                <td class="text-white">{{$data->email }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Roles</label></th>
                                <td class="text-white">
                                    @foreach($data->roles as $role)
                                        {{$role->name}}
                                        <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                           onclick="return confirm('Are You Sure')" class="add btn btn-danger ">[x]</a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Creat Date</label></th>
                                <td class="text-white">{{$data->created_at }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Update Date</label></th>
                                <td class="text-white">{{$data->updated_at}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Addrole </label></th>
                                <td class="text-white">
                                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}"> {{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="card-footer">
                                            <button type="submit " class="btn btn-primary">Add Role</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
