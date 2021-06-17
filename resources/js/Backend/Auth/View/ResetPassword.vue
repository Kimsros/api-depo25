<template>
   <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <!-- Card -->
                    <div class="card justify-content-center auth-card">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10">
                                <h4 class="mb-5 font-20">Reset Password</h4>

                                <form action="#">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="n_password" class="mb-2 font-14 bold">New Password</label>
                                        <input type="password" id="n_password" class="theme-input-style" placeholder="password">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group mb-30">
                                        <label for="c_password" class="mb-2 font-14 bold">Confirm Password</label>
                                        <input type="password" id="c_password" class="theme-input-style" placeholder="password">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <button type="submit" class="btn long mr-20">Reset</button>
                                </form>
                            </div>                                    
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>