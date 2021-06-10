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
                <form action="#" class="search-form flex-grow">
                    <div class="theme-input-group style--two">
                    <input type="text" class="theme-input-style" placeholder="Search Here">

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
                <a href="#"><img src="/backend/assets/img/svg/delete.svg" alt="" class="svg"></a>
            </div>
            <!-- End Delete Mail -->

            <!-- Pagination -->
            <div class="pagination style--two d-flex flex-column align-items-center ml-n2">
                <ul class="list-inline d-inline-flex align-items-center">
                    <li>
                        <a href="#">
                            <img src="/backend/assets/img/svg/left-angle.svg" alt="" class="svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="current">
                            <img src="/backend/assets/img/svg/right-angle.svg" alt="" class="svg">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="current">
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
        <div class="table-responsive">
            <table class="contact-list-table text-nowrap card_color-bg">
                <thead>
                    <tr>
                        <th>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <div class="star">
                                <a href="#"><img src="/backend/assets/img/svg/star.svg" alt="" class="svg"></a>
                            </div>
                        </th>
                        <th>Name <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr  v-for="(item,idx) in data" :key="idx">
                        <td>
                            <label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span> </label>
                            <div class="star">
                                <a href="#"><img src="/backend/assets/img/svg/star.svg" alt="" class="svg"></a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="img mr-20">
                                    <img src="/backend/assets/img/avatar/m16.png" class="img-40" alt="">
                                </div>
                                <div class="name bold">
                                    {{item.name}}
                                </div>
                            </div>
                        </td>
                        <td> {{item.icon}}</td>
                        <td class="actions">

                            <button type="button" class="btn btn-primary" @click="getId(item.id)" data-toggle="modal"  data-target="#exampleModal">
                                <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                            </button>
                            <span class="contact-close">
                                <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pull-center">
                    <h3>Are You Sure ?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" @click="deleteData()">Yes</button>
                </div>
                </div>
            </div>
        </div>
    </div>


</template>
<script>
export default {
    data(){
        return{
            data:null,
            dataDelete:0
        }
    },
    mounted(){
this.getData();
    },
    methods:
    {
        getId(id){
            this.dataDelete=id;
        },
        getData(){
           axios.get("/api/category").then(response=>{
              if(response.data.success){
                this.data=response.data.success;
              }
           });
        },
        deleteData()
        {
            axios.delete('/api/category/'+this.dataDelete).then(response=>{
                if(response.data.success){
                    exampleModal.click()
                    this.getData();
                }else{
                    console.log(response.data.error);
                }

            })
        }
    }
}
</script>


