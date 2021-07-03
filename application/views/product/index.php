<div class="section-header">
    <h1> <?= $title; ?></h1>




</div>



<div class="card">
    <div class="card-header">
        <h4>Daftar Product</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class=" col-md-4">
                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#kategori1" role="tab" aria-controls="kategori1" aria-selected="true">Kategori 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#kategori2" role="tab" aria-controls="profile" aria-selected="false">kategori 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#kategori3" role="tab" aria-controls="contact" aria-selected="false">kategori 3</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-8 mt-3">


                <div class="table-responsive">
                    <ul class=" pagination m-2 mt-2 ml-md-2">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>

                </div>

                <div class="dropdown d-inline ml-3">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Urutkan Berdasarkan
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-dollar-sign"></i> Price: High To low</a>
                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-dollar-sign"></i> Price: Low To High</a>
                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-sort-alpha-down"></i> Name: A to Z</a>
                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-sort-alpha-down"></i> Name: Z to A</a>
                    </div>
                </div>




                <div class="tab-content no-padding" id="myTab2Content">
                    <div class="tab-pane fade show active" id="kategori1" role="tabpanel" aria-labelledby="home-tab4">
                        <div class="row">
                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2-50.png" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i> </a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2-50.png" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2-50.png" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2-50.png" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>



                        </div>





                    </div>



                    <div class="tab-pane fade" id="kategori2" role="tabpanel" aria-labelledby="profile-tab4">
                        <div class="row">
                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i> </a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="tab-pane fade" id="kategori3" role="tabpanel" aria-labelledby="contact-tab4">
                        <div class="row">
                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i> </a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                            <div class="card col-md-3">
                                <img class="img-thumbnail" src="<?= base_url(); ?>assets/img/products/product-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="#">
                                        <h6 class="card-title">Nama Product</h6>
                                    </a>
                                    <p class="card-text">Rp.20.000</p>
                                    <a href="#" class="badge badge-primary">Beli <i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>