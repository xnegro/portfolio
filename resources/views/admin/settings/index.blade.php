<x-app-layout>
    @section('content')
        <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-sm mb-2 mb-sm-0">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-no-gutter">

                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                </ol>
                            </nav>

                            <h1 class="page-header-title">Settings</h1>
                        </div>
                        <!-- End Col -->


                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Page Header -->

                <div class="row">
                    <div class="col-lg-3">
                        <!-- Navbar -->
                        <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                            <!-- Navbar Toggle -->
                            <!-- Navbar Toggle -->
                            <div class="d-grid">
                                <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
                                    data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation"
                                    aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                                    <span class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark">Menu</span>

                                        <span class="navbar-toggler-default">
                                            <i class="bi-list"></i>
                                        </span>

                                        <span class="navbar-toggler-toggled">
                                            <i class="bi-x"></i>
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <!-- End Navbar Toggle -->
                            <!-- End Navbar Toggle -->

                            <!-- Navbar Collapse -->
                            <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                                <ul id="navbarSettings"
                                    class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical"
                                    data-hs-sticky-block-options='{
                     "parentSelector": "#navbarVerticalNavMenu",
                     "targetSelector": "#header",
                     "breakpoint": "lg",
                     "startPoint": "#navbarVerticalNavMenu",
                     "endPoint": "#stickyBlockEndPoint",
                     "stickyOffsetTop": 20
                   }'>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#content">
                                            <i class="bi-person nav-icon"></i> Basic information
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#General">
                                            <i class="bi-gear nav-icon"></i> General
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- End Navbar Collapse -->
                        </div>
                        <!-- End Navbar -->
                    </div>


                    <div class="col-lg-9">
                        @if (Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}
                            </p>
                        @endif
                        <div class="d-grid gap-3 gap-lg-5">
                            <!-- Card -->
                            <div class="card">
                                <!-- Profile Cover -->
                                <div class="profile-cover">
                                    <div class="profile-cover-img-wrapper">
                                        <img id="profileCoverImg" class="profile-cover-img"
                                            src="./assets/img/1920x400/img2.jpg" alt="Image Description">

                                        <!-- Custom File Cover -->
                                        <div class="profile-cover-content profile-cover-uploader p-3">
                                            <input type="file" class="js-file-attach profile-cover-uploader-input"
                                                id="profileCoverUplaoder"
                                                data-hs-file-attach-options='{
                                "textTarget": "#profileCoverImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>

                                        </div>
                                        <!-- End Custom File Cover -->
                                    </div>
                                </div>
                                <!-- End Profile Cover -->
                                <!-- Form -->
                                <form method="POST" action="{{ route('settings_update_info') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- Avatar -->
                                    <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar"
                                        for="editAvatarUploaderModal">
                                        <img id="editAvatarImgModal" class="avatar-img"
                                            src="{{ auth()->user()->profile_photo_path }}" alt="Image Description">

                                        <input type="file" name="photo" class="js-file-attach avatar-uploader-input"
                                            id="editAvatarUploaderModal"
                                            data-hs-file-attach-options='{
                            "textTarget": "#editAvatarImgModal",
                            "mode": "image",
                            "targetAttr": "src",
                            "allowTypes": [".png", ".jpeg", ".jpg"]
                         }'>

                                        <span class="avatar-uploader-trigger">
                                            <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                                        </span>
                                    </label>
                                    <!-- End Avatar -->

                                    <!-- Body -->
                                    <div class="card-body">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <style>
                                            li {
                                                list-style: none;
                                            }
                                        </style>
                                        <!-- End Body -->
                                    </div>
                                    <!-- End Card -->

                                    <!-- Card -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title h4">Basic information</h2>
                                        </div>

                                        <!-- Body -->
                                        <div class="card-body">

                                            <!-- Form -->
                                            <div class="row mb-4">
                                                <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full
                                                    name <i class="bi-question-circle text-body ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Displayed on public forums, such as Front."></i></label>

                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-sm-vertical">
                                                        <input type="text" class="form-control" name="name"
                                                            id="firstNameLabel" placeholder="Your first name"
                                                            aria-label="Your first name" value="{{ auth()->user()->name }}">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form -->

                                            <!-- Form -->
                                            <div class="row mb-4">
                                                <label for="emailLabel"
                                                    class="col-sm-3 col-form-label form-label">Email</label>

                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email"
                                                        id="emailLabel" placeholder="Email" aria-label="Email"
                                                        value="{{ auth()->user()->email }}">
                                                </div>
                                            </div>
                                            <!-- End Form -->

                                            <!-- Form -->
                                            <div class="row mb-4">
                                                <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone
                                                    <span class="form-label-secondary">(Optional)</span></label>

                                                <div class="col-sm-9">
                                                    <input type="text" class="js-input-mask form-control"
                                                        name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx"
                                                        aria-label="+x(xxx)xxx-xx-xx" value="{{ auth()->user()->phone }}"
                                                        data-hs-mask-options='{
                               "mask": "+0(000)000-00-00"
                             }'>
                                                </div>
                                            </div>
                                            <!-- End Form -->



                                            <!-- Form -->
                                            <div class="row mb-4">
                                                <label for="departmentLabel"
                                                    class="col-sm-3 col-form-label form-label">Password</label>

                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="password"
                                                        id="departmentLabel" placeholder="Password">
                                                </div>
                                            </div>
                                            <!-- End Form -->


                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div id="General" class="card">
                            <div class="card-header">
                                <h4 class="card-title">General </h4>
                            </div>

                            <!-- Body -->
                            <div class="card-body">

                                <!-- Form -->
                                @foreach ($setts as $sett)
                                    <form method="post" action="{{ route('settings_update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel"
                                                class="col-sm-3 col-form-label form-label">Logo</label>

                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="logo"
                                                    id="newEmailLabel" placeholder="About Content"
                                                    aria-label="Enter new email address">
                                            </div>
                                        </div>
                                        <!-- End Form -->
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel"
                                                class="col-sm-3 col-form-label form-label">Title</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title"
                                                    id="newEmailLabel" placeholder="Enter new title"
                                                    aria-label="Enter new email address" value="{{ $sett->title }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel"
                                                class="col-sm-3 col-form-label form-label">Email</label>

                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email"
                                                    id="newEmailLabel" placeholder="Enter new email"
                                                    aria-label="Enter new email address" value="{{ $sett->email }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->



                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel"
                                                class="col-sm-3 col-form-label form-label">Phone</label>

                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="phone"
                                                    id="newEmailLabel" placeholder="+x(xxx)xxx-xx-xx"
                                                    aria-label="Enter new email address" value="{{ $sett->phone }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->



                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel"
                                                class="col-sm-3 col-form-label form-label">Map</label>

                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" name="map"
                                                    id="newEmailLabel" placeholder="Google map"
                                                    aria-label="Enter new email address" value="{{ $sett->map }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->



                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Home
                                                main text</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="home_ftext"
                                                    id="newEmailLabel" placeholder="Home main text"
                                                    aria-label="Enter new email address" value="{{ $sett->home_ftext }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->



                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Home
                                                sub-text</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="home_stext"
                                                    id="newEmailLabel" placeholder="Home sub-text"
                                                    aria-label="Enter new email address" value="{{ $sett->home_stext }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->


                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">About
                                                main text</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="about_ftext"
                                                    id="newEmailLabel" placeholder="About main text"
                                                    aria-label="Enter new email address"
                                                    value="{{ $sett->about_ftext }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">About
                                                sub-text</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="about_stext"
                                                    id="newEmailLabel" placeholder="About sub-text"
                                                    aria-label="Enter new email address"
                                                    value="{{ $sett->about_stext }}">
                                            </div>
                                        </div>
                                        <!-- End Form -->




                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">About
                                                Content</label>

                                            <div class="col-sm-9">


                                                <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

                                                <!-- Quill -->
                                                <textarea name="about_content" id="editor" cols="30" rows="10">{{ $sett->about_content }}</textarea>

                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#editor'), {
                                                            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                                                                'undo', 'redo'
                                                            ],
                                                            heading: {
                                                                options: [{
                                                                        model: 'paragraph',
                                                                        title: 'Paragraph',
                                                                        class: 'ck-heading_paragraph'
                                                                    },
                                                                    {
                                                                        model: 'heading1',
                                                                        view: 'h1',
                                                                        title: 'Heading 1',
                                                                        class: 'ck-heading_heading1'
                                                                    },
                                                                    {
                                                                        model: 'heading2',
                                                                        view: 'h2',
                                                                        title: 'Heading 2',
                                                                        class: 'ck-heading_heading2'
                                                                    }
                                                                ]
                                                            }
                                                        })
                                                        .catch(error => {
                                                            console.log(error);
                                                        });
                                                </script>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">About
                                                Image</label>

                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="about_img"
                                                    id="newEmailLabel" placeholder="About Content"
                                                    aria-label="Enter new email address">
                                            </div>
                                        </div>
                                        <!-- End Form -->





                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                @endforeach
                                <!-- End Form -->
                            </div>
                            <!-- End Body -->
                        </div>

                        <!-- End Card -->
                    </div>

                    <!-- Sticky Block End Point -->
                    <div id="stickyBlockEndPoint"></div>
                </div>
            </div>
            <!-- End Row -->
            </div>
            <!-- End Content -->

            <!-- Footer -->


            <!-- End Footer -->
        </main>
        <!-- ========== END MAIN CONTENT ========== -->
    @endsection
</x-app-layout>
