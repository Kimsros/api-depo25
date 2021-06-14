<template>
  <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Add Blog</h4>

    <!-- Form -->
    <form @submit.prevent="updateData()" >
      <div class="row">
        <div class="col-lg-6" v-if="data != null">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Title</label>
            <input v-model="data.title"
              type="text"
              class="theme-input-style"
              placeholder="Enter title"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Slug</label>
            <input v-model="data.slug"
              type="text"
              class="theme-input-style"
              placeholder="Enter slug"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Content</label>
             <ckeditor :editor="editor" v-model="data.content" :config="editorConfig"></ckeditor>
            <!-- <input v-model="data.content"
              type="text"
              class="theme-input-style"
              placeholder="Enter content"
            /> -->
          </div>
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
            id:this.$route.params.id,
            data:null
        }
    },
    mounted(){
        this.getData();
    },
    methods:{
        getData(){
           axios.get("/api/blog/"+this.id+"/edit").then(response=>{
              if(response.data.success){
               this.data=response.data.success;
              }
              else{
                  console.log(response.data.error);
              }
           })
          
        },
        updateData(){
            if(this.data.title&&this.data.slug&&this.data.content){
                var fd={
                    'title':this.data.title,
                    'slug':this.data.slug,
                    'content':this.data.content,
                };
                var url='/api/blog/'+this.id;
                axios.put(url,fd).then(response=>{
                    if(response.data.success){
                        this.$router.push("/admin/blog");
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

