@include('admin.components.header')
<body>
    <div class="wrapper">
     <!-- Content For Sidebar -->
     @include('admin.components.side')
        <div class="main">
           <!-- navbar -->
            @include('admin.components.navbar')


           <!-- Content -->
           
           <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <h4>Admin Dashboard</h4>
                </div>
                <div class="row">
                    {{-- name --}}
                    @foreach ($contact as $item )
                        
                   
                    <form action="{{route('contact.update', ['id'=>$item->id])}}" method="POST">
                        @csrf
                        @method('post')
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Phone</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Phone:</label>
                                                    <input type="phone" name="phone" class="form-control" id="exampleFormControlInput1" value="{{$item->phone}}" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- role --}}
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Email</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$item->email}}" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     {{-- role --}}
                     <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Location</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Location:</label>
                                                    <input type="text" name="location" class="form-control" value="{{$item->location}}" id="exampleFormControlInput1" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>


              
               
           
        </main>
      
  
               
               
            </div>
            <a href="#" class="theme-toggle">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
        </a>
        </main>
      

           
          
        </div>
    </div>
  <!-- footer -->
  @include('admin.components.footer')  