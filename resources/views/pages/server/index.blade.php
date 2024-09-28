<x-app-layout>

    <div class="container-xxl">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Server</h4>
            </div>

            <div class="text-end">
                {{ Breadcrumbs::render('server') }}
            </div>
        </div>

        <!-- Plans -->
        <div class="row justify-content-center my-3">
            <div class="pricing-box col-xl-4 col-md-6">
                <div class="card card-h-full">
                    <div class="inner-box card-body p-4">

                        <div
                            class="bg-warning bg-opacity-10 text-warning rounded-3 px-2 py-1 d-inline-flex justify-content-center align-content-center">
                            <i class="mdi mdi-rocket fs-19"></i>
                        </div>

                        <div class="plan-header mt-3">
                            <h5 class="plan-title text-warning">Migration</h5>
                            <p class="plan-subtitle">The process of moving or transferring data, systems, or
                                applications from one environment to another, often involving database schema changes in
                                software development.</p>
                        </div>

                        <div class="flex-shrink-0 text-center">
                            <button type="button" class="btn btn-outline-primary w-100 rounded-2 fw-medium"
                                onclick="document.getElementById('migrateForm').submit()">Run</button>
                        </div>

                    </div>
                </div> <!-- end Pricing_card -->
            </div> <!-- end col -->

            <div class="pricing-box col-xl-4 col-md-6">
                <div class="card card-h-full">
                    <div class="inner-box card-body p-4">

                        <div
                            class="bg-primary bg-opacity-10 text-primary rounded-3 px-2 py-1 d-inline-flex justify-content-center align-content-center">
                            <i class="mdi mdi-account-supervisor fs-19"></i>
                        </div>

                        <div class="plan-header mt-3">
                            <h5 class="plan-title text-primary">Optimize</h5>
                            <p class="plan-subtitle">The act of improving the efficiency, performance, or effectiveness
                                of code, algorithms, or processes, typically by reducing resource consumption or
                                speeding up execution..</p>
                        </div>

                        <div class="flex-shrink-0 text-center">
                            <button type="button" class="btn btn-outline-primary w-100 rounded-2 fw-medium"
                                onclick="document.getElementById('optimizeForm').submit()">Run</button>
                        </div>
                    </div>
                </div> <!-- end Pricing_card -->
            </div> <!-- end col -->

            <div class="pricing-box col-xl-4 col-md-6">
                <div class="card card-h-full">
                    <div class="inner-box card-body p-4">

                        <div
                            class="bg-info bg-opacity-10 text-info rounded-3 px-2 py-1 d-inline-flex justify-content-center align-content-center">
                            <i class="mdi mdi-office-building fs-19"></i>
                        </div>

                        <div class="plan-header mt-3">
                            <h5 class="plan-title text-info">Clear Cache</h5>
                            <p class="plan-subtitle">The action of removing stored temporary files or data to free up
                                space or refresh an application, ensuring the latest content or updates are displayed.
                                this command clear cache on server.
                            </p>
                        </div>

                        <div class="flex-shrink-0 text-center">
                            <button type="button" class="btn btn-outline-primary w-100 rounded-2 fw-medium"
                                onclick="document.getElementById('clearCacheForm').submit()">Run</button>
                        </div>

                    </div>
                </div> <!-- end Pricing_card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        {{-- forms :: begin --}}
        <form id="migrateForm" action="{{ route('server.migrate') }}" method="POST" class="d-none">
            @csrf
        </form>
        <form id="optimizeForm" action="{{ route('server.optimize') }}" method="POST" class="d-none">
            @csrf
        </form>
        <form id="clearCacheForm" action="{{ route('server.clear-cache') }}" method="POST" class="d-none">
            @csrf
        </form>
        {{-- forms :: end --}}
    </div>

    @push('script')
    @endpush


</x-app-layout>
