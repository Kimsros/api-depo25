<template>
    <div class="row" id="grid">
        <div class="col-xl-4 col-md-6 grid-item">
            <div class="card todo-list mb-30">
                <div class="single-row p-0 border-bottom">
                    <h4 class="font-20 py-3 pl-20 pr-20">Preference List</h4>
                </div>
                <div class="single-row level-urgent border-bottom pt-3 pb-3" v-for="(item, idx) in preference_list" :key="idx" :class="{
                        'single-row level-urgent border-bottom pt-3 pb-3': true,
                        activeBg: currentActive == item.id ? true : false,
                        }"
                        @click="setActiveList(item.id)"
                    >
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex position-relative">
                            <a href="#" class="todo-text">
                                <p class="card-text mb-1">{{item.name}}</p>
                            </a>
                        </div>

                        <div class="d-flex">
                            <div class="assign_to">
                                <img src="backend/assets/img/svg/Info.svg" alt="" class="svg mb-2">
                                <div class="assign-content">
                                    <div class="font-12 text-warning">Back-End</div>
                                    <img src="backend/assets/img/avatar/info-avatar.png" alt="" class="assign-avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-8 grid-item">
            <div class="card todo-list mb-30">
                <div class="single-row p-0 border-bottom">
                    <h4 class="font-20 py-3 pl-20 pr-20">Preferences</h4>
                </div>
                <form action="">
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="justify-content-between align-items-center">
                            <div class="position-relative">
                                <p class="card-text mb-1">About Company</p>
                                <ckeditor></ckeditor>
                            </div>
                            <div class="position-relative">
                                <p class="card-text mb-1">About Us</p>
                                <ckeditor></ckeditor>
                            </div>
                            <div class="position-relative">
                                <p class="card-text mb-1">About Products</p>
                                <ckeditor></ckeditor>
                            </div>

                            <div class="d-flex">
                                <div class="assign_to">
                                    <div class="assign-content">
                                        <div class="font-12 text-warning">Back-End</div>
                                    </div>
                                </div>
                            </div>
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
            preference: [],
            preference_list: [],
            currentActive: 1,
            reRender: false,
        };
    },
    methods:{
        getData(){
            axios.get("/api/preference_mains")
            .then(respone=>{

                this.preference_list = respone.data.success;
            })
        }
    },
    mounted(){
        this.getData();
    }
}
</script>

<style>

</style>