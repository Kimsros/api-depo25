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
                <li><a href="#">
                    <img src="/backend/assets/img/svg/left-angle.svg" alt="" class="svg">
                </a></li>
                <li><a href="#" class="current">
                    <img src="/backend/assets/img/svg/right-angle.svg" alt="" class="svg">
                </a></li>
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
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <!-- End Custom Checkbox -->

                            <!-- Star -->
                            <div class="star">
                                <a href="#"><img src="/backend/assets/img/svg/star.svg" alt="" class="svg"></a>
                            </div>
                            <!-- End Star -->
                        </th>
                        <th class="text-center">Company<img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Home No</th>
                        <th>Street No</th>
                        <th>Village <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>District</th>
                        <th>Commune <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Provide<img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Phone One <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Phone Two<img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Email <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>WebSite <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <!-- Custom Checkbox -->
                            <label class="custom-checkbox">
                                <input type="checkbox">
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
                                    Arden Spencer
                                </div>
                            </div>
                        </td>
                        <td>Evangel</td>
                        <td>(023) </td>
                        <td>28</td>
                        <td>UX Researcher</td>
                        <td>June 20, 2015</td>
                        <td>$26253.0</td>
                        <td>28</td>
                        <td>UX Researcher</td>
                        <td>June 20, 2015</td>
                        <td>$26253.0</td>
                        <td class="actions">
                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                            </span>
                            <span class="contact-close">
                                <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Invoice List Table -->
        </div>
    </div>
</template>
