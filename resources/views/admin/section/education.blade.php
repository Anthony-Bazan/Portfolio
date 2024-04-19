@include('admin.components.header')
<body>
    <div class="wrapper">
     <!-- Content For Sidebar -->
     @include('admin.components.side')
        <div class="main">
           <!-- navbar -->
            @include('admin.components.navbar')


           <!-- Content -->
            <!-- description -->
          

           <main class="content px-3 py-2">
            <div class="card border-0">
              <div class="card-header">
                  <h5 class="card-title">
                      Update Education and Skill Description
                  </h5>
              </div>
              <div class="card-body">
                @foreach ($description as $item )
                <form action="{{route('education.description', ['id'=>$item->id])}}" method="post">
                  @csrf
                  @method('post')
                  <div class="form-floating">
                      <textarea class="form-control" id="floatingTextarea2" rows="20" cols="30" style="height: 100px" name="description" placeholder="{{$item->description}}" value="{{$item->description}}">{{$item->description}}</textarea>
                      <label for="floatingTextarea2">Description</label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                  </form>
              </div>
          </div>
                 <!-- Table awards -->
                 <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Education
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
                                    <th >Education Level</th>
                                    <th >School</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($education as $id )
                                <tr>
                                    <td>{{$id->edulevel}}</td>
                                    <td>{{$id->school}}</td>
                                    <td style="text-align: center">
                                      <div class="d-flex justify-content-center align-items-center">
                                      <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{ $id->id}}" data-edulevel="{{ $id->edulevel }}"  data-school="{{ $id->school }}" data-start="{{ $id->start }}" data-end="{{ $id->end}}">
                                        <i class="uil uil-edit"></i>
                                      </button>
                                      <form action="{{route('education.delete', ['id'=>$id->id])}}" method="POST" class="no-margin">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="uil uil-trash-alt"></i></button>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('education.add')}}" method="post">
            @csrf
            @method('post')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="edulevel" >
                <label for="floatingInput">Education level:</label>
              </div> 
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="school" >
                <label for="floatingInput">School</label>
              </div> 
              <div class="form-floating mb-3">
                <input type="number" id="year"  min="1900" max="2100" name="start" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Year Start</label>
              </div> 
              <div class="form-floating mb-3">
                <input type="number" id="year"  min="1900" max="2100" name="end" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Year Ended</label>
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

  {{-- update modal --}}
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('education.update', ['id'=> '__ID__'])}}" method="post" id="updateForm">
                @csrf
                @method('put')
                <div class="modal-body">
                    <input type="hidden" name="id" id="updateId">
                    <div class="mb-3">
                        <label for="name" class="form-label">Edulevel:</label>
                        <input type="text" class="form-control" id="edulevel" name="edulevel" >
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">School:</label>
                      <input type="text" class="form-control" id="school" name="school">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">start:</label>
                      <input type="text" class="form-control" id="start" name="start">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">End:</label>
                    <input type="text" class="form-control" id="end" name="end">
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
        var edulevel = button.getAttribute('data-edulevel');
        var school = button.getAttribute('data-school');
        var start = button.getAttribute('data-start');
        var end = button.getAttribute('data-end');

        document.getElementById('updateId').value = id;
        document.getElementById('edulevel').value = edulevel;
        document.getElementById('school').value = school;
        document.getElementById('start').value = start;
        document.getElementById('end').value = end;
    });
</script>

  <!-- footer -->
  @include('admin.components.footer')  