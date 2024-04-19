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
                            Update Services
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
                                    <th >Title</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($service as $item )
                                
                             
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td style="text-align: center">
                                      <div class="d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{$item->id}}" data-title="{{$item->title}}" data-description="{{$item->description}}"><i class="uil uil-edit"></i></button>
                                        <form action="{{route('service.delete' ,['id'=>$item->id])}}" method="POST">
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
          <form action="{{route('services.add')}}" method="post">
            @csrf
            @method('post')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" placeholder="">
                <label for="floatingInput">Title:</label>
              </div> 
              <div class="form-floating mb-3">
                <textarea type="text" class="form-control" id="floatingInput" name="description" ></textarea>
                <label for="floatingInput">Description:</label>
              </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>

    <!-- Modal edit-->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateModalLabel">Update Services</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('services.update', ['id'=> '__ID__'])}}" method="post" id="updateForm">
                @csrf
                @method('put')
                <div class="form-floating mb-3">
                  <input type="hidden" name="id" id="updateId">
                    <input type="text" class="form-control" id="title" name="title" placeholder="">
                    <label for="floatingInput">Title:</label>
                  </div> 
                  <div class="form-floating mb-3">
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                    <label for="floatingInput">Description:</label>
                  </div> 
                 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>
  
               
               
            </div>
            <a href="#" class="theme-toggle">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
        </a>
        </main>
      
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
            var title = button.getAttribute('data-title');
            var description = button.getAttribute('data-description');
    
            document.getElementById('updateId').value = id;
            document.getElementById('title').value = title;
            document.getElementById('description').value = description;
          });
</script>
           
          
        </div>
    </div>
  <!-- footer -->
  @include('admin.components.footer')  