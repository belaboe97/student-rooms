<style>

    .modal-header-bg-headings{

        position: absolute;
        top: 50%;
        left: 50%;
        margin-bottom:3rem;
        transform: translate(-50%, -50%);
        color:white;
        font-weight:bold;
        font-size:1.5rem;
        text-shadow: 2px 2px  black;
        top:7.5rem;
    }
    #apartment-image{
        width: 100%;
        height: 150px;
        object-fit: cover;
}
    #map{
        width: auto ;
        height: 350px;
        margin-left:1.5px;   
    }
</style>

<div class="modal fade"  id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content" >
        <div class="modal-header modal-header-bg-img " >
          <h5 class="modal-title modal-header-bg-headings" id="exampleModalScrollableTitle">
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body container-fluid justify-content-center">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Room Informations</h3>
                    <div style="border: 1px solid rgb(0,0,0,0.13); padding:2px">
                    <h6>Adress: <span id="adress"></span></h6>
                    <h6>Price: <span id="price"></span> € </h6>
                    <h6>Roomtype: <span id="roomtype" ></span></h6>
                   <h6>Description:</h6>
    
                    <span id="description">
                    </div>
                    <hr>
                    <h3>Owners Information</h3>
                    <div style="border: 1px solid rgb(0,0,0,0.13); padding:2px">
                    <h6>Name: <span id="name"></span></h6>
                    <h6>Phone: <span id="phone"></span></h6>
                    <h6>Email: <span id="email"></span></h6>
                    <h6>Owners Adress: <span id="owners_adress"></span></h6>
                    </div>

                    </div>
                <div class="col-sm-6">
                    <div id="map"></div>
                </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>