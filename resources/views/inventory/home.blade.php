<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Coedito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->

    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawewsome update version link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- select2 css link -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Plugins css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />


    <style>
        .select2-results__options {
            z-index: 99999 !important;

        }

        .select2-results__option {
            z-index: 99999 !important;

        }

        .select2-selection__choice__display {
            color: black;
        }
    </style>

</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="d-none d-lg-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                <button class="btn input-group-text" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found 22 results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-end">
                                    <a href="index.html" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="noti-scroll" data-simplebar>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fe-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                            Nowak <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="contacts-profile.html" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="auth-logout.html" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="16">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark text-center">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="16">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                <li>
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>

                <li>
                    <h4 class="page-title-main">Dashboard</h4>
                </li>

            </ul>

            <div class="clearfix"></div>

        </div>
        <!-- end Topbar -->

        @include('inventory.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!--  Content-->
                <div class="container-fluid">

                    <div class=" row">


                        <div class="p-4 col-12 bg-white">
                            <div class=" d-flex align-items-center justify-content-center" style="">

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">

                                        <p>All Categories</p>
                                        <!-- Button trigger modal -->
                                        <span type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#addProductCategory">
                                            Add Product Category
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>UPC code</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-center align-items-center">
                                    <span>
                                        <p>Add Product</p>
                                        <span class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                                            <i class="fa fa-3x fa-plus"></i>
                                        </span>
                                    </span>

                                </div>
                            </div>



                        </div>


                    </div>
                </div>
                <!-- container-fluid -->

                <!-- Category Modal -->
                <div class="modal fade" id="addProductCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter Category Name Here">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Unicode/(UPC)</label>
                                    <input type="email" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Modal -->
                <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3 col-3">
                                        <label for="" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Category Name Here">
                                    </div>
                                    <div class="col-3">
                                        <label for="" class="form-label">Category</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="" class="form-label">EAN code</label>
                                        <input type="text" class="form-control" id="" placeholder="Enter Category Name Here">
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="" class="form-label">Discount in % (if any)</label>
                                        <input type="text" class="form-control" id="" placeholder="00.00">
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="" class="form-label">Discount Expires</label>
                                        <input type="date" class="form-control" id="" placeholder="">
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6  col-xl-6   mb-3">
                                        <label class="mb-2" for="product_description">Description </label>
                                        <textarea class="form-control" id="product_description" name="product_description" rows="4" placeholder="Enter Product product Description: " required></textarea>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6  col-xl-6   mb-3">
                                        <label class="mb-2" for="additional_information">Additional Information </label>
                                        <textarea class="form-control" id="additional_information" name="additional_information" rows="4" placeholder="Enter Product Additional Information: " required></textarea>
                                    </div>
                                    <div class=" col-12 mb-3 ">

                                        <label class="form-check-label">Add Varient</label>
                                        <!-- <div class="row">
                                            <div class=" col-3 mb-3 form-check">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="color_radio" onchange="show_variant_selector('color')">
                                                    <label class="form-check-label" for="color_radio">Color</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="size_radio" onchange="show_variant_selector('size')">
                                                    <label class="form-check-label" for="size_radio">Size</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="texture_radio" onchange="show_variant_selector('texture')">
                                                    <label class="form-check-label" for="texture_radio">Texture</label>
                                                </div>

                                            </div>
                                            <div class=" col-3 mb-3 form-check">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="material_radio" onchange="show_variant_selector('material')">
                                                    <label class="form-check-label" for="material_radio">Material</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="style_radio" onchange="show_variant_selector('style')">
                                                    <label class="form-check-label" for="style_radio">Style</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="long_radio" onchange="show_variant_selector('height')">
                                                    <label class="form-check-label" for="long_radio">Height</label>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="col-4 " id="color_selector">
                                        <label class="form-label">Color</label>
                                        <select class="form-control varient" multiple="multiple" id="color_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator(this)">
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>Black</option>
                                            <option>Pink</option>
                                            <option>Yellow</option>
                                            <option>White</option>
                                            <option>Brown</option>
                                        </select>
                                    </div>
                                    <div class="col-4 " id="size_selector">
                                        <label class="form-label">Size</label>
                                        <select class="form-control varient" multiple="multiple" id="size_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                            <option>SM</option>
                                            <option>LG</option>
                                            <option>MD</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                            <option>35</option>
                                            <option>36</option>
                                            <option>38</option>
                                            <option>40</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-4 d-none" id="material_selector">
                                        <label class="form-label">Material</label>
                                        <select class="form-control varient" multiple="multiple" id="material_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                            <option>Material 1</option>
                                            <option>Material 2</option>
                                            <option>Material 3</option>
                                            <option>Material 4</option>
                                            <option>Material 5</option>
                                        </select>
                                    </div> -->
                                    <!-- <div class="col-4 d-none" id="style_selector">
                                        <label class="form-label">Styles</label>
                                        <select class="form-control varient" multiple="multiple" id="styles_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                            <option>Casual</option>
                                            <option>Formal</option>
                                            <option>Business/Professional</option>
                                            <option>Athletic/Sportswear</option>
                                            <option>Athletic/Sportswear</option>
                                            <option>Bohemian</option>
                                            <option>Vintage</option>
                                            <option>Streetwear</option>
                                            <option>Preppy</option>
                                            <option>Romantic</option>
                                            <option>Minimalist</option>
                                            <option>Ethnic/Traditional</option>
                                        </select>
                                    </div>
                                    <div class="col-4 d-none" id="texture_selector">
                                        <label class="form-label">Texture</label>
                                        <select class="form-control varient" multiple="multiple" id="texture_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                            <option>Smooth</option>
                                            <option>Rough</option>
                                            <option>Soft</option>
                                            <option>Slick/Shiny</option>
                                            <option>Crisp</option>
                                        </select>
                                    </div>
                                    <div class="col-4 d-none" id="height_selector">
                                        <label class="form-label">Height</label>
                                        <select class="form-control varient" multiple="multiple" id="height_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                            <option>12'</option>
                                            <option>22'</option>

                                        </select>
                                    </div> -->

                                    <script>
                                        const show_variant_selector = (str) => {
                                            console.log(str);
                                            if (str == 'size') {
                                                let size_selector = document.getElementById('size_selector');
                                                if (size_selector.classList.contains('d-none')) {
                                                    size_selector.classList.remove('d-none');
                                                } else {
                                                    size_selector.classList.add('d-none');
                                                }
                                            }
                                            if (str == 'color') {
                                                let color_selector = document.getElementById('color_selector');
                                                if (color_selector.classList.contains('d-none')) {
                                                    color_selector.classList.remove('d-none');
                                                } else {
                                                    color_selector.classList.add('d-none');
                                                }
                                            }
                                            if (str == 'material') {
                                                let material_selector = document.getElementById('material_selector');
                                                if (material_selector.classList.contains('d-none')) {
                                                    material_selector.classList.remove('d-none');
                                                } else {
                                                    material_selector.classList.add('d-none');
                                                }
                                            }
                                            if (str == 'style') {
                                                let style_selector = document.getElementById('style_selector');
                                                if (style_selector.classList.contains('d-none')) {
                                                    style_selector.classList.remove('d-none');
                                                } else {
                                                    style_selector.classList.add('d-none');
                                                }
                                            }
                                            if (str == 'texture') {
                                                let texture_selector = document.getElementById('texture_selector');
                                                if (texture_selector.classList.contains('d-none')) {
                                                    texture_selector.classList.remove('d-none');
                                                } else {
                                                    texture_selector.classList.add('d-none');
                                                }
                                            }
                                            if (str == 'height') {
                                                let height_selector = document.getElementById('height_selector');
                                                if (height_selector.classList.contains('d-none')) {
                                                    height_selector.classList.remove('d-none');
                                                } else {
                                                    height_selector.classList.add('d-none');
                                                }
                                            }
                                        }

                                        const variant_table_generator = (tag) => {
                                            // Get the selected values
                                            var color_variantValues = $('#color_variant').val();
                                            var size_variantValues = $('#size_variant').val();
                                            var material_variantValues = $('#material_variant').val();

                                            // Print the selected values to the console

                                            // console.log(material_variantValues);
                                            const combinations = [];

                                            for (let i = 0; i < color_variantValues.length; i++) {
                                                for (let j = 0; j < size_variantValues.length; j++) {
                                                    for (let k = 0; k < material_variantValues.length; k++) {
                                                        const combination = [color_variantValues[i], size_variantValues[j], material_variantValues[k]];
                                                        combinations.push(combination);
                                                    }
                                                }
                                            }

                                            console.log(combinations);

                                        }
                                        const mula = () => {
                                            // Get the selected values
                                            var color_variantValues = $('#color_variant').val();
                                            var size_variantValues = $('#size_variant').val();


                                            const combinations = [];

                                            for (let i = 0; i < color_variantValues.length; i++) {
                                                for (let j = 0; j < size_variantValues.length; j++) {

                                                    const combination = [color_variantValues[i], size_variantValues[j]];
                                                    combinations.push(combination);

                                                }
                                            }
                                            console.log(combinations);

                                            let table = document.getElementById('product_table');
                                            combinations.forEach(combination => {
                                                let tr = document.createElement('tr');

                                                combination.forEach(comb => {
                                                    let td = document.createElement('td');
                                                    td.innerHTML = comb;
                                                    tr.appendChild(td);
                                                });
                                                let td1 = document.createElement('td');
                                                let input = document.createElement('input');
                                                input.setAttribute('type', 'file');
                                                let img = document.createElement('img');
                                                img.setAttribute('src','https://e7.pngegg.com/pngimages/344/673/png-clipart-empty-set-null-set-mathematical-notation-set-notation-mathematics-rim-black-and-white.png');
                                                img.setAttribute('width',100   );
                                                input.setAttribute('data-plugins', 'dropify');
                                                input.setAttribute('data-height', '300');
                                                
                                                // <input type="file" data-plugins="dropify" data-height="300" />
                                                let input2 = document.createElement('input');
                                                td1.appendChild(input);
                                                td1.appendChild(img);
                                                tr.appendChild(td1);
                                                let td2 = document.createElement('td');
                                                td2.appendChild(input2);
                                                tr.appendChild(td2);

                                                table.appendChild(tr);
                                            });
                                        }
                                    </script>


                                    <div class="col-12 d-flex justify-content-center p-2">
                                        <span class="btn btn-soft-success" onclick="mula()">Populate variant table</span>
                                    </div>

                                    <h1>Table</h1>
                                    <table id="product_table">
                                        <tr style="border:1px solid black;">
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Image</th>
                                            <th>Buying Price</th>
                                            <th>Selling Price</th>
                                            <th>Qunatity</th>
                                            <th>Discount<br>(if any)</th>
                                            <th>Discount Expires<br>(if any)</th>
                                            <th>Brand</th>
                                            <th>Actions</th>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal end -->

            </div> <!-- content -->


            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Adminto theme by <a href="index.html">Coderthemes</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">

        <div data-simplebar class="h-100">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
            </div>

            <!-- Tab panes -->
            <div class="tab-content pt-0">

                <div class="tab-pane active" id="settings-tab" role="tabpanel">

                    <div class="p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, Layout, etc.
                        </div>

                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-color" value="light" id="light-mode-check" checked />
                            <label class="form-check-label" for="light-mode-check">Light Mode</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-color" value="dark" id="dark-mode-check" />
                            <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                        </div>

                        <!-- Width -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                            <label class="form-check-label" for="fluid-check">Fluid</label>
                        </div>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                            <label class="form-check-label" for="boxed-check">Boxed</label>
                        </div>

                        <!-- Menu positions -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check" checked />
                            <label class="form-check-label" for="fixed-check">Fixed</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable" id="scrollable-check" />
                            <label class="form-check-label" for="scrollable-check">Scrollable</label>
                        </div>

                        <!-- Left Sidebar-->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                            <label class="form-check-label" for="light-check">Light</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked />
                            <label class="form-check-label" for="dark-check">Dark</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                            <label class="form-check-label" for="brand-check">Brand</label>
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                            <label class="form-check-label" for="gradient-check">Gradient</label>
                        </div>

                        <!-- size -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-size" value="default" id="default-size-check" checked />
                            <label class="form-check-label" for="default-size-check">Default</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed" id="condensed-check" />
                            <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact" id="compact-check" />
                            <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                        </div>

                        <!-- User info -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                            <label class="form-check-label" for="sidebaruser-check">Enable</label>
                        </div>


                        <!-- Topbar -->
                        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                            <label class="form-check-label" for="darktopbar-check">Dark</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                            <label class="form-check-label" for="lighttopbar-check">Light</label>
                        </div>

                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                            <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                        </div>

                    </div>

                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- knob plugin -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/libs/morris.js06/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js-->
    <script src="assets/js/app.min.js"></script>

    <!-- select2 js file -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="assets/libs/dropify/js/dropify.min.js"></script>

    <!-- Init js-->
    <script src="assets/js/pages/form-fileuploads.init.js"></script>

    <script>
        $(".varient").select2({
            tags: true,
            tokenSeparators: [',', ' '],
            dropdownParent: $('#addProduct')
        })
    </script>


    <script>
        let parent = document.querySelector('.add_new');
        let plus = document.querySelector('.plus_btn');
        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-6 col-ld-6 col-xl-6  text-uppercase mb-3");

            let label = document.createElement('label');

            label.setAttribute("class", "mb-2");
            label.setAttribute("class", "me-2");
            label.setAttribute("for", "image");
            label.textContent = "Add Image:    ";


            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "image");
            input.setAttribute("name", "image[]");
            input.setAttribute("placeholder", "Add New: ");
            input.setAttribute("required", "");

            div.append(label);
            div.append(input);

            parent.append(div);
            console.log(parent);
        });
    </script>

    <script>
        // color customize input tag
        let color_text = document.querySelector('.color_text');
        let color_plus_btn = document.querySelector('.color_plus_btn');
        let enter_color_div = document.querySelector('.enter_color_div');
        let enter_color_div_input1 = document.querySelector('.enter_color_div_input');


        color_text.addEventListener('click', function() {
            let yes_contain = enter_color_div.classList.contains('d-none');

            if (yes_contain) {
                enter_color_div.classList.remove('d-none');
                enter_color_div_input1.classList.remove('d-none');
            } else {
                enter_color_div.classList.add('d-none');
                enter_color_div_input1.classList.add('d-none');
            }
        });



        let enter_color_div_input = document.querySelector('.enter_color_div_input');

        let color_btn = document.querySelector('.color_btn');
        console.log(color_btn);




        color_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('w-50');
            input.classList.add('mb-2');
            input.setAttribute('id', 'color');
            input.classList.add('me-2');
            input.setAttribute('name', 'color[]');

            enter_color_div_input.append(input);

        });

        // size customize input tag

        let size_text = document.querySelector('.size_text');
        let size_plus_btn = document.querySelector('.size_plus_btn');
        let enter_size_div = document.querySelector('.enter_size_div');
        let enter_size_div_input1 = document.querySelector('.enter_size_div_input');

        size_text.addEventListener('click', function() {
            let yes1_contain = enter_size_div.classList.contains('d-none');
            let enter_size_div_input2 = document.querySelector('.enter_color_div_input');

            if (yes1_contain) {
                enter_size_div.classList.remove('d-none');
                enter_size_div_input1.classList.remove('d-none');
            } else {
                enter_size_div.classList.add('d-none');
                enter_size_div_input1.classList.add('d-none');
            }
        });



        let enter_size_div_input = document.querySelector('.enter_size_div_input');

        let size_btn = document.querySelector('.size_btn');
        console.log(size_btn);

        size_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('w-50');
            input.classList.add('mb-2');
            input.setAttribute('id', 'size');
            input.classList.add('me-2');
            input.setAttribute('name', 'size[]');

            enter_size_div_input.append(input);

        });
    </script>

</body>

</html>