@extends('admin.admin_master');
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Profile Page</h4>
                            <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input name="username" class="form-control" type="text"
                                               value="{{$editData->username}}"
                                               id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" value="{{$editData->name}}"
                                               id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="text"
                                               value="{{$editData->email}}"
                                               id="example-text-input">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Profile
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input name="profile_image" class="form-control" type="file"
                                               id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                    <div class="col-sm-10 preview">
                                        <img class="rounded  avatar-lg"
                                             src="{{ asset('backend/assets/images/small/img-5.jpg')}}"
                                             alt="Card image cap"
                                             id="file-ip-1-preview">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-round btn-info waves-effect" value="Update Profile">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
