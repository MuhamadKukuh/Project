@extends('layouts.main')
@section('nav')
    <div class="container mt-3 " style="background-color: #7ee9ff">
        <div class="row">   
            <center><h1 class="text-white mt-3 mb-3" style="font-family: Comic Sans MS">Belum di Isi</h1></center>
            <div class="col-6">
                <img src="https://images5.alphacoders.com/836/thumbbig-836124.webp" alt="Gambar" class="rounded mt-3 mb-3" style="max-width: 85%">
            </div>
            <div class="col-6">
                <p class="text-white mt-3 mb-3" style="font-family: Comic Sans MS">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere blanditiis ad magni mollitia autem aut assumenda voluptatem? Voluptatibus magnam natus consequuntur dolores debitis aut nisi repellendus hic odit, facere repellat accusamus? Sapiente eveniet iste architecto. Sed rem provident ipsam non impedit nihil, voluptates laudantium mollitia quos tempore, veniam itaque facilis fugiat praesentium omnis doloremque vero consectetur dolorem eaque repudiandae deserunt et! Recusandae repellendus minima officiis maxime nulla a asperiores temporibus natus vel voluptate! Ut blanditiis nesciunt ea ab dolorem expedita laborum, tenetur maiores quibusdam aut, hic magnam eos beatae error possimus voluptate provident quidem id facilis quos eligendi sequi.</p>
            </div>
        </div>
    </div> 
    <?php
        for ($a=5; $a < 5 ; $a++) { 
            echo '<div class="container">
    <div class="mt-4 row">
        <div class="col-6">
            <img src="https://lh3.googleusercontent.com/proxy/
CrfTOH6Lz7iuNejUZEMDLKq3TFQHvWSsrFWLUCWRlTs1hCMSR1ENTXg3-CzB3auBaf5NRiUcL8Dvzt87QarapwFDiaOyCXQz9-CZaffezG
UHH6FeiieohIxBi1lVrrGrmP7DfjvQ3E36" alt="Gambar" class="rounded">
        </div>
        <div class="col-6">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere blanditiis ad magni mollitia 
autem aut assumenda voluptatem? Voluptatibus magnam natus consequuntur dolores debitis aut nisi 
repellendus hic odit, facere repellat accusamus? Sapiente eveniet iste architecto. Sed rem provident 
ipsam non impedit nihil, voluptates laudantium mollitia quos tempore, veniam itaque facilis fugiat 
praesentium omnis doloremque vero consectetur dolorem eaque repudiandae deserunt et! Recusandae 
repellendus minima officiis maxime nulla a asperiores temporibus natus vel voluptate! Ut blanditiis 
nesciunt ea ab dolorem expedita laborum, tenetur maiores quibusdam aut, hic magnam eos beatae error 
possimus voluptate provident quidem id facilis quos eligendi sequi.</p>
        </div>
    </div>
</div> ';
        }
    ?>
    <!-- <div class="container mt-3" style="background-color: #7ee9ff">
        <center>    
        <h1 class="container text-white" style="font-family: Comic Sans MS"> PHP Yang Sudah Dipelajari</h1>
        </center>
        <h4 class="container text-white" style="font-family: Comic Sans MS">Aritmatika</h4>

         <?php
        for ($a=0; $a <= 5 ; $a++) { 
            echo '';
        }
    ?>
 -->
    <?php  for ($i=0; $i <= 5 ; $i++) { 
        echo '<div class="container mt-3 " style="background-color: #7ee9ff">
        <div class="row">   
            
            <div class="col-6">
                <img src="https://images5.alphacoders.com/836/thumbbig-836124.webp" alt="Gambar" class="rounded mt-3 mb-3" style="max-width: 85%">
            </div>
            <div class="col-6">
                <p class="text-white mt-3 mb-3" style="font-family: Comic Sans MS">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti facere blanditiis ad magni mollitia autem aut assumenda voluptatem? Voluptatibus magnam natus consequuntur dolores debitis aut nisi repellendus hic odit, facere repellat accusamus? Sapiente eveniet iste architecto. Sed rem provident ipsam non impedit nihil, voluptates laudantium mollitia quos tempore, veniam itaque facilis fugiat praesentium omnis doloremque vero consectetur dolorem eaque repudiandae deserunt et! Recusandae repellendus minima officiis maxime nulla a asperiores temporibus natus vel voluptate! Ut blanditiis nesciunt ea ab dolorem expedita laborum, tenetur maiores quibusdam aut, hic magnam eos beatae error possimus voluptate provident quidem id facilis quos eligendi sequi.</p>
            </div>
        </div>
    </div> ';
    }; ?>



    <div class="mt-5" style="background-color: #7ee9ff; ">
        {{-- <center> --}}
            <!-- <h1 class="text-white " style="font-family: Comic Sans MS">Ini Footer!</h1> -->
            {{-- <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, provident?Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quia numquam esse, molestiae quo minima dolores modi quae eius suscipit sint voluptas exercitationem architecto? Facere impedit nemo dolorem corporis illum accusamus repudiandae similique, porro possimus alias fugiat omnis facilis laudantium corrupti suscipit rerum inventore! Nam, a et repellendus dignissimos quia cumque necessitatibus eligendi sunt. Ipsa iusto excepturi corrupti asperiores doloremque modi. Aliquid ratione illo nulla dolore ad beatae rerum quisquam sequi, minima earum rem esse odit ipsam non! Ad culpa eveniet voluptates velit earum corrupti, voluptate eum vitae ipsum nostrum debitis nihil ipsam rerum! Unde repudiandae voluptatum impedit magni aut.</p> --}}
        </center>
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
            <p class="text-white mt-2">&copy; Biodata 2021</p>
        </div>
        
    </div>
@endsection 