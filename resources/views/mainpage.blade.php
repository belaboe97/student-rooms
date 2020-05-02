
@include('layouts.navbar')


<div class="container">
    <div class="row justify-content-center">
        <div class="shadow p-3 mb-5 bg-white rounded col-10 text-center ml-5">Please not that all of the here listed providers are tested and commercial companys</div>
        <div  class="col-1"></div>
        <div class="col-11"></div>
    </div>
</div>
<div></div>
<div class="container">
    <div class="row">
        @foreach($rooms as $data)
       
            <div class="col-3">
                <button style="border:none;background-color:white"  onclick="showModal('{{$data->adress}}','{{$data->id}}','{{$data->price}}','{{$data->image}}')" data-toggle="modal" data-target="#exampleModalScrollable">
                    <figure class="imghvr-slide-right" >
                        <div class="top-right">Top right</div>
                        <div class="centered">{{$data->name}}</div>
                        <img class="img-responsive blog-content" src="images/{{$data->image}}" >
                        <figcaption >
                                <div class="row">
                                        <div class="col-sm-5 ">
                                            <span>🏙️ Citycenter </span>
                                        </div>
                                        <div class="col-sm-7">
                                         
                                            <div class="bar-container">
                                               
                                            </div>
                                        </div>
                                </div>
                        </figcaption>
                    </figure>
                </button>
            </div>
        @endforeach
    </div>
</div>

</div>
@include('layouts.footer')
