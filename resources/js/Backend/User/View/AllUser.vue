<template>
    <div class="card bg-transparent">
        <!-- Contact Header -->
        <div class="contact-header d-flex align-items-sm-center media flex-column flex-sm-row card_color-bg mb-30">
        <div class="contact-header-left media-body d-flex align-items-center mr-4">
                <!-- Add New Contact Btn -->
                <div class="add-new-contact mr-20">
                    <a href="#" class="btn-circle" data-toggle="modal" data-target="#contactAddModal">
                        <img src="/backend/backend/assets/img/svg/plus_white.svg" alt="" class="svg">
                    </a>
                </div>
                <!-- End Add New Contact Btn -->

                <!-- Search Form -->
                <form @submit.prevent="searchUser()" class="search-form flex-grow">
                    <div class="theme-input-group style--two">
                    <input type="text" v-model="search" class="theme-input-style" placeholder="Search Here" @keyup="SearchUserChange()">

                    <button type="submit"><img src="/backend/assets/img/svg/search-icon.svg" alt=""
                        class="svg"></button>
                    </div>
                </form>
                <!-- End Search Form -->
        </div>

        <div class="contact-header-right d-flex align-items-center justify-content-end mt-3 mt-sm-0">
            <!-- Grid -->
            <div class="grid">
                <a href="contact-grid.html"><img src="/backend/assets/img/svg/grid-icon.svg" alt="" class="svg"></a>
            </div>
            <!-- End Grid -->

            <!-- Starred -->
            <div class="star">
                <a href="#"><img src="/backend/assets/img/svg/star.svg" alt="" class="svg"></a>
            </div>
            <!-- End Starred -->

            <!-- Delete Mail -->
            <div class="delete_mail">
                <a href="javascript:;" @click="MultiDeleteUser()" v-show="btn_multi_delete"><img src="/backend/assets/img/svg/delete.svg" alt="" class="svg"></a>
            </div>

            <!-- End Delete Mail -->

            <!-- Pagination -->
            <div class="pagination style--two d-flex flex-column align-items-center ml-n2">
                <ul class="list-inline d-inline-flex align-items-center">
                <li><a href="javascript:;" @click="getAllUserList(allUserList.prev_page_url)">
                    <img src="/backend/assets/img/svg/left-angle.svg" alt="" class="svg">
                </a></li>
                <li><a href="javascript:;" class="current" @click="getAllUserList(allUserList.next_page_url)">
                    <img src="/backend/assets/img/svg/right-angle.svg" alt="" class="svg">
                </a></li>
                <li>
                    <a href="add_user" class="current">
                        <div class="form-row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn long">Add More</button>
                            </div>
                        </div>
                    </a>
                </li>
                </ul>
            </div>
            <!-- End Pagination -->
        </div>
        </div>
        <!-- End Contact Header -->


        <div class="table-responsive">
            <!-- Invoice List Table -->
            <table class="contact-list-table text-nowrap card_color-bg">
                <thead>
                    <tr>
                        <th>
                            <!-- Custom Checkbox -->
                            <label class="custom-checkbox">
                                <input type="checkbox" v-model="check_all" @change="CheckAllUser()">
                                <span class="checkmark"></span>
                            </label>
                            <!-- End Custom Checkbox -->

                            <!-- Star -->
                            <div class="star">
                                <a href="#"><img src="/backend/assets/img/svg/star.svg" alt="" class="svg"></a>
                            </div>
                            <!-- End Star -->
                        </th>
                        <th class="text-center">Name <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Email</th>
                        <th>Phone</th>
                        <!-- <th>telephone <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th> -->
                        <th>Role</th>
                        <th>Pricing <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Bank<img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, idx) in allUserList.data" :key="idx">
                        <td>
                            <!-- Custom Checkbox -->
                            <label class="custom-checkbox">
                                <input type="checkbox" @change="checkSingleUser($event,item.id)">
                                <span class="checkmark"></span>
                            </label>
                            <!-- End Custom Checkbox -->

                            <!-- Star -->
                            <div class="star">
                                <a href="#"><img src="/backend/assets/img/svg/star.svg" alt="" class="svg"></a>
                            </div>
                            <!-- End Star -->
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="img mr-20">
                                    <img src="/backend/assets/img/avatar/m16.png" class="img-40" alt="">
                                </div>
                                <div class="name bold">
                                    {{item.first_name}} {{item.last_name}}
                                </div>
                            </div>
                        </td>
                        <td>{{item.email}}</td>
                        <td>{{item.telephone}}</td>
                        <!-- <td>28</td> -->
                        <td>{{item.role}}</td>
                        <td>{{item.price_name}}</td>
                        <td>{{item.bank_name}}</td>
                        <td class="actions">
                            <router-link :to="'/admin/add_user/'+item.id">
                                <span >
                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                </span>
                           </router-link>
                            <span class="contact-close" @click="deleteSingleUser(item.id)">
                                <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                            </span>
                        </td>
                    </tr>
                </tbody>
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li  v-for="(item,idx) in allUserList.links" :key="idx" v-bind:class="{'page-item':true,'active':item.active }"><a class="page-link" @click="getAllUserList(item.url)" v-html="item.label"></a></li>

                    </ul>
                </nav> -->
            </table>
            <!-- End Invoice List Table -->

        </div>
        <div style="margin-top:10px" class="col-md-12 text-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li  v-for="(item,idx) in allUserList.links" :key="idx" v-bind:class="{'page-item':true,'active':item.active }"><a class="page-link" @click="getAllUserList(item.url)" v-html="item.label"></a></li>

                    </ul>
                </nav>
            </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            allUserList:[],
            check_all:false,
            ids:[],
            btn_multi_delete:false,
            search:null
        }
    },
    created(){
        this.getAllUserList();
    },
    methods:{
        getAllUserList(url=null){
            if(url!=null){
                axios.get(url).then((response) => {
                    if (response.data.success) {
                        this.allUserList = response.data.success;
                    }
                });
            }else{
                axios.get('/api/user').then((response) => {
                    if (response.data.success) {
                        this.allUserList = response.data.success;
                    }
                });
            }
        },
        deleteSingleUser(id){
            this.$swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            background:'#060818',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete('/api/user/'+id).then(response=>{
                        if(response.data.success){
                            this.$swal.fire(
                                {
                                    toast:true,
                                    position:'top-end',
                                    // title: 'Success !',
                                    title: response.data.success,
                                    icon: 'success',
                                    showConfirmButton:false,
                                    timer:3000,
                                    background:'#060818',
                                    titleColor:"#FFF"
                                }
                            );
                            this.getAllUserList();
                        }
                    });
                }
            });
        },
        CheckAllUser(){
            if(this.check_all){
                this.allUserList.data.forEach(element => {
                    this.ids.push(element.id);
                });
            }else{
                this.ids=[];
            }
            this.CheckBtnDelete();
        },
        checkSingleUser($event,id){
             this.ids = $event.target.checked
            ? [...this.ids, ...[id]]
            : this.ids.filter((element) => element != id);
            this.CheckBtnDelete();
        },
        MultiDeleteUser(){
            this.$swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            background:'#060818',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var id_delete=this.ids.join('-');
                    axios.delete('/api/user/'+id_delete).then(response=>{
                        if(response.data.success){
                            this.$swal.fire(
                                {
                                    toast:true,
                                    position:'top-end',
                                    title: response.data.success,
                                    icon: 'success',
                                    showConfirmButton:false,
                                    timer:3000,
                                    background:'#060818',
                                    titleColor:"#FFF"
                                }
                            );
                            this.getAllUserList();
                            this.check_all=false;
                        }
                    });
                }
            });
            this.CheckBtnDelete();

        },
        CheckBtnDelete(){
            if(this.ids.length>0){
                this.btn_multi_delete=true;
            }else{
                this.btn_multi_delete=false;
                this.check_all=false;
            }
        },
        searchUser(){
            axios.get('/api/user/?search='+this.search).then(response=>{
                if(response.data.success){
                    this.allUserList=response.data.success;
                }
            });
        },
        SearchUserChange(){
            if(this.search==''){
                this.getAllUserList();
            }
        },
    }
}
</script>
