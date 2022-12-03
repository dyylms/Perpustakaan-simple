<!DOCTYPE html>
<html lang="en">
 <head>
    <title>LibraryCoop</title>
    @include('dashboard.head')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    {{-- Start Navbar Top --}}
        @include('dashboard.navbar')

    {{-- Start Sidebar --}}
        @include('dashboard.aside-navbar')

{{------------------------- Content  Wrapper ------------------------}}
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('members')}}">Master User</a></li>
                <li class="breadcrumb-item active">Edit User</li>
                </ol>
            <h1 class="m-0">Edit Data</h1>
        </div>
        <hr>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary ">
                        <div class="card-header">
                            <h3 class="card-title ">Input User</h3>
                        </div>
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        @foreach ($user as $item)
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $item->email }}" disabled>
                        @endforeach
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" >
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Birth of date</label>
                        <input type="date" name="birth" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                <div class="form-group">
                    <label for="exampleInputFile">File Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                            @foreach ($user as $users)
                                <input type="text" name="updated_by" value="{{$users->name}}" hidden>
                            @endforeach
                        </div>
                    </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        </div>
            </div>
                </div>
        </section>
    </div>
</section>
    </div>
        </div>
        {{------------------- Footer ----------------------}}
        @include('dashboard.footer')
        </div>

            {{-- Script JS --}}
                @include('dashboard.script')

</body>
</html>
