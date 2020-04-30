
@include('layouts.navbar')


<div class="container">
    <div class="row justify-content-center">
        <div class="shadow p-3 mb-5 bg-white rounded col-10 text-center ml-5">Please not that all of the here listed providers are tested and commercial companys</div>
        <div  class="col-1"></div>
        <button class="col-1 btn-danger">Add Filter </button>
        
        @foreach($data as $room)
        <button class="col-md-3 mt-1 m-0" style="border:none;background-color:white" data-toggle="modal" data-target="#exampleModalScrollable">
            <figure class="imghvr-slide-right" >
                <div class="top-right">Top right</div>
                <div class="centered">{{ $room->adress }}</div>
                <img class="img-responsive blog-content" src="img/{{$room->image}}" >
                 <figcaption >
                        <div class="row">
             
        
                        </div>
                 </figcaption>
            
             </figure>
            </button>
        @endforeach
     

        <div class="col-11"></div>
    </div>
</div>
<div></div>


@include('modal-living')


