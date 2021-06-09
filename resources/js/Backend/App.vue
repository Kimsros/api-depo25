<template>
    <div>
        <div class="wrapper">
            <Header />
            <!-- Main Wrapper -->
            <div class="main-wrapper">
                <Sidebar v-if="!reRender"/>
                <router-view></router-view>
            </div>
            <Footer />
        </div>
    </div>
</template>
<script>
import Header from "./Include/Header.vue";
import Footer from "./Include/Footer.vue";
import Sidebar from "./Include/Sidebar.vue";
export default {
    data(){
        return{
            reRender: false
        }
    },
    components: {
        Header,
        Footer,
        Sidebar
    },
    mounted(){
        setTimeout(()=>{
            this.reRender=true;
            this.$nextTick(()=>{
            this.reRender=false;
        });
        },5000);
    }
};
</script>
