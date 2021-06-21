<template>
    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <h4 class="mb-5 font-20">Admin</h4>

                        <form @submit.prevent="InsertLogin()">
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="email" class="mb-2 font-14 bold">Email Address</label>
                                <input type="email" id="email" class="theme-input-style" v-model="login.email" placeholder="Email Address">
                                <span class="invalid_email" style="color:red"></span>
                            </div>
                            <!-- End Form Group -->
                            
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="password" class="mb-2 font-14 bold">Password</label>
                                <input type="password" id="password" class="theme-input-style" v-model="login.password" placeholder="password">
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-between mb-20">
                                <div class="d-flex align-items-center">
                                    <!-- Custom Checkbox -->
                                    <label class="custom-checkbox position-relative mr-2">
                                        <input type="checkbox" id="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- End Custom Checkbox -->
                                    
                                    <label for="checkbox" class="font-14">Remember Me</label>
                                </div>

                                <a href="" class="font-12 text_color">Forgot Password?</a>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn long mr-20">Log In</button>
                                <span class="font-12 d-block"><a href="/admin/register" class="bold">Sign Up</a>,If you have no account.</span>
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
import {
    mapActions,
    mapGetters
} from "vuex";
    export default {
        computed: {
            ...mapGetters({//merge 
                authenticated: "auth/authenticated",
                user: "auth/getUser",
            }),
        },
        data(){
            return{
                login:{
                    email:null,
                    password:null
                },
                massage: false,
                loadding: false,
            }
        },
        mounted(){
            axios.get('/api/user',{
                headers:{
                    'content-Type': 'aplication/json'
                }
            });
        },
        
        methods:{
            ...mapActions({
                SignIn: "auth/SignIn",
            }),
            InsertLogin(){
                if(this.login.email&&this.login.password){
                    var dataLogin ={
                        'email':this.login.email,
                        'password':this.login.password
                    };

                    axios.get('/sanctum/csrf-cookie').then(response=>{
                        this.SignIn(dataLogin)
                            .then((response)=> {
                                if(response[0] == "success"){
                                    window.location = "/admin";
                                }else{
                                   $(".invalid_email").text("Invalid Email or Password","red");
                                }
                            });
                    });
                }else{
                    alert("not work");
                }
            }
        }
    }
</script>

<style scoped>

</style>