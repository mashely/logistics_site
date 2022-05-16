@extends('layouts.main')

@section('content') 

<section class="home-blog-area">
    <div class="container">
      <div class="row justify-content-center section-title-wrap">
        <div class="col-lg-12">
          <h5>Latest Blog Posts</h5>
          <h2>
            Check the latest posts <br />
            from our blog
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-home-blog">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="img/home-post/blog1.jpg" alt="" />
            </div>
            <div class="home-blog-box">
              <a href="#">
                <h4>Some statistics that we want to show</h4>
              </a>
              <p>
                If you are looking at blank cassettes
                on the web lorem ipsum dolor sit amet consectetur adipisicing.
              </p>
              <div class="bottom d-flex">
                <a href="#">13th Mar, 2019</a>
                <a href="#">02 Comments</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-home-blog">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="img/home-post/blog2.jpg" alt="" />
            </div>
            <div class="home-blog-box">
              <a href="#">
                <h4>Some statistics that we want to show</h4>
              </a>
              <p>
                If you are looking at blank cassettes
                on the web lorem ipsum dolor sit amet consectetur adipisicing.
              </p>
              <div class="bottom d-flex">
                <a href="#">13th Mar, 2019</a>
                <a href="#">02 Comments</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-sm-block d-none">
          <div class="single-home-blog">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto invisible" src="img/home-post/blog2.jpg" alt="" />
            </div>
            <img src="img/home-post/blog3.jpg" class="img-fluid large-img" alt="">
            <div class="overlay"></div>
            <div class="home-blog-box border-0">
              <a href="#">
                <h4 class="text-white">Some statistics that we want to show</h4>
              </a>
              <p>
                If you are looking at blank cassettes
                on the web lorem ipsum dolor sit amet consectetur adipisicing.
              </p>
              <div class="bottom d-flex">
                <a href="#">13th Mar, 2019</a>
                <a href="#">02 Comments</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection