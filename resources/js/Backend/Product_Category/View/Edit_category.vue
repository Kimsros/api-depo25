<template>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-element vertical-form ">
                <h3 class="font-20 mb-30">Edit Categoey</h3>
                    <form @submit.prevent="updateData()">
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Add Category</label>
                            <input type="text" class="form-control pl-1" v-model=" data.name " placeholder="Category Name">
                        </div>
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Icon</label>
                            <input type="text"  class="form-control pl-1" v-model="data.icon" placeholder="Icon Category" >
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
            data:{
                name:null,
                icon:null },
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
           axios.get("/api/category/"+this.id+"/edit").then(response=>{
              if(response.data.success){
               this.data=response.data.success;

              }
              else{
                  console.log(response.data.error);
              }

           })
        },
        updateData(){
            if(this.data.name&&this.data.icon){
                var fd={
                    'name':this.data.name,
                    'icon':this.data.icon
                };
                var url='/api/category/'+this.id;
                axios.put(url,fd).then(response=>{
                    if(response.data.success){
                        this.$router.push("/admin/brand");
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
