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
                    <h4>About</h4>
                </div>
                <div class="row">
                    {{-- name --}}
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Name</h4>
                                                @foreach ($about as $item )

                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <form action="{{route('about.update', ['id'=>$item->id])}}" method="post">
                                                        @csrf
<<<<<<< HEAD
                                                        @method('post')
=======
                                                        @method('put')
>>>>>>> d8db09de121e0f76ec9b8810437584de0254efed
                                                    <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="{{$item->name}}" value="{{$item->name}}">
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
                                                <h4>Update Role</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Role:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"  name="role" placeholder="{{$item->role}}" value="{{$item->role}}">
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

                     {{-- location --}}
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
                                                    <input type="text" class="form-control" name="location" id="exampleFormControlInput1" placeholder="{{$item->location}}" value="{{$item->location}}">
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
                
                 <!-- description -->
                 <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Description
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description" placeholder="{{$item->description}}" value="{{$item->description}}">{{$item->description}}</textarea>
                            <label for="floatingTextarea2">Description</label>
                          </div>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </form>
                 <!-- Table awards -->
                 <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Award
                        </h5>
                              <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   Add
                                </button>
  
                    </div>
                    <div class="card-body">
                        <table  class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th >Title</th>
                                    <th >Description</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($award as $id )
                                    
                               
                                <tr>
                                    <td>{{$id->title}}</td>
                                    <td>{{$id->description}}</td>
                                    <td style="text-align: center">
                                        <!-- Button to trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{ $id->id }}" data-name="{{ $id->title }}"  data-description="{{ $id->description }}">
                                            <i class="uil uil-edit"></i>
                                        </button>
                                        <button><i class="uil uil-trash-alt"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                 
                            </tbody>
                        </table>
                    </div>
                </div>

        
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('about.add')}}" method="post">
                @csrf
                @method('post')
            <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="title" placeholder="">
                    <label for="floatingInput">Title</label>
              </div> 
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="description" placeholder="">
                <label for="floatingInput">Description</label>
              </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal update -->
   <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('about.description', ['id'=>'__ID__']) }}" method="post" id="updateForm">
                @csrf
                @method('put')
                <div class="modal-body">
                    <input type="hidden" name="id" id="updateId">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

        {{-- script --}}
        <!-- JavaScript to populate modal fields -->
<script>
    function setFormAction(id) {
        var form = document.getElementById('updateForm');
        var action = form.getAttribute('action');
        // Replace '__ID__' in the action attribute with the actual id value
        form.setAttribute('action', action.replace('__ID__', id));
    }

    // Call the setFormAction function when the modal is shown
    var myModal = document.getElementById('updateModal');
    
    myModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        // Set the value of the hidden input field to the id
        document.getElementById('updateId').value = id;
        // Call the setFormAction function to update the form action
        setFormAction(id);
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var role = button.getAttribute('data-role');
        var location = button.getAttribute('data-location');
        var description = button.getAttribute('data-description');

        document.getElementById('updateId').value = id;
        document.getElementById('name').value = name;
        document.getElementById('description').value = description;
    });
</script>
               
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