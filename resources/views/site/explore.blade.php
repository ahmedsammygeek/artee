@extends('site.layouts.master')


@section('page_content')

<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-9">


        <ul class="nav nav-tabs Explore-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="Products-tab" data-toggle="tab" data-target="#Products" type="button" role="tab" aria-controls="Products" aria-selected="true"> @lang('site.Products') </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Artistes-tab" data-toggle="tab" data-target="#Artistes" type="button" role="tab" aria-controls="Artistes" aria-selected="false"> @lang('site.Artistes') </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Designes-tab" data-toggle="tab" data-target="#Designes" type="button" role="tab" aria-controls="Designes" aria-selected="true"> @lang('site.Designes') </button>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">

          <!-------------------------- Products Tab --------------------------->
          <div class="tab-pane fade py-3 show active" id="Products" role="tabpanel" aria-labelledby="Products-tab">

            <!-------------------------- Best Selling --------------------------->


            <!-------------------------- Products List --------------------------->
            <div class="section Products-list">
              <div class="title d-flex justify-content-between col-md-12">
                <h5 class="mb-2"> @lang('site.Best Selling Products') </h5>
                <a href="{{ route('products') }}" class="text-sm text-dark"> @lang('site.More') </a>
              </div>                   


              <ul class="users-list clearfix">

                @foreach ($products as $product)
                <li>
                  <div class="product-container">
                    <a href="{{ $product->url() }}" class="image-container" data-image="{{ Storage::url('products/'.$product->front_image) }}">
                      <div class="card-front"><img src="{{ Storage::url('products/'.$product->front_image) }}" /></div>
                      <div class="card-back"><img src="{{ Storage::url('products/'.$product->back_image) }}" /></div>
                    </a>
                    <ul class="color-list">
                      @foreach ($product->variations->unique('color_id') as $prodict_color_variate)
                      <li class="color-item" style="background:{{ $prodict_color_variate->color?->code }}" data-image="img/color-2.jpg"></li>
                      @endforeach

                    </ul>
                  </div>
                  <a class="users-list-name" href="Product-details.html">T-shirt</a>
                  <div class="users-list-date"> {{ $product->price }} <span> @lang('site.SAR')</span></div>
                </li>
                @endforeach




              </ul>

            </div>

          </div>


          <!-------------------------- Artistes Tab --------------------------->
          <div class="tab-pane fade py-3" id="Artistes" role="tabpanel" aria-labelledby="Artistes-tab">

            @foreach ($users as $user)
            <div class="card artest-card">
              <div class="card-body">
                <div class="img-container">
                  <img src="{{ Storage::url('users/'.$user->image) }}" alt="">
                </div>
                <h5 class="card-title text-truncate">{{ $user->name() }}</h5>
                <a class="card-text text-truncate"> @lang('site.Profile') </a>
              </div>
              <div class="card-footer">
                @livewire('site.follow-user' , ['designer' => $user ]  , key($user->id) )
              </div>
            </div>
            
            @endforeach

          </div>


          <div class="tab-pane fade py-3" id="Designes" role="tabpanel" aria-labelledby="Designes-tab">              

            <div class="card card-widget">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">@Jonathan</span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                  <span class="text-muted p-4"> 12 H </span>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="Product-details.html" class="text-center post-image-container">
                  <div class="badge badge-light">200 <span>SAR</span></div>
                  <img class="img-fluid pad" src="img/tshirt-4.jpg" alt="Photo">
                </a>

                <p>I took this photo this morning. What do you guys think?</p>
                <div class="tag-btns-container">
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                  <a href="#" class="btn tag-btn"> Tag link </a>
                </ul>
              </div>

            </div>



          </div>

          <div class="card card-widget">
            <div class="card-header">
              <div class="user-block">
                <img class="img-circle" src="img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">@Jonathan</span>
              </div>
              <!-- /.user-block -->
              <div class="card-tools">
                <span class="text-muted p-4"> 12 H </span>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="Product-details.html" class="text-center post-image-container">
                <div class="badge badge-light">200 <span>SAR</span></div>
                <img class="img-fluid pad" src="img/tshirt-5.jpg" alt="Photo">
              </a>

              <p>I took this photo this morning. What do you guys think?</p>
              <div class="tag-btns-container">
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
                <a href="#" class="btn tag-btn"> Tag link </a>
              </ul>
            </div>

          </div>



        </div>

      </div>
    </div>



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