@extends('Front.layouts.master')
@section('content')
    @include('Front.partials.nav')
    <div class="section mt-10">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="slider-hero">
                        <div class="featured-carousel owl-carousel">
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center"
                                        style="background-image: url(imgs/house1.jpeg);"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center"
                                        style="background-image: url(imgs/house2.jpeg);"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center"
                                        style="background-image: url(imgs/house3.jpeg);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="my-5 text-center">
                            <ul class="thumbnail">
                                <li class="active img">
                                    <a href="#">
                                        <img src="imgs/house1.jpeg" alt="Image" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="imgs/house2.jpeg" alt="Image" class="img-fluid">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="imgs/house3.jpeg" alt="Image" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="descripe">
                        <h4 id="cont"> Aquar Details</h4>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-black"></i>
                        <i class="fa-solid fa-star text-black"></i>
                        <h6>41 review</h6>
                        <h6 class="d-block">Suspendisse quos?Tempus ras iure temporibus?Eu laudantium cubilia sem
                            sem!Repudiandae et!Massa senectus enim minim sociosqu delectus posuere.</h6>
                        <h5 class="fw-bold">
                            Current Cost:
                            <small class="text-warning fw-normal"> 180$</small>
                        </h5>
                        <p class="fw-normal">
                            <span class=" fw-bold">91%</span>
                            of buyers enjoyed this product!
                            <span class=" fw-bold">(87 votes)</span>
                        <p>
                        <h5 class="fw-bold">
                            <i class="fa-solid fa-location-pin"></i>
                            Location:
                            <span class="text-warning fw-normal"> Taiz</span>
                        </h5>
                        <!-- <h4 id="cont"><i class="fas fa-location-pin fa-fw" style="color: var(--fa-navy);"></i>Location</h4> -->
                        <!-- <h4 id="cont"><i class="fas fa-prescription-bottle fa-fw" style="color: var(--fa-navy);"></i>Description</h4> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comments mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-8">
                    <form>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-3 col-lg-2">
                                    <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                                </div>
                                <div class="col-sm-9 col-lg-10">
                                    <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                                    <button type="submit" class="btn btn-sm btn-primary mt-2" style="width: fit-content">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div class="row mt-5">
                        <div class="col-sm-3 col-lg-2">
                            <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                        </div>
                        <div class="col-sm-9 col-lg-10 d-flex flex-column">
                            <h4>Khorasani Abrar</h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita possimus nihil
                                consequuntur deleniti provident reprehenderit tempore voluptatum dolor quas inventore
                                explicabo, architecto culpa dolores, debitis eum impedit voluptas mollitia obcaecati!.
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="text-muted">
                                    <i class="fa fa-calendar"></i>
                                    27/06/2022
                                </div>
                                <div class="text-muted">
                                    <i class="fa fa-calendar"></i>
                                    12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
