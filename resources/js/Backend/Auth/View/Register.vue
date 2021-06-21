<template>
    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <h4 class="mb-5 font-20">Register</h4>

                        <form @submit.prevent="InsertRegister()">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="f_name" class="mb-2 font-14 bold">First Name</label>
                                        <input type="text" id="f_name" class="theme-input-style" v-model="register.f_name" placeholder="First Name">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="l_name" class="mb-2 font-14 bold">Last Name</label>
                                        <input type="text" id="l_name" class="theme-input-style" v-model="register.l_name" placeholder="Last Name">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="u_name" class="mb-2 font-14 bold">User Name</label>
                                        <input type="text" id="u_name" class="theme-input-style" v-model="register.u_name" placeholder="User Name">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="email" class="mb-2 font-14 bold">Email Address</label>
                                        <input type="email" id="email" class="theme-input-style" v-model="register.email" placeholder="Email Address">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="password" class="mb-2 font-14 bold">Password</label>
                                        <input type="password" id="password" class="theme-input-style" v-model="register.password" placeholder="Password">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="r_password" class="mb-2 font-14 bold">Retype Password</label>
                                        <input type="password" id="r_password" class="theme-input-style" v-model="register.r_password" placeholder="Password">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="number" class="mb-2 font-14 bold">Phone</label>
                                        <input type="number" id="phome" class="theme-input-style" v-model="register.phome" placeholder="phone">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                            <div class="d-flex align-items-center pt-4">
                                <button type="submit" class="btn long mr-20">Register</button>
                                <span class="font-12 d-block"><a href="admin/login" class="bold">Log In</a>,If you already have an account.</span>
                            </div>
                        </form>
                    </div>                                    
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            register:{
                f_name:null,
                l_name:null,
                u_name:null,
                email:null,
                password:null,
                r_password:null,
                phome:null,
                role_id:null,
                pricing_id:null,
                bank_id:null
            }
        }
    },
    methods:{
        InsertRegister(){
            if(this.register.f_name && this.register.l_name && this.register.u_name && this.register.email && this.register.password && this.register.r_password){
                var RegisterData = {
                    'name':this.register.u_name,
                    'first_name':this.register.f_name,
                    'last_name':this.register.l_name,
                    'email':this.register.email,
                    'password':this.register.password,
                    'confirm_password':this.register.r_password,
                    'telephone':this.register.phome,
                    'role_id':1,
                    'pricing_id':1,
                    'bank_id':1
                };
                // console.log(RegisterData);
                axios.post('/api/register',RegisterData).then(response=>{
                    if (response.data.success) {
                        this.$router.push("/admin/login");
                    } else {
                        console.log(response.data.error);
                    }
                });
            }else{
                alert("not date");
            }
        }
    }
}
</script>

<style>

</style>