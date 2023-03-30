<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<style>
    content-header {
        background: #F5F5F5 !important;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <!-- left side sidebar -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header border-0">
                        <!-- profile image -->
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">
                                <div class="user-panel mt-3 d-flex">
                                    <div class="image">
                                        <img src="https://fiverr-res.cloudinary.com/t_profile_thumb,q_auto,f_auto/attachments/profile/photo/5a31f87276c270010a0e9e63e9b5fbca-1677047056736/1cc95ebe-d26d-4625-acab-8e77facbe1fb.png"
                                            class="img-circle elevation-2" alt="User Image">
                                    </div>
                                    <div class="info">
                                        <a href="#" class="d-block">Zilleali</a>
                                    </div>
                                </div>
                            </h3>
                        </div>
                        <hr style="background:black;">
                    </div>
                    <div class="card-body">
                        <!-- Inbox response rate -->
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">Inbox response rate</span>
                                <!-- <span>Visitors Over Time</span> -->
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <div class="progress-bar bg-success" style="width: 25%">25%</div>
                            </div>
                            <!-- <span class="text-muted">Since last week</span> -->
                            </p>
                        </div>
                        <!-- Order response time -->
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">Inbox response time</span>
                                <!-- <span>Visitors Over Time</span> -->
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <div class="progress-bar bg-success" style="width: 25%">25%</div>
                            </div>
                            <!-- <span class="text-muted">Since last week</span> -->
                            </p>
                        </div>
                        <!-- Order response rate -->
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">Order response rate</span>
                                <!-- <span>Visitors Over Time</span> -->
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <div class="progress-bar bg-success" style="width: 25%">25%</div>
                            </div>
                            <!-- <span class="text-muted">Since last week</span> -->
                            </p>
                        </div>
                        <!-- Delivered on time -->
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">Delivered on time</span>
                                <!-- <span>Visitors Over Time</span> -->
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <div class="progress-bar bg-success" style="width: 25%">25%</div>
                            </div>
                            <!-- <span class="text-muted">Since last week</span> -->
                            </p>
                        </div>
                        <!-- Order completion -->
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">Order completion</span>
                                <!-- <span>Visitors Over Time</span> -->
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <div class="progress-bar bg-success" style="width: 50%">25%</div>
                            </div>
                            </p>
                        </div>
                        <!-- End Progress bars -->
                        <hr style="background:black;">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">Earned in March</span>
                                <!-- <span>Visitors Over Time</span> -->
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">

                                <span class="text-muted">$20</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Side Bar Secound Box -->
                <div class="card mt-3">
                    <div class="card-header border-0">
                        <!-- profile image -->
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">
                                <div class="user-panel mt-3 d-flex justify-content-between">
                                    <div class="col">
                                        Inbox
                                    </div>
                                    <!-- <div class="col">
                                        <a href="#" class="d-block">Zilleali</a>
                                    </div> -->
                                </div>
                            </h3>
                        </div>
                        <hr style="background:black;">
                    </div>
                    <!--Inbox chat box here 👇  -->

                </div>
                <!-- Side Bar third Box -->
                <div class="card mt-3">
                    <div class="card-header border-0">
                        <!-- profile image -->
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">
                                <div class="user-panel mt-3 d-flex justify-content-between">
                                    <div class="col">
                                        <span>Link your social networks</span>

                                    </div>
                                    <!-- <div class="col">
                                        <a href="#" class="d-block">Zilleali</a>
                                    </div> -->
                                </div>
                            </h3>
                        </div>

                        <hr style="background:black;">
                    </div>
                </div>
            </div>

            <!-- right side bar -->
            <div class="col-lg-8">
                <ol class="breadcrumb">
                    <div class="col-lg-9">
                        <li class="breadcrumb-item"><a href="#">Active orders - 0 ($0)</a></li>
                    </div>
                    <div class="col-lg-1">
                        <div class="dropdown-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Active Order (0)
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Active Order (0)</a></li>
                                <li><a class="dropdown-item" href="#">Completed</a></li>
                                <li><a class="dropdown-item" href="#">Canceled</a></li>
                            </ul>
                        </div>

                    </div>
                    <li class="breadcrumb-item active">

                    </li>
                </ol>
                <br />
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">3 steps to become a top seller on Fiverr</h3>
                            <!-- <a href="javascript:void(0);">View Report</a> -->
                        </div>
                        <div class="d-flex justify-content-left">
                            <p>The key to your success on Fiverr is the brand you build for yourself through your
                                Fiverr reputation. We gathered some tips and resources to help you become a leading
                                seller on Fiverr.</p>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex annoc-flex mb-2">
                            <li style="list-style-type: none;">
                                <strong class="key-title">Get noticed</strong>
                                <div class="key-text">Tap into the power of social media by <b>sharing your Gig,</b> and
                                    <a href="//fiverr.com/stores/promote-your-gig" target="_blank"
                                        rel="noopener noreferrer">get expert help</a> to grow your impact.
                                </div>
                                <div class="btns-container mt-3"><a class="btn btn-outline-primary  co-blue-700"
                                        target="_blank" rel="noopener noreferrer" href="//fiverr.com/zillealibutt">Share
                                        Your Gigs</a></div>
                            </li>
                            <li style="list-style-type: none;"><i class=""></i><strong class="key-title">Get
                                    noticed</strong>
                                <div class="key-text">Tap into the power of social media by <b>sharing your Gig,</b> and
                                    <a href="//fiverr.com/stores/promote-your-gig" target="_blank"
                                        rel="noopener noreferrer">get expert help</a> to grow your impact.
                                </div>
                                <div class="btns-container mt-3"><a class="btn btn-outline-primary  co-blue-700"
                                        target="_blank" rel="noopener noreferrer" href="//fiverr.com/zillealibutt">Share
                                        Your Gigs</a></div>
                            </li>
                            <li style="list-style-type: none;"><i class=""></i><strong class="key-title">Get
                                    noticed</strong>
                                <div class="key-text">Tap into the power of social media by <b>sharing your Gig,</b> and
                                    <a href="//fiverr.com/stores/promote-your-gig" target="_blank"
                                        rel="noopener noreferrer">get expert help</a> to grow your impact.
                                </div>
                                <div class="btns-container mt-3">
                                    <a class="btn btn-outline-primary  co-blue-700" target="_blank"
                                        rel="noopener noreferrer" href="//fiverr.com/zillealibutt">
                                        Share
                                        Your Gigs
                                    </a>
                                </div>
                            </li>

                        </div>
                        <!-- /.d-flex -->
                    </div>
                </div>
                <!-- /.card -->
                <!-- Slider Banner  -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://fiverr-res.cloudinary.com/image/upload/q_auto,f_auto/v1/attachments/generic_asset/asset/b3b590a305e5c447694413c25f500296-1589878514028/Learn-E-Commerce-Copywriting_Carousels_Banner-desktop.png"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Shape up with Illustrator </h5>
                                            <!-- <p>Some representative placeholder content for the first slide.</p> -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://fiverr-res.cloudinary.com/image/upload/q_auto,f_auto/v1/attachments/generic_asset/asset/7bfc6d8989c3a7447d328b3f22d324f5-1589702749869/Learn_Killer_content_Jon_LIHP_Banner-desktop-988x233%20.png"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>All about Adobe PhotoShop</h5>
                                            <!-- <p>Some representative placeholder content for the second slide.</p> -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/generic_asset/asset/6dba41cad081bfd925a68b939337318c-1638893326019/Export%20Desktop%20V4_2x.png"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="text-align-left">The 7 secrets</h5>
                                            <!-- <p>Some representative placeholder content for the third slide.</p> -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://fiverr-res.cloudinary.com/image/upload/q_auto,f_auto/v1/attachments/generic_asset/asset/672cf1b3e2ae9c599f8891ba42d8dabb-1593608888295/Illustrator_Mastery_Desktop_Carousel.png"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Be a scroll stopper</h5>
                                            <!-- <p>Some representative placeholder content for the third slide.</p> -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/generic_asset/asset/6dba41cad081bfd925a68b939337318c-1638893326019/Export%20Desktop%20V4_2x.png"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.d-flex -->
                    </div>
                </div>
                <!-- slider End -->
                <!-- /.card -->


            </div><!-- /.col -->

        </div><!-- /.row -->


        <!-- /.d-flex -->


        <!-- /.card -->


    </div><!-- /.col -->
</div><!-- /.container-fluid -->
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>