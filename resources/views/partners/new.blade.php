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
                                            href="{{ route('partners') }}">Partners</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">New Partner</li>
                                </ol>
                            </nav>

                            <h1 class="page-header-title">New Partner</h1>


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
                                <h4 class="card-header-title">Partner information</h4>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <form action="/partner/store" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="productNameLabel" class="form-label">Title <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Products are the goods or services you sell."></i></label>

                                        <input type="text" class="form-control" name="title" id="productNameLabel"
                                            placeholder="Netflix" aria-label="Facebook Posts, etc.">
                                    </div>
                                    <!-- End Form -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="productNameLabel" class="form-label">Link <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Products are the goods or services you sell."></i></label>

                                        <input type="text" class="form-control" name="link" id="productNameLabel"
                                            placeholder="http://">
                                    </div>
                                    <!-- End Form -->


                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="productNameLabel" class="form-label">Logo<i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Products are the goods or services you sell."></i></label>

                                        <input type="file" name="logo" class="form-control" accept="image/*" multiple>
                                    </div>


                                    <!-- End Quill -->
                                </div>
                                <!-- Body -->
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-3 mb-lg-5">



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
