<template>
   <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">{{user.label_name}}</h4>

    <!-- Form -->
    <form @submit.prevent="insertOrUpdateData()">
        <div class="alert alert-danger alert-dismissible fade show" v-if="validate.length>0">
            <h4 class="alert-heading"><i class="fa fa-warning"></i> Warning!</h4>
            <hr>
            <p class="mb-0" v-for="(validation,idx) in validate" :key="idx">{{validation[0]}}</p>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
      <div class="row">
        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">First Name <span class="text-danger"> *</span></label>
            <input
              v-model="fm_user.first_name"
              type="text"
              class="theme-input-style"
              placeholder="First Name"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Email <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.email"
              type="email"
              class="theme-input-style"
              placeholder="Email"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Telephone <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.telephone"
              type="text"
              class="theme-input-style"
              placeholder="Telephone"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Profile <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.profile"
              type="text"
              class="theme-input-style"
              placeholder="Profile"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Pricing <span class="text-danger">*</span></label>
            <select class="theme-input-style" v-model="fm_user.pricing_id">
                <option v-for="(pricing_item,idx) in pricing_list.data" :key="idx" :value="pricing_item.id">{{pricing_item.name}}</option>
            </select>
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Bank Username <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.account_name"
              type="text"
              class="theme-input-style validate"
              placeholder=" Bank Username"
            />
          </div>
          <!-- End Form Group -->
        </div>

        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Last Name <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.last_name"
              type="text"
              class="theme-input-style"
              placeholder="Last Name"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Password <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.password"
              type="password"
              class="theme-input-style"
              placeholder="Password"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Role <span class="text-danger">*</span></label>
            <select class="theme-input-style" v-model="fm_user.role_id">
                <option v-for="(role_item,idx) in role_list.data" :key="idx"  :value="role_item.id" :selected="role_item.id==30">{{role_item.name}}</option>
            </select>
          </div>
          <!-- End Form Group -->

          <div class="form-group">
            <label class="font-14 bold mb-2">Bank Name <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.bank_name"
              type="text"
              class="theme-input-style"
              placeholder="Bank Name"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Bank Account <span class="text-danger">*</span></label>
            <input
              v-model="fm_user.bank_account"
              type="text"
              class="theme-input-style"
              placeholder=" Bank Account"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Description</label>
            <input
              v-model="fm_user.description"
              type="text"
              class="theme-input-style"
              placeholder="Description"
            />
          </div>
          <!-- End Form Group -->
        </div>
      </div>
      <!-- Form Row -->
      <div class="form-row">
        <div class="col-12 text-right">
          <button type="submit" class="btn long">Submit</button>
        </div>
      </div>
      <!-- End Form Row -->
    </form>
    <!-- End Form -->
  </div>
</template>
<script>
export default {
    data(){
        return{
               fm_user:{
                  first_name:'',
                  last_name:'',
                  email:'',
                  password:'',
                  telephone:'',
                  profile:'',
                  role_id:'',
                  pricing_id:'',
                  bank_name:'',
                  account_name:'',
                  bank_account:'',
                  description:'',
               },
               user:{
                   id:0,
                   label_name:'Add User',
                   user_edit:[],

               },
               validate:[],
               role_list:[],
               pricing_list:[],
               data_edit:[],
            //    selected:'Kimsros'
        }
    },
    created(){
        this.getRoleList();
        this.getPringList();
        this.user.id=this.$route.params.id;
        if(this.user.id>0){
            this.user.label_name='Edit User';
            this.getEditUser(this.user.id);
        }
    },
    methods:{
        getRoleList(){
            axios.get('/api/role').then(response=>{
                this.role_list=response.data.success;
            });
        },
        getPringList(){
            axios.get('/api/pricing').then(response=>{
                this.pricing_list=response.data.success;
            });
        },
        getEditUser(id){
            axios.get('/api/user/'+id+'/edit').then(response=>{
                if(response.data.success){
                    this.data_edit=response.data.success;
                    console.log(this.data_edit);
                    this.fm_user.first_name=this.data_edit.first_name;
                    this.fm_user.last_name=this.data_edit.last_name;
                    this.fm_user.email=this.data_edit.email;
                    this.fm_user.password=this.data_edit.password;
                    this.fm_user.telephone=this.data_edit.telephone;
                    this.fm_user.profile=this.data_edit.profile;
                    this.fm_user.bank_name=this.data_edit.bank_name;
                    this.fm_user.bank_account=this.data_edit.bank_account;
                    this.fm_user.account_name=this.data_edit.account_name;
                    this.fm_user.description=this.data_edit.description;
                    this.fm_user.role_id=this.data_edit.role_id;
                    this.fm_user.pricing_id=this.data_edit.pricing_id;
                }
            });
        },
        insertOrUpdateData(){
            // var fd=new FormData();
            // fd.append('first_name',this.fm_user.first_name);
            // console.log(fd);
            // fd.append('last_name',this.fm_user.last_name);
            // fd.append('email',this.fm_user.email);
            // fd.append('telephone',this.fm_user.telephone);
            // fd.append('password',this.fm_user.password);
            // fd.append('role_id',this.fm_user.role_id);
            // fd.append('pricing_id',this.fm_user.pricing_id);
            // fd.append('bank_name',this.fm_user.bank_name);
            // fd.append('account_name',this.fm_user.account_name);
            // fd.append('bank_account',this.fm_user.bank_account);
            // fd.append('description',this.fm_user.description);
            // fd.append('profile',this.fm_user.profile);
            var fd={
                'first_name':this.fm_user.first_name,
                'last_name':this.fm_user.last_name,
                'email':this.fm_user.email,
                'telephone':this.fm_user.telephone,
                'password':this.fm_user.password,
                'role_id':this.fm_user.role_id,
                'pricing_id':this.fm_user.pricing_id,
                'bank_name':this.fm_user.bank_name,
                'account_name':this.fm_user.account_name,
                'bank_account':this.fm_user.bank_account,
                'description':this.fm_user.description,
                'profile':this.fm_user.profile
            };
            console.log(this.user.id);
            if(this.user.id>0){
                axios.put('/api/user/'+this.user.id,fd).then(response=>{
                    if(response.data.validation){
                        this.validate=Object.values(response.data.validation);
                    }else if(response.data.success){
                        this.$swal.fire(
                            {
                                toast:true,
                                position:'top-end',
                                // title: 'Success !',
                                title:response.data.success,
                                icon: 'success',
                                showConfirmButton:false,
                                timer:3000,
                                background:'#060818',
                                titleColor:"#FFF"
                            }
                        );
                        this.$router.push("/admin/all_user");
                    }else{
                        // console.log(response.data.error);
                    }
                });
            }else{

                axios.post('/api/user',fd).then(response=>{
                    if(response.data.validation){
                        this.validate=Object.values(response.data.validation);
                    }else if(response.data.success){
                        this.$swal.fire(
                            {
                                toast:true,
                                position:'top-end',
                                // title: 'Success !',
                                title:response.data.success,
                                icon: 'success',
                                showConfirmButton:false,
                                timer:3000,
                                background:'#060818',
                                titleColor:"#FFF"
                            }
                        );
                        this.$router.push("/admin/all_user");
                    }else{

                    }
                });
            }

        },
        getUserByID(id){
            axios.get("/api/user/"+id+"/edit").then(response=>{
                if(response.data.success){

                }
            });
        }
    },
}
</script>
