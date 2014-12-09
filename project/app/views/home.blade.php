@extends('layout')
@section('content')

<div class="banner section-padding">
    <div class="background">&nbsp;</div>
      <div class="container">
        <div class="banner-text">
          <h1>A Good Doctor or Right Medicine</h1>
          <p>Can save Your <span>life or Close Ones' !!!</span></p>
        </div>
      </div>
    </div>
  

    <section class="section-padding">


<div class="content-grids">
          <div class="wrap">
          <div class="section group">
        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
              <img src="img/grid-img1.png">
          </div>
          <div class="text list_1_of_2">
              <h3>doctors Login</h3>
              <p>Need More info?</p>
              <div class="button"><span><a href="#">View More</a></span></div>
          </div>
        </div>        
        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
              <img src="img/grid-img2.png">
          </div>
          <div class="text list_1_of_2">
              <h3>Our Client Care</h3>
              <p>Need More info?</p>
              <div class="button"><span><a href="#">View More</a></span></div>
             </div>
        </div>        
        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
              <img src="img/grid-img3.png">
          </div>
          <div class="text list_1_of_2">
              <h3>Join Us Now</h3>
              <p>Need More info?</p>
              <div class="button"><span><a href="#">View More</a></span></div>
            </div>
        </div>        
      </div>
        </div>
   </div>


</section>




  <div class="container">
  
      <div class="jumbotron hb">
        <h1><span class="grey">WELCOME TO</span> Doctors Finder</h1>
        <p>Here You will find Everything about Health related issue.</p>
        <p id="demo"></p>
      </div>
    
  </div>



            <div id="about" class="about">
        <div class="container">
          <!---- About-grids ---->
          <div class="about-grids">
            <div class="col-md-4">
              <div class="about-grid">
                <img src="images/img1.jpg" title="name" />
                <span class="t-icon1"> </span>
                <div class="about-grid-info text-centerh">
                  <h3><a href="#">Search Doctors </a></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="about-grid n-about-grid n-about-grid1">
                <img src="images/img2.jpg" title="name" />
                <span class="t-icon1"> </span>
                <div class="about-grid-info text-centerh">
                  <h3><a href="#">Search Hospitals</a></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="about-grid n-about-grid n-about-grid2">
                <img src="images/img3.jpg" title="name" />
                <span class="t-icon2"> </span>
                <div class="about-grid-info text-centerh">
                  <h3><a href="#">Search Drugs</a></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <!---- About-grids ---->
        </div>
        
      </div>
    

            <div class="quote_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h2><em>"</em></h2>
                            <p><span><em>"</em></span> When you are young and healthy, it never occurs to you that in a single second your whole life could change.<span><em>"</em></span></p>
                            <p>- Anonim Nano -</p>
                        </div>
                    </div>
                </div>
            </div>










  
<div id="services" class="services">
        <div class="container">
          <div class="header services-header text-centerh">
            <h2>our services</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          </div>
 <div id="owl-demo" class="owl-carousel owl-theme ">
  <div class="item">

            <div class="service-grids">
            <div class="">
              <div class="service-grid text-centerh">
                <a href="#"><span class="s1-icon"> </span></a>
                <h3><a href="#">Heart problem</a></h3>
              </div>
            </div>
            </div>


  </div>
   <div class="item">

          <div class="service-grids">
              <div class="service-grid text-centerh">
                <a href="#"><span class="s2-icon"> </span></a>
                <h3><a href="#">brain problem</a></h3>
              </div>
            </div>
   </div>
  
<div class="item">

          <div class="service-grids">
              <div class="service-grid text-centerh">
                <a href="#"><span class="s3-icon"> </span></a>
                <h3><a href="#">brain problem</a></h3>
              </div>
            </div>
   </div>
   <div class="item">

          <div class="service-grids">
              <div class="service-grid text-centerh">
                <a href="#"><span class="s4-icon"> </span></a>
                <h3><a href="#">brain problem</a></h3>
              </div>
            </div>
   </div>
  
 
</div>
</div>





</div>
 

<div class="container">
        <section class="section-padding">
            <div class="jumbotron hb">
                <h1><span class="grey">You can Find Your Doctor BY</span> Simple Category</h1>
            </div>
        </section>
    </div>

<div class="container section-padding">

    <div class="row ">

          
                <div class="col-md-3 ">
                    
        <table class="table ">
         <thead>
           <tr>
             <th class="ctg">

                <h3>BY CATEGORY</h3>
                    <h1><i class="glyphicon glyphicon-align-center"></i></h1>
             </th>
           </tr>
         </thead>
         <tbody>
          
 @foreach($categories as $category)
       <tr class="ctg">
 
             <td >
     <a href="{{ action('myController@searchDoctorsWithCategory', $category->id) }}">{{$category->category_name}}</a></td>
     
           </tr>
 
         
      @endforeach
</tbody>

       </table>
                </div>

                <div class="col-md-3 ">
                    
        <table class="table ">
         <thead>
           <tr>
             <th class="ctg">

                <h3>BY AREA</h3>
                    <h1><i class="glyphicon glyphicon-align-center"></i></h1>
             </th>
           </tr>
         </thead>
         <tbody>
           @foreach($areas as $area)
           <tr class="ctg">
 
             <td > <a href="{{ action('myController@searchDoctorsWithArea', $area->id) }}">{{$area->area_name}}</a> </td>

           </tr>
              @endforeach
           
         </tbody>
       </table>
                </div>
                <div class="col-md-6 ">
                    
        
            
                </div>
                </div>
            </div>

            <script type="text/javascript">




            $(function() {
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop != 0)
            $('#nav').stop().animate({'opacity':'0'},400);
        else   
            $('#nav').stop().animate({'opacity':'1'},400);
    });
     
    $('#nav').hover(
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('#nav').stop().animate({'opacity':'1'},400);
            }
        },
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('#nav').stop().animate({'opacity':'0'},400);
            }
        }
    );
});</script>
            

            <script type="text/javascript">

$(document).ready(function() {
 
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
     
      itemsCustom : [
       [0, 1],
        [450, 2],
        [600, 3],
        [700, 4],
        [1000, 4],
        [1200, 4],
        [1400, 5],
        [1600, 5]
      ],
      autoPlay : true,
    stopOnHover : true,
      navigation : false

 
  });

 
});

            </script>
            





@stop