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
                        <span class="pro-user-name ms-2">
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
        <!-- end Topbar Start -->


        <!-- start left sidebar -->
        @include('electronics_inventory.sidebar')
        <!-- end left sidebar -->

        <!-- Start Page Content here -->
        <div class="content-page">
            <div class="content">

                <!--  Content-->
                <div class="container-fluid">

                    <div class=" row">

                        <div class="p-4 col-12 bg-white">
                            <div class="d-flex align-items-center justify-content-center" style="">

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between mb-3">

                                        <p class="text-primary">All Categories</p>
                                        <!-- border border-1 border-primary d-flex justify-content-center align-items-center -->
                                        <!-- Button trigger modal -->
                                        <span type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#addProductCategory">
                                            Add Product Category
                                        </span>

                                        <span>
                                            <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product <i class="fa fa-3x fa-plus" style="font-size: 16px;"></i></p>
                                            <!-- <span class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                                                <i class="fa fa-3x fa-plus fs-1"></i>
                                            </span> -->
                                        </span>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr class="text-primary">
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <!-- <th>UPC Code</th> -->
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Desktop</td>
                                                    <!-- <td>124</td> -->
                                                    <td>
                                                        <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                        <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mobile</td>
                                                    <!-- <td>124</td> -->
                                                    <td>
                                                        <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                        <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>radio</td>
                                                    <!-- <td>124</td> -->
                                                    <td>
                                                        <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                        <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <br><br><br>


                                    <!-- <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr class="text-primary">
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Category</th>
                                                    <th>UPC</th>
                                                    <th>EAN</th>
                                                    <th>Price</th>
                                                    <th>Model</th>
                                                    <th>Features</th>
                                                    <th>Resolution</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Computer</td>
                                                    <td>Desktop</td>
                                                    <td>124</td>
                                                    <td>190</td>
                                                    <td>24000/=</td>
                                                    <td>PRO MP223</td>
                                                    <td>Anti-Flicker Technology</td>
                                                    <td>FHD (1920 x 1080)</td>
                                                    <td>The MSI PRO MP223 21.45" 100Hz Full HD Business Monitor Boost your productivity at work with the 21.5-inch Full HD Monitor.</td>
                                                    <td>
                                                        <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                        <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Android</td>
                                                    <td>Desktop</td>
                                                    <td>124</td>
                                                    <td>190</td>
                                                    <td>24000/=</td>
                                                    <td>PRO MP223</td>
                                                    <td>Anti-Flicker Technology</td>
                                                    <td>FHD (1920 x 1080)</td>
                                                    <td>The MSI PRO MP223 21.45" 100Hz Full HD Business Monitor Boost your productivity at work with the 21.5-inch Full HD Monitor.</td>
                                                    <td>
                                                        <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                        <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Radio</td>
                                                    <td>Desktop</td>
                                                    <td>124</td>
                                                    <td>190</td>
                                                    <td>24000/=</td>
                                                    <td>PRO MP223</td>
                                                    <td>Anti-Flicker Technology</td>
                                                    <td>FHD (1920 x 1080)</td>
                                                    <td>The MSI PRO MP223 21.45" 100Hz Full HD Business Monitor Boost your productivity at work with the 21.5-inch Full HD Monitor.</td>
                                                    <td>
                                                        <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                        <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- container-fluid -->

                <!-- Category Modal start -->
                <div class="modal fade" id="addProductCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <!-- <select class="form-select" aria-label="Default select example" name="category_name">
                                        <option selected>Open this select menu</option>
                                        <option value="Computer">Computer</option>
                                        <option value="Android">Android</option>
                                        <option value="Radio">Radio</option>
                                    </select> -->
                                    <input type="text" class="form-control" id="category_name" placeholder="Enter category Name:">
                                    <!-- <input type="text" class="form-control" id="category_name" placeholder="Enter Category Name:"> -->
                                </div>
                                <div class="mb-3">
                                    <label for="upc" class="form-label">Unicode/(UPC)</label>
                                    <input type="text" class="form-control" id="upc" placeholder="Enter UPC Code:">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Modal end -->



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
                                    <div class="mb-3 col-3 text-center">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name">
                                    </div>

                                    <div class="col-3">
                                        <label for="" class="form-label">Category Name</label>
                                        <select class="form-select" aria-label="Default select example" name="category_name">
                                            <option selected>Open this select menu</option>
                                            <option value="Computer">Computer</option>
                                            <option value="Android">Android</option>
                                            <option value="Radio">Radio</option>
                                        </select>
                                    </div>

                                    <!-- <div class="mb-3 col-3 text-center">
                                        <label for="upc" class="form-label">UPC code</label>
                                        <input type="text" class="form-control" id="upc" placeholder="Enter UPC Code" name="upc">
                                    </div> -->

                                    <div class="mb-3 col-3 text-center">
                                        <label for="ean" class="form-label">EAN code</label>
                                        <input type="text" class="form-control" id="ean" placeholder="Enter EAN Code" name="ean">
                                    </div>

                                    <div class="mb-3 col-3 text-center">
                                        <label for="Price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price">
                                    </div>

                                    <div class="mb-3 col-3 text-center">
                                        <label for="model" class="form-label">Model</label>
                                        <input type="text" class="form-control" id="model" placeholder="Enter Model Name" name="model">
                                    </div>

                                    <div class="mb-3 col-3 text-center">
                                        <label for="resolution" class="form-label">Resolution</label>
                                        <input type="text" class="form-control" id="resolution" placeholder="Enter Resolution Name" name="resolution">
                                    </div>

                                    <div class="mb-3 col-3 text-center">
                                        <label for="features" class="form-label">Features</label>
                                        <input type="text" class="form-control" id="features" placeholder="Enter Features Name" name="features">
                                    </div>

                                    <div class="mb-3 col-3 text-center">
                                        <label for="discount" class="form-label">Discount in % (if any)</label>
                                        <input type="text" class="form-control" id="discount" placeholder="00.00%" name="discount">
                                    </div>

                                    <div class="mb-3 col-3 text-center">
                                        <label for="" class="form-label">Discount Expires</label>
                                        <input type="date" class="form-control" id="" placeholder="">
                                    </div>

                                    <div class="mb-3 col-12"> </div>

                                    <div class="col-12 col-md-6 col-lg-6  col-xl-6 mb-3">
                                        <label class="mb-2" for="product_description">Description </label>
                                        <textarea class="form-control" id="product_description" name="product_description" rows="4" placeholder="Enter Product  Description: " required></textarea>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6  col-xl-6 mb-3">
                                        <label class="mb-2" for="additional_information">Additional Information </label>
                                        <textarea class="form-control" id="additional_information" name="additional_information" rows="4" placeholder="Enter Product Additional Description: " required></textarea>
                                    </div>

                                    <!-- variant -->
                                    <div class=" col-12 mb-3 ">
                                        <label class="form-check-label">Add Varient</label>
                                        <div class="row">
                                            <div class=" col-3 mb-3 form-check">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="color_radio" onchange="show_variant_selector('color')">
                                                    <label class="form-check-label" for="color_radio">Color</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="size_radio" onchange="show_variant_selector('size')">
                                                    <label class="form-check-label" for="size_radio">Size</label>
                                                </div>


                                            </div>
                                            <div class=" col-3 mb-3 form-check">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="texture_radio" onchange="show_variant_selector('texture')">
                                                    <label class="form-check-label" for="texture_radio">Resolution</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="material_radio" onchange="show_variant_selector('material')">
                                                    <label class="form-check-label" for="material_radio">Features</label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="style_radio" onchange="show_variant_selector('style')">
                                                    <label class="form-check-label" for="style_radio">Style</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="long_radio" onchange="show_variant_selector('height')">
                                                    <label class="form-check-label" for="long_radio">Height</label> -->
                                            </div>
                                        </div>
                                    </div>
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
                                <!-- size -->
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
                                <div class="col-5 d-none" id="material_selector">
                                    <label class="form-label">Resolution</label>
                                    <select class="form-control varient" multiple="multiple" id="material_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                        <option>Material 1</option>
                                        <option>Material 2</option>
                                        <option>Material 3</option>
                                        <option>Material 4</option>
                                        <option>Material 5</option>
                                    </select>
                                </div>
                                <div class="col-5 d-none" id="style_selector">
                                    <label class="form-label">Features</label>
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
                                </div>




                                <!-- <div class="col-12 d-flex justify-content-center p-2">
                                        <span class="btn btn-soft-success" onclick="mula()">Populate variant table</span>
                                    </div> -->


                                <!-- variant combination table  -->
                                <h3 class="text-left">Table</h3>

                                <div class="row">

                                    <div class="col-12">
                                        <table id="product_table" class="mb-5">
                                            <tr style="border:1px solid black;">
                                            <th>Image</th>
                                                <th>Buying Price</th>
                                                <th>Selling Price</th>
                                                <th>Qunatity</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th>Image</th>
                                                <th>Size</th>
                                                <th>Image</th>
                                                 <td>Red</td>
                                                <th>Buying Price</th>
                                                <th>Selling Price</th>
                                                <th>Qunatity</th>
                                                <th>Discount</th>
                                                <th>Discount Expires</th>
                                                <th>Brand</th>
                                                <th>Actions</th>
                                            </tr>

                                            <tr>
                                            <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>Red</td>
                                                <td>XXL</td>
                                                <td>Red</td>
                                                <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>100</td>
                                                <td>20%</td>
                                                <td>30Traikh</td>
                                                <td>Orange</td>
                                                <td>
                                                    <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                    <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>Red</td>
                                                <td>XXL</td>
                                                <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>100</td>
                                                <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>20%</td>
                                                <td>30Traikh</td>
                                                <td>Orange</td>
                                                <td>
                                                    <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                    <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>Red</td>
                                                <td>XXL</td>
                                                <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>100</td>
                                                <td>20%</td>
                                                <td>30Traikh</td>
                                                <td>Red</td>
                                                <td>29299</td>
                                                <td>65556</td>
                                                <td>Orange</td>
                                                <td>
                                                    <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                                    <a href=""><i class="fas fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>

                                        </table>

                                    </div>
                                </div>

                                <h4 class="text-left mb-3">Electronics Specification </h4>

                                <div class="">
                                    <div class="row mb-5">

                                        <div class="mb-3 col-2 text-center">
                                            <label for="display_size" class="form-label">Display Size</label>
                                        </div>
                                        <div class="mb-3 col-4 text-center">
                                            <input type="text" class="form-control" id="display_size" placeholder="Enter Display Size ">
                                        </div>

                                        <div class="mb-3 col-2 text-center">
                                            <label for="display_type" class="form-label">Display Type</label>
                                        </div>
                                        <div class="mb-3 col-4 text-center">
                                            <input type="text" class="form-control" id="display_type" placeholder="Enter Display Type">
                                        </div>

                                        <div class="mb-3 col-2 text-center">
                                            <label for="panel_type" class="form-label">Panel Type</label>
                                        </div>
                                        <div class="mb-3 col-4 text-center">
                                            <input type="text" class="form-control" id="panel_type" placeholder="Enter Panel Type">
                                        </div>

                                        <div class="mb-3 col-2 text-center">
                                            <label for="resolution" class="form-label">Resolution</label>
                                        </div>
                                        <div class="mb-3 col-4 text-center">
                                            <input type="text" class="form-control" id="resolution" placeholder="Enter Resolution">
                                        </div>


                                        <div class="mb-5"></div>

                                        <div class="mb-3 col-3 text-center">
                                            <label for="pixel_pitch" class="form-label">Pixel(pitch)</label>
                                        </div>

                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="pixel_pitch" placeholder="Enter Pixel Pitch">
                                        </div>


                                        <div class="mb-3 col-3 text-center">
                                            <label for="display_surface" class="form-label">Display Surface</label>
                                        </div>

                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="display_surface" placeholder="Enter Display Surface">
                                        </div>

                                        <div class="mb-3 col-3 text-center">
                                            <label for="aspect_ratio" class="form-label">Aspect Ratio</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="aspect_ratio" placeholder="Enter Aspect Ratio">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="viewing_angle" class="form-label">Viewing Angle</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="viewing_angle" placeholder="Enter Viewing Angle">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="power" class="form-label">Power Type</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="viewing_angle" placeholder="Enter Viewing Angle">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="warranty" class="form-label">Warranty</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="warranty" placeholder="Enter Warranty">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="dimension" class="form-label">Dimension</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="dimension" placeholder="Enter Dimension">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="respones_time" class="form-label">Response Time</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="respones_time" placeholder="Enter Response Time">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="color_gamut" class="form-label">Color Gamut</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="color_gamut" placeholder="Enter Color Gamut">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="refresh_rate" class="form-label">Refresh Rate</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="refresh_rate" placeholder="Enter Refresh Rate">
                                        </div>
                                        <div class="mb-3 col-3 text-center">
                                            <label for="brightness" class="form-label">Brightness</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="brightness" placeholder="Enter Brightness">
                                        </div>

                                        <div class="mb-3 col-3 text-center">
                                            <label for="contrast_ratio" class="form-label">Contrast ratio</label>
                                        </div>
                                        <div class="mb-3 col-8 text-center">
                                            <input type="text" class="form-control" id="contrast_ratio" placeholder="Enter Contrast ratio">
                                        </div>
                                        <!-- <div class="mb-3 col-3 text-center">
                                        <label for="" class="form-label">Name</label>
                                        <select class="form-select" aria-label="Default select example" name="category_name">
                                            <option selected>Open this select menu</option>
                                            <option value="Computer">Computer</option>
                                            <option value="Android">Android</option>
                                            <option value="Radio">Radio</option>
                                        </select>
                                    </div> -->

                                        <!-- <br><br><br><br> -->

                                        <!-- custom input end -->

                                    </div>
                                </div>

                                <h4 class="text-left mb-3">Custom Specification

                                    <span style="font-size: 25px!important;"> <i class="fas fa-plus text-success add_specification"></i></span>
                                </h4>

                                <section class="d-none custom_specification text-center">

                                    <div class="row col_enter">

                                        <!-- custom input start -->
                                        <section class="row">
                                            <div class="mb-3 col-5">
                                                <input type="text" class="form-control mb-2" id="" placeholder="Enter Key" name="key">
                                            </div>

                                            <div class="mb-3 col-5">
                                                <input type="text" class="form-control" id="" placeholder="Enter Value" name="key">
                                            </div>

                                            <!-- <i class="fas fa-check"></i> -->
                                            <div class="mt-1 mb-3 col-2 delete_col">

                                                <span style="font-size: 20px!important;">
                                                    <i class="fas fa-times me-3 text-danger">
                                                    </i>
                                                </span>
                                            </div>

                                        </section>

                                        <!-- custom input end -->
                                    </div>
                                    <span class="btn btn-success add_more_col" style="font-size: 15px!important;">Add More <i class="fas fa-plus text-white"></i></span>
                                </section>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary submit">Submit</button>
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
        <!-- End Page content -->

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
                img.setAttribute('src', 'https://e7.pngegg.com/pngimages/344/673/png-clipart-empty-set-null-set-mathematical-notation-set-notation-mathematics-rim-black-and-white.png');
                img.setAttribute('width', 100);
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
            label.textContent = "Add Image: ";


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

    <script>
        let add_specification = document.querySelector('.add_specification');
        let custom_specification = document.querySelector('.custom_specification');

        add_specification.addEventListener('click', function(event) {

            let y_contain = custom_specification.classList.contains('d-none');
            if (y_contain) {
                custom_specification.classList.remove('d-none');
            } else {
                custom_specification.classList.add('d-none');
            }


        });
    </script>
    <script>
        let add_more_col = document.querySelector('.add_more_col');
        let col_enter = document.querySelector('.col_enter');

        add_more_col.addEventListener('click', function() {


            let section_tag1 = document.createElement('section');
            section_tag1.classList.add('row');

            let div1 = document.createElement('div');
            div1.classList.add('mb-3');
            div1.classList.add('col-5');
            let input1 = document.createElement('input');
            input1.setAttribute('type', 'text');
            input1.classList.add('form-control');
            input1.classList.add('mb-2');
            input1.classList.add('col__1');
            input1.setAttribute('id', '');
            input1.setAttribute('placeholder', 'Enter Key');
            input1.setAttribute('name', 'Key');
            div1.appendChild(input1);
            section_tag1.appendChild(div1);

            let div2 = document.createElement('div');
            div2.classList.add('mb-3');
            div2.classList.add('col-5');
            let input2 = document.createElement('input');
            input2.setAttribute('type', 'text');
            input2.classList.add('form-control');
            input2.classList.add('mb-2');
            input2.classList.add('col__2');
            input2.setAttribute('id', '');
            input2.setAttribute('placeholder', 'Enter Key');
            input2.setAttribute('name', 'Key');
            div2.appendChild(input2);
            section_tag1.appendChild(div2);

            let div3 = document.createElement('div');
            div3.classList.add('mt-1');
            div3.classList.add('mb-3');
            div3.classList.add('col-2');

            let span = document.createElement('span');
            span.style.fontSize = "20px";
            span.style.setProperty('font-size', '20px', 'important');
            // console.log(span);

            let i_tag = document.createElement('i');
            i_tag.classList.add('fas', 'fa-times');
            i_tag.classList.add('me-1');
            i_tag.classList.add('text-danger');
            i_tag.classList.add('delete_col');
            i_tag.setAttribute('onclick', "delete_child(this)");


            // i_tag.addEventListener('click', function(){

            // });

            // console.log(i_tag);

            span.appendChild(i_tag);
            div3.appendChild(span);
            section_tag1.appendChild(div3);
            col_enter.appendChild(section_tag1);
            console.log(section_tag1);
        });

        const delete_child = (selected_tag) => {
            // console.log(selected_tag);
            // console.log(selected_tag.parentNode.parentNode.parentNode);
            let remove_parent = selected_tag.parentNode.parentNode.parentNode;
            remove_parent.remove();
        }
    </script>

</body>

</html>