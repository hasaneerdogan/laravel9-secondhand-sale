@extends('layouts.adminwindow')

@section('title', 'Order Detail :'.$data->id )
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')


    <div class="content-wrapper">
        <div class="card-body">

        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Detail</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th style="width: 200px"><label class="badge badge-light text-black">Id</label></th>
                                <td class="text-white">{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">User Name</label></th>
                                <td class="text-white">{{$data->user->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Name</label></th>
                                <td class="text-white">{{$data->name }}</td>
                            </tr>
                            <tr >
                                <th style="width: 30px"><label class="badge badge-light text-black">Phone</label></th>
                                <td class="text-white text-area">{{$data->phone }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Email</label></th>
                                <td class="text-white">{{$data->email }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Address</label></th>
                                <td class="text-white">{{$data->address }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Status</label></th>
                                <td class="text-white">{{$data->status }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Ip Number</label></th>
                                <td class="text-white">{{$data->ip }}</td>
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
                                <th ><label class="badge badge-light text-black">Admin Note</label></th>
                            </tr>
                            <tr>
                                <th ><label class="badge badge-light text-black">Status</label></th>
                                <td class="text-white">
                                    <form role="form" action="{{route('admin.order.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <textarea name="note" cols="50" rows="10">{{$data->note}}</textarea>
                                        <br>
                                        <select name="status">
                                            <option selected> {{$data->status}}</option>
                                            <option>Accepted</option>
                                            <option>Canceled</option>
                                            <option>Shipped</option>
                                            <option>Completed</option>
                                        </select>
                                        <div class="card-footer">
                                            <button type="submit " class="btn btn-primary"> Update Information</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                    <td class="text-white">Id</td>
                                    <th class="text-white">Title</th>
                                    <th class="text-white">Price</th>
                                    <th class="text-white">Stock</th>
                                    <th class="text-white">Amount</th>
                                    <th class="text-white">Image</th>
                                    <th class="text-white">Status</th>
                                    <th style="width: 40px" class="text-white">Accept</th>
                                    <th style="width: 40px" class="text-white">Cancel</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <th>{{$rs->id}}</th>
                                            <th>{{$rs->product->title}}</th>
                                            <th>{{$rs->price}}</th>
                                            <th>{{$rs->stock}}</th>
                                            <th>{{$rs->amount}}</th>
                                            <th>
                                                @if ($rs->product->image)
                                                    <img src="{{Storage::url($rs->product->image) }}" style="width: 35px" class="">
                                                @endif
                                            </th>
                                            <th>{{$rs->status}}</th>
                                            <th><a href="{{route('admin.order.acceptproduct',['id'=>$rs->id])}}" class="add btn btn-danger col-sm-2"
                                                   onclick="return confirm('Are You Sure')" style="width: 90px"> Accept</a></th>

                                            <th><a href="{{route('admin.order.cancelproduct',['id'=>$rs->id])}}" class="add btn btn-success col-sm-2"
                                                   onclick="return confirm('Are You Sure')" style="width: 90px"> Cancel</a></th>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
