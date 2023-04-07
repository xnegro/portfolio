<x-app-layout>
    @section('content')
        <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="content container-fluid">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">

                        <!-- Tab Content -->
                        <div class="tab-content" id="projectsTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                @if (Session::has('message'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                        {{ Session::get('message') }}</p>
                                @endif
                                <div class="row row-cols-1 row-cols-md-2">
                                    @foreach ($clients as $client)
                                        <div class="col mb-3 mb-lg-5">
                                            <!-- Card -->
                                            <div class="card card-hover-shadow text-center h-100">
                                                <div class="card-progress-wrap">
                                                    <!-- Progress -->
                                                    <div class="progress card-progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <!-- End Progress -->
                                                </div>

                                                <!-- Body -->
                                                <div class="card-body">
                                                    <div class="row align-items-center text-start mb-4">
                                                        <div class="col">
                                                            <span
                                                                class="badge bg-soft-secondary text-secondary p-2">Partner</span>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col-auto">
                                                            <!-- Dropdown -->
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle"
                                                                    id="projectsGridDropdown8" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="bi-three-dots-vertical"></i>
                                                                </button>

                                                                <div class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="projectsGridDropdown8">

                                                                    <a class="dropdown-item text-danger"
                                                                        href="/client/{{ $client->id }}/delete">Delete</a>
                                                                </div>
                                                            </div>
                                                            <!-- End Dropdown -->
                                                        </div>
                                                        <!-- End Col -->
                                                    </div>

                                                    <div class="d-flex justify-content-center mb-2">
                                                        <!-- Avatar -->
                                                        <img class="avatar avatar-lg" src="{{ $client->img }}"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="mb-4">
                                                        <h2 class="mb-1">{{ $client->title }}</h2>

                                                        <span class="fs-5">
                                                            {{ Carbon\Carbon::parse($client->created_at)->format('h:m A  d M Y') }}</span>
                                                    </div>


                                                </div>
                                                <!-- End Body -->
                                                <a class="stretched-link" href="{{ $client->link }}"></a>


                                            </div>
                                            <!-- End Card -->
                                        </div>
                                    @endforeach
                                </div>
                                <!-- End Row -->
                            </div>

                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Content -->

            <!-- Footer -->

            <div class="footer">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022
                                Htmlstream.</span></p>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                        <div class="d-flex justify-content-end">
                            <!-- List Separator -->
                            <ul class="list-inline list-separator">
                                <li class="list-inline-item">
                                    <a class="list-separator-link" href="#">FAQ</a>
                                </li>

                                <li class="list-inline-item">
                                    <a class="list-separator-link" href="#">License</a>
                                </li>

                                <li class="list-inline-item">
                                    <!-- Keyboard Shortcuts Toggle -->
                                    <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle"
                                        type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasKeyboardShortcuts"
                                        aria-controls="offcanvasKeyboardShortcuts">
                                        <i class="bi-command"></i>
                                    </button>
                                    <!-- End Keyboard Shortcuts Toggle -->
                                </li>
                            </ul>
                            <!-- End List Separator -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <!-- End Footer -->
        </main>
    @endsection
</x-app-layout>
