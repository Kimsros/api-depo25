<template>
   <div>
       <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

     <Header/>

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
        <Sidebar/>
         <!-- End Sidebar -->

         <!-- Main Content -->
         <div class="main-content">
            <router-view></router-view>
         </div>
         <!-- End Main Content -->
      </div>
      <!-- End Main Wrapper -->

        <Footer/>
   </div>
   </div>
</template>

<script>
import Header from "./Include/Header.vue";
import Footer from "./Include/Footer.vue";
import Sidebar from "./Include/Sidebar.vue";
export default {
  name: "App",
  data() {
    return {
      reRender: false,
    };
  },
  components: {
    Header,
    Footer,
    Sidebar,
  },
  mounted() {
    setTimeout(() => {
      let fileName = [
        "/backend/assets/js/jquery.min.js",
        "/backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js",
        "/backend/assets/js/script.js",
      ];
      fileName.forEach((element) => {
        let el = document.querySelector('script[src="' + element + '"]');
        if (!el) {
          let scripts = document.createElement("script");
          scripts.src = element;
          scripts.type = "text/javascript";
          document.body.appendChild(scripts);
        }
      });
      this.reRender = true;
      this.$nextTick(() => {});
      this.reRender = false;
    }, 50);
  },
};
</script>
