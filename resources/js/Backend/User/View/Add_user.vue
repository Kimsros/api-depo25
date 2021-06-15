<template>
   <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Add User</h4>

    <!-- Form -->
    <form @submit.prevent="insertData()">
      <div class="row">
        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">First Name <span class="text-danger"> *</span></label>
            <input
              v-model="pricing.first_name"
              type="text"
              class="theme-input-style"
              placeholder=" Name"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Email <span class="text-danger">*</span></label>
            <input
              v-model="pricing.email"
              type="Number"
              class="theme-input-style"
              placeholder=" Pay Status"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Telephone <span class="text-danger">*</span></label>
            <input
              v-model="pricing.telephone"
              type="number"
              class="theme-input-style"
              placeholder=" Price In Month"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Pruicing</label>
            <select class="theme-input-style" v-model="pricing.pricing" required>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
            </select>
          </div>
          <!-- End Form Group -->
        </div>

        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Last Name <span class="text-danger">*</span></label>
            <input
              v-model="pricing.last_name"
              type="text"
              class="theme-input-style"
              placeholder=" Boost Product"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Password <span class="text-danger">*</span></label>
            <input
              v-model="pricing.password"
              type="Number"
              class="theme-input-style"
              placeholder=" Boost Duration"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Role <span class="text-danger">*</span></label>
            <select class="theme-input-style" v-model="pricing.role">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
            </select>
          </div>
          <!-- End Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Upload product duration</label>
            <input
              v-model="pricing.upload_product_duration"
              type="Number"
              class="theme-input-style"
              placeholder=" Upload Product Duction"
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
               pricing:{
                  first_name:null,
                  last_name:null,
                  email:null,
                  password:null,
                  telephone:null,
                  role_id:null,
                  pricing_id:null,
                  bank_name:null,
                  account_name:null,
                  bank_account:null
               }
        }
    },
    methods:{
        insertData(){
            if( this.pricing.name && 
                this.pricing.pay_status && 
                this.pricing.price_in_month && 
                this.pricing.price_in_year && 
                this.pricing.boost_product && 
                this.pricing.boost_duration && 
                this.pricing.upload_product && 
                this.pricing.upload_product_duration ){
                var Pricing=new FormData();
                Pricing.append("name",this.pricing.name);
                Pricing.append("pay_status",this.pricing.pay_status);
                Pricing.append("price_in_month",this.pricing.price_in_month);
                Pricing.append("price_in_year",this.pricing.price_in_year);
                Pricing.append("boost_product",this.pricing.boost_product);
                Pricing.append("boost_duration",this.pricing.boost_duration);
                Pricing.append("upload_product",this.pricing.upload_product);
                Pricing.append("upload_product_duration",this.pricing.upload_product_duration);
                axios.post('/api/pricing',Pricing).then(response=>{
                    // console.log(response.data);
                    if(response.data.success){
                        this.$router.push("/admin/list_pricing");
                    }else{
                        console.log(response.data.error);
                    }
                })
            }else{

                alert("data is empty");
            }
        }
    }
}
</script>
