<?php

include '../panelbody/phpfiles/head.php';


?>



<body>

    <div class="container-fluid">


        <?php
        include '../panelbody/phpfiles/scrollbar.php';
        ?>



        <div class="offset-md-3 col-md-9 pc-content-header">
            <div class="row">
                <div class="col-md-5 col-12 pc-header">
                    <a href=""><i class="ph ph-list" style="padding-left: 7px;"></i></a>
                    <div class="input-search">
                        <div>
                            <i class="ph ph-magnifying-glass"></i>
                            <input type="text" placeholder="Search...">
                            <kbd>ctrl+k</kbd>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 ms-auto">
                    <ul class="ul-unstyled">
                        <li><a href=""><i class="ph ph-circles-four"></i></a></li>

                        <li><a href=""><i class="ph ph-sun"></i></a></li>

                        <li><a href=""><i class="ph ph-gear"></i></a></li>

                        <li><a href=""><i class="ph ph-diamonds-four"></i></a></li>

                        <li class="bell"><a href=""><i class="ph ph-bell"></i><span class="bell-3">3</span></a></li>

                        <li><a href=""><img src=".//img/avatar-2 (1).webp" alt="" width="40px"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12">
                <div class="breadcrumb-div">
                    <ul class="breadcrump">
                        <li><a href="">Home</a><i class="ph ph-caret-right"></i></li>
                        <li><a href="">Widget</a><i class="ph ph-caret-right"></i></li>
                        <li>Statistic</li>
                    </ul>
                </div>
            </div>

            <div class="page-header-tiitle-statistic">
                <h2>
                    Statistics
                </h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="st-card">
                        <div class="d-flex align-items-center st-card-header">
                            <h5>Online Orders</h5>
                            <div class="dropdown"><a href=""><i class="ph ph-dots-three-vertical"></i></a></div>
                        </div>

                        <div class="align-items-center st-card-body">
                            <h3>237<small style="color: #212529bf;">/400</small></h3>
                            <span>36%</span>
                            <img src=".//statistic.img/st-img1.svg" alt="">

                            <div>
                                <p>Delivery Orders</p>
                            </div>
                            <div class="progressbar-st">
                                <div class="progressbar-st-2"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="st-card">
                        <div class="d-flex align-items-center st-card-header">
                            <h5>Pending Orders</h5>
                            <div class="dropdown"><a href=""><i class="ph ph-dots-three-vertical"></i></a></div>
                        </div>

                        <div class="align-items-center st-card-body">
                            <h3>100<small style="color: #212529bf;">/500</small></h3>
                            <span>20%</span>
                            <img src=".//statistic.img/st-img2.svg" alt="">

                            <div>
                                <p>Delivery Orders</p>
                            </div>
                            <div class="progressbar-st-3">
                                <div class="progressbar-st-4"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="st-card">
                        <div class="d-flex align-items-center st-card-header">
                            <h5>Online Orders</h5>
                            <div class="dropdown"><a href=""><i class="ph ph-dots-three-vertical"></i></a></div>
                        </div>

                        <div class="align-items-center st-card-body">
                            <h3>50<small style="color: #212529bf;">/400</small></h3>
                            <span class="span-return-orders">36%</span>
                            <img src=".//statistic.img/st-img3.svg" alt="">

                            <div>
                                <p>Return Orders</p>
                            </div>
                            <div class="progressbar-st-5">
                                <div class="progressbar-st-6"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="st-card">
                        <div class="d-flex align-items-center st-card-header">
                            <h5>Register User</h5>
                            <div class="dropdown"><a href=""><i class="ph ph-dots-three-vertical"></i></a></div>
                        </div>

                        <div class="align-items-center st-card-body">
                            <h3>1205</h3>
                            <span>20%</span>

                            <div>
                                <p>Monthly Increase</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="st-card">
                        <div class="d-flex align-items-center st-card-header">
                            <h5>Daily User</h5>
                            <div class="dropdown"><a href=""><i class="ph ph-dots-three-vertical"></i></a></div>
                        </div>

                        <div class="align-items-center st-card-body">
                            <h3>467</h3>
                            <span style="color: #f4c22b; background: #fef9ea;">10%</span>

                            <div>
                                <p>Weekly Increase</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="st-card">
                        <div class="d-flex align-items-center st-card-header">
                            <h5>Premium User</h5>
                            <div class="dropdown"><a href=""><i class="ph ph-dots-three-vertical"></i></a></div>
                        </div>

                        <div class="align-items-center st-card-body">
                            <h3>346</h3>
                            <span>50%</span>

                            <div>
                                <p>Yearly Increase</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-4">
                    <div class="card total-visitors overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-muted mb-1">Total Visitors</p>
                                    <div class="d-flex align-items-center">
                                        <h4>235</h4>
                                        <span>20%</span>

                                    </div>
                                    <p>More than last Month</p>
                                </div>
                                <div class="col-md-6">
                                    <img src=".//statistic.img/img-visitor.webp" alt="" width="120px"
                                        style="padding-top: 20px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="st-card-8">
                        <div class="st-card-8-box">
                            <div class="d-flex align-items-center justify-content-between">
                                <p><i class="ph ph-circle"></i>Parcel in the way</p>
                                <i class="ph ph-info"></i>
                            </div>

                            <div class="d-flex align-items-center">
                                <h2 style="font-weight: 700;">25<span class="text-muted">/40</span></h2>

                            </div>
                            <p><span class="text-success"><i class="ph ph-caret-up"></i>+15%</span>last month</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-xl-4">
                    <div class="st-card-9-box">
                        <div class="st-card-9-box-header">
                            <p>Product earn</p>
                        </div>
                        <div class="st-card-9-box-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="txt-muted mb-0">Sale Product</p>
                                    <div class="d-flex align-items-end mt-1 p-h4">
                                        <h4>375</h4>
                                        <span>36%</span>

                                    </div>

                                </div>
                                <div class="box-9-cube ">
                                    <i class="ph ph-cube"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 week-card-static">
                    <div class="week-card-body">
                        <img src=".//statistic.img/img-earning-bg.1f656d11.svg" alt="">
                        <div class="week-bg-color">
                            <ul>
                                <li><a href="">Mon</a></li>
                                <li><a href="">Tue</a></li>
                                <li><a href="">Wed</a></li>
                                <li><a href="">Thu</a></li>
                                <li><a href="">Fri</a></li>
                                <li><a href="">Sat</a></li>
                                <li><a href="">Sun</a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-md-6 d-flex" style="margin-bottom: 30px; margin-top: 30px;">
                                <div class="ch-bar-icon">
                                    <i class="ph ph-chart-bar"></i>
                                </div>
                                <div class="flex-grow">
                                    <div class="d-inline-flex">
                                        <h4>984,632</h4>
                                        <span>30%</span>

                                    </div>
                                    <p>Total Earnings</p>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex" style="margin-bottom: 30px; margin-top: 30px;">
                                <div class="ch-bar-icon">
                                    <i class="ph ph-magnifying-glass-plus"></i>
                                </div>
                                <div class="flex-grow">
                                    <div class="d-inline-flex">
                                        <h4>344,624</h4>
                                        <span class="span-2">12%</span>
                                    </div>
                                    <p>Total Earnings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-body-card">
                    <div class="card">
                        <div class="card-body cb-s">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-inline-flex align-items-center">
                                    <i class="ph ph-arrow-down-left"></i>
                                    <p class="text-muted">Income</p>
                                </div>
                                <h4>3.15k</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="margin-top: 15px;">
                        <div class="card-body cb-s-2">
                            <div class="light-able d-flex align-items-center">
                                <div class="flex-shrink">
                                    <img src=".//statistic.img/favicon.single-logo.svg" alt="">
                                </div>

                                <div class="flex-grow-cb">
                                    <h5>Light able</h5>
                                    <p>Light able@developer.io</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="user-group">
                                    <img src="./affiliate.img/avatar-6.webp" alt="">
                                    <img src=".//affiliate.img/avatar-6.webp" alt="">
                                    <img src=".//affiliate.img/avatar-7.webp" alt="">
                                    <img src=".//affiliate.img/avatar-5.webp" alt="">
                                    <span class="plus-two">+2</span>

                                    <span class="user-box-blue"><i class="ph ph-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="card ss-card">
                        <div class="card-body">
                            <h6 style="padding-bottom: 5px;">Languages</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <div class="ss-card progres-bar d-flex">
                                <div class="progressbar-1"></div>
                                <div class="progressbar-2"></div>
                                <div class="progressbar-3"></div>
                                <div class="progressbar-4"></div>

                            </div>
                        </div>

                        <div class="four-p row">
                            <div class="col-md-6 d-flex">
                                <i class=" ph ph-circle" style="color: rgb(29 233 182);"></i>
                                <p>React native</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="ph ph-circle" style="color: rgb(29 233 182);"></i>
                                <p>Figma</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="ph ph-circle" style="color:rgb(244 194 43) ;"></i>
                                <p>Bootstrap 5</p>
                            </div>
                            <div class="col-md-6 d-flex">
                                <i class="ph ph-circle" style="color: rgb(244 66 54);"></i>
                                <p>Shopify</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-md-6 st-card-end-box">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <p>Users</p>
                                <i class="ph ph-arrow-square-up-right" style="font-size: 20px;"></i>
                            </div>
                        </div>
                        <h5>56,908</h5>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <p>Income this month</p>
                                <i class="ph ph-arrow-square-up-right" style="font-size: 20px; color: #f44236;"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <b><i class="ph ph-currency-dollar"></i></b>
                            <h5>3,569</h5><span><i class="ph ph-arrow-down" style="padding-top: 2px;"></i>2.6%</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 end-st-card-end-box">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <p>Releases new version</p><span class="blue-span">350</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink">
                                    <i class="ph ph-tag-chevron"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-inline-flex align-items-center">
                                        <h6><u>2.63.3</u></h6><span class="">Latest</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <footer>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex">
                        <p>Made with ♥ by Team <a href="">Phoenixcoded</a></p>
                    </div>
                    <ul>
                        <li><a href="">Home</a>
                            <a href="">Documentation</a>
                            <a href="">Support</a>
                        </li>
                    </ul>
                </div>
            

             
            </footer>

        </div>

    </div>






    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
        </script>
    <script src=".//js/panel.js"></script>
</body>






</html>