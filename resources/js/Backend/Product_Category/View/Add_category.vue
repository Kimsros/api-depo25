<template>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-element vertical-form ">
                <h3 class="font-20 mb-30">Add Categoey</h3>
                    <form @submit.prevent="insertData()">
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Category Name</label>
                            <input type="text" class="form-control pl-1" v-model="category.name" placeholder="Category Name">
                        </div>
                        <div class="form-group">
                            <label class="font-14 bold mb-2">Icon</label>
                            <input type="text" class="form-control pl-1" v-model="category.icon" placeholder="Icon Category">
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
               category:{
                   name:null,
                   icon:null
               }
        }
    },
    methods:{
        insertData(){
            if(this.category.name&&this.category.icon){
                var fd=new FormData();
                fd.append("name",this.category.name);
                fd.append("icon",this.category.icon);
                axios.post('/api/category',fd).then(response=>{
                    // console.log(response.data);
                    if(response.data.success){
                        this.$router.push("/admin/list_category");
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
