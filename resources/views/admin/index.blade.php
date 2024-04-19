@include('admin.components.header')
<body>
    <div class="wrapper">
     <!-- Content For Sidebar -->
     @include('admin.components.side')
        <div class="main">
           <!-- navbar -->
            @include('admin.components.navbar')
           <!-- dashboard -->
            @include('admin.components.dashboard')
           <!-- footer -->
            @include('admin.components.footer')
        </div>
    </div>
   