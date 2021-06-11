<template>
   <div class="card justify-content-center auth-card">
      <div class="row justify-content-center">
          <div class="col-xl-10">
              <h4 class="mb-5 font-20">Welcome To Create User</h4>

              <form action="#">
                  <div class="row">
                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="f_name" class="mb-2 font-14 bold">First Name</label>
                              <input type="text" id="f_name" class="theme-input-style" placeholder="First Name">
                              <ckeditor value="Hello, World!"></ckeditor>
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="l_name" class="mb-2 font-14 bold">Last Name</label>
                              <input type="text" id="l_name" class="theme-input-style" placeholder="Last Name">
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="u_name" class="mb-2 font-14 bold">User Name</label>
                              <input type="text" id="u_name" class="theme-input-style" placeholder="User Name">
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="email" class="mb-2 font-14 bold">Email Address</label>
                              <input type="email" id="email" class="theme-input-style" placeholder="Email Address">
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="password" class="mb-2 font-14 bold">Password</label>
                              <input type="password" id="password" class="theme-input-style" placeholder="Password">
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="r_password" class="mb-2 font-14 bold">Phone</label>
                              <input type="text" id="r_password" class="theme-input-style" placeholder="Password">
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="r_password" class="mb-2 font-14 bold">Role</label>
                              <input type="text" id="r_password" class="theme-input-style" placeholder="Role">
                          </div>
                          <!-- End Form Group -->
                      </div>


                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="r_password" class="mb-2 font-14 bold">Pricing</label>
                              <input type="text" id="r_password" class="theme-input-style" placeholder="Pricing">
                          </div>
                          <!-- End Form Group -->
                      </div>

                      <div class="col-lg-6">
                          <!-- Form Group -->
                          <div class="form-group mb-20">
                              <label for="r_password" class="mb-2 font-14 bold">Bank</label>
                              <input type="text" id="r_password" class="theme-input-style" placeholder="Bank">
                          </div>
                          <!-- End Form Group -->
                      </div>
                  </div>

                  <div class="d-flex align-items-center pt-4">
                      <button type="submit" class="btn long mr-20">Register</button>
                      <span class="font-12 d-block"><a href="login.html" class="bold">Log In</a>,If you already have an account.</span>
                  </div>
              </form>
          </div>
      </div>
    </div>
</template>
