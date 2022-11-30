<!DOCTYPE html>
<html lang="en">
 <head>
    <title>LibraryCoop</title>
    @include('dashboard.head')
</head>

<body class="hold-transition sidebar-mini pace-primary">
<div class="wrapper">
    {{-- Start Navbar Top --}}

        @include('dashboard.navbar')

    {{-- End Navbar Top --}}


    {{-- Start Sidebar --}}

        @include('dashboard.aside-navbar')

    {{-- End Sidebar --}}

{{------------------------- Content  Wrapper ------------------------}}

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Perpustakaan</h1>
                </div>
            </div>
        </div>
    </div>

{{------------------------- Content ------------------------}}

</div>


    {{-- Footer --}}

        @include('dashboard.footer')

    {{-- N Footer --}}

</div>

    {{-- Script JS --}}

        @include('dashboard.script')


</body>
</html>
