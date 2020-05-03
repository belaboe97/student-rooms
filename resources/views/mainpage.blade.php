
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
       
            <div class="col-3 mt-4">
                <button style="border:none;background-color:white"  onclick="showModal('{{$data->adress}}','{{$data->id}}','{{$data->price}}','{{$data->owners_adress}}','{{$data->phone}}','{{$data->email}}','{{$data->name}}','{{$data->image}}','{{$data->roomtype}}','{{$data->description}}','{{$data->title}}')" data-toggle="modal" data-target="#exampleModalScrollable">
                    <figure class="imghvr-slide-right" >
                        <div class="top-right">{{$data->adress}}</div>
                        <div class="centered">{{$data->title}}</div>
                        <img class="img-responsive blog-content" src="images/{{$data->image}}" >
                        <figcaption>
                                <div class="row">
                                        <div class="col-sm-3 ">
                                            <h6><span>Adress:</span></h6>
                                        </div>
                                        <div class="col-sm-9">
                                          <h6>  <span>{{$data->adress}}</span></h6>                                           
                                        </div>

                                        <div class="col-sm-3 ">
                                           <h6> <span>Price:</span></h6>
                                        </div>
                                        <div class="col-sm-9">
                                           <h6> <span>{{$data->price}} €</span></h6>                                          
                                        </div>

                                        <div class="col-sm-3 ">
                                            <h6> <span>Type:</span></h6>
                                         </div>
                                         <div class="col-sm-9">
                                            <h6> <span>{{$data->roomtype}} </span></h6>                                          
                                         </div>
                                         
                                         <div class="col-sm-3 ">
                                            <h6> <span>Phone:</span></h6>
                                         </div>
                                         <div class="col-sm-9">
                                            <h6> <span>{{$data->phone}} </span></h6>                                          
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
@include('modal-living')
@include('layouts.footer')
