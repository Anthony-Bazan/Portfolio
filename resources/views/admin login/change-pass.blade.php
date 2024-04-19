@include('admin login.components.header')
<body>
    <section class="vh-100 ebg-imag"
    style="background:url(asstes/image/blue.gif) no-repeat center center; object-fit: cover; background-size: cover;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5 text-center">
              <h2 class="text-uppercase text-center mb-1">Email Verified</h2>
              <span class="align-items-center">Please Remember your password</span><br>
              <small>New password must match the Confirm password</small>
              <form id="passwordForm" action="otp.php" method="post">

              <div class="d-flex flex-row align-items-center mt-2">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0" data-mdb-input-init>
                  <input type="password" class="form-control" id="pass1" name="pass1" required />
                  <label for="validationDefault01" class="form-label">Password</label>
                </div>
              </div>

              <div class="d-flex flex-row align-items-center mt-2 mb-4">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0" data-mdb-input-init>
                  <input type="password" class="form-control" id="pass2" name="pass2" required />
                  <label for="validationDefault01" class="form-label">Confirm Password</label>
                </div>
              </div>

              <div class="d-flex justify-content-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
                  Forgot Password
                </button>
              </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation password</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <form action="{{route('changepass.save')}}" method="post">
            @csrf
            @method('post')
            <p>Are you sure you want to save these passwords?</p>
            <input hidden type="text" name="pass1" id="pas1" readonly>
            <input hidden type="text" name="pass2" id="pas2" readonly>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-danger" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" data-mdb-ripple-init>Confirm</button>
          </form>   
        </div>
      </div>
    </div>
  </div>
   
   <script>
    document.addEventListener("DOMContentLoaded", function() {
    const pass1 = document.getElementById('pass1');
    const pass2 = document.getElementById('pass2');

    document.getElementById("pas1").value = pass1.value;
    document.getElementById("pas2").value = pass2.value;

    // Listen for the input event on both password fields
    pass1.addEventListener('input', function() {
      document.getElementById("pas1").value = pass1.value;
    });

    pass2.addEventListener('input', function() {
      document.getElementById("pas2").value = pass2.value;
    });
  });
</script>

</section>
</body>
@include('admin login.components.footer')
