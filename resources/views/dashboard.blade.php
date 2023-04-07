<x-app-layout>
    @section('content')
        <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="page-header-title">Dashboard</h1>

                        </div>
                        <!-- End Col -->


                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Page Header -->

                <!-- Stats -->
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <a class="card card-hover-shadow h-100" href="#">
                            <div class="card-body">
                                <h6 class="card-subtitle">Total Products</h6>

                                <div class="row align-items-center gx-2 mb-1">
                                    <div class="col-6">
                                        <h2 class="card-title text-inherit">{{ $projects }}</h2>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->

                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <a class="card card-hover-shadow h-100" href="#">
                            <div class="card-body">
                                <h6 class="card-subtitle">Total Services</h6>

                                <div class="row align-items-center gx-2 mb-1">
                                    <div class="col-6">
                                        <h2 class="card-title text-inherit">{{ $services }}</h2>
                                    </div>
                                    <!-- End Col -->

                                </div>
                                <!-- End Row -->

                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <a class="card card-hover-shadow h-100" href="#">
                            <div class="card-body">
                                <h6 class="card-subtitle">Total Portfolios</h6>

                                <div class="row align-items-center gx-2 mb-1">
                                    <div class="col-6">
                                        <h2 class="card-title text-inherit">{{ $portfolios }}</h2>
                                    </div>
                                    <!-- End Col -->

                                </div>
                                <!-- End Row -->


                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <a class="card card-hover-shadow h-100" href="#">
                            <div class="card-body">
                                <h6 class="card-subtitle">Total Blogs</h6>

                                <div class="row align-items-center gx-2 mb-1">
                                    <div class="col-6">
                                        <h2 class="card-title text-inherit">{{ $blogs }}</h2>
                                    </div>
                                    <!-- End Col -->

                                </div>
                                <!-- End Row -->


                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Stats -->

                <div class="row">
                    <div class="col-lg-4 mb-3 mb-lg-5">
                        <div class="d-grid gap-2 gap-lg-4">
                            <!-- Card -->
                            <a class="card card-hover-shadow" href="{{ route('product_new') }}">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg avatar-4x3"
                                                src="./assets/svg/illustrations/oc-megaphone.svg" alt="Image Description"
                                                style="min-height: 5rem;" data-hs-theme-appearance="default">
                                            <img class="avatar avatar-lg avatar-4x3"
                                                src="./assets/svg/illustrations-light/oc-megaphone.svg"
                                                alt="Image Description" style="min-height: 5rem;"
                                                data-hs-theme-appearance="dark">
                                        </div>

                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="text-inherit mb-1">Product</h3>
                                            <span class="text-body">Create a new product</span>
                                        </div>

                                        <div class="ms-2 text-end">
                                            <i class="bi-chevron-right text-body text-inherit"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="card card-hover-shadow" href="{{ route('services_new') }}">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg avatar-4x3"
                                                src="./assets/svg/illustrations/oc-collection.svg" alt="Image Description"
                                                style="min-height: 5rem;" data-hs-theme-appearance="default">
                                            <img class="avatar avatar-lg avatar-4x3"
                                                src="./assets/svg/illustrations-light/oc-collection.svg"
                                                alt="Image Description" style="min-height: 5rem;"
                                                data-hs-theme-appearance="dark">
                                        </div>

                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="text-inherit mb-1">Service</h3>
                                            <span class="text-body">Create a new service</span>
                                        </div>

                                        <div class="ms-2 text-end">
                                            <i class="bi-chevron-right text-body text-inherit"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="card card-hover-shadow" href="">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg avatar-4x3"
                                                src="./assets/svg/illustrations/oc-project-development.svg"
                                                alt="Image Description" style="min-height: 5rem;"
                                                data-hs-theme-appearance="default">
                                            <img class="avatar avatar-lg avatar-4x3"
                                                src="./assets/svg/illustrations-light/oc-project-development.svg"
                                                alt="Image Description" style="min-height: 5rem;"
                                                data-hs-theme-appearance="dark">
                                        </div>

                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="text-inherit mb-1">Portfolio</h3>
                                            <span class="text-body">Create a new portfolio</span>
                                        </div>

                                        <div class="ms-2 text-end">
                                            <i class="bi-chevron-right text-body text-inherit"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                    </div>
                    <div class="col-lg-8 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card h-100">
                            <!-- Header -->
                            <div class="card-header card-header-content-between">
                                <h4 class="card-header-title">Latest products</h4>

                                <!-- Dropdown -->
                                <div class="dropdown">

                                </div>
                                <!-- End Dropdown -->
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body card-body-height">
                                <ul class="list-group list-group-flush list-group-no-gutters">

                                    @foreach ($prods as $prod)
                                        <!-- List Item -->
                                        <li class="list-group-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                                        <span
                                                            class="avatar-initials">{{ substr($prod->title, 0, 1) }}</span>
                                                    </div>
                                                    <!-- End Avatar -->
                                                </div>

                                                <div class="flex-grow-1 ms-3">
                                                    <div class="row">
                                                        <div class="col-7 col-md-5 order-md-1">
                                                            <h5 class="mb-0">{{ $prod->title }}</h5>
                                                            {{--  <span class="fs-6 text-body">Transfer to bank account</span>  --}}
                                                        </div>

                                                        <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                                                            <h5 class="mb-0">{{ $prod->price }} USD</h5>
                                                            <span class="fs-6 text-body">

                                                                {{ Carbon\Carbon::parse($prod->created_at)->format('h:m A  d M Y') }}

                                                            </span>
                                                        </div>

                                                        <div class="col-auto col-md-3 order-md-2">
                                                            @if ($prod->status == 0)
                                                                <span
                                                                    class="badge bg-soft-warning text-warning rounded-pill">Not
                                                                    Active</span>
                                                            @else
                                                                <span
                                                                    class="badge bg-soft-warning text-success rounded-pill">
                                                                    Active</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End List Item -->
                                    @endforeach
                                    <!-- End List Item -->
                                </ul>
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
                    </div>

                    <!-- End Row -->

                </div>
                <!-- End Card -->


            </div>
            <!-- End Content -->

            <!-- Footer -->

            <div class="footer">
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022
                                Htmlstream.</span>
                        </p>
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
        <!-- ========== END MAIN CONTENT ========== -->
    @endsection
</x-app-layout>
