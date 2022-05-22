@extends('layouts.adminbase')

@section('title', 'Show Faq ' )
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="main-panel" >
            <div class="content-wrapper">
                <div class="card-body">
                    <a href="{{route('admin.faq.edit',['id'=>$data->id])}}}" class="add btn btn-primary col-sm-2"> Edit</a>
                    <th><a href="{{route('admin.faq.delete',['id'=>$data->id])}}" onclick="return confirm('Are You Sure')" class="add btn btn-danger "> Delete</a></th>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Details of Faq </h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 200px"><label class="badge badge-light text-black">Id</label></th>
                                        <td class="text-white">{{$data->id}}</td>
                                    </tr>

                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Question</label></th>
                                        <td class="text-white">{{$data->question }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px"><label class="badge badge-light text-black">Status</label></th>
                                        <td class="text-white">{{$data->status }}</td>
                                    </tr>
                                    <tr>
                                        <th><label class="badge badge-light text-black text-area">Answer</label>
                                        <td class="text-white text-area row-cols-5 ">{!!  $data->answer !!}</td>
                                        </th>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#answer' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>

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
            </div>
        </div>


@endsection
