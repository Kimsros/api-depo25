<template>
  <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Edit Pricing</h4>

    <!-- Form -->
    <form @submit.prevent="updateData()">
      <div class="row">
        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Name</label>
            <input
              v-model="data.name"
              type="text"
              class="theme-input-style"
              placeholder=" Name"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Pay Statsus</label>
            <input
              v-model="data.pay_status"
              type="Number"
              class="theme-input-style"
              placeholder=" Pay Status"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Price In Month</label>
            <input
              v-model="data.price_in_month"
              type="number"
              class="theme-input-style"
              placeholder=" Price In Month"
            />
          </div>
          <!-- End Form Group -->
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Price In Year</label>
            <input
              v-model="data.price_in_year"
              type="Number"
              class="theme-input-style"
              placeholder=" Price In Year "
            />
          </div>
          <!-- End Form Group -->
        </div>

        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Boost Product</label>
            <input
              v-model="data.boost_product"
              type="Number"
              class="theme-input-style"
              placeholder=" Boost Product"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Boost duration</label>
            <input
              v-model="data.boost_duration"
              type="Number"
              class="theme-input-style"
              placeholder=" Boost Duration"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Upload product</label>
            <input
              v-model="data.upload_product"
              type="Number"
              class="theme-input-style"
              placeholder=" Upload Product"
            />
          </div>
          <!-- End Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Upload product duration</label>
            <input
              v-model="data.upload_product_duration"
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
            data:{
                name:null,
                pay_status:null,
                price_in_month:null,
                price_in_year:null,
                boost_product:null,
                boost_duration:null,
                upload_product:null,
                upload_product_duration:null },
                id:null,
                data:null,
        }
    },
    mounted(){
        this.id=this.$route.params.id;
        this.getData();
    },
    methods:{
        getData(){
           axios.get("/api/pricing/"+this.id+"/edit").then(response=>{
              if(response.data.success){
               this.data=response.data.success;

              }
              else{
                  console.log(response.data.error);
              }

           })
        },
        updateData(){
            if( this.data.name && 
                this.data.pay_status && 
                this.data.price_in_month && 
                this.data.price_in_year && 
                this.data.boost_product && 
                this.data.boost_duration && 
                this.data.upload_product && 
                this.data.upload_product_duration){
                var Pricing={
                  'name':this.data.name,
                  'pay_status':this.data.pay_status,
                  'price_in_month':this.data.price_in_month,
                  'price_in_year':this.data.price_in_year,
                  'boost_product':this.data.boost_product,
                  'boost_duration':this.data.boost_duration,
                  'upload_product':this.data.upload_product,
                  'upload_product_duration':this.data.upload_product_duration
                };
                console.log(Pricing);
                var url='/api/pricing/'+this.id;
                axios.put(url,Pricing).then(response=>{
                    if(response.data.success){
                        this.$router.push("/admin/list_pricing");
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
