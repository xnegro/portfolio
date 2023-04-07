<x-app-layout>
    @section('content')
        <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-no-gutter">
                                    <li class="breadcrumb-item"><a class="breadcrumb-link"
                                            href="{{ route('portfolios') }}">Portfolios</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Portfolio</li>
                                </ol>
                            </nav>

                            <h1 class="page-header-title">Edit Portfolio</h1>


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Page Header -->

                <div class="row">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <!-- Card -->
                        <div class="card mb-3 mb-lg-5">
                            <!-- Header -->
                            <div class="card-header">
                                <h4 class="card-header-title">Portfolio information</h4>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <form action="/portfolio/{{ $id->id }}/update" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                <div class="card-body">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="productNameLabel" class="form-label">Title <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Products are the goods or services you sell."></i></label>

                                        <input type="text" class="form-control" name="title" id="productNameLabel"
                                            placeholder="Facebook Posts,etc." aria-label="Facebook Posts, etc."
                                            value="{{ $id->title }}">
                                    </div>
                                    <!-- End Form -->
                                    <div class="mb-4">
                                        <label for="productNameLabel" class="form-label">Sub Text <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Products are the goods or services you sell."></i></label>

                                        <input type="text" class="form-control" name="sub_title" id="productNameLabel"
                                            placeholder="Facebook Posts,etc." aria-label="Facebook Posts, etc."
                                            value="{{ $id->sub_title }}">
                                    </div>
                                    <!-- End Col -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <link rel="stylesheet"
                                                    href="/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
                                                <!-- Form Switch -->
                                                <label class="row form-check form-switch" for="availabilitySwitch1">
                                                    <span class="col-8 col-sm-9 ms-0">
                                                        <span class="text-dark">Availability <i
                                                                class="bi-question-circle text-body ms-1"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Serivce availability switch toggler."></i></span>
                                                    </span>
                                                    <span class="col-4 col-sm-3 text-end">
                                                        <input name="status"
                                                            @if ($id->status == 1) checked @endif type="checkbox"
                                                            class="form-check-input" id="availabilitySwitch1">
                                                    </span>
                                                </label>
                                                <!-- End Form Switch -->

                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <!-- End Col -->
                                    </div>

                                    <!-- End Col -->
                                    <!-- End Row -->

                                    <div class="mb-4">
                                        <label for="productNameLabel" class="form-label">Link <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Products are the goods or services you sell."></i></label>

                                        <input type="text" class="form-control" name="link" id="productNameLabel"
                                            placeholder="link." aria-label="Facebook Posts, etc."
                                            value="{{ $id->link }}">
                                    </div>
                                    <!-- End Col -->

                                    <!-- End Quill -->
                                </div>
                                <!-- Body -->
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-3 mb-lg-5">
                            <!-- Header -->
                            <div class="card-header card-header-content-between">
                                <h4 class="card-header-title">Media</h4>


                            </div>
                            <!-- End Header -->

                            <!-- Body -->

                            <input type="file" name="cover" class="form-control" accept="image/*" multiple>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <!-- Body -->
                        </div>
                        <!-- End Card -->
                    </div>

                    </form>

                </div>
                <!-- Body -->
            </div>
            <!-- End Card -->
            </div>
            <!-- End Col -->


            <!-- End Col -->
            </div>
            <!-- End Row -->


            </div>
            <!-- End Content -->



            <!-- End Footer -->
        </main>
    @endsection
</x-app-layout>
