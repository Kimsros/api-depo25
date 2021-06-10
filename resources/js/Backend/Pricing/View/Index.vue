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
                                            <th class="text-center">Name <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Age <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                            <th>Post</th>
                                            <th>Joining Date <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                            <th>Salary <img src="/backend/assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
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
                                            <td>Evangeline62@yahoo.com</td>
                                            <td>(023) 708-6818 x4267</td>
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
                                                        <img src="/backend/assets/img/avatar/m20.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Favian Maggio DDS </div>
                                                </div>
                                            </td>
                                            <td>Electa_Conroy@hotmail.com</td>
                                            <td>1-076-628-3095 x7154</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>October 11, 2019</td>
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
                                                        <img src="/backend/assets/img/avatar/m21.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Jacey Considine </div>
                                                </div>
                                            </td>
                                            <td>Garry23@yahoo.com</td>
                                            <td>1-016-234-2482</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>January 2, 2016</td>
                                            <td>$6162.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m22.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Kolby Torphy II </div>
                                                </div>
                                            </td>
                                            <td>Phyllis75@hotmail.com</td>
                                            <td>1-345-656-4163 x373</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>August 9, 2017</td>
                                            <td>$4022.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m23.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Mattie Daugherty </div>
                                                </div>
                                            </td>
                                            <td>Jessika.Conroy@yahoo.com</td>
                                            <td>721-969-9795 x09197</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>December 24, 2016</td>
                                            <td>$11588.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m24.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Timothy Littel </div>
                                                </div>
                                            </td>
                                            <td>Nannie_Kling49@hotmail.com</td>
                                            <td>1-251-141-2444 x275</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>February 8, 2019</td>
                                            <td>$14283.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

                                        <tr class="selected">
                                            <td>
                                                <!-- Custom Checkbox -->
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" checked>
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
                                                        <img src="/backend/assets/img/avatar/m19.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Karli Braun </div>
                                                </div>
                                            </td>
                                            <td>Ruthe_Gleichner@gmail.com</td>
                                            <td>697.704.7326</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>October 25, 2016</td>
                                            <td>$13329.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

                                        <tr class="selected">
                                            <td>
                                                <!-- Custom Checkbox -->
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" checked>
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
                                            <td>Evangeline62@yahoo.com</td>
                                            <td>(023) 708-6818 x4267</td>
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
                                                        <img src="/backend/assets/img/avatar/m20.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Favian Maggio DDS </div>
                                                </div>
                                            </td>
                                            <td>Electa_Conroy@hotmail.com</td>
                                            <td>1-076-628-3095 x7154</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>October 11, 2019</td>
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
                                                        <img src="/backend/assets/img/avatar/m21.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Jacey Considine </div>
                                                </div>
                                            </td>
                                            <td>Garry23@yahoo.com</td>
                                            <td>1-016-234-2482</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>January 2, 2016</td>
                                            <td>$6162.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m22.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Kolby Torphy II </div>
                                                </div>
                                            </td>
                                            <td>Phyllis75@hotmail.com</td>
                                            <td>1-345-656-4163 x373</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>August 9, 2017</td>
                                            <td>$4022.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m23.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Timothy Littel </div>
                                                </div>
                                            </td>
                                            <td>Nannie_Kling49@hotmail.com</td>
                                            <td>1-251-141-2444 x275</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>February 8, 2019</td>
                                            <td>$14283.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m2.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Birdie Thiel </div>
                                                </div>
                                            </td>
                                            <td>Kenya.Stanton@yahoo.com</td>
                                            <td>209-225-4857</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>August 7, 2015</td>
                                            <td>$18037.0</td>
                                            <td class="actions">
                                                <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                                    <img src="/backend/assets/img/svg/c-edit.svg" alt="" class="svg">
                                                </span>
                                                <span class="contact-close">
                                                    <img src="/backend/assets/img/svg/c-close.svg" alt="" class="svg">
                                                </span>
                                            </td>
                                        </tr>

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
                                                        <img src="/backend/assets/img/avatar/m19.png" class="img-40" alt="">
                                                    </div>
                                                    <div class="name bold"> Karli Braun </div>
                                                </div>
                                            </td>
                                            <td>Ruthe_Gleichner@gmail.com</td>
                                            <td>697.704.7326</td>
                                            <td>28</td>
                                            <td>UX Researcher</td>
                                            <td>October 25, 2016</td>
                                            <td>$13329.0</td>
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
