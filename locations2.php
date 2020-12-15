<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/urbanxchange.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE DINING ROOM </h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/urbanxchange.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE PRIVATE DINING EXPERIENCE</h5><!--content title-->
                                                <p>
                                              Geeta Bhawan square 301 Dil Pasand Square, 164 Kanchan Bagh, South Tukoganj, Indore, Madhya Pradesh 452001
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">


                                                <p>
                                                Accommodating 65 guests for dinners or conferences and up to 120 for
                                                cocktail parties, this private, heritage space brings character and
                                                charm to any event, with the attached lounge and bar ideal for pre- or
                                                post-event drinks or for use as a breakout room.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Oakaz Cafe And Restaurant</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            The Rocks 12 Argyle Street
                            </p>
                            <p class="definition"><!--content body-->
                            Sitting amongst historic sandstone, the SUR Xchange Private Dining
                            Room is the epitome of elegance for a sophisticated celebration.When you dine in the
                            UrbanXchange Private Dining Room.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/ananasbar.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Trance Pub</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/ananasbar.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Trance Pub</h5><!--content title-->
                                                <p>
                                              3A, PU3, Opposite Orbit Mall, Gemini Mall, AB Road, Indore, Madhya Pradesh 452011
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">


                                                <p>
                                                Our dedicated Seafood Bar is a venue highlight, treating you to shucked-to-order oysters
                                                and a daily plateau fruits de mer. Our full brasserie menu is also complemented by
                                                a selection of bar treats, available until 3am. So if you’re a theatre goer or night-dweller
                                                looking for a late night dining experience, Ananas Bar & Brasserie has you covered.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Trance Pub</h1><!--location title-->
                            <p class="location">  3A, PU3, Opposite Orbit Mall, Gemini Mall, AB Road, Indore, Madhya Pradesh 452011</p><!--location secondary content-->
                            <p class="definition">
                          Trance Pub
                            This breathtaking venue bring shimmering French glamour to The Rocks.
                            Enjoy champagne and oysters after work and cocktails into the early hours, or indulge in
                            a magnificent French meal in the Brasserie.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon-->
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/argyle.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">iiiEM Conference Hall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/argyle.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>iiiEM Conference Hall</h5><!--content title-->
                                                <p>
                                                No-213, Shagun Arcade, Above U-Turn Showroom, Vijay Nagar Rashoma Cross Road, Ratna Lok Colony, Indore, Madhya Pradesh 452001
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">


                                                <p>
                                                The well-planned event space opens up opportunities for creative and inspirational business meetings, trade conferences, meetings, training sessions, workshops, Annual general meetings, Board meetings,
                                                 Bankers conferences. Other seating arrangements can be made upon request and are subject to available furnishings during your booking dates.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">iiiEM Conference Hall</h1>
                            <p class="location">  No-213, Shagun Arcade, Above U-Turn Showroom, Vijay Nagar Rashoma Cross Road, Ratna Lok Colony, Indore, Madhya Pradesh 452001</p>
                            <p class="definition">The well-planned event space opens up opportunities for creative and inspirational business meetings, trade conferences, meetings, training sessions, workshops, Annual general meetings, Board meetings, Bankers conferences.
                               Other seating arrangements can be made upon request and are subject to available furnishings during your booking dates..</p>
                            <hr class="customline3">
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/munich.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Munich Brauhaus Melbourne</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/munich.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Marriage Garden</h5>
                                                <p>
                                                Scheme Number 78, Aranya Nagar, Vijay Nagar, Indore, Madhya Pradesh 452010
                                                </p>
                                            </div>
                                            <div class="modaltext2 col-md-12">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Marriage Garden</h1>
                            <p class="location">Scheme Number 78, Aranya Nagar, Vijay Nagar, Indore, Madhya Pradesh 452010</p>
                            <p class="definition">The uber venue is our latest venture, bringing to life a traditional
                                e.</p>
                            <hr class="customline3">
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
