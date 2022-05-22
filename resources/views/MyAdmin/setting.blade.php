<html lang="en">
@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <form role="form" method="post" action="{{route('admin.setting.update')}}" enctype="multipart/form-data">
                <section class="content">
                    @csrf
                    <h1>Settings</h1>
                    <div class="stretch-card col-12">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="false">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="true">Smtp Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-socialmedia-tab" data-toggle="pill" href="#custom-tabs-one-socialmedia" role="tab" aria-controls="custom-tabs-one-socialmedia" aria-selected="false">Social Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                        <div class="form-group">
                                            <label> Title</label>
                                            <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Description</label>
                                            <input type="text" id="description" name="description" value="{{$data->description}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Keywords</label>
                                            <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Company</label>
                                            <input type="text" id="company" name="company" value="{{$data->company}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Address</label>
                                            <input type="text" id="address" name="address" value="{{$data->address}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Phone</label>
                                            <input type="text" id="phone" name="phone" value="{{$data->phone}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2 text-white" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Icon Upload</label>
                                            <input type="file" name="icon" class="file-upload-default" >
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">
                                        <div class="form-group">
                                            <label> Smtp Server</label>
                                            <input type="text" id="smtpserver" name="smtpserver" value="{{$data->smtpserver}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Smtp Email</label>
                                            <input type="text" id="smtpemail" name="smtpemail" value="{{$data->smtpemail}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Smtppassword</label>
                                            <input type="password" id="smtppassword" name="smtppassword" value="{{$data->smtppassword}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Smtpport</label>
                                            <input type="number" id="smtpport" name="smtppport" value="{{$data->smtpport}}" class="form-control text-white" >
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active " onclick="" id="custom-tabs-one-socialmedia" role="tabpanel" aria-labelledby="custom-tabs-one-socialmedia-tab">
                                        <div class="form-group">
                                            <label> FAX</label>
                                            <input type="text" id="fax" name="fax" value="{{$data->fax}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Facebook</label>
                                            <input type="text" id="facebook" name="facebook" value="{{$data->facebook}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Instagram</label>
                                            <input type="text" id="instagram" name="instagram" value="{{$data->instagram}}" class="form-control text-white" >
                                        </div>
                                        <div class="form-group">
                                            <label> Twitter</label>
                                            <input type="text" id="twitter" name="twitter" value="{{$data->twitter}}" class="form-control text-white" >
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="custom-tabs-one-aboutus" role="tabpanel" aria-labelledby="custom-tabs-one-aboutus-tab">
                                        <div class="form-group">
                                            <label> About Us</label>
                                            <textarea id="aboutus" name="aboutus" >{{$data->aboutus}}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                        <div class="form-group">
                                            <label> Contact</label>
                                            <textarea id="contact" name="contact" >{{$data->contact}}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                        <div class="form-group">
                                            <label>References</label>
                                            <textarea id="references" name="references">{{$data->references}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-primary"> Update</button>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>






    @endsection
    @section('foot')




            <script src="{{asset('assets')}}/adminasset/vendors/js/vendor.bundle.base.js"></script>
            <script src="{{asset('assets')}}/adminasset/vendors/select2/select2.min.js"></script>
            <script src="{{asset('assets')}}/adminasset/vendors/typeahead.js/typeahead.bundle.min.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/off-canvas.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/hoverable-collapse.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/misc.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/settings.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/todolist.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/file-upload.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/typeahead.js"></script>
            <script src="{{asset('assets')}}/adminasset/js/select2.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#aboutus').summernote();
                    $('#contact').summernote();
                    $('#references').summernote();
                });
            </script>
@endsection


</html>


