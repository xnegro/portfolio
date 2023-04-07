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
                                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Account</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                </ol>
                            </nav>

                            <h1 class="page-header-title">Settings</h1>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                            <a class="btn btn-primary" href="./user-profile-my-profile.html">
                                <i class="bi-person-fill me-1"></i> My profile
                            </a>
                        </div>
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
                                        <a class="nav-link" href="#emailSection">
                                            <i class="bi-at nav-icon"></i> Email
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#passwordSection">
                                            <i class="bi-key nav-icon"></i> Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#preferencesSection">
                                            <i class="bi-gear nav-icon"></i> Preferences
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#twoStepVerificationSection">
                                            <i class="bi-shield-lock nav-icon"></i> Two-step verification
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#recentDevicesSection">
                                            <i class="bi-phone nav-icon"></i> Recent devices
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#notificationsSection">
                                            <i class="bi-bell nav-icon"></i> Notifications
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#connectedAccountsSection">
                                            <i class="bi-diagram-3 nav-icon"></i> Connected accounts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#socialAccountsSection">
                                            <i class="bi-instagram nav-icon"></i> Social accounts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#deleteAccountSection">
                                            <i class="bi-trash nav-icon"></i> Delete account
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Navbar Collapse -->
                        </div>
                        <!-- End Navbar -->
                    </div>

                    <div class="col-lg-9">
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
                                            <label class="profile-cover-uploader-label btn btn-sm btn-white"
                                                for="profileCoverUplaoder">
                                                <i class="bi-camera-fill"></i>
                                                <span class="d-none d-sm-inline-block ms-1">Upload header</span>
                                            </label>
                                        </div>
                                        <!-- End Custom File Cover -->
                                    </div>
                                </div>
                                <!-- End Profile Cover -->

                                <!-- Avatar -->
                                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar"
                                    for="editAvatarUploaderModal">
                                    <img id="editAvatarImgModal" class="avatar-img" src="./assets/img/160x160/img6.jpg"
                                        alt="Image Description">

                                    <input type="file" class="js-file-attach avatar-uploader-input"
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
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <span class="d-block fs-5 mb-2">Who can see your profile photo? <i
                                                    class="bi-question-circle" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Your visibility setting only applies to your profile photo. Your header image is always visible to anyone."></i></span>

                                            <!-- Select -->
                                            <div class="tom-select-custom">
                                                <select class="js-select form-select"
                                                    data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "dropdownWidth": "auto"
                              }'>
                                                    <option value="privacy1"
                                                        data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><i class="bi-globe"></i></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semibold">Anyone</span><span class="tom-select-custom-hide small">Visible to anyone who can view your content. Accessible by installed apps.</span></div></div>'>
                                                        Anyone</option>
                                                    <option value="privacy2"
                                                        data-option-template='<div class="d-flex align-items-start"><div class="flex-shrink-0"><i class="bi-lock"></i></div><div class="flex-grow-1 ms-2"><span class="d-block fw-semibold">Only you</span><span class="tom-select-custom-hide small">Only visible to you.</span></div></div>'>
                                                        Only you</option>
                                                </select>
                                            </div>
                                            <!-- End Select -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->
                                </div>
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
                                    <form>
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full
                                                name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Displayed on public forums, such as Front."></i></label>

                                            <div class="col-sm-9">
                                                <div class="input-group input-group-sm-vertical">
                                                    <input type="text" class="form-control" name="firstName"
                                                        id="firstNameLabel" placeholder="Your first name"
                                                        aria-label="Your first name" value="Mark">
                                                    <input type="text" class="form-control" name="lastName"
                                                        id="lastNameLabel" placeholder="Your last name"
                                                        aria-label="Your last name" value="Williams">
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
                                                    value="mark@site.com">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Phone <span
                                                    class="form-label-secondary">(Optional)</span></label>

                                            <div class="col-sm-9">
                                                <input type="text" class="js-input-mask form-control" name="phone"
                                                    id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx"
                                                    aria-label="+x(xxx)xxx-xx-xx" value="+1 (609) 972-22-22"
                                                    data-hs-mask-options='{
                               "mask": "+0(000)000-00-00"
                             }'>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="organizationLabel"
                                                class="col-sm-3 col-form-label form-label">Organization</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="organization"
                                                    id="organizationLabel" placeholder="Your organization"
                                                    aria-label="Your organization" value="Htmlstream">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="departmentLabel"
                                                class="col-sm-3 col-form-label form-label">Department</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="department"
                                                    id="departmentLabel" placeholder="Your department"
                                                    aria-label="Your department">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div id="accountType" class="row mb-4">
                                            <label class="col-sm-3 col-form-label form-label">Account type</label>

                                            <div class="col-sm-9">
                                                <div class="input-group input-group-sm-vertical">
                                                    <!-- Radio Check -->
                                                    <label class="form-control" for="userAccountTypeRadio1">
                                                        <span class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                name="userAccountTypeRadio" id="userAccountTypeRadio1"
                                                                checked>
                                                            <span class="form-check-label">Individual</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Radio Check -->

                                                    <!-- Radio Check -->
                                                    <label class="form-control" for="userAccountTypeRadio2">
                                                        <span class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                name="userAccountTypeRadio" id="userAccountTypeRadio2">
                                                            <span class="form-check-label">Company</span>
                                                        </span>
                                                    </label>
                                                    <!-- End Radio Check -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="locationLabel"
                                                class="col-sm-3 col-form-label form-label">Location</label>

                                            <div class="col-sm-9">
                                                <!-- Select -->
                                                <div class="tom-select-custom mb-4">
                                                    <select class="js-select form-select" id="locationLabel">
                                                        <option value="AF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>
                                                            Afghanistan</option>
                                                        <option value="AX"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>
                                                            Aland Islands</option>
                                                        <option value="AL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>
                                                            Albania</option>
                                                        <option value="DZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>
                                                            Algeria</option>
                                                        <option value="AS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>
                                                            American Samoa</option>
                                                        <option value="AD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>
                                                            Andorra</option>
                                                        <option value="AO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>
                                                            Angola</option>
                                                        <option value="AI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>
                                                            Anguilla</option>
                                                        <option value="AG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>
                                                            Antigua and Barbuda</option>
                                                        <option value="AR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>
                                                            Argentina</option>
                                                        <option value="AM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>
                                                            Armenia</option>
                                                        <option value="AW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>
                                                            Aruba</option>
                                                        <option value="AU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>
                                                            Australia</option>
                                                        <option value="AT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>
                                                            Austria</option>
                                                        <option value="AZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>
                                                            Azerbaijan</option>
                                                        <option value="BS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>
                                                            Bahamas</option>
                                                        <option value="BH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>
                                                            Bahrain</option>
                                                        <option value="BD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>
                                                            Bangladesh</option>
                                                        <option value="BB"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>
                                                            Barbados</option>
                                                        <option value="BY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>
                                                            Belarus</option>
                                                        <option value="BE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>
                                                            Belgium</option>
                                                        <option value="BZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>
                                                            Belize</option>
                                                        <option value="BJ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>
                                                            Benin</option>
                                                        <option value="BM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>
                                                            Bermuda</option>
                                                        <option value="BT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>
                                                            Bhutan</option>
                                                        <option value="BO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>
                                                            Bolivia (Plurinational State of)</option>
                                                        <option value="BQ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>
                                                            Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>
                                                            Bosnia and Herzegovina</option>
                                                        <option value="BW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>
                                                            Botswana</option>
                                                        <option value="BR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>
                                                            Brazil</option>
                                                        <option value="IO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>
                                                            British Indian Ocean Territory</option>
                                                        <option value="BN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>
                                                            Brunei Darussalam</option>
                                                        <option value="BG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>
                                                            Bulgaria</option>
                                                        <option value="BF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>
                                                            Burkina Faso</option>
                                                        <option value="BI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>
                                                            Burundi</option>
                                                        <option value="CV"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>
                                                            Cabo Verde</option>
                                                        <option value="KH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>
                                                            Cambodia</option>
                                                        <option value="CM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>
                                                            Cameroon</option>
                                                        <option value="CA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>
                                                            Canada</option>
                                                        <option value="KY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>
                                                            Cayman Islands</option>
                                                        <option value="CF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>
                                                            Central African Republic</option>
                                                        <option value="TD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>
                                                            Chad</option>
                                                        <option value="CL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>
                                                            Chile</option>
                                                        <option value="CN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>
                                                            China</option>
                                                        <option value="CX"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>
                                                            Christmas Island</option>
                                                        <option value="CC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>
                                                            Cocos (Keeling) Islands</option>
                                                        <option value="CO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>
                                                            Colombia</option>
                                                        <option value="KM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>
                                                            Comoros</option>
                                                        <option value="CK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>
                                                            Cook Islands</option>
                                                        <option value="CR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>
                                                            Costa Rica</option>
                                                        <option value="HR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>
                                                            Croatia</option>
                                                        <option value="CU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>
                                                            Cuba</option>
                                                        <option value="CW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>
                                                            Curaçao</option>
                                                        <option value="CY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>
                                                            Cyprus</option>
                                                        <option value="CZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>
                                                            Czech Republic</option>
                                                        <option value="CI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>
                                                            Côte d'Ivoire</option>
                                                        <option value="CD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>
                                                            Democratic Republic of the Congo</option>
                                                        <option value="DK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>
                                                            Denmark</option>
                                                        <option value="DJ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>
                                                            Djibouti</option>
                                                        <option value="DM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>
                                                            Dominica</option>
                                                        <option value="DO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>
                                                            Dominican Republic</option>
                                                        <option value="EC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>
                                                            Ecuador</option>
                                                        <option value="EG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>
                                                            Egypt</option>
                                                        <option value="SV"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>
                                                            El Salvador</option>
                                                        <option value="GB-ENG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>
                                                            England</option>
                                                        <option value="GQ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>
                                                            Equatorial Guinea</option>
                                                        <option value="ER"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>
                                                            Eritrea</option>
                                                        <option value="EE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>
                                                            Estonia</option>
                                                        <option value="ET"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>
                                                            Ethiopia</option>
                                                        <option value="FK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>
                                                            Falkland Islands</option>
                                                        <option value="FO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>
                                                            Faroe Islands</option>
                                                        <option value="FM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>
                                                            Federated States of Micronesia</option>
                                                        <option value="FJ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>
                                                            Fiji</option>
                                                        <option value="FI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>
                                                            Finland</option>
                                                        <option value="FR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>
                                                            France</option>
                                                        <option value="GF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>
                                                            French Guiana</option>
                                                        <option value="PF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>
                                                            French Polynesia</option>
                                                        <option value="TF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>
                                                            French Southern Territories</option>
                                                        <option value="GA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>
                                                            Gabon</option>
                                                        <option value="GM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>
                                                            Gambia</option>
                                                        <option value="GE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>
                                                            Georgia</option>
                                                        <option value="DE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>
                                                            Germany</option>
                                                        <option value="GH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>
                                                            Ghana</option>
                                                        <option value="GI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>
                                                            Gibraltar</option>
                                                        <option value="GR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>
                                                            Greece</option>
                                                        <option value="GL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>
                                                            Greenland</option>
                                                        <option value="GD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>
                                                            Grenada</option>
                                                        <option value="GP"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>
                                                            Guadeloupe</option>
                                                        <option value="GU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>
                                                            Guam</option>
                                                        <option value="GT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>
                                                            Guatemala</option>
                                                        <option value="GG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>
                                                            Guernsey</option>
                                                        <option value="GN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>
                                                            Guinea</option>
                                                        <option value="GW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>
                                                            Guinea-Bissau</option>
                                                        <option value="GY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>
                                                            Guyana</option>
                                                        <option value="HT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>
                                                            Haiti</option>
                                                        <option value="VA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>
                                                            Holy See</option>
                                                        <option value="HN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>
                                                            Honduras</option>
                                                        <option value="HK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>
                                                            Hong Kong</option>
                                                        <option value="HU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>
                                                            Hungary</option>
                                                        <option value="IS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>
                                                            Iceland</option>
                                                        <option value="IN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>
                                                            India</option>
                                                        <option value="ID"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>
                                                            Indonesia</option>
                                                        <option value="IR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>
                                                            Iran (Islamic Republic of)</option>
                                                        <option value="IQ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>
                                                            Iraq</option>
                                                        <option value="IE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>
                                                            Ireland</option>
                                                        <option value="IM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>
                                                            Isle of Man</option>
                                                        <option value="IL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>
                                                            Israel</option>
                                                        <option value="IT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>
                                                            Italy</option>
                                                        <option value="JM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>
                                                            Jamaica</option>
                                                        <option value="JP"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>
                                                            Japan</option>
                                                        <option value="JE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>
                                                            Jersey</option>
                                                        <option value="JO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>
                                                            Jordan</option>
                                                        <option value="KZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>
                                                            Kazakhstan</option>
                                                        <option value="KE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>
                                                            Kenya</option>
                                                        <option value="KI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>
                                                            Kiribati</option>
                                                        <option value="KW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>
                                                            Kuwait</option>
                                                        <option value="KG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>
                                                            Kyrgyzstan</option>
                                                        <option value="LA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>
                                                            Laos</option>
                                                        <option value="LV"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>
                                                            Latvia</option>
                                                        <option value="LB"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>
                                                            Lebanon</option>
                                                        <option value="LS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>
                                                            Lesotho</option>
                                                        <option value="LR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>
                                                            Liberia</option>
                                                        <option value="LY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>
                                                            Libya</option>
                                                        <option value="LI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>
                                                            Liechtenstein</option>
                                                        <option value="LT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>
                                                            Lithuania</option>
                                                        <option value="LU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>
                                                            Luxembourg</option>
                                                        <option value="MO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>
                                                            Macau</option>
                                                        <option value="MG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>
                                                            Madagascar</option>
                                                        <option value="MW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>
                                                            Malawi</option>
                                                        <option value="MY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>
                                                            Malaysia</option>
                                                        <option value="MV"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>
                                                            Maldives</option>
                                                        <option value="ML"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>
                                                            Mali</option>
                                                        <option value="MT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>
                                                            Malta</option>
                                                        <option value="MH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>
                                                            Marshall Islands</option>
                                                        <option value="MQ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>
                                                            Martinique</option>
                                                        <option value="MR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>
                                                            Mauritania</option>
                                                        <option value="MU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>
                                                            Mauritius</option>
                                                        <option value="YT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>
                                                            Mayotte</option>
                                                        <option value="MX"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>
                                                            Mexico</option>
                                                        <option value="MD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>
                                                            Moldova</option>
                                                        <option value="MC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>
                                                            Monaco</option>
                                                        <option value="MN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>
                                                            Mongolia</option>
                                                        <option value="ME"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>
                                                            Montenegro</option>
                                                        <option value="MS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>
                                                            Montserrat</option>
                                                        <option value="MA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>
                                                            Morocco</option>
                                                        <option value="MZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>
                                                            Mozambique</option>
                                                        <option value="MM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>
                                                            Myanmar</option>
                                                        <option value="NA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>
                                                            Namibia</option>
                                                        <option value="NR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>
                                                            Nauru</option>
                                                        <option value="NP"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>
                                                            Nepal</option>
                                                        <option value="NL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>
                                                            Netherlands</option>
                                                        <option value="NC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>
                                                            New Caledonia</option>
                                                        <option value="NZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>
                                                            New Zealand</option>
                                                        <option value="NI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>
                                                            Nicaragua</option>
                                                        <option value="NE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>
                                                            Niger</option>
                                                        <option value="NG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>
                                                            Nigeria</option>
                                                        <option value="NU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>
                                                            Niue</option>
                                                        <option value="NF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>
                                                            Norfolk Island</option>
                                                        <option value="KP"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>
                                                            North Korea</option>
                                                        <option value="MK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>
                                                            North Macedonia</option>
                                                        <option value="GB-NIR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>
                                                            Northern Ireland</option>
                                                        <option value="MP"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Mariana Islands Flag" /><span class="text-truncate">Northern Mariana Islands</span></span>'>
                                                            Northern Mariana Islands</option>
                                                        <option value="NO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>
                                                            Norway</option>
                                                        <option value="OM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>
                                                            Oman</option>
                                                        <option value="PK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>
                                                            Pakistan</option>
                                                        <option value="PW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>
                                                            Palau</option>
                                                        <option value="PA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>
                                                            Panama</option>
                                                        <option value="PG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>
                                                            Papua New Guinea</option>
                                                        <option value="PY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>
                                                            Paraguay</option>
                                                        <option value="PE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>
                                                            Peru</option>
                                                        <option value="PH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>
                                                            Philippines</option>
                                                        <option value="PN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>
                                                            Pitcairn</option>
                                                        <option value="PL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>
                                                            Poland</option>
                                                        <option value="PT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>
                                                            Portugal</option>
                                                        <option value="PR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>
                                                            Puerto Rico</option>
                                                        <option value="QA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>
                                                            Qatar</option>
                                                        <option value="CG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>
                                                            Republic of the Congo</option>
                                                        <option value="RO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>
                                                            Romania</option>
                                                        <option value="RU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>
                                                            Russia</option>
                                                        <option value="RW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>
                                                            Rwanda</option>
                                                        <option value="RE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>
                                                            Réunion</option>
                                                        <option value="BL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>
                                                            Saint Barthélemy</option>
                                                        <option value="SH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>
                                                            Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="KN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>
                                                            Saint Kitts and Nevis</option>
                                                        <option value="LC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>
                                                            Saint Lucia</option>
                                                        <option value="MF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>
                                                            Saint Martin</option>
                                                        <option value="PM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>
                                                            Saint Pierre and Miquelon</option>
                                                        <option value="VC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>
                                                            Saint Vincent and the Grenadines</option>
                                                        <option value="WS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>
                                                            Samoa</option>
                                                        <option value="SM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>
                                                            San Marino</option>
                                                        <option value="ST"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>
                                                            Sao Tome and Principe</option>
                                                        <option value="SA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>
                                                            Saudi Arabia</option>
                                                        <option value="GB-SCT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>
                                                            Scotland</option>
                                                        <option value="SN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>
                                                            Senegal</option>
                                                        <option value="RS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>
                                                            Serbia</option>
                                                        <option value="SC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>
                                                            Seychelles</option>
                                                        <option value="SL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>
                                                            Sierra Leone</option>
                                                        <option value="SG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>
                                                            Singapore</option>
                                                        <option value="SX"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>
                                                            Sint Maarten</option>
                                                        <option value="SK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>
                                                            Slovakia</option>
                                                        <option value="SI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>
                                                            Slovenia</option>
                                                        <option value="SB"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>
                                                            Solomon Islands</option>
                                                        <option value="SO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>
                                                            Somalia</option>
                                                        <option value="ZA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>
                                                            South Africa</option>
                                                        <option value="GS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>
                                                            South Georgia and the South Sandwich Islands</option>
                                                        <option value="KR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>
                                                            South Korea</option>
                                                        <option value="SS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>
                                                            South Sudan</option>
                                                        <option value="ES"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>
                                                            Spain</option>
                                                        <option value="LK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>
                                                            Sri Lanka</option>
                                                        <option value="PS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>
                                                            State of Palestine</option>
                                                        <option value="SD"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>
                                                            Sudan</option>
                                                        <option value="SR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>
                                                            Suriname</option>
                                                        <option value="SJ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>
                                                            Svalbard and Jan Mayen</option>
                                                        <option value="SZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>
                                                            Swaziland</option>
                                                        <option value="SE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>
                                                            Sweden</option>
                                                        <option value="CH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>
                                                            Switzerland</option>
                                                        <option value="SY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>
                                                            Syrian Arab Republic</option>
                                                        <option value="TW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>
                                                            Taiwan</option>
                                                        <option value="TJ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>
                                                            Tajikistan</option>
                                                        <option value="TZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>
                                                            Tanzania</option>
                                                        <option value="TH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>
                                                            Thailand</option>
                                                        <option value="TL"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>
                                                            Timor-Leste</option>
                                                        <option value="TG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>
                                                            Togo</option>
                                                        <option value="TK"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>
                                                            Tokelau</option>
                                                        <option value="TO"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>
                                                            Tonga</option>
                                                        <option value="TT"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>
                                                            Trinidad and Tobago</option>
                                                        <option value="TN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>
                                                            Tunisia</option>
                                                        <option value="TR"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>
                                                            Turkey</option>
                                                        <option value="TM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>
                                                            Turkmenistan</option>
                                                        <option value="TC"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>
                                                            Turks and Caicos Islands</option>
                                                        <option value="TV"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>
                                                            Tuvalu</option>
                                                        <option value="UG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>
                                                            Uganda</option>
                                                        <option value="UA"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>
                                                            Ukraine</option>
                                                        <option value="AE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>
                                                            United Arab Emirates</option>
                                                        <option value="GB" selected
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>
                                                            United Kingdom</option>
                                                        <option value="UM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>
                                                            United States Minor Outlying Islands</option>
                                                        <option value="US"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>
                                                            United States of America</option>
                                                        <option value="UY"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>
                                                            Uruguay</option>
                                                        <option value="UZ"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>
                                                            Uzbekistan</option>
                                                        <option value="VU"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>
                                                            Vanuatu</option>
                                                        <option value="VE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>
                                                            Venezuela (Bolivarian Republic of)</option>
                                                        <option value="VN"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>
                                                            Vietnam</option>
                                                        <option value="VG"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>
                                                            Virgin Islands (British)</option>
                                                        <option value="VI"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>
                                                            Virgin Islands (U.S.)</option>
                                                        <option value="GB-WLS"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>
                                                            Wales</option>
                                                        <option value="WF"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>
                                                            Wallis and Futuna</option>
                                                        <option value="EH"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>
                                                            Western Sahara</option>
                                                        <option value="YE"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>
                                                            Yemen</option>
                                                        <option value="ZM"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>
                                                            Zambia</option>
                                                        <option value="ZW"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>
                                                            Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <!-- End Select -->

                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="city"
                                                        id="cityLabel" placeholder="City" aria-label="City"
                                                        value="London">
                                                </div>

                                                <input type="text" class="form-control" name="state"
                                                    id="stateLabel" placeholder="State" aria-label="State">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="addressLine1Label"
                                                class="col-sm-3 col-form-label form-label">Address line 1</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="addressLine1"
                                                    id="addressLine1Label" placeholder="Your address"
                                                    aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="addressLine2Label"
                                                class="col-sm-3 col-form-label form-label">Address line 2 <span
                                                    class="form-label-secondary">(Optional)</span></label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="addressLine2"
                                                    id="addressLine2Label" placeholder="Your address"
                                                    aria-label="Your address">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">Zip code
                                                <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="You can find your code in a postal address."></i></label>

                                            <div class="col-sm-9">
                                                <input type="text" class="js-input-mask form-control" name="zipCode"
                                                    id="zipCodeLabel" placeholder="Your zip code"
                                                    aria-label="Your zip code" value="KW5 8NW"
                                                    data-hs-mask-options='{
                               "mask": "AA0 0AA"
                             }'>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row align-items-center mb-4">
                                            <label class="col-sm-3 col-form-label form-label">Disable ads <span
                                                    class="badge bg-primary text-uppercase ms-1">PRO</span></label>

                                            <div class="col-sm-9">
                                                <!-- Form Check -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        With your Pro account, you can disable ads across the site.
                                                    </label>
                                                </div>
                                                <!-- End Form Check -->
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
                            <div id="emailSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Email</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <p>Your current email address is <span class="fw-semibold">mark@site.com</span></p>

                                    <!-- Form -->
                                    <form>
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">New
                                                email address</label>

                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="newEmail"
                                                    id="newEmailLabel" placeholder="Enter new email address"
                                                    aria-label="Enter new email address">
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
                            <div id="passwordSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change your password</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <!-- Form -->
                                    <form id="changePasswordForm">
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="currentPasswordLabel"
                                                class="col-sm-3 col-form-label form-label">Current password</label>

                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="currentPassword"
                                                    id="currentPasswordLabel" placeholder="Enter current password"
                                                    aria-label="Enter current password">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="newPassword" class="col-sm-3 col-form-label form-label">New
                                                password</label>

                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="newPassword"
                                                    id="newPassword" placeholder="Enter new password"
                                                    aria-label="Enter new password">
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="confirmNewPasswordLabel"
                                                class="col-sm-3 col-form-label form-label">Confirm new password</label>

                                            <div class="col-sm-9">
                                                <div class="mb-3">
                                                    <input type="password" class="form-control" name="confirmNewPassword"
                                                        id="confirmNewPasswordLabel"
                                                        placeholder="Confirm your new password"
                                                        aria-label="Confirm your new password">
                                                </div>

                                                <h5>Password requirements:</h5>

                                                <p class="fs-6 mb-2">Ensure that these requirements are met:</p>

                                                <ul class="fs-6">
                                                    <li>Minimum 8 characters long - the more, the better</li>
                                                    <li>At least one lowercase character</li>
                                                    <li>At least one uppercase character</li>
                                                    <li>At least one number, symbol, or whitespace character</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="preferencesSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Preferences</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <!-- Form -->
                                    <form>
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="languageLabel"
                                                class="col-sm-3 col-form-label form-label">Language</label>

                                            <div class="col-sm-9">
                                                <!-- Select -->
                                                <div class="tom-select-custom">
                                                    <select class="js-select form-select" id="languageLabel"
                                                        data-hs-tom-select-options='{
                                  "searchInDropdown": false
                                }'>
                                                        <option label="empty"></option>
                                                        <option value="language1"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>
                                                            English (US)</option>
                                                        <option value="language2" selected
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>
                                                            English (UK)</option>
                                                        <option value="language3"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>
                                                            Deutsch</option>
                                                        <option value="language4"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>
                                                            Dansk</option>
                                                        <option value="language5"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>
                                                            Español</option>
                                                        <option value="language6"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>
                                                            Nederlands</option>
                                                        <option value="language7"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>
                                                            Italiano</option>
                                                        <option value="language8"
                                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>
                                                            中文 (繁體)</option>
                                                    </select>
                                                </div>
                                                <!-- End Select -->
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="timeZoneLabel" class="col-sm-3 col-form-label form-label">Time
                                                zone</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="currentPassword"
                                                    id="timeZoneLabel" placeholder="Your time zone"
                                                    aria-label="Your time zone" value="GMT+01:00" readonly>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <!-- Form Switch -->
                                        <label class="row form-check form-switch mb-4"
                                            for="accounrSettingsPreferencesSwitch1">
                                            <span class="col-8 col-sm-9 ms-0">
                                                <span class="d-block text-dark">Early release</span>
                                                <span class="d-block fs-5">Get included on early releases for new Front
                                                    features.</span>
                                            </span>
                                            <span class="col-4 col-sm-3 text-end">
                                                <input type="checkbox" class="form-check-input"
                                                    id="accounrSettingsPreferencesSwitch1">
                                            </span>
                                        </label>
                                        <!-- End Form Switch -->

                                        <!-- Form Switch -->
                                        <label class="row form-check form-switch mb-4"
                                            for="accounrSettingsPreferencesSwitch2">
                                            <span class="col-8 col-sm-9 ms-0">
                                                <span class="d-block text-dark mb-1">See info about people who view my
                                                    profile</span>
                                                <span class="d-block fs-5 text-muted"><a class="link"
                                                        href="#">More about viewer info</a>.</span>
                                            </span>
                                            <span class="col-4 col-sm-3 text-end">
                                                <input type="checkbox" class="form-check-input"
                                                    id="accounrSettingsPreferencesSwitch2" checked>
                                            </span>
                                        </label>
                                        <!-- End Form Switch -->

                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="twoStepVerificationSection" class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-0">Two-step verification</h4>
                                        <span class="badge bg-soft-danger text-danger ms-2">Disabled</span>
                                    </div>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <p class="card-text">Start by entering your password so that we know it's you. Then
                                        we'll walk you through two more simple steps.</p>

                                    <form>
                                        <!-- Form -->
                                        <div class="row mb-4">
                                            <label for="accountPasswordLabel"
                                                class="col-sm-3 col-form-label form-label">Account password</label>

                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" name="currentPassword"
                                                    id="accountPasswordLabel" placeholder="Enter current password"
                                                    aria-label="Enter current password">
                                                <small class="form-text">This is the password you use to log in to your
                                                    Front account.</small>
                                            </div>
                                        </div>
                                        <!-- End Form -->

                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Set up</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="recentDevicesSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Recent devices</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <p class="card-text">View and manage devices where you're currently logged in.</p>
                                </div>
                                <!-- End Body -->

                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Browser</th>
                                                <th>Device</th>
                                                <th>Location</th>
                                                <th>Most recent activity</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="align-items-center">
                                                    <img class="avatar avatar-xss me-2"
                                                        src="./assets/svg/brands/chrome-icon.svg" alt="Image Description">
                                                    Chrome on Windows
                                                </td>
                                                <td><i class="bi-laptop fs-3 me-2"></i> Dell XPS 15 <span
                                                        class="badge bg-soft-success text-success ms-1">Current</span></td>
                                                <td>London, UK</td>
                                                <td>Now</td>
                                            </tr>

                                            <tr>
                                                <td class="align-items-center">
                                                    <img class="avatar avatar-xss me-2"
                                                        src="./assets/svg/brands/chrome-icon.svg" alt="Image Description">
                                                    Chrome on Android
                                                </td>
                                                <td><i class="bi-phone fs-3 me-2"></i> Google Pixel 3a</td>
                                                <td>London, UK</td>
                                                <td>15, August 2020 15:08</td>
                                            </tr>

                                            <tr>
                                                <td class="align-items-center">
                                                    <img class="avatar avatar-xss me-2"
                                                        src="./assets/svg/brands/chrome-icon.svg" alt="Image Description">
                                                    Chrome on Windows
                                                </td>
                                                <td><i class="bi-display fs-3 me-2"></i> Microsoft Studio 2</td>
                                                <td>London, UK</td>
                                                <td>12, August 2020 20:07</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="notificationsSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Notifications</h4>
                                </div>

                                <!-- Alert -->
                                <div class="alert alert-soft-dark card-alert text-center" role="alert">
                                    We need permission from your browser to show notifications. <a class="alert-link"
                                        href="#">Request permission</a>
                                </div>
                                <!-- End Alert -->

                                <form>
                                    <!-- Table -->
                                    <div class="table-responsive datatable-custom">
                                        <table
                                            class="table table-thead-bordered table-nowrap table-align-middle table-first-col-px-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Type</th>
                                                    <th class="text-center">
                                                        <div class="mb-1">
                                                            <img class="avatar avatar-xs"
                                                                src="./assets/svg/illustrations/oc-email-at.svg"
                                                                alt="Image Description"
                                                                data-hs-theme-appearance="default">
                                                            <img class="avatar avatar-xs"
                                                                src="./assets/svg/illustrations-light/oc-email-at.svg"
                                                                alt="Image Description" data-hs-theme-appearance="dark">
                                                        </div>
                                                        Email
                                                    </th>
                                                    <th class="text-center">
                                                        <div class="mb-1">
                                                            <img class="avatar avatar-xs"
                                                                src="./assets/svg/illustrations/oc-globe.svg"
                                                                alt="Image Description"
                                                                data-hs-theme-appearance="default">
                                                            <img class="avatar avatar-xs"
                                                                src="./assets/svg/illustrations-light/oc-globe.svg"
                                                                alt="Image Description" data-hs-theme-appearance="dark">
                                                        </div>
                                                        Browser
                                                    </th>
                                                    <th class="text-center">
                                                        <div class="mb-1">
                                                            <img class="avatar avatar-xs"
                                                                src="./assets/svg/illustrations/oc-phone.svg"
                                                                alt="Image Description"
                                                                data-hs-theme-appearance="default">
                                                            <img class="avatar avatar-xs"
                                                                src="./assets/svg/illustrations-light/oc-phone.svg"
                                                                alt="Image Description" data-hs-theme-appearance="dark">
                                                        </div>
                                                        App
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>New for you</td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox1">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox1"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox2">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox2"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox3">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox3"></label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Account activity <i class="bi-question-circle text-body ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Get important notifications about you or activity you've missed"></i>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox4">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox4"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox5"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox5"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox6"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox6"></label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>A new browser used to sign in</td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox7"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox7"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox8"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox8"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox9"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox9"></label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>A new device is linked</td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox10">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox10"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox11"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox11"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox12">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox12"></label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>A new device connected <i
                                                            class="bi-question-circle text-body ms-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Email me when a new device connected"></i></td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox13">
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox13"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox14"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox14"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="editUserModalAlertsCheckbox15"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="editUserModalAlertsCheckbox15"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Table -->
                                </form>

                                <hr>

                                <!-- Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <p class="card-text">When should we send you notifications?</p>

                                                <!-- Select -->
                                                <div class="tom-select-custom">
                                                    <select class="js-select form-select" autocomplete="off"
                                                        data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "width": "15rem",
                                    "hideSearch": true
                                  }'>
                                                        <option value="whenToSendNotification1">Always</option>
                                                        <option value="whenToSendNotification2">Only when I'm online
                                                        </option>
                                                    </select>
                                                </div>
                                                <!-- End Select -->
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <p class="card-text">Send me a daily summary ("Daily Digest") of task
                                                    activity.</p>

                                                <div class="row">
                                                    <div class="col-auto mb-2">
                                                        <!-- Select -->
                                                        <div class="tom-select-custom">
                                                            <select class="js-select form-select" autocomplete="off"
                                                                data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
                                                                <option value="EveryDay">Every day</option>
                                                                <option value="weekdays" selected>Weekdays</option>
                                                                <option value="Never">Never</option>
                                                            </select>
                                                        </div>
                                                        <!-- End Select -->
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="col-auto mb-2">
                                                        <!-- Select -->
                                                        <div class="tom-select-custom">
                                                            <select class="js-select form-select" autocomplete="off"
                                                                data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
                                                                <option value="0">at 12 AM</option>
                                                                <option value="1">at 1 AM</option>
                                                                <option value="2">at 2 AM</option>
                                                                <option value="3">at 3 AM</option>
                                                                <option value="4">at 4 AM</option>
                                                                <option value="5">at 5 AM</option>
                                                                <option value="6">at 6 AM</option>
                                                                <option value="7">at 7 AM</option>
                                                                <option value="8">at 8 AM</option>
                                                                <option value="9" selected>at 9 AM</option>
                                                                <option value="10">at 10 AM</option>
                                                                <option value="11">at 11 AM</option>
                                                                <option value="12">at 12 PM</option>
                                                                <option value="13">at 1 PM</option>
                                                                <option value="14">at 2 PM</option>
                                                                <option value="15">at 3 PM</option>
                                                                <option value="16">at 4 PM</option>
                                                                <option value="17">at 5 PM</option>
                                                                <option value="18">at 6 PM</option>
                                                                <option value="19">at 7 PM</option>
                                                                <option value="20">at 8 PM</option>
                                                                <option value="21">at 9 PM</option>
                                                                <option value="22">at 10 PM</option>
                                                                <option value="23">at 11 PM</option>
                                                            </select>
                                                        </div>
                                                        <!-- End Select -->
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Row -->
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <p class="card-text">In order to cut back on noise, email notifications are grouped
                                        together and only sent when you're idle or offline.</p>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="connectedAccountsSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Connected accounts</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <p class="card-text">Integrated features from these accounts make it easier to
                                        collaborate with people you know on Front Dashboard.</p>

                                    <!-- Form -->
                                    <form>
                                        <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                                            <!-- List Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar avatar-xs"
                                                            src="./assets/svg/brands/google-icon.svg"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="mb-0">Google</h4>
                                                                <p class="fs-5 text-body mb-0">Calendar and contacts</p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-auto">
                                                                <!-- Form Switch -->
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="connectedAccounts1">
                                                                    <label class="form-check-label"
                                                                        for="connectedAccounts1"></label>
                                                                </div>
                                                                <!-- End Form Switch -->
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List Item -->

                                            <!-- List Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar avatar-xs"
                                                            src="./assets/svg/brands/spec-icon.svg"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="mb-0">Spec</h4>
                                                                <p class="fs-5 text-body mb-0">Project management</p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-auto">
                                                                <!-- Form Switch -->
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="connectedAccounts2">
                                                                    <label class="form-check-label"
                                                                        for="connectedAccounts2"></label>
                                                                </div>
                                                                <!-- End Form Switch -->
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List Item -->

                                            <!-- List Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar avatar-xs"
                                                            src="./assets/svg/brands/slack-icon.svg"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="mb-0">Slack</h4>
                                                                <p class="fs-5 text-body mb-0">Communication <a
                                                                        class="link" href="#">Learn more</a></p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-auto">
                                                                <!-- Form Switch -->
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="connectedAccounts3" checked>
                                                                    <label class="form-check-label"
                                                                        for="connectedAccounts3"></label>
                                                                </div>
                                                                <!-- End Form Switch -->
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List Item -->

                                            <!-- List Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar avatar-xs"
                                                            src="./assets/svg/brands/mailchimp-icon.svg"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="mb-0">Mailchimp</h4>
                                                                <p class="fs-5 text-body mb-0">Email marketing service</p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-auto">
                                                                <!-- Form Switch -->
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="connectedAccounts4" checked>
                                                                    <label class="form-check-label"
                                                                        for="connectedAccounts4"></label>
                                                                </div>
                                                                <!-- End Form Switch -->
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List Item -->

                                            <!-- List Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar avatar-xs"
                                                            src="./assets/svg/brands/google-webdev-icon.svg"
                                                            alt="Image Description">
                                                    </div>

                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="mb-0">Google Webdev</h4>
                                                                <p class="fs-5 text-body mb-0">Tools for Web Developers <a
                                                                        class="link" href="#">Learn more</a></p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-auto">
                                                                <!-- Form Switch -->
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="connectedAccounts5">
                                                                    <label class="form-check-label"
                                                                        for="connectedAccounts5"></label>
                                                                </div>
                                                                <!-- End Form Switch -->
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End List Item -->
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="socialAccountsSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social accounts</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <form>
                                        <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                                            <!-- Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="bi-twitter list-group-icon"></i>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm mb-2 mb-sm-0">
                                                                <h4 class="mb-0">Twitter</h4>
                                                                <a class="fs-5"
                                                                    href="#">www.twitter.com/htmlstream</a>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-sm-auto">
                                                                <a class="btn btn-white btn-sm"
                                                                    href="javascript:;">Disconnect</a>
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <!-- Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="bi-facebook list-group-icon"></i>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm mb-2 mb-sm-0">
                                                                <h4 class="mb-0">Facebook</h4>
                                                                <a class="fs-5"
                                                                    href="#">www.facebook.com/htmlstream</a>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-sm-auto">
                                                                <a class="btn btn-white btn-sm"
                                                                    href="javascript:;">Disconnect</a>
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <!-- Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="bi-slack list-group-icon"></i>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm mb-2 mb-sm-0">
                                                                <h4 class="mb-0">Slack</h4>
                                                                <p class="fs-5 text-body mb-0">Not connected</p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-sm-auto">
                                                                <a class="btn btn-white btn-sm"
                                                                    href="javascript:;">Connect</a>
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <!-- Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="bi-linkedin list-group-icon"></i>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm mb-2 mb-sm-0">
                                                                <h4 class="mb-0">Linkedin</h4>
                                                                <a class="fs-5"
                                                                    href="#">www.linkedin.com/htmlstream</a>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-sm-auto">
                                                                <a class="btn btn-white btn-sm"
                                                                    href="javascript:;">Disconnect</a>
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <!-- Item -->
                                            <div class="list-group-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="bi-google list-group-icon"></i>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-sm mb-2 mb-sm-0">
                                                                <h4 class="mb-0">Google</h4>
                                                                <p class="fs-5 text-body mb-0">Not connected</p>
                                                            </div>
                                                            <!-- End Col -->

                                                            <div class="col-sm-auto">
                                                                <a class="btn btn-white btn-sm"
                                                                    href="javascript:;">Connect</a>
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item -->
                                        </div>
                                    </form>
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div id="deleteAccountSection" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Delete your account</h4>
                                </div>

                                <!-- Body -->
                                <div class="card-body">
                                    <p class="card-text">When you delete your account, you lose access to Front account
                                        services, and we permanently delete your personal data. You can cancel the deletion
                                        for 14 days.</p>

                                    <div class="mb-4">
                                        <!-- Form Check -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="deleteAccountCheckbox">
                                            <label class="form-check-label" for="deleteAccountCheckbox">
                                                Confirm that I want to delete my account.
                                            </label>
                                        </div>
                                        <!-- End Form Check -->
                                    </div>

                                    <div class="d-flex justify-content-end gap-3">
                                        <a class="btn btn-white" href="#">Learn more</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
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
                                    <button
                                        class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle"
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
