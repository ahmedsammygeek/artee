@extends('site.layouts.master')
@section('page_content')

<div class="row">
  <div class="col-md-9">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach ($slides as $slide)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach ($slides as $slide)
        <a href="{{ $slide->link }}" class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
          <img class="d-block w-100" src="{{ Storage::url('slides/'.$slide->image) }}" alt="First slide">
        </a>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-custom-icon" aria-hidden="true">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-custom-icon" aria-hidden="true">
          <i class="fas fa-chevron-right"></i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- /.card -->

    <!-------------------------- Heigh Recomanded Designers --------------------------->
    <div class="section home-users">
      <div class="title col-md-12">
        <h5 class="mb-2"> @lang('site.Heigh Recomanded Designers') </h5>
      </div>

      <ul class="users-list clearfix">

        @foreach ($recomanded_users as $user)
          <li>
          <a href="{{ route('users.show' , $user ) }}">
            <div class="image-container">
              <img src="{{ Storage::url('users/'.$user->image) }}" alt="{{ $user->name() }}">
            </div>
            <div class="users-list-name"> {{ $user->name() }} </div>
          </a>
        </li>
        @endforeach

      
      </ul>

    </div>


    <!-------------------------- Best Selling --------------------------->
    <div class="section best-selling">
      <div class="title d-flex justify-content-between col-md-12">
        <h5 class="mb-2">Best Selling Products</h5>
        <a href="Products.html" class="text-sm text-dark"> more</a>
      </div>

      <ul class="users-list clearfix">
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/photo1.png" alt="User Image">
            </div>
            <div class="users-list-name" href="#">Alexander Pierce</div>
            <div class="users-list-date">200 <span>SAR</span></div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/photo4.jpg" alt="User Image">
            </div>
            <div class="users-list-name" href="#">Norman</div>
            <div class="users-list-date">185 <span>SAR</span></div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/photo3.jpg" alt="User Image">
            </div>
            <div class="users-list-name" href="#">Jane</div>
            <div class="users-list-date">220 <span>SAR</span></div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/photo2.png" alt="User Image">
            </div>
            <div class="users-list-name" href="#">John</div>
            <div class="users-list-date">300 <span>SAR</span></div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/user2-160x160.jpg" alt="User Image">
            </div>
            <div class="users-list-name" href="#">Alexander</div>
            <div class="users-list-date">250 <span>SAR</span></div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/user5-128x128.jpg" alt="User Image">
            </div>
            <div class="users-list-name" href="#">Sarah</div>
            <div class="users-list-date">200 <span>SAR</span></div>
          </a>
        </li>
      </ul>

    </div>


    <!-------------------------- Used Design --------------------------->
    <div class="section used-design">
      <div class="title d-flex justify-content-between col-md-12">
        <h5 class="mb-2">Most used design</h5>
        <a href="Products.html" class="text-sm text-dark"> more</a>
      </div>

      <ul class="users-list clearfix">
        <li>

          <a href="#">
            <div class="image-container">
              <img src="img/design-1.jpg" alt="User Image">
            </div>
          </a>
          <a class="users-list-name" href="#">Alexander Pierce</a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/design-2.png" alt="User Image">
            </div>
          </a>
          <a class="users-list-name" href="#">Norman</a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/design-1.jpg" alt="User Image">
            </div>
          </a>
          <a class="users-list-name" href="#">Jane</a>
        </li>
        <li>
          <a href="#">
            <div class="image-container">
              <img src="img/design-2.png" alt="User Image">
            </div>
          </a>
          <a class="users-list-name" href="#">John</a>
        </li>
      </ul>

    </div>


    <!-------------------------- Products List --------------------------->
    <div class="section Products-list">
      <div class="title d-flex justify-content-between col-md-12">
        <h5 class="mb-2">Best Selling Products</h5>
        <a href="Products.html" class="text-sm text-dark"> more</a>
      </div>

      <ul class="users-list clearfix">

        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/front-1.JPG">

              <div class="card-front"><img src="img/front-1.JPG" /></div>
              <div class="card-back"><img src="img/back-1.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:darkred" data-image="img/color-1.jpg"></li>
              <li class="color-item" style="background:darkblue" data-image="img/color-3.jpg"></li>
              <li class="color-item" style="background:#fcdb86" data-image="img/color-2.jpg"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M5665_560_5.JPG">

              <div class="card-front"><img src="img/M5665_560_5.JPG" /></div>
              <div class="card-back"><img src="img/M5665_560_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:white" data-image="img/M5665_560_5.JPG"></li>
              <li class="color-item" style="background:darkgreen" data-image="img/M5665_Q55_5.JPG"></li>
              <li class="color-item" style="background:pink" data-image="img/M5632_J10_1.JPG"></li>
              <li class="color-item" style="background:darkblue" data-image="img/M5632_R31_6.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M5632_608_5.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M4650_R60_5.JPG">

              <div class="card-front"><img src="img/M4650_R60_5.JPG" /></div>
              <div class="card-back"><img src="img/M4650_R60_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:brown" data-image="img/M4650_R60_5.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M4650_102_5.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M5620_100_5.JPG">

              <div class="card-front"><img src="img/M5620_100_5.JPG" /></div>
              <div class="card-back"><img src="img/M5620_100_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:grey" data-image="img/M5620_100_5.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M5620_102_6.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M4622_Q22_7.JPG">

              <div class="card-front"><img src="img/M4622_Q22_7.JPG" /></div>
              <div class="card-back"><img src="img/M4622_Q22_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:orangered" data-image="img/M4622_Q22_7.JPG"></li>
              <li class="color-item" style="background:white" data-image="img/M4622_129_1.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M4622_102_1.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>

        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/front.png">

              <div class="card-front"><img src="img/front.png" /></div>
              <div class="card-back"><img src="img/back.png" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:darkred" data-image="img/tshirt-2.jpg"></li>
              <li class="color-item" style="background:darkblue" data-image="img/tshirt-3.jpg"></li>
              <li class="color-item" style="background:darkmagenta" data-image="img/tshirt-4.jpg"></li>
              <li class="color-item" style="background:darkgreen" data-image="img/tshirt-5.jpg"></li>
              <li class="color-item" style="background:black" data-image="img/tshirt-1.jpg"></li>
              <li class="color-item" style="background:gray" data-image="img/tshirt-2.jpg"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>

        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/front-1.JPG">

              <div class="card-front"><img src="img/front-1.JPG" /></div>
              <div class="card-back"><img src="img/back-1.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:darkred" data-image="img/color-1.jpg"></li>
              <li class="color-item" style="background:darkblue" data-image="img/color-3.jpg"></li>
              <li class="color-item" style="background:#fcdb86" data-image="img/color-2.jpg"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M5665_560_5.JPG">

              <div class="card-front"><img src="img/M5665_560_5.JPG" /></div>
              <div class="card-back"><img src="img/M5665_560_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:white" data-image="img/M5665_560_5.JPG"></li>
              <li class="color-item" style="background:darkgreen" data-image="img/M5665_Q55_5.JPG"></li>
              <li class="color-item" style="background:pink" data-image="img/M5632_J10_1.JPG"></li>
              <li class="color-item" style="background:darkblue" data-image="img/M5632_R31_6.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M5632_608_5.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M4650_R60_5.JPG">

              <div class="card-front"><img src="img/M4650_R60_5.JPG" /></div>
              <div class="card-back"><img src="img/M4650_R60_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:brown" data-image="img/M4650_R60_5.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M4650_102_5.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M5620_100_5.JPG">

              <div class="card-front"><img src="img/M5620_100_5.JPG" /></div>
              <div class="card-back"><img src="img/M5620_100_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:grey" data-image="img/M5620_100_5.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M5620_102_6.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>
        <li>
          <div class="product-container">
            <a href="Product-details.html" class="image-container" data-image="img/M4622_Q22_7.JPG">

              <div class="card-front"><img src="img/M4622_Q22_7.JPG" /></div>
              <div class="card-back"><img src="img/M4622_Q22_6.JPG" /></div>
            </a>

            <ul class="color-list">
              <li class="color-item" style="background:orangered" data-image="img/M4622_Q22_7.JPG"></li>
              <li class="color-item" style="background:white" data-image="img/M4622_129_1.JPG"></li>
              <li class="color-item" style="background:black" data-image="img/M4622_102_1.JPG"></li>
            </ul>
          </div>
          <a class="users-list-name" href="Product-details.html">T-shirt</a>
          <div class="users-list-date">200 <span>SAR</span></div>
        </li>



      </ul>

    </div>


    <!-------------------------- Posts List --------------------------->
    <div class="card card-widget mb-3">
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


  <div class="card card-widget mb-3">
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
<!-- /.col -->

<div class="col-md-3 right-sidebar">
  <div class="home-sidebar">

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
            <a class="mr-3 heigh-recomanded-img" href="#"> <img src="img/photo1.png"> </a>
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
            <a class="mr-3 heigh-recomanded-img" href="#"> <img src="img/photo3.jpg"> </a>
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
            <a class="mr-3 heigh-recomanded-img" href="#"> <img src="img/photo2.png"> </a>
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

    @include('site.layouts.footer')

  </div>
</div>

</div>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ Storage::url('site_assets/css/slick.css') }}"/>
@endsection


@section('scripts')

<script>

</script>
@endsection