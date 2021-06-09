<template>
    <div>
        <Header/>
            <router-view></router-view>
        <Footer/>
    </div>
</template>
<script>
import Header from "./Include/Header.vue";
import Footer from "./Include/Footer.vue";
export default {
    components:{
        Header,
        Footer
    }
}
</script>