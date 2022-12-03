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
                    <div class="row">
                        <div class="col-12">
                            <div class="col-sm-12">
                                    <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('beranda')}}">Home</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                    </ol>
                                <h1 class="m-0">Add User</h1>
                                <br><a href="{{ route('members-create')}}"><button type="submit" class="btn btn-block btn-outline-success" style="align-items: left; width:100px;">Create</button></a><br>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data User</h3>
                                        <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover table-striped text-nowrap">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Date of birth</th>
                <th>Photo</th>
                <th>Created By</th>
                <th>Created At</th>
                <th>Updated By</th>
                <th>Updated At</th>
                <th colspan="2" style="text-align: center">Option</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($member as $item)
        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->birth}}</td>
            <td style="width: 10px;"><img style="width: 100px; height:100px;" class="rounded float-left" src="{{ asset('img/' . $item->photo ) }}"></td>
            <td>{{ $item->created_by}}</td>
            <td>{{ $item->created_at}}</td>
            <td>{{ $item->updated_by}}</td>
            <td>{{ $item->updated_at}}</td>
            <td>
                <a href="{{ url('members-delete', $item->id) }}"><button type="button" class="btn btn-block btn-outline-danger btn-sm">Delete</button></a>
            </td>
            <td>
                <a href="{{ url('members-edit', $item->id) }}"><button type="button" class="btn btn-block  btn-outline-warning btn-sm">Edit</button></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
        </div>
            </div>
</body>




{{------------------- Footer ----------------------}}
    @include('dashboard.footer')
</div>

    {{-- Script JS --}}
        @include('dashboard.script')


</body>
</html>

