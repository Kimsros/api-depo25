<template>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-element vertical-form ">
                <h3 class="font-20 mb-30">Add Brand</h3>
                    <form @submit.prevent="insertData()">
                        <div class="alert alert-danger alert-dismissible fade show" v-if="validate.length>0">
                            <h4 class="alert-heading"><i class="fa fa-warning"></i> Warning!</h4>
                            <hr>
                            <p class="mb-0" v-for="(validation,idx) in validate" :key="idx">{{validation[0]}}</p>
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Brand Name</label>
                            <input type="text" class="form-control pl-1" v-model="brand.name" placeholder="Brand Name">
                        </div>
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Logo</label>
                            <input type="text" class="form-control pl-1" v-model="brand.logo" placeholder="Brand Logo">
                        </div>
                        <div class="form-row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn long">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
               brand:{
                   name:null,
                   logo:null,
                   validate:[],
               }
        }
    },
    methods:{
        insertData(){
            if(this.brand.name&&this.brand.logo){
                 var fd={
                    'name':this.brand.name,
                    'logo':this.brand.logo
                };
                axios.post('/api/brand',fd).then(response=>{
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
                        this.$router.push("/admin/brand");
                    }else{

                    }

                })
            }else{

                console.log("data is empty");
            }
        },
        


                    // if(response.data.validation){
                    //     this.validate=Object.values(response.data.validation);
                    // }else if(response.data.success){
                    //     this.$swal.fire(
                    //         {
                    //             toast:true,
                    //             position:'top-end',
                    //             // title: 'Success !',
                    //             title:response.data.success,
                    //             icon: 'success',
                    //             showConfirmButton:false,
                    //             timer:3000,
                    //             background:'#060818',
                    //             titleColor:"#FFF"
                    //         }
                    //     );
                    //     this.$router.push("/admin/all_user");
                    // }else{

                    // }
                




    }
}
</script>
