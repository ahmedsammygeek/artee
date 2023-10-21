@extends('site.layouts.master')

@section('page_content')
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-9">

        <div class="title d-flex justify-content-between col-md-12">
          <h5 class="mb-2"> @lang('site.My Followers') </h5>
          <a href="Products.html" class="text-sm text-dark"> more</a>
        </div>



        @foreach ($followers as $follower)
        <div class="card artest-card">
          <div class="card-body">
            <div class="img-container">
              <img src="{{ Storage::url('users/'.$follower->user->image) }}" alt="">
            </div>
            <h5 class="card-title text-truncate"> {{ $follower?->user->name() }} </h5>
            <a href='{{ $follower->user?->url() }}' class="card-text text-truncate"> @lang('site.Profile') </a>
          </div>
          <div class="card-footer">
            @livewire('site.follow-user', ['designer' => $follower->user ] , key($follower->user->id)  )
          </div>
        </div>
        @endforeach        




      </div>
      <!-- /.col -->

      <div class="col-md-3 right-sidebar">


        <!--------- Suggested Designers List --------->
        <div class="section">
          <div class="title col-md-12">
            <h5 class="mb-2">Suggested Designers</h5>
          </div>

          <div class="sugested-designer-list">

            <!-- list-item -->
            <div class="media">
              <div class="mr-3 media-img"> <img src="img/avatar4.png" /> </div>
              <div class="media-body">
                <p class="m-0">Moataz Ibrahim</p>
              </div>
              <div class="ml-auto"> <button type="button" class="btn text-primary">follow </button> </div>
            </div>
            <!-- list-item -->
            <div class="media">
              <div class="mr-3 media-img"> <img src="img/avatar4.png" /> </div>
              <div class="media-body">
                <p class="m-0">Moataz Ibrahim</p>
              </div>
              <div class="ml-auto"> <button type="button" class="btn text-primary">follow </button> </div>
            </div>
            <!-- list-item -->
            <div class="media">
              <div class="mr-3 media-img"> <img src="img/avatar4.png" /> </div>
              <div class="media-body">
                <p class="m-0">Moataz Ibrahim</p>
              </div>
              <div class="ml-auto"> <button type="button" class="btn text-primary">follow </button> </div>
            </div>


          </div>

        </div>


        <!--------- Heigh Recomanded Designs List --------->
        <div class="section">
          <div class="title col-md-12 mt-4">
            <h5 class="mb-2">Heigh Recomanded Designs</h5>
          </div>
          <div class="list-group heigh-recomanded-list">

            <!-- list-item -->
            <div class="list-item ">
              <div class="media">
                <a class="mr-3 heigh-recomanded-img" href="#"> <img src="img/design-1.jpg"> </a>
                <div class="media-body">
                  <a href="#" class="m-0">Design Recomanded Number 1</a>
                  <!-- designer-item -->
                  <a href="#" class="media">
                    <div class="mr-2 media-img"> <img src="img/avatar4.png" /> </div>
                    <div class="media-body">
                      <p class="m-0 text-gray">Moataz Ibrahim</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <!-- list-item -->
            <div class="list-item ">
              <div class="media">
                <a class="mr-3 heigh-recomanded-img" href="#"> <img src="img/design-2.png"> </a>
                <div class="media-body">
                  <a href="#" class="m-0">Design Recomanded Number 2</a>
                  <!-- designer-item -->
                  <a href="#" class="media">
                    <div class="mr-2 media-img"> <img src="img/avatar4.png" /> </div>
                    <div class="media-body">
                      <p class="m-0 text-gray">Moataz Ibrahim</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <!-- list-item -->
            <div class="list-item ">
              <div class="media">
                <a class="mr-3 heigh-recomanded-img" href="#"> <img src="img/design-1.jpg"> </a>
                <div class="media-body">
                  <a href="#" class="m-0">Design Recomanded Number 3</a>
                  <!-- designer-item -->
                  <a href="#" class="media">
                    <div class="mr-2 media-img"> <img src="img/avatar4.png" /> </div>
                    <div class="media-body">
                      <p class="m-0 text-gray">Moataz Ibrahim</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>


        <!--------- Heigh Recomanded Designs List --------->
        <div class="section footer-sidebar">
          <ul class="footer-sidebar-list">
            <li><a href="Contact-us.html">Contact Us</a></li>
            <li><a href="About-us.html">About Us</a></li>
            <li><a href="privacy.html">Privacy & Securty</a></li>
            <li><a href="Terms.html">Terms & Conditions</a></li>
            <li><a href="#" class="fab fa-facebook"></a></li>
            <li><a href="#" class="fab fa-twitter"></a></li>
            <li><a href="#" class="fab fa-instagram"></a></li>
            <li class="col-md-6 mb-2 p-2"><a href="#"> <img class="vatFotter" src="images/VAT.png"/> </a></li>
            <li class="col-md-6 mb-2 p-2"><a href="#"> <img src="images/maroofStamp.png"/> </a></li>
            <li class="col-md-6 p-2"><a href="#"> <img class="vatFotter" src="images/googleplay.png"/> </a></li>
            <li class="col-md-6 p-2"><a href="#"> <img src="images/appstore.png"/> </a></li>
          </ul>
          <p>All Rights Reserved</p>
        </div>

      </div>

    </div>
    <!-- /.row -->


  </div>
  <!-- /.container-fluid -->
</section>
@endsection