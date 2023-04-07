<x-app-layout>
    @section('content')
        <main id="content" role="main" class="main">
            <!-- Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center mb-3">
                        <div class="col-sm mb-2 mb-sm-0">
                            <h1 class="page-header-title">Products <span
                                    class="badge bg-soft-dark text-dark ms-2">{{ $count }}</span></h1>


                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                            <a class="btn btn-primary" href="{{ route('product_new') }}">Add product</a>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <!-- Nav Scroller -->


                </div>
                <!-- End Nav Scroller -->
            </div>
            <!-- End Page Header -->


            <!-- Card -->
            <div class="card">
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif

                <!-- Header -->
                <div class="card-header card-header-content-md-between">
                    <div class="mb-2 mb-md-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend input-group-text">
                                    <i class="bi-search"></i>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Search product"
                                    aria-label="Search product">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>


                </div>
                <!-- End Header -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="datatable"
                        class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                        data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 4],
                      "width": "5%",
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 12,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="table-column-pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="datatableCheckAll">
                                        <label class="form-check-label">
                                        </label>
                                    </div>
                                </th>
                                <th class="table-column-ps-0">Product</th>
                                <th>Price</th>
                                <th>Service</th>
                                <th>Control</th>

                            </tr>
                        </thead>



                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="table-column-pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="datatableCheckAll1">
                                            <label class="form-check-label" for="datatableCheckAll1"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-ps-0">
                                        <a class="d-flex align-items-center">

                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="text-inherit mb-0">{{ $product->title }}</h5>
                                            </div>
                                        </a>
                                    </td>
                                    <td>

                                        {{ number_format($product->price) }} $
                                    </td>
                                    <td>

                                        @foreach ($services as $item)
                                            @if ($product->service_id == $item->id)
                                                {{ $item->title }}
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-white btn-sm" href="/product/{{ $product->id }}/edit">
                                                <i class="bi-pencil-fill me-1"></i> Edit
                                            </a>

                                            <!-- Button Group -->
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty"
                                                    id="productsEditDropdown1" data-bs-toggle="dropdown"
                                                    aria-expanded="false"></button>

                                                <div class="dropdown-menu dropdown-menu-end mt-1"
                                                    aria-labelledby="productsEditDropdown1">
                                                    <a class="dropdown-item" href="/product/{{ $product->id }}/delete">
                                                        <i class="bi-trash dropdown-item-icon"></i> Delete
                                                    </a>

                                                </div>
                                            </div>
                                            <!-- End Button Group -->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                <span class="me-2">Showing:</span>

                                <!-- Select -->
                                <div class="tom-select-custom">
                                    <select id="datatableEntries"
                                        class="js-select form-select form-select-borderless w-auto" autocomplete="off"
                                        data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                                        <option value="12">12</option>
                                        <option value="14" selected>14</option>
                                        <option value="16">16</option>
                                        <option value="18">18</option>
                                    </select>
                                </div>
                                <!-- End Select -->

                                <span class="text-secondary me-2">of</span>

                                <!-- Pagination Quantity -->
                                <span id="datatableWithPaginationInfoTotalQty"></span>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <!-- Pagination -->
                                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Card -->
            </div>
            <!-- End Content -->

            <!-- Footer -->


            <!-- End Footer -->
        </main>
    @endsection
</x-app-layout>
