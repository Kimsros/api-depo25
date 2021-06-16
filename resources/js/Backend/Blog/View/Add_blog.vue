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
            <select v-model="blog.blog_categories" class="theme-input-style">
              <option
                v-for="(item, idx) in this.category"
                :key="idx"
                :value="item.id"
              >
                {{ item.name }}
              </option>
            </select>

            <!-- <input v-model="blog.blog_categories"
              type="text"
              class="theme-input-style"
              placeholder="Enter slug"
            /> -->
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Thumbnail</label>
              <input type="text" id="image1" class="form-control" name="image" aria-label="Image" aria-describedby="button-image">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" @click="thumbnail()" type="button" id="image1">Select</button>
              </div>
            <input
              v-model="blog.thumbnail"
              type="text"
              class="theme-input-style"
              placeholder="Enter Thumbnail"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Tag</label>
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
      window.open('/api/laravel-filemanager?type=Images');
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




