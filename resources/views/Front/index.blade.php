@extends('Front.layouts.master')
@section('content')
    <header class="hero"></header>
    @include('Front.partials.nav')
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <aside class="col-sm-6 col-md-3">
                <div class="card rounded-0">
                    <section>
                        <header class="card-header rounded-0">
                            <h6 class="title">Range input</h6>
                        </header>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <label>Min</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="$0">
                            </div>
                            <div class="col-md-6 text-right">
                                <label>Max</label>
                                <input type="number" class="form-control" placeholder="$1,0000">
                            </div>
                        </div>
                    </section>
                    <section>
                        <header class="card-header rounded-0">
                            <h6>Selection</h6>
                        </header>
                        <div class="card-body">
                            <div class="mt-1">
                                <span class="float-end badge badge-light bg-dark round">
                                    52
                                </span>
                                <input type="checkbox" name="" id="Check1">
                                <label for="Check1">Dell</label>
                            </div>
                            <div class="mt-1">
                                <span class="float-end badge badge-light bg-dark round">
                                    52
                                </span>
                                <input type="checkbox" name="" id="Check1">
                                <label for="Check1">HP</label>
                            </div>
                            <div class="mt-1">
                                <span class="float-end badge badge-light bg-dark round">
                                    52
                                </span>
                                <input type="checkbox" name="" id="Check1">
                                <label for="Check1">HP</label>
                            </div>
                        </div>
                    </section>
                </div>
            </aside>
            <section class="col-sm-6 col-md-8">
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div id="carouselExampleIndicators2" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-group shadow overflow-hidden">
                                <div class="col-md-4 works">
                                    <div class="card rounded-0">
                                        <div class="position-relative">
                                            <div class="img-div">
                                                <img class="img-fluid" src="https://via.placeholder.com/350x150"
                                                    alt="">
                                            </div>
                                            <small class="position-absolute end-0 top-100 translate-middle-y me-3 price">
                                                22$
                                            </small>
                                        </div>
                                        <div class="card-body mt-1">
                                            <span class="tag d-inline-block bg-secondary">
                                                بيع
                                            </span>
                                            <h5 class="card-title text-end">أحياء سكنية</h5>
                                            <p class="card-text">
                                                This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is
                                                a little bit longer.
                                            </p>
                                            <div class="d-flex my-3">
                                                <p class="card-text">
                                                    <small class="text-muted">3 mins ago</small>
                                                </p>
                                                <div class="ms-auto">
                                                    <small class="ms-3 ps-3">
                                                        3
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </small>
                                                    <small class="ms-3 ps-3">
                                                        2
                                                        <i class="fas fa-comments text-muted"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 works">
                                    <div class="card rounded-0">
                                        <div class="position-relative">
                                            <div class="img-div">
                                                <img class="img-fluid" src="https://via.placeholder.com/350x150"
                                                    alt="">
                                            </div>
                                            <small class="position-absolute end-0 top-100 translate-middle-y me-3 price">
                                                22$
                                            </small>
                                        </div>
                                        <div class="card-body mt-1">
                                            <span class="tag d-inline-block bg-secondary">
                                                بيع
                                            </span>
                                            <h5 class="card-title text-end">أحياء سكنية</h5>
                                            <p class="card-text">
                                                This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is
                                                a little bit longer.
                                            </p>
                                            <div class="d-flex my-3">
                                                <p class="card-text">
                                                    <small class="text-muted">3 mins ago</small>
                                                </p>
                                                <div class="ms-auto">
                                                    <small class="ms-3 ps-3">
                                                        3
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </small>
                                                    <small class="ms-3 ps-3">
                                                        2
                                                        <i class="fas fa-comments text-muted"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 works">
                                    <div class="card rounded-0">
                                        <div class="position-relative">
                                            <div class="img-div">
                                                <img class="img-fluid" src="https://via.placeholder.com/350x150"
                                                    alt="">
                                            </div>
                                            <small class="position-absolute end-0 top-100 translate-middle-y me-3 price">
                                                22$
                                            </small>
                                        </div>
                                        <div class="card-body mt-1">
                                            <span class="tag d-inline-block bg-secondary">
                                                بيع
                                            </span>
                                            <h5 class="card-title text-end">أحياء سكنية</h5>
                                            <p class="card-text">
                                                This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is
                                                a little bit longer.
                                            </p>
                                            <div class="d-flex my-3">
                                                <p class="card-text">
                                                    <small class="text-muted">3 mins ago</small>
                                                </p>
                                                <div class="ms-auto">
                                                    <small class="ms-3 ps-3">
                                                        3
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </small>
                                                    <small class="ms-3 ps-3">
                                                        2
                                                        <i class="fas fa-comments text-muted"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-group shadow overflow-hidden">
                                <div class="col-md-4 works">
                                    <div class="card rounded-0">
                                        <div class="position-relative">
                                            <div class="img-div">
                                                <img class="img-fluid" src="https://via.placeholder.com/350x150"
                                                    alt="">
                                            </div>
                                            <small class="position-absolute end-0 top-100 translate-middle-y me-3 price">
                                                22$
                                            </small>
                                        </div>
                                        <div class="card-body mt-1">
                                            <span class="tag d-inline-block bg-secondary">
                                                إيجار
                                            </span>
                                            <h5 class="card-title text-end">أحياء سكنية</h5>
                                            <p class="card-text">
                                                This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is
                                                a little bit longer.
                                            </p>
                                            <div class="d-flex my-3">
                                                <p class="card-text">
                                                    <small class="text-muted">3 mins ago</small>
                                                </p>
                                                <div class="ms-auto">
                                                    <small class="ms-3 ps-3">
                                                        3
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </small>
                                                    <small class="ms-3 ps-3">
                                                        2
                                                        <i class="fas fa-comments text-muted"></i>
                                                    </small>
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-primary rounded-0 py-2 px-4" href="#">
                                                View Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 works">
                                    <div class="card rounded-0">
                                        <div class="position-relative">
                                            <div class="img-div">
                                                <img class="img-fluid" src="https://via.placeholder.com/350x150"
                                                    alt="">
                                            </div>
                                            <small class="position-absolute end-0 top-100 translate-middle-y me-3 price">
                                                22$
                                            </small>
                                        </div>
                                        <div class="card-body mt-1">
                                            <span class="tag d-inline-block bg-secondary">
                                                إيجار
                                            </span>
                                            <h5 class="card-title text-end">أحياء سكنية</h5>
                                            <p class="card-text">
                                                This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is
                                                a little bit longer.
                                            </p>
                                            <div class="d-flex my-3">
                                                <p class="card-text">
                                                    <small class="text-muted">3 mins ago</small>
                                                </p>
                                                <div class="ms-auto">
                                                    <small class="ms-3 ps-3">
                                                        3
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </small>
                                                    <small class="ms-3 ps-3">
                                                        2
                                                        <i class="fas fa-comments text-muted"></i>
                                                    </small>
                                                </div>
                                            </div>
                                            <a class="btn btn-sm btn-primary rounded-0 py-2 px-4" href="#">
                                                View Detail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 works">
                                    <div class="card rounded-0">
                                        <div class="position-relative">
                                            <div class="img-div">
                                                <img class="img-fluid" src="https://via.placeholder.com/350x150"
                                                    alt="">
                                            </div>
                                            <small class="position-absolute end-0 top-100 translate-middle-y me-3 price">
                                                22$
                                            </small>
                                        </div>
                                        <div class="card-body mt-1">
                                            <span class="tag d-inline-block bg-secondary">
                                                إيجار
                                            </span>
                                            <h5 class="card-title text-end">أحياء سكنية</h5>
                                            <p class="card-text">
                                                This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is
                                                a little bit longer.
                                            </p>
                                            <div class="d-flex my-3">
                                                <p class="card-text">
                                                    <small class="text-muted">3 mins ago</small>
                                                </p>
                                                <div class="ms-auto">
                                                    <small class="ms-3 ps-3">
                                                        3
                                                        <i class="fas fa-eye text-muted"></i>
                                                    </small>
                                                    <small class="ms-3 ps-3">
                                                        2
                                                        <i class="fas fa-comments text-muted"></i>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
