@extends ('main')
@section('title', 'Home')
@section('stylesheetIcon')
  <link rel="stylesheetIcon" href="css/stylesheetIcon.css">
@endsection

@section('welcome_page')
@include('partials/_slider')

<br>

<!-- ///////////////////////////////// //////////////////// THE LEFT SIDE-->
<div class="container"> 
  <div class="row">
    <div class="col-md-3">
      <h5 style="text-align: center;">FIND YOUR DREAM CAR</h5>  

      <div class="form-group">
        <label for="exampleFormControlSelect1">select region</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>select region</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">select brand</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>select brand</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">select model</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>select model</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">select fuel type</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>select fuel type</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <a href="" class="btn btn-block btn-info">search</a>
    </div>

    <!-- /////////////////////////////////////////////THE RIGHT SIDE -->

    <div class="col-md-8 offset-md-1"> <!-- RIGHT NAV-->
      <div class="col">
        <h5 style="text-align: center;"> Another filter bar </h5>
      </div>

      <!-- bootstrap card -->

      <div class="card mb-4" >
        <div class="row ">
          <div class="col-md-6" style="background-color: green">
            <img src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=120&w=500" class="card-img" alt="..." style="height: fit-content;">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

<div class="product-listing-content">
              <ul >
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>10,555 km</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>2010</li>
                <li><i class="fa fa-superpowers" aria-hidden="true"></i>153KW</li>
                <li><i class="fa fa-user" aria-hidden="true"></i>5seats</li>
                <li><i class="fa fa-road" aria-hidden="true"></i>Automatic </li>
              </ul>

</div>

              <a href="" class="btn btn-block btn-info">view post</a>
            </div>
          </div>
        </div>
      </div> <!-- END OF bootstrap card -->

      <div class="card mb-4" >
        <div class="row ">
          <div class="col-md-5">
            <img src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=120&w=500" class="card-img" alt="..." style="height: fit-content; margin-left: 2px">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="" class="btn btn-info">view post</a>
            </div>

          </div>
        </div>
      </div> <!-- END OF bootstrap card -->
    </div>
  </div>
</div> <!-- end of container -->

@endsection

