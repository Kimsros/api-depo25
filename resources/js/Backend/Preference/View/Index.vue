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
                <form @submit.prevent="updateData()">
                    <div class="single-row level-urgent border-bottom pt-3 pb-3" v-for="(item, idx) in preference" :key="idx" >
                        <div class="justify-content-between align-items-center">
                            <div class="position-relative">
                                <p class="card-text mb-1">{{item.key}}</p>
                                <ckeditor v-model="item.value"></ckeditor>
                            </div>
                        </div>
                    </div>
                     <div class="col-4">
                        <button type="submit" class="btn long">Submit</button>
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
            currentActive:1,
            reRender: false,
        };
    },
    methods:{
        getPreference(){
            axios.get("/api/preference_mains")
            .then(respone=>{
                this.preference_list = respone.data.success;
            })
        },
        getPreferenceForm(id=1){
            axios.get("/api/preferences?preference_main_id="+id)
             .then(respone=>{
                
                this.preference = respone.data.success;
            })
        },
        setActiveList(id) {
            this.currentActive = id;
            this.getPreferenceForm(id);
        },
        updateData(){
          
            // this.preference.forEach(element => {
            //     console.log(element);
            // });
            axios.put('/api/preferences/'+1,this.preference).then(response=>{
                console.log(response);
                    if(response.data.success){
                        location.reload();
                        this.$router.push("/admin/preference");
                    }else{
                        console.log(response.data.error);
                    }
                });
        }
    },
    mounted(){
        this.getPreference();
        this.getPreferenceForm();
    }
}
</script>
<style scoped>
.activeBg {
  background: #f15922;
}

</style>