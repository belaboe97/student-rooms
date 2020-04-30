<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imagehover.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">    
    <link rel="styleheet" type="text/css" href="css/app.css">
    <title>Start Page</title>
</head>
<body>

    
    @yield('content')
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq4EhyoNE4Hezg5gpukWpHGIkSXv7UUTs&callback=initMap"
    async defer></script>
    <script type="text/javascript">
        function showModal(adress,id,price,image)
        {
            console.log(adress,id,price,image )
            $("exampleModalScrollable .modal-title").html(adress)
           $("exampleModalScrollable").modal();
           var titleheader = document.getElementById('exampleModalScrollableTitle')
           titleheader.innerHTML = adress; 
           imgstorage = ('storage/'+image) 
           console.log(imgstorage)
           document.getElementById('apartment-image').src = ('storage/'+image);
        }  
            function initMap(){
                //Map options
                var options = {
                    zoom:11,
                    center
                    
                    :{lat:53.3498,lng: -6.2603}
                }
                // New map
                var map = new
                google.maps.Map(document.getElementById('map'),options);
        
                //New Marker
                var marker = new google.maps.Marker({
                position: {lat:53.3498,lng: -6.2603},
                title:"Dublin Center",
                visible: true
                });
                marker.setMap(map);
        
                var markerITB = new google.maps.Marker({
                position: {lat:53.404940,lng: -6.379960},
                title:"TU Dublin Blanchardstown",
                visible: true,
                icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                
                });
                markerITB.setMap(map);
        
                var markerDCU= new google.maps.Marker({
                position: {lat:53.384811,lng:-6.263190},
                title:"DCU Dublin",
                visible: true,
                icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                
                });
        
                markerDCU.setMap(map);
        
        
        
            }
        
    </script>
</body>
</html>