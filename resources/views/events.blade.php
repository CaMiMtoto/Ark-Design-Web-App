@extends('layouts.app')

@section('content')
    <main class="my-5">
        <!-- Hero -->
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-1 content-space-b-md-2 my-10">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto">
                <h1 class="display-3 text-warning">
                    Events & News
                </h1>
                <p class="lead text-muted">
                    Latest updates on our events and news
                </p>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Card Grid -->
        <div class="container content-space-b-2 content-space-b-lg-3">
            @if(request()->input('search'))
                <div class="col-md-7">
                    <div class="d-md-flex align-items-md-center text-center text-md-start">
                       <span class="d-block me-md-3 mb-2 mb-md-1">
                           Showing results for
                       </span>
                        <a class="btn bg-secondary py-1 btn-xs rounded-pill m-1"
                           href="javascript:void(0);">{{ request('search') }}</a>
                        <a class="btn btn-warning py-1 btn-xs rounded-pill m-1" href="{{ route('events') }}">
                            <i class="bi bi-x"></i>
                            Clear
                        </a>
                    </div>
                </div>
            @endif
            <div class="row justify-content-center align-items-md-center mb-7">
                <div class="col-md-7">
                    <div class="d-md-flex align-items-md-center text-center text-md-start tw-text-lg">
                       <span class="d-block me-md-3 mb-2 mb-md-1">
                          Filter by category
                       </span>
                        <a class="btn btn-warning text-dark py-1  rounded-pill m-1"
                           href="{{ route('events') }}">All</a>
                        @foreach(\App\Models\Event::types() as $type)
                            <a class="btn btn-{{ request('type')==$type?'success':'secondary' }} py-1  rounded-pill m-1"
                               href="{{ route('events',['type'=>$type]) }}">{{ $type }}</a>

                        @endforeach
                    </div>
                </div>

                <div class="col-md-5">
                    <form action="{{ route('events') }}">
                        <!-- Input Card -->
                        <div class="input-group">
                            <input type="text" value="{{ request('search') }}" name="search"
                                   class="form-control tw-rounded-l-xl"
                                   placeholder="Search articles"
                                   aria-label="Search events">
                            <button type="submit" class="btn btn-warning  tw-rounded-r-xl"><i class="bi-search"></i>
                            </button>
                        </div>
                        <!-- End Input Card -->
                    </form>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->


            <div class="row mb-7 justify-content-center">
                @forelse($events as $event)
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <!-- Card -->
                        <div class="card h-100 position-relative">
                            <div class="shape-container">
                                <img class=" h-250px w-100 rounded-3 tw-object-cover tw-object-top"
                                     src="{{ $event->image_url }}"
                                     alt="Image Description">

                            </div>


                            <!-- Card Body -->
                            <div class="card-body pt-2">
                                <h3 class="card-title">
                                    <a class="text-dark" href="" title=" {{ $event->name }}">
                                        {{ \Illuminate\Support\Str::of($event->name)->limit(50) }}
                                    </a>
                                </h3>

                                <p class="card-text">
                                    {{ $event->location }}
                                </p>
                                <p class="card-text text-danger fw-bold d-flex justify-content-between align-items-center">
                                    {{ optional($event->date)->format('d M Y') }}
                                    <a href="{{ route('events',['type'=>$event->type]) }}">
                                        <span
                                            class=" badge rounded-pill bg-{{ $event->typeColor }}">{{ $event->type }}</span>
                                    </a>
                                </p>
                                <p class="card-text text-muted">
                                    {{ $event->organizer }}
                                </p>
                            </div>
                            <!-- End Card Body -->

                        </div>
                        <!-- End Card -->
                    </div>
                @empty
                    <div class=" mb-4">
                        <div class="alert alert-info d-flex gap-3 align-items-center">
                            <h6 class="mb-0 ">
                                Oops!
                                Nothing found to show here.
                            </h6>
                        </div>
                    </div>
                @endforelse
            </div>
            <!-- End Row -->

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <div class="pagination justify-content-end">
                    {{ $events->links() }}
                </div>
            </nav>
            <!-- End Pagination -->
        </div>
        <!-- End Card Grid -->
    </main>
@endsection
