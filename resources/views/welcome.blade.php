@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

@endsection
@section('content')
    <div class="container-sl">
        <div class="carousel">
            @foreach($images as $image)
                <div class="tw-h-96 tw-bg-cover tw-bg-no-repeat tw-bg-fixed tw-min-h-screen tw-bg-center"
                     style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url({{ asset('images/project-1/'.$image) }});">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="container">
                            <div class="row align-items-center justify-content-center text-white">
                                <div class="col-md-8">
                                    <h1 class="display-2 text-center fw-light">Architectural service provider.</h1>
                                    <p class="my-4">We work to mold the dream of the client into real construction
                                        projects
                                        with a flavor of professionalism.</p>
                                    <div class="d-flex justify-content-center align-items-center gap-3">
                                        <a href="#team"
                                           class="btn text-white border text-uppercase border-4 rounded-pill btn-lg btn-outline-primary">
                                            Our Team
                                        </a>
                                        <a href="{{ route('projects') }}"
                                           class="btn text-white border text-uppercase border-4 rounded-pill btn-lg btn-outline-primary">
                                            Our Projects
                                        </a>
                                        <a href="#contact-us"
                                           class="btn text-white border text-uppercase border-4 rounded-pill btn-lg btn-outline-primary">
                                            Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="container">

        <div class="tw-flex tw-justify-center tw-items-center tw-flex-col my-10">
            <h4 class="display-6 text-center">Our Services</h4>
            <div class="border-top border-primary border-3 tw-w-20 mb-3"></div>
        </div>
        <div class="row">
            @foreach($serviceTypes as $item)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100  tw-rounded-xl border">
                        <div class="card-body py-10 text-center tw-flex tw-justify-start tw-flex-col tw-items-center">
                            <span class="svg-icon svg-icon-3x text-primary mt-10">{!! $item->icon !!} </span>
                            <h2 class="mt-10">{{ $item->name }}</h2>
                            <div class="border-top border-primary border-3 tw-w-20 mb-10"></div>
                            @foreach($item->services as $service)
                                <p>{{$service->name}}</p>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!--features section-->
    <section class="my-10" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="https://inyubako.com/assets/project-6/Image10a.jpg"
                         class="img-fluid h-100 tw-object-cover tw-rounded-lg" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="title">
                        <h2>Events & News</h2>
                        <p class="text">No current event</p>
                    </div>

                    <div class="d-flex">
                        <span class="svg-icon svg-icon-2x text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path d="M10.5 18.75a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"/>
                                <path fill-rule="evenodd"
                                      d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </span>
                        <div>
                            <h3>Simple</h3>
                            <p>Less is more! A cost-effective project calls for simplicity.</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <span class="svg-icon svg-icon-2x text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path
                                    d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 013.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0121 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 017.5 16.125V3.375z"/>
                                <path
                                    d="M15 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0017.25 7.5h-1.875A.375.375 0 0115 7.125V5.25zM4.875 6H6v10.125A3.375 3.375 0 009.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V7.875C3 6.839 3.84 6 4.875 6z"/>
                            </svg>

                        </span>
                        <div>
                            <h3>Beautiful</h3>
                            <p>Simply Designed, functional spaces can be beautiful;</p>
                        </div>
                    </div>


                    <div class="d-flex">
                        <span class="svg-icon svg-icon-2x text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                                <path fill-rule="evenodd"
                                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </span>
                        <div>
                            <h3>Functional</h3>
                            <p>Simplicity, beauty and functionality can be in a package for your construction
                                project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end features section-->

    <!--sample video section-->

    <section class="text-center text-white py-10 tw-bg-center tw-bg-fixed tw-bg-no-repeat"
             style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)), url({{ asset('images/video.png') }});">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <a href="https://www.youtube.com/watch?v=t0cST2ICibs" target="_blank"
               class="d-block tw-h-20 tw-w-20 my-10 popup-youtube bg-primary rounded-circle d-flex justify-content-center align-items-center">
            <span class="svg-icon svg-icon-3x text-white">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd"
        d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
        clip-rule="evenodd"/>
