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
                 <!-- Table awards -->
                 <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Client
                        </h5>
                              <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    ADD
                                </button>
  
                    </div>
                    <div class="card-body">
                        <table  class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th >Name</th>
                                    <th>Image</th>
                                    <th >Role</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($client as $item )

                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{asset('upload/'.$item->image)}}" style="width: 50px" alt=""></td>
                                    <td>{{$item->role}}</td>
                                    <td style="text-align: center">
                                      <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#edit" data-id="{{$item->id}}" data-name="{{$item->name}}" data-role="{{$item->role}}" data-description="{{$item->description}}"><i class="uil uil-edit"></i></button>
                                        <form action="{{route('client.destroy',['id'=>$item->id])}}" method="POST">
                                          @csrf
                                          @method('delete')
                                        <button class="btn btn-danger" type="submit"><i class="uil uil-trash-alt"></i></button>
                                      </form>
                                      </div>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add services</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('client.add')}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('post')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="">
                <label for="floatingInput">Name:</label>
              </div> 
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="role" id="floatingInput" placeholder="">
                <label for="floatingInput">Role:</label>
              </div> 
              <div class="form-floating mb-3">
                <textarea type="text" class="form-control" name="description" id="floatingInput" placeholder=""></textarea>
                <label for="floatingInput">Description:</label>
              </div> 
              <div class="mb-3">
                <label for="imageInput" class="form-label">Choose Image</label>
                <input class="form-control" type="file" id="imageInput" name="image" accept="image/*">
            </div>
            
            <div id="imagePreview" class="mb-3">
                <img id="preview" src="#" alt="Image Preview" style="max-width: 100%; max-height: 200px;">
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

    <!-- Modal edit-->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Update Services</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('client.update', ['id'=>'__ID__']) }}" method="post" id="updateForm">
                @csrf
                @method('put')
                <div class="form-floating mb-3">
                  <input type="hidden" name="id" id="updateId">
                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                    <label for="floatingInput">Name:</label>
                  </div> 
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="role" id="role" placeholder="">
                    <label for="floatingInput">Role:</label>
                  </div> 
                  <div class="form-floating mb-3">
                    <textarea type="text" class="form-control" name="description" id="description" placeholder=""></textarea>
                    <label for="floatingInput">Description:</label>
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
  
      <script>
        function setFormAction(id) {
            var form = document.getElementById('updateForm');
            var action = form.getAttribute('action');
            // Replace '__ID__' in the action attribute with the actual id value
            form.setAttribute('action', action.replace('__ID__', id));
        }
    
        // Call the setFormAction function when the modal is shown
        var myModal = document.getElementById('edit');
        
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
            var description = button.getAttribute('data-description');
          
    
            document.getElementById('updateId').value = id;
            document.getElementById('name').value = name;
            document.getElementById('description').value = description;
            document.getElementById('role').value = role;
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