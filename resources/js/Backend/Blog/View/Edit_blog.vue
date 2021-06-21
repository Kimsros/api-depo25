<template>
  <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Edit Blog</h4>

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
            <label class="font-14 bold mb-2">Blog Category</label>
             <select v-model="data.blog_categories"  class="theme-input-style">
              <option v-for="(item, idx) in this.category" :key="idx" :value="item.id" >{{item.name}}</option>    
            </select>  
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <!-- <div class="form-group">
            <label class="font-14 bold mb-2">Thumbnail</label>
            <input v-model="data.thumbnail"
              type="text"
              class="theme-input-style"
              placeholder="Enter Thumbnail"
            />
          </div> -->
           <div class="form-group">
                <label for="">Thumbnail</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" @click="thumbnail()" class="btn btn-primary" style="border-radius: 10px 0px 0px 10px; height: 40px; line-height: 0.5;">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" v-model="data.thumbnail" name="filepath" class="form-control" type="text"  >
                </div>
                 <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
          
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Tag</label>

            <input v-model="data.tag"
              type="text"
              class="theme-input-style"
              placeholder="Enter Tag"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Content</label>
             <ckeditor :editor="editor" v-model="data.content" :config="editorConfig"></ckeditor>
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
            editorConfig: {
              filebrowserImageBrowseUrl: "/api/laravel-filemanager?type=Images",
              filebrowserImageUploadUrl: "/api/laravel-filemanager/upload?type=Images&_token=",
              filebrowserBrowseUrl: "/api/laravel-filemanager?type=Files",
              filebrowserUploadUrl:"/api/laravel-filemanager/upload?type=Files&_token=",
            },
            id:this.$route.params.id,
            data:null,
            category:null,
        }
    },
    mounted(){
        this.getData();
         axios
      .get("/api/blog-category")
      .then((response) => {
        this.category = response.data.success.data;
      });
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
            if(this.data.title&&this.data.content){
                var fd={
                    'title':this.data.title,
                    'blog_categories':this.data.blog_categories,
                    'thumbnail':this.data.thumbnail,
                    'tag':this.data.tag,
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

