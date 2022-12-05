@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}">
@endsection
@section('content')
    <main class="my-5 container">
        <div class=" mx-lg-auto">
            <div class="mb-4">
                <h1 class="display-6">
                    {{ $project->name }}
                </h1>
            </div>

            <div class="row align-items-sm-center mb-5">
                <div class="col-sm-7 mb-4 mb-sm-0">
                    <!-- Media -->
                    <div class="d-flex  flex-column ">
                        <div class="flex-shrink-0">
                            <small>
                                {{ $project->projectType->name }}
                            </small>
                        </div>

                        <div class="flex-grow-1">
                            <span class="d-block small">
                                <i class="bi bi-calendar"></i>
                                {{ $project->created_at->format('d M Y') }}
                            </span>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>
                <!-- End Col -->

                <div class="col-sm-5">
                    <div class="d-flex justify-content-sm-end align-items-center">
                        <span class="text-cap mb-0 me-2">Share:</span>

                        <div class="d-flex gap-4">
                            <a class="btn btn-light-primary btn-sm btn-icon rounded-circle" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                            <a class="btn btn-light-primary btn-sm btn-icon rounded-circle" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                            <a class="btn btn-light-primary btn-sm btn-icon rounded-circle" href="#">
                                <i class="bi-instagram"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <p>
                {{ $project->description }}
            </p>
        </div>

        {{--        show projects images--}}
        <div class="row">
            <div class="col-12">
                <div class="row grid"
                     id="lightgallery">
                    @foreach($project->images as $image)
                        <a href="{{ $image->imageUrl }}"
                           class=" grid-item col-6 col-lg-4 col-xl-3 tw-p-2 md:tw-p-0.5 xl:tw-p-1 gallery-container tw-flex-col tw-justify-center"
                           data-sub-html="<h4>{{ $image->title }}</h4><p>{{$image->description}}</p>"
                           data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <img src="{{ $image->imageUrl }}"
                                 class="tw-shadow-none img-fluid tw-h-full tw-w-full tw-object-cover"
                                 alt="{{ $image->name }}"/>

                        </a>

                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Row -->
    </main>
@endsection

@section('scripts')

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="{{ asset('js/lg/lightgallery.min.js') }}"></script>
    <script src="{{ asset('js/lg/lg-fullscreen.min.js') }}"></script>
    <script src="{{ asset('js/lg/lg-zoom.min.js') }}"></script>
    <script src="{{ asset('js/lg/lg-pager.min.js') }}"></script>
    <script src="{{ asset('js/lg/lg-autoplay.min.js') }}"></script>
    <script src="{{ asset('js/lg/lg-hash.min.js') }}"></script>
    <script>

        function gridMasonry() {
            // vanilla JS
            var grid = document.querySelector('.grid');
            var iso = new Isotope(grid, {
                // options...
                itemSelector: '.grid-item',
                masonry: {
                    // columnWidth: 200
                }
            });
        }

        function initializeGallery() {
            lightGallery(document.getElementById('lightgallery'));
        }


        $(function () {
            gridMasonry();


            window.addEventListener('galleryLoaded', () => {
                console.log('galleryLoaded');
                initializeGallery();
            });

            initializeGallery();
        });
    </script>

@endsection
