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
                            </div>
                            <!-- End Form Group -->
                            
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="password" class="mb-2 font-14 bold">Password</label>
                                <input type="password" id="password" class="theme-input-style" v-model="login.password" placeholder="********">
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

                                <a href="forget-pass.html" class="font-12 text_color">Forgot Password?</a>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn long mr-20">Log In</button>
                                <span class="font-12 d-block"><a href="register.html" class="bold">Sign Up</a>,If you have no account.</span>
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
            }).then(response=>{
                console.log(response.date);
            })
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

                    axios.post('/sanctum/csrf-cookie').then(response=>{
                        this.SignIn(dataLogin)
                            .then((response)=> {
                                if(response[0] == "true"){
                                    thisupdate.$Progress.finish();
                                    thisupdate.loadding = false;
                                    var url='/loginSotre';
                                    if(this.$route.query.redirect){
                                        url=this.$route.query.redirect;
                                    }
                                }else{
                                    
                                }
                            })
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