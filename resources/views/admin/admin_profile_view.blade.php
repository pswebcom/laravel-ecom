@extends('admin.admin_master');
@section('admin')
    <div class="container-fluid mt-4">

        <div class="row mt-3">
            <div class="col-lg-6 mt-4">
                <div class="card mt-4"><br><br/>
                    <center>
                        <img class="rounded-circle  avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg')}}"
                             alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title">UserName: {{$adminData->username}}</h4>
                        <hr>
                        <h4 class="card-title">Name: {{$adminData->name}}</h4>
                        <hr>
                        <h4 class="card-title">Email: {{$adminData->email}}</h4>
                        <hr>
                        <a href="{{route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    </div>

@endsection
