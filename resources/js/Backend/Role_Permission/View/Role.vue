<template>
    <div class="container-fluid">
        <div class="row" id="grid">
            <div class="col-xl-4 col-md-6 grid-item">
                <div class="card todo-list mb-30">
                    <div class="single-row p-0 border-bottom">
                        <di class="row">
                            <div class="col-6">
                                <h4 class="font-20 py-3 pl-20 pr-20">Permission</h4>
                            </div>
                            <div class="col-6">
                                <h4 class="font-20 py-3 pl-20 pr-20"><div class="form-group">
                                    <input v-model="pricing.last_name" type="text" class="theme-input-style" placeholder="add role"/>
                                </div>
                                </h4>

                            </div>
                        </di>

                    </div>
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex position-relative">
                                <a href="#" class="todo-text">
                                    <p class="card-text mb-1">Admin</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex position-relative">
                                <a href="#" class="todo-text">
                                    <p class="card-text mb-1">Seller</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex position-relative">
                                <a href="#" class="todo-text">
                                    <p class="card-text mb-1">Buyer</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-30 mt-40">
                    <a href="#" class="btn long">Add role</a>
                </div>
            </div>

            <div class="col-xl-8 col-md-8 grid-item">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Basic Table</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap card_color-bg dh-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Table</th>
                                        <th>View</th>
                                        <th>Add</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                           <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
               pricing:{
                  name:null,
                  pay_status:null,
                  price_in_month:null,
                  price_in_year:null,
                  boost_product:null,
                  boost_duration:null,
                  upload_product:null,
                  upload_product_duration:null
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
