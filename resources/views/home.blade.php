@extends('layout-komponen.master')

@section('title','Home') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
    /*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/

@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px){
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) and (max-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
.container-fluid{
  width:90%;
  height:100%;
  background-color:rgb(0,0,0,0.5);
  border-radius: 25px;
  /* position:relative;
  visibility: visible;
  display: block; */
}
.container-fluid center a{
    
}
/* .header{
  min-height: 70vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')
} */
.valueNews{
    font-size:8px;
    padding-left:15px;
    text-align:justify
}
.valueNews p{
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  /* truncate to 4 lines */
  -webkit-line-clamp: 4;
}
.img-back {
    background: no-repeat center scroll;
    background-position: rightl;
    width: 1349px;
    height: 500px;
    background-image: url('/img/karaoke.jpg');
    
}
#txt1 {
    text-align: center;
    color: white;
    padding-top: 90px;
}
#container1 {
    display: table;
    margin: 0 auto;
    padding-top: 110px;
}
.nav-link{
    color: white;
}
.tab-content{
    color: white;
}
.img-corousel{
    position:left; 
    width: 80px;
    height: 80px;
    border-radius: 25px;
}
#readless{
    display:none;
}
.carousel-indicators li {
  width: 10px;
  height: 10px;
  border-radius: 100%;
  
}
.carousel-indicators{
    top:125px;
}
.C-background{
    height: 70vh;
  min-height: 250px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#corousel-background{
    z-index: -1;
}
</style>
@endsection

@section('konten')
<div id="corousel-background" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#corousel-background" data-slide-to="0" class="active"></li>
    <li data-target="#corousel-background" data-slide-to="1"></li>
    <li data-target="#corousel-background" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item C-background active" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')">
    
    </div>
    <div class="carousel-item C-background" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')">

    </div>
    <div class="carousel-item C-background" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')">

    </div>
  </div>
</div>
<!-- <div class="header p-5 p-md-5 mb-5">
add konten in here
</div> -->
    <!-- mobile view -->
    <div class="container-fluid" id="mobile-news">
        <div id="carousel-example" class="carousel slide" data-ride="carousel" style="margin-top:-225px;">
            <div class="carousel-inner row w-75 mx-auto py-3 text-white" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4 active">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-8">
                            <div class="valueNews">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="{{ asset('/img/example-logo.jpg')}}" class="img-fluid mx-auto d-block" alt="img1"> -->
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-8">
                            <div class="valueNews text-white">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="{{ asset('/img/example-logo.jpg')}}" class="img-fluid mx-auto d-block" alt="img2"> -->
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                            </div>
                            <div class="col-8">
                                <div class="valueNews text-white">
                                    <h6>Hello world</h6>
                                    <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                    <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                            </div>
                            <div class="col-8">
                                <div class="valueNews text-white">
                                    <h6>Hello world</h6>
                                    <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                    <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-8">
                            <div class="valueNews text-white">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-8">
                            <div class="valueNews text-white">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-8">
                            <div class="valueNews text-white">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-8">
                            <div class="valueNews text-white">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:10px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Dekstop view -->
    <div class="container-fluid" id="dekstop-news" style="margin-top:-250px;padding:20px; ">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-lg-8">
                            <div class="valueNews">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy. hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="{{ url('/news') }}" style="margin-left:20px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                            <!-- <img src="{{ asset('/img/example-logo.jpg')}}" class="img-fluid mx-auto d-block" alt="img1"> -->
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-lg-8">
                            <div class="valueNews">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy. hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:20px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                            <!-- <img src="{{ asset('/img/example-logo.jpg')}}" class="img-fluid mx-auto d-block" alt="img1"> -->
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('/img/example-logo.jpg')}}" class="img-corousel" alt="" style="">         
                        </div>
                        <div class="col-lg-8">
                            <div class="valueNews">
                                <h6>Hello world</h6>
                                <p>hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy. hello its is may news update today maybe you cah see more in here discripte maybe this is first you can read this text and hello world. and good bye boy</p>
                                <p>Desember 20,2021 <a href="#" style="margin-left:20px;color:white">read more &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="{{ asset('/img/example-logo.jpg')}}" class="img-fluid mx-auto d-block" alt="img1"> -->
                </div>
            </div>
            <center>
                <a class="text-white" href="{{ url('/news') }}" class="btn btn-primary" style="text-decoration: none;padding: 0; border: none;background: none; " onclick="myFunction()" id="btnread">Lihat Semua</a>
            </center>
        </div>
    </div><br><br>



@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
var width = screen.width;
        if(width < 500){
            document.getElementById('mobile-news').style.display='block';
            document.getElementById('dekstop-news').style.display='none';
        }else{
            document.getElementById('mobile-news').style.display='none';
            document.getElementById('dekstop-news').style.display='block';
        }
    /*
function myFunction() {
  var readless = document.getElementById("readless");
  var btnread = document.getElementById("btnread");

  if (readless.style.display === "none") {
    btnread.innerHTML = "Lihat Sedikit"; 
    readless.style.display = "inline";
  } else {
    btnread.innerHTML = "Lihat Semua"; 
    readless.style.display = "none";
  }
}
*/
    /*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>
@endsection

