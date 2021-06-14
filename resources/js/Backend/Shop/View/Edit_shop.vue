<template>
  <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Edit data</h4>

    <!-- Form -->
    <form @submit.prevent="updateData()">
      <div class="row">
        <div class="col-lg-6">
          <!-- Form Group -->

          <div class="form-group">
            <label class="font-14 bold mb-2">Logo Compeny</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Logo Compeny"
              v-model="data.logo_company"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Description</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Description"
              v-model="data.description"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Home No</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Home No"
              v-model="data.home_no"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Street No</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Street No"
              v-model="data.street_no"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Village</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Village"
              v-model="data.village"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">District</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter District"
              v-model="data.district"
            />
          </div>
          <!-- End Form Group -->
        </div>

        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Commune</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Commune"
              v-model="data.commune"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Provide</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Provide"
              v-model="data.province"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Phone One</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Phone One"
              v-model="data.phone_one"
            />
          </div>
          <!-- End Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Phone Two</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Phone Two"
              v-model="data.phone_two"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Email</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Email"
              v-model="data.email"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">facebook</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Website"
              v-model="data.facebook"
            />
          </div>
          <div class="form-group">
            <label class="font-14 bold mb-2">WebSite</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Website"
              v-model="data.website"
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
                data:{
                    user_id:'12',
                    logo_company:null,
                    description:null,
                    home_no:null,
                    street_no:null,
                    village:null,
                    district:null,
                    commune:null,
                    province:null,
                    phone_one:null,
                    phone_two:null,
                    email:null,
                    facebook:null,
                    website:null},

                    id:null,
                    data:null,
        }
    },
    mounted(){
        this.id=this.$route.params.id;
        this.getData();
        // console.log();
    },
    methods:{
        getData(){
           axios.get("/api/shop/"+this.id+"/edit").then(response=>{
              if(response.data.success){
               this.data=response.data.success;
              }
              else{
                  console.log(response.data.error);
              }
           })
        },
        updateData(){
            // alert('Hello World');
            if(this.data.logo_company&&this.data.email){
                var fd={
                        'user_id':this.data.user_id,
                        'logo_company':this.data.logo_company,
                        'description':this.data.description,
                        'home_no':this.data.home_no,
                        'street_no':this.data.street_no,
                        'village':this.data.village,
                        'district':this.data.district,
                        'commune':this.data.commune,
                        'province':this.data.province,
                        'phone_one':this.data.phone_one,
                        'phone_two':this.data.phone_two,
                        'email':this.data.email,
                        'facebook':this.data.facebook,
                        'website':this.data.website
                };
                var url='/api/shop/'+this.id;
                axios.put(url,fd).then(response=>{
                    if(response.data.success){
                        this.$router.push("/admin/shop");
                    }else{
                        console.log(response.data.error);
                    }

                })
            }else{
                console.log("data is empty");
            }
        }
    }
}
</script>
