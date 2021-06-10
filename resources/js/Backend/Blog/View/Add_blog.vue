<template>
  <div class="form-element py-30 multiple-column">
    <h4 class="font-20 mb-20">Add Blog</h4>

    <!-- Form -->
    <form action="#" method="POST">
      <div class="row">
        <div class="col-lg-6">
          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Title</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Title"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">Slug</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter Slug"
            />
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div class="form-group">
            <label class="font-14 bold mb-2">thumbnail</label>
            <input
              type="text"
              class="theme-input-style"
              placeholder="Enter thumbnail"
            />
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
