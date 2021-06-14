<template>
    <div class="container-fluid">
        <div class="row" id="grid">
            <div class="col-xl-4 col-md-6 grid-item">
                <div class="card todo-list mb-30">
                    <div class="single-row p-0 border-bottom">
                        <h4 class="font-20 py-3 pl-20 pr-20">Permission</h4>
                    </div>
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex position-relative">
                                <a href="#" class="todo-text">
                                    <p class="card-text mb-1">Admin</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex position-relative">
                                <a href="#" class="todo-text">
                                    <p class="card-text mb-1">Seller</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-row level-urgent border-bottom pt-3 pb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex position-relative">
                                <a href="#" class="todo-text">
                                    <p class="card-text mb-1">Buyer</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-30 mt-40">
                    <a href="#" class="btn long">Add role</a>
                </div>
            </div>
            
            <div class="col-xl-8 col-md-8 grid-item">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Basic Table</h4>
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <table class="text-nowrap card_color-bg dh-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Table</th>
                                        <th>View</th>
                                        <th>Add</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                           <div class="d-flex align-items-center">
                                                <label class="custom-checkbox position-relative mr-2">
                                                    <input type="checkbox" id="check1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>