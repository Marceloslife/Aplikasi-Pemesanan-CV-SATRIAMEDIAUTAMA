@extends('layouts.master')

@section('content')
    <link href="tampilan.css" rel="stylesheet" />
    <link rel="stylesheet" href="tampilan.css" />
    <section class="u-clearfix u-image u-section-1" id="carousel_4545" data-image-width="1980" data-image-height="1100">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-left-cell u-size-28 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <div class="u-border-9 u-border-custom-color-1 u-line u-line-horizontal u-line-1">
                                </div>
                                <h1 class="u-text u-text-custom-color-2 u-text-1" data-animation-name="fadeIn"
                                    data-animation-duration="2000" data-animation-direction="Left">EO SATRIA
                                    MEDIA
                                    UTAMA
                                </h1>
                                <p class="u-text u-text-2" data-animation-name="fadeIn" data-animation-duration="1750"
                                    data-animation-direction="Up" data-animation-delay="500"> EO Satria mediautama
                                    Adalah Penggarap Acara yang berkomitmen akan melayani sepenuh hati dan
                                    akan
                                    membuat
                                    semua acara yang kami pegang berjalan dengan lancar</p>
                                <a href="https://whas.me/XAy2O6b1WF"
                                    class="u-active-black u-border-none u-btn u-button-style u-custom u-custom-color-3 u-hover-black u-text-active-white u-text-hover-white u-text-white u-btn-1"
                                    data-animation-name="fadeIn" data-animation-duration="1500"
                                    data-animation-direction="Up">hubungi</a>
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-32 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                {{-- <img class="u-bottom-left-radius-10 u-bottom-right-radius-10 u-image u-image-round u-top-left-radius-10 u-image-1"
                                    alt="" data-image-width="1280" data-image-height="720"
                                    src="images/WhatsAppImage2022-10-07at14.52.33.jpeg"> --}}
                                <div id="carouselVideoExample" class="carousel slide carousel-fade"
                                    data-mdb-ride="carousel">
                                    <!-- Indicators -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1"
                                            aria-label="Slide 2"></button>

                                    </div>

                                    <!-- Inner -->
                                    <div class="carousel-inner">
                                        <!-- Single item -->
                                        <div class="carousel-item active">
                                            <video class="img-fluid" autoplay loop muted>
                                                <source src="{{ url('Video/INTRO.mp4') }}" type="video/mp4" />
                                            </video>
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>INTRO</h5>
                                                <p>
                                                    CV SATRIA MEDIA UTAMA
                                                </p>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-mdb-target="#carouselVideoExample" data-mdb-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-mdb-target="#carouselVideoExample" data-mdb-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        <!-- Single item -->
                                        <div class="carousel-item">
                                            <video class="img-fluid" autoplay loop muted>
                                                <source src="{{ url('Video/test.mp4') }}" type="video/mp4" />
                                            </video>
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5></h5>
                                                <p>

                                                </p>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-mdb-target="#carouselVideoExample" data-mdb-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-mdb-target="#carouselVideoExample" data-mdb-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="u-align-right u-clearfix u-grey-10 u-section-2" id="carousel_a57c">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-custom-color-1 u-list-item u-repeater-item"
                        data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0"
                        data-animation-direction="">
                        <div class="u-container-layout u-container-layout-4">
                            <a href="/portofoliopage">
                                <center><img
                                        class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4"
                                        src="images/EVENT 1.png" alt="" data-image-width="64"
                                        data-image-height="64">
                            </a></center>
                            <CENter>
                                <h3 class="u-text u-text-default u-text-4" data-animation-name="customAnimationIn"
                                    data-animation-duration="1000">
                                    EVENT</h3>
                            </CENter>

                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-custom-color-1 u-group u-shape-rectangle u-group-3"
                data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="">
<<<<<<< HEAD
                <div class="u-container-layout u-container-layout-2">
                    <a href="/listcrew">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
                            src="images/icons8-crew-64.png" alt="" data-image-width="64" data-image-height="64">
                    </a>
                    <h3 class="u-text u-text-default u-text-2" data-animation-name="customAnimationIn"
                        data-animation-duration="1000">CREW</h3>
=======
                <div class="u-container-layout u-container-layout-4">
                    <a href="http://127.0.0.1:8000/crew"><img
                            class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4"
                            src="images/crew.PNG" alt="" data-image-width="200"
                            data-image-height="100"></a>
                   <center> <h3 class="u-text u-text-default u-text-4" data-animation-name="customAnimationIn"
                        data-animation-duration="1000">CREW</h3></center>
