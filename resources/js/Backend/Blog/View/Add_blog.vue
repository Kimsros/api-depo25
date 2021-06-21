<template>
  <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Add Blog</h4>

    <!-- Form -->
    <form @submit.prevent="insertData()">
      <div class="row">
        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Title</label>
             <span class="text-danger">*</span>
            <input
              v-model="blog.title"
              type="text"
              class="theme-input-style"
              placeholder="Enter title"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Blog Category</label>
             <span class="text-danger">*</span>
            <select v-model="blog.blog_categories" class="theme-input-style">
              <option
                v-for="(item, idx) in this.category"
                :key="idx"
                :value="item.id"
              >
                {{ item.name }}
              </option>
            </select>
          </div>
          <!-- End Form Group -->

           <!-- Form Group -->
           <div class="form-group">
                <label for="">Thumbnail</label>
                <span class="text-danger">*</span>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" @click="thumbnail()" class="btn btn-primary" style="border-radius: 10px 0px 0px 10px; height: 40px; line-height: 0.5;">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" v-model="blog.thumbnail" name="filepath" class="form-control" type="text"  >
                </div>
                 <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Tag</label>
             <span class="text-danger">*</span>
            <input
              v-model="blog.tag"
              type="text"
              class="theme-input-style"
              placeholder="Enter Tag"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Content</label>
             <span class="text-danger">*</span>
            <ckeditor v-model="blog.content" :config="editorConfig"></ckeditor>
            <!-- <input v-model="blog.content"
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
export default {
  data() {
    return {
      editorConfig: {
        filebrowserImageBrowseUrl: "/api/laravel-filemanager?type=Images",
        filebrowserImageUploadUrl: "/api/laravel-filemanager/upload?type=Images&_token=",
        filebrowserBrowseUrl: "/api/laravel-filemanager?type=Files",
        filebrowserUploadUrl:"/api/laravel-filemanager/upload?type=Files&_token=",
      },
      blog: {
        title: null,
        // slug:null,
        blog_categories: 1,
        thumbnail: null,
        tag: null,
        content: null,
      },
      category: null,
    };
  },
  mounted() {
    axios.get("/api/blog-category").then((response) => {
      this.category = response.data.success.data;
    });
    
  },
  methods: {
    thumbnail(){
      window.open('/api/laravel-filemanager?type=Files?type=file','popup','width=600,height=600');
       
    },

    insertData() {
      if (this.blog.title && this.blog.content) {
        var fd = new FormData();
        fd.append("title", this.blog.title);
        // fd.append("slug",this.blog.slug);
        fd.append("blog_categories", this.blog.blog_categories);
        fd.append("thumbnail", this.blog.thumbnail);
        fd.append("tag", this.blog.tag);
        fd.append("content", this.blog.content);
        axios.post("/api/blog", fd).then((response) => {
          // console.log(response.data);
          if (response.data.success) {
            this.$router.push("/admin/blog");
          } else {
            console.log(response.data.error);
          }
        });
      } else {
        alert("data is empty");
      }
    },

  },

};
</script>