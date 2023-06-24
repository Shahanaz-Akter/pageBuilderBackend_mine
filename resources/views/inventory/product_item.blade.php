<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Product Item</title>
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

        @include('reusable_components.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">


                    <div class="  pt-2  bg-white ">
                        <div class="mt-3 ">

                            <form action="{{url('/post_products')}}" method="POST" enctype="multipart/form-data">
                                @csrf                               
                                <div class=" ps-3 pe-3">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h3>Add a Product</h3>
                                        <span class="btn btn-dark">New Product</span>
                                    </div>
                                    <hr style="height:5px; color:blue;">
                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label for="product_description">Product Name </label>
                                            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Product Name">
                                        </div>

                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label class="" for="additional_information">EAN code</label>
                                            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="EAN Code">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label for="additional_information">Buying Price</label>
                                            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Buying Price">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label class="" for="additional_information">Selling Price</label>
                                            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Selling Price">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label class="" for="additional_information">Quantity</label>
                                            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Quantity">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label class="" for="brand">Product Brand:</label>
                                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Product Brand: " required>
                                        </div>

                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label class="" for="unicode">Discount(%):</label>
                                            <input type="text" class="form-control" id="discount_rate" name="discount_rate" placeholder="Enter Product Rate: ">
                                        </div>

                                        <div class="col-12 col-md-3 col-lg-3  col-xl-3  text-uppercase mb-3">
                                            <label class="" for="discount_expiry">Discount Expiry:</label>
                                            <input type="date" class="form-control" id="discount_expiry" name="discount_expiry" placeholder="Enter Product discount Expiry: ">
                                        </div>


                                        <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                                            <label class="mb-2" for="product_description">Description </label>
                                            <textarea class="form-control" id="product_description" name="product_description" rows="4" placeholder="Enter Product product Description: " required></textarea>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                                            <label class="mb-2" for="additional_information">Additional Information </label>
                                            <textarea class="form-control" id="additional_information" name="additional_information" rows="4" placeholder="Enter Product Additional Information: " required></textarea>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase enter_color_div_parent mb-3">
                                            <input type="checkbox" class="" id="color" name="color" required>
                                            <label class="mb-2 me-4 color_text" for="color">Product Color </label><i class="btn btn-success fa-solid fa-plus color_plus_btn" style="font-size: 12px;"></i>
                                            <br>

                                            <div class="enter_color_div_input">
                                                <div class="d-none enter_color_div row">
                                                    <div class="col-6">
                                                        <label for="">Label</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">Qunatity</label>

                                                    </div>
                                                    <div class="col-6" id="col1">
                                                        <input type="text" class="form-control  mb-2" name="col1">
                                                    </div>
                                                    <div class="col-6" id="col2">
                                                        <input type="text" class="form-control col-6 mb-2" name="col2">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                                            <input type="checkbox" class="" id="size" name="size" required>
                                            <label class="mb-2 me-4 size_text" for="size">Product Size </label><i class="btn btn-success fa-solid fa-plus size_plus_btn" style="font-size: 12px;"></i>
                                            <br>
                                            <div class="enter_size_div_input">
                                                <div class="d-none enter_size_div row">
                                                    <div class="col-6">
                                                        <label for="">Label</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">Qunatity</label>
                                                    </div>
                                                    <div class="col-6" id="size1">
                                                        <input type="text" class="form-control  mb-2" name="size2">
                                                    </div>
                                                    <div class="col-6" id="size2">
                                                        <input type="text" class="form-control col-6 mb-2" name="size2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-12 col-lg-12  col-xl-12  text-uppercase mb-3">
                                            <label class="mb-2" for="product_details">Product Details: </label>
                                            <textarea class="form-control" id="product_details" name="product_details" rows="4" placeholder="Enter Product product Details: " required></textarea>
                                        </div>

                                        <div class="img_holder d-flex">
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-6  col-xl-6 mt-2 text-uppercase mb-3" id="image_holder">
                                            <div class="img1">
                                                <label class="mb-2 me-2" for="image">Upload Your Image Here:</label>
                                                <input type="file" class="form-control-file" id="image" name="image" onchange="Img_uploaded(event)">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <script>
                                    let img_holder = document.querySelector('.img_holder');


                                    const Img_uploaded = (event) => {

                                        let img_parent = document.createElement('div');
                                        img_parent.classList.add('img_parent');
                                        img_parent.classList.add('me-2');

                                        let input = event.target;

                                        let new_input = document.createElement('input');
                                        new_input.classList.add('d-none');
                                        new_input.setAttribute('type','file');
                                        new_input.setAttribute('name', 'img_files[]');

                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var imageElement = document.createElement("img");
                                            imageElement.setAttribute('height',100);
                                            imageElement.src = reader.result;
                                            new_input.files=input.files;
                                            img_parent.appendChild(imageElement);
                                            img_parent.appendChild(new_input);
                                            img_holder.appendChild(img_parent);
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }


                                    let item_holder = document.getElementById('item_holder');
                                    let item_name = document.getElementById('item_name');
                                    let buying_price = document.getElementById('buying_price');
                                    let selling_price = document.getElementById('selling_price');
                                    let product_quantity = document.getElementById('product_quantity');
                                    const add_item_feild = () => {


                                        let i1 = item_name.cloneNode(true);
                                        let i2 = buying_price.cloneNode(true);
                                        let i3 = selling_price.cloneNode(true);
                                        let i4 = product_quantity.cloneNode(true);


                                        i1.children[0].value = '';
                                        i2.children[0].value = '';
                                        i3.children[0].value = '';
                                        i4.children[0].value = '';


                                        item_holder.append(i1);
                                        item_holder.append(i2);
                                        item_holder.append(i3);
                                        item_holder.append(i4);

                                    }
                                </script>


                                <div class="row">
                                </div>

                                <div class="d-flex gap-5">
                                    <button class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase plus_btn btn btn-success btn btn-success mb-3" type="submit">Submit</button>
                                </div>
                                
                            </form>

                        </div>

                    </div>



                </div> <!-- container-fluid -->

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

            let input1 = document.getElementById('col1').cloneNode(true);
            input1.children[0].value = "";
            let input2 = document.getElementById('col2').cloneNode(true);
            input2.children[0].value = "";

            enter_color_div.append(input1);
            enter_color_div.append(input2);

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

            let input1 = document.getElementById('size1').cloneNode(true);
            input1.children[0].value = "";
            let input2 = document.getElementById('size2').cloneNode(true);
            input2.children[0].value = "";

            enter_size_div.append(input1);
            enter_size_div.append(input2);

        });
    </script>

</body>

</html>