>>>>>>> email
                </div>
            </div>
            <div class="u-container-style u-group u-palette-1-base u-shape-rectangle u-group-2"
                data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-3">
                    <a href="/order">
                        <img class="u-image u-image-default u-preserve-proportions u-image-3"
                            src="images/icons8-purchase-order-16.png" alt="" data-image-width="16"
                            data-image-height="16">
                    </a>
                    <h3 class="u-hover-feature u-text u-text-default u-text-3" data-animation-name="customAnimationIn"
                        data-animation-duration="1000" data-animation-direction="">ORDER</h3>
                </div>
            </div>
            <div class="u-container-style u-custom-color-1 u-group u-shape-rectangle u-group-3"
                data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-4">
                    <a href="http://127.0.0.1:8000/smu_talent"><img
                            class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4"
                            src="images/LOGO SMU_T 2022.PNG" alt="" data-image-width="200"
                            data-image-height="100"></a>
                    <h3 class="u-text u-text-default u-text-4" data-animation-name="customAnimationIn"
                        data-animation-duration="1000">SMU_TALENT</h3>
                </div>
            </div>
        </div>

    </section>
    <section class="u-clearfix u-section-3" id="carousel_2a74">
        <div class="u-grey-10 u-opacity u-opacity-75 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-size-30">
                        <div class="u-layout-col">
                            <div
                                class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-1">
                                    {{-- <img class="u-expanded-width u-image u-image-1" src="images/image.png"
                                        data-image-width="317" data-image-height="245" data-animation-name="fadeIn"
                                        data-animation-duration="2000" data-animation-direction="Left"> --}}
                                    <video class="u-expanded-width u-image u-image-1" autoplay loop muted>
                                        <source src="{{ asset('/storage/dokumen/' . $event->link_teaser_event) }}"
                                            type="video/mp4" />
                                    </video>
                                    <h2 class="u-text u-text-1" data-animation-name="fadeIn"
                                        data-animation-duration="1750" data-animation-direction="Left">
                                        &nbsp;​UP
                                        COMING</h2>
                                    <p class="u-large-text u-text u-text-variant u-text-2">Kegiatan CV
                                        SATRIA MEDIA
                                        UTAMA yang akan datang</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                                        data-mdb-target="#modaldetail">
                                        DETAIL
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modaldetail" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">EVENT
                                                    </h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2>{{ $event->nama_event }}</h2>
                                                    <img width="400em"
                                                        src="{{ asset('/storage/dokumen/' . $event->poster_event) }}"
                                                        alt="">
                                                    <p>{{ $event->tanggaltempat }}</p>
                                                    <p>{{ $event->deskripsi_event }}</p>
                                                    <p>Link Acara :</p> <a href="{{ $event->link_acara }}">Click
                                                        Here</a>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-mdb-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30">
                        <div class="u-layout-col">
                            <div class="u-size-30">
                                <div class="u-layout-row">
                                    <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2"
                                        src="">
                                        <div class="u-container-layout u-container-layout-2">
                                            <h2 class="u-hover-feature u-text u-text-default u-text-3">
                                                PREVIEW
                                                EVENT
                                            </h2>
                                            <img class="u-expanded-width u-image u-image-2" src="images/event.png"
                                                data-image-width="852" data-image-height="735"
                                                data-animation-name="fadeIn" data-animation-duration="2000"
                                                data-animation-direction="Down">
                                        </div>
                                    </div>
                                    <div
                                        class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-3">
                                        <div class="u-container-layout u-container-layout-3">
                                            <img class="u-expanded-width u-image u-image-3" src="images/event3.png"
                                                data-image-width="857" data-image-height="628"
                                                data-animation-name="fadeIn" data-animation-duration="2000"
                                                data-animation-direction="Right">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-size-30">
                                <div class="u-layout-col">
                                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-4"
                                        src="">
                                        <div class="u-container-layout" src="">
                                            <img class="u-image u-image-4" src="images/event2.png" data-image-width="742"
                                                data-image-height="557" data-animation-name="fadeIn"
                                                data-animation-duration="2000" data-animation-direction="Up">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="u-clearfix u-section-4" id="carousel_5b20">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-image u-layout-cell u-shape-rectangle u-size-22 u-image-1"
                            data-image-width="1280" data-image-height="720">
                            <div
                                class="u-container-layout u-valign-bottom-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                            </div>
                        </div>
                        <div class="u-align-justify u-container-style u-layout-cell u-size-38 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <h4 class="u-custom-font u-font-montserrat u-text u-text-1">About&nbsp;
                                </h4>
                                <p class="u-custom-font u-font-pt-sans u-text u-text-default u-text-2"> EO
                                    Satria
                                    mediautama Adalah Penggarap Acara yang berkomitmen akan melayani sepenuh
                                    hati
                                    dan
                                    akan membuat semua acara yang kami pegang berjalan dengan lancar EO
                                    Satria
                                    mediautama Adalah Penggarap Acara yang berkomitmen akan melayani sepenuh
                                    hati
                                    dan
                                    akan membuat semua acara yang kami pegang berjalan dengan lancar</p>
                                <a href="http://127.0.0.1:8000/Start"
                                    class="u-active-black u-border-none u-btn u-button-style u-custom-color-1 u-hover-black u-text-active-white u-text-hover-white u-text-white u-btn-1"
                                    data-animation-name="zoomIn" data-animation-duration="1500"
                                    data-animation-direction="" data-animation-delay="0">Start now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-5" id="carousel_3a6f">

        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1">
                            <div class="container">
                                <div class="container-fluid px-5 my-5">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="row g-0">
                                                        <div class="col-sm-6 d-none d-sm-block bg-image"></div>
                                                        <div class="col-sm-6 p-4">
                                                            <div class="text-center">
                                                                <div class="h3 fw-light">Contact Form</div>
                                                                <p class="mb-4 text-muted">Split layout contact form</p>
                                                            </div>

                                                            <!-- * * * * * * * * * * * * * *
                                                                                                                                                          // * * SB Forms Contact Form * *
                                                                                                                                                          // * * * * * * * * * * * * * * *

                                                                                                                                                          // This form is pre-integrated with SB Forms.
                                                                                                                                                          // To make this form functional, sign up at
                                                                                                                                                          // https://startbootstrap.com/solution/contact-forms
                                                                                                                                                          // to get an API token!
                                                                                                                                                          -->

                                                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                                                                <!-- Name Input -->
                                                                <div class="form-floating mb-3">
                                                                    <input class="form-control" id="name"
                                                                        type="text" placeholder="Name"
                                                                        data-sb-validations="required" />
                                                                    <label for="name">Name</label>
                                                                    <div class="invalid-feedback"
                                                                        data-sb-feedback="name:required">Name is required.
                                                                    </div>
                                                                </div>

                                                                <!-- Email Input -->
                                                                <div class="form-floating mb-3">
                                                                    <input class="form-control" id="emailAddress"
                                                                        type="email" placeholder="Email Address"
                                                                        data-sb-validations="required,email" />
                                                                    <label for="emailAddress">Email Address</label>
                                                                    <div class="invalid-feedback"
                                                                        data-sb-feedback="emailAddress:required">Email
                                                                        Address is required.</div>
                                                                    <div class="invalid-feedback"
                                                                        data-sb-feedback="emailAddress:email">Email Address
                                                                        Email is not valid.</div>
                                                                </div>

                                                                <!-- Message Input -->
                                                                <div class="form-floating mb-3">
                                                                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"
                                                                        data-sb-validations="required"></textarea>
                                                                    <label for="message">Message</label>
                                                                    <div class="invalid-feedback"
                                                                        data-sb-feedback="message:required">Message is
                                                                        required.</div>
                                                                </div>

                                                                <!-- Submit success message -->
                                                                <div class="d-none" id="submitSuccessMessage">
                                                                    <div class="text-center mb-3">
                                                                        <div class="fw-bolder">Form submission successful!
                                                                        </div>
                                                                        <p>To activate this form, sign up at</p>
                                                                        <a
                                                                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                                    </div>
                                                                </div>

                                                                <!-- Submit error message -->
                                                                <div class="d-none" id="submitErrorMessage">
                                                                    <div class="text-center text-danger mb-3">Error sending
                                                                        message!</div>
                                                                </div>

<<<<<<< HEAD
                                                                <!-- Submit button -->
                                                                <div class="d-grid">
                                                                    <button class="btn btn-primary btn-lg disabled"
                                                                        id="submitButton" type="submit">Submit</button>
                                                                </div>
                                                            </form>
                                                            <!-- End of contact form -->
=======
                <!-- Submit button -->
                <div class="d-grid">
                <button class="btn btn-primary">send</button>
                </div>
              </form>
              <!-- End of contact form -->
>>>>>>> email

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CDN Link to SB Forms Scripts -->
                                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

                                {{-- <form
  action="https://formspree.io/f/mqkjvdjk"
  method="POST"
>
  <label>
    Your email:
    <input type="email" name="email">
  </label>
  <label>
    Your message:
    <textarea name="message"></textarea>
  </label>
  <!-- your other form fields go here -->
  <button type="submit">Send</button>
</form>
                                       
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices" value="">
                                    </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
