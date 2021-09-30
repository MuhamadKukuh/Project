@extends('layouts.main')
@section('nav')
<link rel="stylesheet" href="css/style.css">
<div class="body" style="background-color: #b8f3ff">
    <div class="container  rounded mt-3 " style="background-color: #7ee9ff">
        <center>
         <img src="https://avatarfiles.alphacoders.com/882/thumb-88230.png" alt="" class="rounded-circle mt-3" style="max-width: 450px; max-height: 350px;">
         <h1 class="container text-white" style="font-family: Comic Sans MS">{{$nama}}</h1>
        </center>
        <center>
        <p class="text-white" style="font-family: Comic Sans MS">
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum iste maxime saepe aliquam ut eius itaque deserunt nam labore veniam officiis nobis unde, optio temporibus, quia nulla inventore cum. Quia saepe, doloremque ad ipsam, magni unde, cupiditate tempore non modi optio a nisi obcaecati? Saepe odio aperiam, neque iste, deleniti, esse sit doloremque veritatis in accusantium omnis illum. Cumque amet culpa ducimus unde officiis rerum obcaecati ad aliquid maxime sapiente similique possimus temporibus dolorem sint odit veritatis sit sunt accusantium tempora, vel quis, dicta perferendis voluptas! Quibusdam ipsa culpa placeat quidem esse enim? Optio at voluptates quasi veniam laborum hic sequi magni voluptatum obcaecati nihil. 
        </p>
    </center>
    </div>
    <div class="container rounded">
        <div class="row mt-3" style="background-color: #7ee9ff">
            <div class="col-3 ">
                <img src="https://avatarfiles.alphacoders.com/110/thumb-110054.png" alt="" class="rounded-circle mt-3">
            </div>
            <div class="col-9 mt-3">
                <h1 class="text-white" style="font-family: Comic Sans MS">Kelebihan :</h1>
                <div class="row">
                    <h5 class="text-white col-4" style="font-family: Comic Sans MS">- Beban Ortu</h4>
                    <h5 class="text-white col-4" style="font-family: Comic Sans MS">- Rapot Merah</h4>
                    <h5 class="text-white col-4" style="font-family: Comic Sans MS">- Mata Minus</h4>
                </div>
                <div class="row mt-2">
                        <h5 class="text-white col-8" style="font-family: Comic Sans MS">- Achievement Tidur 12 jam</h4>
                </div>
                <div class="row mt-4 ">
                    <h4 class="text-white " style="font-family: Comic Sans MS"> Inggin tahu lebih bayak? <a href="/about" style="text-decoration: none; color:#00cbfb">About </a></h4></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3" style="background-color: #7ee9ff">
        <center><h1 class="text-white" style="font-family: Comic Sans MS">Pencapaian :</h1></center>
            <div class="row">
                <div class="col-4 "><img src="https://avatarfiles.alphacoders.com/159/thumb-159966.png" alt="" class="rounded-circle mb-3" style="margin-left: 10px">
                <div class="row"><h4 class="text-white " style="font-family: Comic Sans MS">2nd Juara Ngehayal</h4></div>
                <div class="row"><p class="text-white mt-4" style="font-family: Comic Sans MS">Note: Gambaran Orang</p></div>
                </div>
                <div class="col-4 "><center><img src="https://avatarfiles.alphacoders.com/110/thumb-110568.png" alt="" class="rounded-circle mb-3">
                <div class="row"><h4 class="text-white " style="font-family: Comic Sans MS">1st Juara Tidur</h4></div>
                </div></center>
                <div class="col-4 "><img src="https://avatarfiles.alphacoders.com/110/thumb-110054.png" alt="" class="rounded-circle mb-3" style="margin-left: 145px">
                <h4 class="text-white " style="margin-left: 145px; font-family:Comic Sans MS">3rd Juara Makan</h4>
                </div>
            </div>
    </div>
    <div class="mt-5" style="background-color: #7ee9ff; ">
        {{-- <center> --}}
            <!-- <h1 class="text-white " style="font-family: Comic Sans MS">Ini Footer!</h1> -->
            {{-- <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, provident?Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia numquam esse, molestiae quo minima dolores modi quae eius suscipit sint voluptas exercitationem architecto? Facere impedit nemo dolorem corporis illum accusamus repudiandae similique, porro possimus alias fugiat omnis facilis laudantium corrupti suscipit rerum inventore! Nam, a et repellendus dignissimos quia cumque necessitatibus eligendi sunt. Ipsa iusto excepturi corrupti asperiores doloremque modi. Aliquid ratione illo nulla dolore ad beatae rerum quisquam sequi, minima earum rem esse odit ipsam non! Ad culpa eveniet voluptates velit earum corrupti, voluptate eum vitae ipsum nostrum debitis nihil ipsam rerum! Unde repudiandae voluptatum impedit magni aut.</p> --}}
        <div class="row container">

            <div class="col-1"><img src="https://cdn.pixabay.com/photo/2016/12/04/18/58/instagram-1882330__340.png" class="rounded-circle mt-1 mb-1" style="max-width: 60%">
            </div>
            <div class="col-3"><p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none;">Follow me on Intagram</p></div>
            <div class="col-1"><img src="https://pbs.twimg.com/profile_images/1354479643882004483/Btnfm47p_400x400.jpg" class="rounded-circle mt-1 mb-1" style="max-width: 60%; margin-left: 145px">
            </div>
            <div class="col-4"><p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none;; margin-left: 105px">Follow me on Twittard</p></div>
            <div class="col-1"><img src="https://cdn.pixabay.com/photo/2015/08/03/13/58/soon-873316__340.png" class="rounded-circle mt-1 mb-1" style="max-width: 60%; margin-left: 355px">
            </div>
            <div class="col-2"><p class="text-white mt-3" style="font-family: Comic Sans MS; text-decoration: none;      margin-left: 325px">Chat</p></div>
        </div> 
        <div class="row container">
            <p class="text-white mt-2" style="text-align: left ;">&copy; Biodata 2021</p>
        </div>
    </div>
</div>
@endsection