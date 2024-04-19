
@include('admin login.components.header')
<body>
    <section class="vh-100" style="background:url(asstes/image/blue.gif) no-repeat center center; object-fit: cover; background-size: cover;">
        <div class="container h-70 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-white" style="border-radius: 25px; background-color: transparent;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 mx-auto text-center mt-auto mb-auto">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form action="{{route('login.auth')}}" method="POST" class="mx-1 mx-md-4">
                        @csrf
                        @method('post')
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw" ></i>                
                            <div class="form-outline flex-fill mb-0" data-mdb-input-init>
                                <input type="email" class="form-control" name="email" id="validationDefault01"  required />
                                <label for="validationDefault01" class="form-label">Email</label>
                              </div>
                        </div>

                        
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0" data-mdb-input-init>
                            <input type="password" class="form-control" name="password" id="validationDefault01"  required />
                            <label for="validationDefault01" class="form-label">Password</label>
                          </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button class="btn btn-primary" type="submit" data-mdb-ripple-init>Login</button>
                        </div>
      
                      </form>
                      <div class="d-flex justify-content-center mx-2s mb-3 mb-lg-4">
                        <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger btn-lg" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
                             Forgot Password
                          </button>
                      </div>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 ">
      
                      <img src="asstes/image/profile.jpg"
                        class="img-fluid " style="border-radius: 25px; "alt="Sample image">
      
                    </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Email Validation</h5>
                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="{{route('forget.auth')}}" method="POST">
                      @csrf
                      @method('post')
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0" data-mdb-input-init>
                                <input type="email" class="form-control" id="validationDefault01" name="email"  required />
                                <label for="validationDefault01" class="form-label">First name</label>
                              </div>
                      </div>
                </div>
                <div class="modal-footer bg-secondary">
                <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" data-mdb-ripple-init>Verify</button>
            </form>   
            </div>
            </div>
            </div>
        </div>
      </section>
</body>
@include('admin login.components.footer')