</svg>


            </span>
            </a>
            <h2 class="display-5 fw-light my-5">Watch Sample Video</h2>
            <p class="h4 text-muted fw-light ">A cost-effective project calls for simplicity.</p>
        </div>
    </section>
    <!--endsample video section-->
    <!-- team section-->

    <section class="container-fluid" id="team">
        <div class="tw-flex tw-justify-center tw-items-center tw-flex-col my-10">
            <h2 class="display-5 fw-light">Our Team</h2>
            <div class="border-top border-primary border-3 tw-w-20 mb-3"></div>
        </div>
        <div class="team">

            @foreach($teams as $item)

                <div class="d-flex flex-column mx-3">
                    <div class="team-img position-relative">
                        <img src="{{ $item->image_url }}" class="img-fluid tw-w-full tw-h-96 tw-object-cover" alt=""/>
                        <div class="bg-white w-auto position-absolute social-icons">
                            <a href="https://www.linkedin.com/in/justin-ndacyayishima-a92699118/"
                               class="text-dark px-5 py-4 hover:tw-text-white  hover:tw-bg-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                            <a href="#"
                               class="text-dark d-inline-block px-5 py-4 hover:tw-text-white  hover:tw-bg-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                            <a href="#"
                               class="text-dark d-inline-block px-5 py-4 hover:tw-text-white  hover:tw-bg-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
                            <a href="#"
                               class="text-dark d-inline-block px-5 py-4 hover:tw-text-white  hover:tw-bg-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="text-center p-3">
                        <h3 class="fw-normal">{{ $item->name }}</h3>
                        <span class="text-muted fw-light">{{ $item->position }}</span>
                    </div>
                </div>

            @endforeach
        </div>
    </section>
    <!-- end team section-->
    <!--contact section-->
    <section class="my-10" id="id">
        <div class="container">
            <div class="tw-flex tw-justify-center tw-items-center tw-flex-col my-10">
                <h2 class="display-5 fw-light">Interested?</h2>
                <div class="border-top border-primary border-3 tw-w-20 mb-3"></div>
                <p class="text">Let us call you for a quick advice on your plot</p>
            </div>


            <div class="row" id="contact-us">
                <div class="col-md-6">
                    <h1 class="fw-light mb-3">Send Inquiry Here</h1>
                    <div class="my-4 alert alert-success" id="thankYou" style="display: none">
                        Thank you for your inquiry. We will get back to you shortly.
                    </div>
                    <form action="{{ route('inquiry.save') }}" method="post" id="submitForm">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" id="name" name="name"
                                   class="form-control rounded-0 border-0 border-bottom border-secondary shadow-none focus:tw-border-2 focus:tw-border-b-yellow-500  focus:tw-shadow-none"
                                   placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="upi" class="sr-only">UPI</label>
                            <input type="text" id="upi" name="upi"
                                   class="form-control rounded-0 border-0 border-bottom border-secondary shadow-none focus:tw-border-2 focus:tw-border-b-yellow-500  focus:tw-shadow-none"
                                   placeholder="Plot UPI number">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" name="phone" id="phone"
                                   class="form-control rounded-0 border-0 border-bottom border-secondary shadow-none focus:tw-border-2 focus:tw-border-b-yellow-500  focus:tw-shadow-none"
                                   placeholder="Phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="sr-only">Message</label>
                            <textarea name="message"
                                      class="form-control rounded-0 border-0 border-bottom border-secondary shadow-none focus:tw-border-2 focus:tw-border-b-yellow-500  focus:tw-shadow-none"
                                      id="message" rows="6" placeholder="Write inquiry here..."></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary rounded-pill">
                           <span class="svg-icon">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
</svg>

                           </span>
                                Send Now
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="my-10">
                        <h1 class="fw-light mb-3">Visit Office</h1>
                        <p class="text">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
  <path fill-rule="evenodd"
        d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
        clip-rule="evenodd"/>
</svg>

                        </span>
                            KN1 Rd, Muhima , Kigali-Rwanda
                        </p>
                    </div>
                    <div class="my-10">
                        <h1 class="fw-light mb-3">Call Us</h1>
                        <a class="text-dark mb-3 d-inline-block" href="tel:+250 780 430 990">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
  <path fill-rule="evenodd"
        d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
        clip-rule="evenodd"/>
</svg>

                        </span>
                            +250 780 430 990 </a>
                        <p class="text-dark">
                         <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path
      d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
                        </span>
                            +250 727 111 133
                        </p>
                    </div>
                    <div class="my-10">
                        <h1 class="fw-light mb-3">Send Email</h1>
                        <a class="text-dark" href="mailto:arkdesign11@gmail.com" type="email">
                        <span class="svg-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
  <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"/>
  <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"/>
</svg>

                        </span>
                            arkdesign11@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of contact section-->

@endsection
@section('scripts')
    <!--JQuery-->

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Custom js-->
    <script src="{{ asset('js/popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
    {!! JsValidator::formRequest(\App\Http\Requests\StoreInquiryRequest::class) !!}

    <script>
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });

        $('.team').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.carousel').slick({
            dots: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('#submitForm').on('submit', function (e) {
            e.preventDefault();
            let form = $(this);
            if (!form.valid()) {
                return false;
            }
            let btn = form.find('button[type="submit"]');
            btn.attr('disabled', true);
            // add spinner to button
            btn.prepend(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
            );
            let data = form.serialize();
            let $thankYou = $('#thankYou');
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: data,
                success: function (response) {
                    form[0].reset();

                    $thankYou
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .text(response.message)
                        .show();

                },
                complete: function () {
                    btn.find('.spinner-border').remove();
                    btn.attr('disabled', false);
                },
                error: function (error) {

                    $thankYou
                        .removeClass('alert-success')
                        .addClass('alert-danger')
                        .text("Something went wrong, please try again later")
                        .show();
                    setTimeout(function () {
                        $thankYou.hide();
                    }, 5000);
                }
            });
        });
    </script>
@endsection

