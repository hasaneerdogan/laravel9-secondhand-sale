@extends('layouts.adminwindow')

@section('title', 'Show Message :'.$data->id )
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')


    <div class="content-wrapper">
        <div class="card-body">
            <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}" class="add btn btn-danger col-sm-2"
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
                                <td class="text-white">{{$data->user->name }}</td>
                            </tr>
                            <tr >
                                <th style="width: 30px"><label class="badge badge-light text-black">Subject</label></th>
                                <td class="text-white text-area">{{$data->subject }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Review</label></th>
                                <td class="text-white">{{$data->review }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30px"><label class="badge badge-light text-black">Rate</label></th>
                                <td class="text-white">{{$data->rate }}</td>
                            </tr>
                            <tr>
                                <th><label class="badge badge-light text-black text-area">Message</label>
                                <td class="text-white text-area col-12 row-cols-auto">{!!  $data->message !!}</td>
                                </th>
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
                                <th style="width: 30px"><label class="badge badge-light text-black">Admin Note</label></th>
                                <td class="text-white">
                                    <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <textarea class="text-area " id="note" name="note" cols="20px" rows="5px">
                                            {{$data->note}}
                                        </textarea>
                                        <div class="card-footer">
                                            <button type="submit " class="btn btn-primary"> Update Note</button>
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
