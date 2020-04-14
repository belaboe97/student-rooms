<style>
    .modal-header-bg-img{
        background-image: url("../static/img/students.jpg"); /* The image used */
        background-color: #cccccc; /* Used if the image is unavailable */
        height: 150px; /* You must set a specified height */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
}
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



<div class="modal fade "  id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content"  >
        <div class="modal-header modal-header-bg-img ">
          <h5 class="modal-title modal-header-bg-headings" id="exampleModalScrollableTitle">
          </h5>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body container-fluid justify-content-center">
            <div class="row">
                <div class="col-sm-6">
                    <img src="#" id="apartment-image" alt="apartment-image" style="border-radius:0.3rem">

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