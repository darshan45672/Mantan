@extends('layouts.dashboard')
@section('sidebar')
    <!-- Scrollbar removed -->
    <div class="navbar-vertical-content">
        <ul class="navbar-nav nav nav-pills flex-column" id="navbarVerticalNav" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab"
                    aria-controls="dashboard" aria-selected="true">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Dashboard</span></div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="addActivity-tab" data-bs-toggle="tab" href="#addActivity" role="tab"
                    aria-controls="addActivity" aria-selected="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Add Activity</span></div>
                </a>
            </li>
             <li class="nav-item" role="presentation">
                <a class="nav-link" id="viewActivity-tab" data-bs-toggle="tab" href="#viewActivity" role="tab"
                    aria-controls="viewActivity" aria-selected="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">View Activity</span></div>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <!-- Tab panes -->
    <div class="tab-content">

        <!-- Dashboard content  -->
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="row gy-3 mb-6 justify-content-between">
                <div class="col-md-9 col-auto">
                    <h2 class="mb-2 text-body-emphasis">Projects Dashboard</h2>
                    <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
                </div>
                <div class="col-md-3 col-auto">
                    <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker"
                            type="text"
                            data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                </div>
            </div>
            <div class="row mb-3 gy-6">
                <div class="col-12 col-xxl-2">
                    <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-books text-primary-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">32</h2><span
                                            class="fs-7 fw-semibold text-body">Projects</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-users-alt text-success-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">94</h2><span class="fs-7 fw-semibold text-body">Members</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Working hard</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-invoice text-warning-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">23</h2><span
                                            class="fs-7 fw-semibold text-body">Invoices</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Soon to be cleared</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                            <div class="d-flex align-items-center"><span
                                    class="fs-4 lh-1 uil uil-refresh text-danger-dark"></span>
                                <div class="ms-2">
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 me-2">3</h2><span class="fs-7 fw-semibold text-body">Refunds</span>
                                    </div>
                                    <p class="text-body-secondary fs-9 mb-0">Fresh start</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-xxl-5">
                    <div class="mx-xxl-0">
                        <h3>Project: zero Roadmap</h3>
                        <p class="text-body-tertiary">Phase 2 is now ongoing</p>
                        <div class="gantt-zero-roadmap">
                            <div class="row g-2 flex-between-center mb-3">
                                <div class="col-12 col-sm-auto">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-end me-3"><label
                                                class="form-check-label mb-0 me-2 lh-1 text-body"
                                                for="progress">Progress</label>
                                            <div class="form-check form-switch min-h-auto mb-0"><input
                                                    class="form-check-input" id="progress" type="checkbox" checked=""
                                                    data-gantt-progress="data-gantt-progress" /></div>
                                        </div>
                                        <div class="d-flex align-items-end flex-1"><label
                                                class="form-check-label mb-0 me-2 lh-1 text-body"
                                                for="links">Links</label>
                                            <div class="form-check form-switch min-h-auto flex-1 mb-0"><input
                                                    class="form-check-input" id="links" type="checkbox"
                                                    checked="" data-gantt-links="data-gantt-links" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input
                                            class="btn-check" id="weekView" type="radio" name="scaleView"
                                            value="week" checked="" /><label
                                            class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                            for="weekView">Week</label><input class="btn-check" id="monthView"
                                            type="radio" name="scaleView" value="month" /><label
                                            class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                            for="monthView">Month</label><input class="btn-check" id="yearView"
                                            type="radio" name="scaleView" value="year" /><label
                                            class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0"
                                            for="yearView">Year</label></div>
                                </div>
                            </div>
                            <div class="gantt-zero-roadmap-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-xxl-5">
                    <div class="card border h-100 w-100 overflow-hidden">
                        <div class="bg-holder d-block bg-card"
                            style="background-image:url(../assets/img/spot-illustrations/32.png);background-position: top right;">
                        </div>
                        <!--/.bg-holder-->
                        <div class="d-dark-none">
                            <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card"
                                style="background-image:url(../assets/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;">
                            </div>
                            <!--/.bg-holder-->
                        </div>
                        <div class="d-light-none">
                            <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card"
                                style="background-image:url(../assets/img/spot-illustrations/dark_21.png);background-position: bottom right; background-size: auto;">
                            </div>
                            <!--/.bg-holder-->
                        </div>
                        <div class="card-body px-5 position-relative">
                            <div class="badge badge-phoenix fs-10 badge-phoenix-warning mb-4"><span class="fw-bold">Coming
                                    soon</span><span class="fa-solid fa-award ms-1"></span></div>
                            <h3 class="mb-5">Early bird gets the warm leads!</h3>
                            <p class="text-body-tertiary fw-semibold">Phoenix CRM Dashboard is coming to <br
                                    class="d-none d-sm-block" />market soon for fulfilling your every <br
                                    class="d-none d-sm-block" />CRM related needs. </p>
                        </div>
                        <div class="card-footer border-0 py-0 px-5 z-1">
                            <p class="text-body-tertiary fw-semibold">Follow <a href="https://themewagon.com/">ThemeWagon
                                </a>at <br class="d-none d-xxl-block" />Bootstrap Marketplace for updates.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 pb-3 border-y">
                <div class="row">
                    <div class="col-12 col-xl-7 col-xxl-6">
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-6">
                                <h3 class="text-body-emphasis text-nowrap">Issues Discovered</h3>
                                <p class="text-body-tertiary mb-md-7">Newly found and yet to be solved</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fw-bold">Issue type </p>
                                    <p class="mb-0 fs-9">Total count <span class="fw-bold">257</span></p>
                                </div>
                                <hr class="bg-body-secondary mb-2 mt-2" />
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-info-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Product design</p>
                                    <h5 class="mb-0 text-body">78</h5>
                                </div>
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-warning-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Development</p>
                                    <h5 class="mb-0 text-body">63</h5>
                                </div>
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-danger-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">QA &amp; Testing</p>
                                    <h5 class="mb-0 text-body">56</h5>
                                </div>
                                <div class="d-flex align-items-center mb-1"><span
                                        class="d-inline-block bg-success-light bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Customer queries</p>
                                    <h5 class="mb-0 text-body">36</h5>
                                </div>
                                <div class="d-flex align-items-center"><span
                                        class="d-inline-block bg-primary bullet-item me-2"></span>
                                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">R &amp; D</p>
                                    <h5 class="mb-0 text-body">24</h5>
                                </div><button class="btn btn-outline-primary mt-5">See Details<span
                                        class="fas fa-angle-right ms-2 fs-10 text-center"></span></button>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="position-relative mb-sm-4 mb-xl-0">
                                    <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-6">
                        <h3>Project: eleven Progress</h3>
                        <p class="text-body-tertiary mb-0 mb-xl-3">End &amp; progress</p>
                        <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
                    </div>
                </div>
            </div>
            <div class="mx-lg-n4 mt-3">
                <div class="row g-3">
                    <div class="col-12 col-xl-6 col-xxl-7">
                        <div class="card todo-list h-100">
                            <div class="card-header border-bottom-0 pb-0">
                                <div class="row justify-content-between align-items-center mb-4">
                                    <div class="col-auto">
                                        <h3 class="text-body-emphasis">To do</h3>
                                        <p class="mb-2 mb-md-0 mb-lg-2 text-body-tertiary">Task assigned to me</p>
                                    </div>
                                    <div class="col-auto w-100 w-md-auto">
                                        <div class="row align-items-center g-0 justify-content-between">
                                            <div class="col-12 col-sm-auto">
                                                <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                                                    <form class="position-relative"><input
                                                            class="form-control search-input search" type="search"
                                                            placeholder="Search tasks" aria-label="Search" />
                                                        <span class="fas fa-search search-box-icon"></span>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span
                                                        class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p>
                                                <button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span
                                                        class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0 scrollbar to-do-list-body">
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-0"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Designing
                                                    the dungeon</label><span
                                                    class="badge badge-phoenix ms-auto fs-10 badge-phoenix-primary">DRAFT</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>2</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    12 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        12:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-1"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Hiring
                                                    a motion graphic designer</label><span
                                                    class="badge badge-phoenix ms-auto fs-10 badge-phoenix-warning">URGENT</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>2</a><a
                                                    class="text-warning fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-tasks me-1"></span>3</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    12 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        12:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-2"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily
                                                    Meetings Purpose, participants</label><span
                                                    class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON
                                                    PROCESS</span></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>4</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    12 Dec, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        05:00 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-3"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Finalizing
                                                    the geometric shapes</label></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>3</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    12 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        12:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-4"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily
                                                    meeting with team members</label></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center">
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    1 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        12:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-5"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily
                                                    Standup Meetings</label></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-warning fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-tasks me-1"></span>4</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    13 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        10:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-6"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Procrastinate
                                                    for a month</label><span
                                                    class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON
                                                    PROCESS</span></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>3</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    12 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        12:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-7"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">warming
                                                    up</label><span
                                                    class="badge badge-phoenix ms-auto fs-10 badge-phoenix-secondary">CLOSE</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>3</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    12 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        12:00 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-8"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Make
                                                    ready for release</label></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>2</a><a
                                                    class="text-warning fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-tasks me-1"></span>2</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    2o Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        1:00 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-9"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Modify
                                                    the component</label></div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>4</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    22 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        1:00 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="d-flex hover-actions-trigger py-3 border-translucent border-top border-bottom">
                                    <input
                                        class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                                        type="checkbox" id="checkbox-todo-10"
                                        data-event-propagation-prevent="data-event-propagation-prevent" />
                                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                                                    class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Delete
                                                    overlapping tasks and articles</label><span
                                                    class="badge badge-phoenix ms-auto fs-10 badge-phoenix-secondary">CLOSE</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                                            <div class="d-flex lh-1 align-items-center"><a
                                                    class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span
                                                        class="fas fa-paperclip me-1"></span>2</a>
                                                <p
                                                    class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">
                                                    25 Nov, 2021</p>
                                                <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                                                    <p
                                                        class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">
                                                        1:00 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute"
                                        style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                                        <div class="hover-actions end-0"
                                            data-event-propagation-prevent="data-event-propagation-prevent"><button
                                                class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-edit"></span></button><button
                                                class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"
                                                data-event-propagation-prevent="data-event-propagation-prevent"><span
                                                    class="fas fa-trash"></span></button></div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content bg-body overflow-hidden">
                                            <div
                                                class="modal-header justify-content-between px-6 py-5 pe-sm-5 px-md-6 dark__bg-gray-1100">
                                                <h3 class="text-body-highlight fw-bolder mb-0">Designing the Dungeon
                                                    Blueprint</h3><button
                                                    class="btn btn-phoenix-secondary btn-icon btn-icon-xl flex-shrink-0"
                                                    type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                                        class="fa-solid fa-xmark"></span></button>
                                            </div>
                                            <div class="modal-body bg-body-highlight px-6 py-0">
                                                <div class="row gx-14">
                                                    <div class="col-12 col-lg-7 border-end-lg">
                                                        <div class="py-6">
                                                            <div class="mb-7">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <h4 class="text-body me-3">Description</h4><a
                                                                        class="btn btn-link text-decoration-none p-0"
                                                                        href="#!"><span
                                                                            class="fa-solid fa-pen"></span></a>
                                                                </div>
                                                                <p class="text-body-highlight mb-0">The female circus
                                                                    horse-rider is a recurring subject in Chagall’s work. In
                                                                    1926 the art dealer Ambroise Vollard invited Chagall to
                                                                    make a project based on the circus. They visited Paris’s
                                                                    historic Cirque d’Hiver Bouglione together; Vollard lent
                                                                    Chagall his private box seats. Chagall completed 19
                                                                    gouaches Chagall’s work. In 1926 the art dealer Ambroise
                                                                    Vollard invited Chagall to make a project based on the
                                                                    circus.</p>
                                                            </div>
                                                            <div class="mb-7">
                                                                <h4 class="mb-3">Subtasks</h4>
                                                                <div
                                                                    class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                                                                    <div
                                                                        class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                                                        <input
                                                                            class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3"
                                                                            type="checkbox"
                                                                            id="subtaskundefined1" /><label
                                                                            class="form-check-label mb-0 fs-8"
                                                                            for="subtaskundefined1">Study Dragons</label>
                                                                    </div>
                                                                    <div class="hover-actions end-0"><button
                                                                            class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span
                                                                                class="fa-solid fa-pencil"></span></button><button
                                                                            class="btn btn-sm text-body-tertiary px-0"><span
                                                                                class="fa-solid fa-xmark fs-8"></span></button>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                                                                    <div
                                                                        class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                                                        <input
                                                                            class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3"
                                                                            type="checkbox"
                                                                            id="subtaskundefined2" /><label
                                                                            class="form-check-label mb-0 fs-8"
                                                                            for="subtaskundefined2">Procrastinate a
                                                                            bit</label>
                                                                    </div>
                                                                    <div class="hover-actions end-0"><button
                                                                            class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span
                                                                                class="fa-solid fa-pencil"></span></button><button
                                                                            class="btn btn-sm text-body-tertiary px-0"><span
                                                                                class="fa-solid fa-xmark fs-8"></span></button>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex flex-between-center hover-actions-trigger py-3 border-top border-bottom mb-3">
                                                                    <div
                                                                        class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                                                        <input
                                                                            class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3"
                                                                            type="checkbox"
                                                                            id="subtaskundefined3" /><label
                                                                            class="form-check-label mb-0 fs-8"
                                                                            for="subtaskundefined3">Staring at the notebook
                                                                            for 5 mins</label>
                                                                    </div>
                                                                    <div class="hover-actions end-0"><button
                                                                            class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span
                                                                                class="fa-solid fa-pencil"></span></button><button
                                                                            class="btn btn-sm text-body-tertiary px-0"><span
                                                                                class="fa-solid fa-xmark fs-8"></span></button>
                                                                    </div>
                                                                </div><a class="fw-bold fs-9" href="#!"><span
                                                                        class="fas fa-plus me-1"></span>Add subtask</a>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div>
                                                                    <h4 class="mb-3">Files</h4>
                                                                </div>
                                                                <div class="border-top px-0 pt-4 pb-3">
                                                                    <div class="me-n3">
                                                                        <div class="d-flex flex-between-center">
                                                                            <div class="d-flex mb-1"><span
                                                                                    class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                                                                <p class="text-body-highlight mb-0 lh-1">
                                                                                    Silly_sight_1.png</p>
                                                                            </div>
                                                                            <div class="btn-reveal-trigger"><button
                                                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    data-boundary="window"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false"
                                                                                    data-bs-reference="parent"><span
                                                                                        class="fas fa-ellipsis-h"></span></button>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end py-2">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!">Edit</a><a
                                                                                        class="dropdown-item text-danger"
                                                                                        href="#!">Delete</a><a
                                                                                        class="dropdown-item"
                                                                                        href="#!">Download</a><a
                                                                                        class="dropdown-item"
                                                                                        href="#!">Report abuse</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap">
                                                                            <span>768 kb</span><span
                                                                                class="text-body-quaternary mx-1">|
                                                                            </span><a href="#!">Shantinan Mekalan
                                                                            </a><span class="text-body-quaternary mx-1">|
                                                                            </span><span class="text-nowrap">21st Dec,
                                                                                12:56 PM</span>
                                                                        </div><img class="rounded-2"
                                                                            src="../assets/img/generic/40.png"
                                                                            alt="" style="width:230px" />
                                                                    </div>
                                                                </div>
                                                                <div class="border-top px-0 pt-4 pb-3">
                                                                    <div class="me-n3">
                                                                        <div class="d-flex flex-between-center">
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex align-items-center mb-1">
                                                                                    <span
                                                                                        class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                                                                                    <p
                                                                                        class="text-body-highlight mb-0 lh-1">
                                                                                        All_images.zip</p>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap">
                                                                                    <span>12.8 mb</span><span
                                                                                        class="text-body-quaternary mx-1">|
                                                                                    </span><a href="#!">Yves Tanguy
                                                                                    </a><span
                                                                                        class="text-body-quaternary mx-1">|
                                                                                    </span><span class="text-nowrap">19th
                                                                                        Dec, 08:56 PM</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="btn-reveal-trigger"><button
                                                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    data-boundary="window"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false"
                                                                                    data-bs-reference="parent"><span
                                                                                        class="fas fa-ellipsis-h"></span></button>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end py-2">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!">Edit</a><a
                                                                                        class="dropdown-item text-danger"
                                                                                        href="#!">Delete</a><a
                                                                                        class="dropdown-item"
                                                                                        href="#!">Download</a><a
                                                                                        class="dropdown-item"
                                                                                        href="#!">Report abuse</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="border-top px-0 pt-4 pb-3 border-bottom">
                                                                    <div class="me-n3">
                                                                        <div class="d-flex flex-between-center">
                                                                            <div>
                                                                                <div
                                                                                    class="d-flex align-items-center mb-1 flex-wrap">
                                                                                    <span
                                                                                        class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                                                                    <p
                                                                                        class="text-body-highlight mb-0 lh-1">
                                                                                        Project.txt</p>
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap">
                                                                                    <span>123 kb</span><span
                                                                                        class="text-body-quaternary mx-1">|
                                                                                    </span><a href="#!">Shantinan
                                                                                        Mekalan </a><span
                                                                                        class="text-body-quaternary mx-1">|
                                                                                    </span><span class="text-nowrap">12th
                                                                                        Dec, 12:56 PM</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="btn-reveal-trigger"><button
                                                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    data-boundary="window"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="false"
                                                                                    data-bs-reference="parent"><span
                                                                                        class="fas fa-ellipsis-h"></span></button>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-end py-2">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!">Edit</a><a
                                                                                        class="dropdown-item text-danger"
                                                                                        href="#!">Delete</a><a
                                                                                        class="dropdown-item"
                                                                                        href="#!">Download</a><a
                                                                                        class="dropdown-item"
                                                                                        href="#!">Report abuse</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3"><label class="btn btn-link p-0"
                                                                        for="customFile"><span
                                                                            class="fas fa-plus me-1"></span>Add
                                                                        file(s)</label><input class="d-none"
                                                                        id="customFile" type="file" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-5">
                                                        <div class="py-6">
                                                            <h4 class="mb-4 text-body-emphasis">Others Information</h4>
                                                            <h5 class="text-body-highlight mb-2">Status</h5><select
                                                                class="form-select mb-4"
                                                                aria-label="Default select example">
                                                                <option selected="">Select</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <h5 class="text-body-highlight mb-2">Due Date</h5>
                                                            <div class="flatpickr-input-container mb-4"><input
                                                                    class="form-control datetimepicker ps-6"
                                                                    type="text" placeholder="Set the due date"
                                                                    data-options='{"disableMobile":true}' /><span
                                                                    class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                                            </div>
                                                            <h5 class="text-body-highlight mb-2">Reminder</h5>
                                                            <div class="flatpickr-input-container mb-4"><input
                                                                    class="form-control datetimepicker ps-6"
                                                                    type="text" placeholder="Reminder"
                                                                    data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span
                                                                    class="uil uil-bell-school flatpickr-icon text-body-tertiary"></span>
                                                            </div>
                                                            <h5 class="text-body-highlight mb-2">Tag</h5>
                                                            <div class="choices-select-container mb-6"><select
                                                                    class="form-select" data-choices="data-choices"
                                                                    multiple="multiple"
                                                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                                                    <option value="">Select organizer...</option>
                                                                    <option>Massachusetts Institute of Technology</option>
                                                                    <option>University of Chicago</option>
                                                                    <option>GSAS Open Labs At Harvard</option>
                                                                    <option>California Institute of Technology</option>
                                                                </select><span
                                                                    class="uil uil-tag-alt choices-icon text-body-tertiary"
                                                                    style="top: 26%;"></span></div>
                                                            <div class="text-end mb-9"><button
                                                                    class="btn btn-phoenix-danger">Delete Task</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0"><a class="fw-bold fs-9 mt-4" href="#!"><span
                                        class="fas fa-plus me-1"></span>Add new task</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-xxl-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="card-title mb-1">
                                    <h3 class="text-body-emphasis">Activity</h3>
                                </div>
                                <p class="text-body-tertiary mb-4">Recent activity across all projects</p>
                                <div class="timeline-vertical timeline-with-details">
                                    <div class="timeline-item position-relative">
                                        <div class="row g-md-3">
                                            <div class="col-12 col-md-auto d-flex">
                                                <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                    <p
                                                        class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">
                                                        01 DEC, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                                                </div>
                                                <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                                                        <span class="fa-solid fa-chess text-primary-dark fs-10"></span>
                                                    </div><span class="timeline-bar border-end border-dashed"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="timeline-item-content ps-6 ps-md-3">
                                                    <h5 class="fs-9 lh-sm">Phoenix Template: Unleashing Creative
                                                        Possibilities</h5>
                                                    <p class="fs-9">by <a class="fw-semibold" href="#!">Shantinon
                                                            Mekalan</a></p>
                                                    <p class="fs-9 text-body-secondary mb-5">Discover limitless creativity
                                                        with the Phoenix template! Our latest update offers an array of
                                                        innovative features and design options.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item position-relative">
                                        <div class="row g-md-3">
                                            <div class="col-12 col-md-auto d-flex">
                                                <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                    <p
                                                        class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">
                                                        05 DEC, 2023<br class="d-none d-md-block" /> 12:30 AM</p>
                                                </div>
                                                <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                                                        <span class="fa-solid fa-dove text-primary-dark fs-10"></span>
                                                    </div><span class="timeline-bar border-end border-dashed"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="timeline-item-content ps-6 ps-md-3">
                                                    <h5 class="fs-9 lh-sm">Empower Your Digital Presence: The Phoenix
                                                        Template Unveiled</h5>
                                                    <p class="fs-9">by <a class="fw-semibold"
                                                            href="#!">Bookworm22</a></p>
                                                    <p class="fs-9 text-body-secondary mb-5">Unveiling the Phoenix
                                                        template, a game-changer for your digital presence. With its
                                                        powerful features and sleek design,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item position-relative">
                                        <div class="row g-md-3">
                                            <div class="col-12 col-md-auto d-flex">
                                                <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                    <p
                                                        class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">
                                                        15 DEC, 2023<br class="d-none d-md-block" /> 2:30 AM</p>
                                                </div>
                                                <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                                    <div
                                                        class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                                                        <span class="fa-solid fa-dungeon text-primary-dark fs-10"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="timeline-item-content ps-6 ps-md-3">
                                                    <h5 class="fs-9 lh-sm">Phoenix Template: Simplified Design, Maximum
                                                        Impact</h5>
                                                    <p class="fs-9">by <a class="fw-semibold" href="#!">Sharuka
                                                            Nijibum</a></p>
                                                    <p class="fs-9 text-body-secondary mb-0">Introducing the Phoenix
                                                        template, where simplified design meets maximum impact. Elevate your
                                                        digital presence with its sleek and intuitive features.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 border-top">
                        <div id="projectSummary"
                            data-list='{"valueNames":["project","assignees","start","end","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
                            <div class="row align-items-end justify-content-between pb-4 g-3">
                                <div class="col-auto">
                                    <h3>Projects</h3>
                                    <p class="text-body-tertiary lh-sm mb-0">Brief summary of all projects</p>
                                </div>
                            </div>
                            <div class="table-responsive ms-n1 ps-1 scrollbar">
                                <table class="table fs-9 mb-0 border-top border-translucent">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                                data-sort="project" style="width:30%;">PROJECT NAME</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="assignees"
                                                style="width:10%;">Assignees</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="start"
                                                style="width:10%;">START DATE</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="end"
                                                style="width:15%;">END DATE</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="calculation"
                                                style="width:12%;">CALCULATION</th>
                                            <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress"
                                                style="width:5%;">PROGRESS</th>
                                            <th class="align-middle ps-8" scope="col" data-sort="status"
                                                style="width:10%;">STATUS</th>
                                            <th class="sort align-middle text-end" scope="col" style="width:10%;">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="project-summary-table-body">
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 project"><a
                                                    class="fw-bold fs-8" href="#">Making the Butterflies shoot each
                                                    other dead</a></td>
                                            <td class="align-middle white-space-nowrap assignees ps-3">
                                                <div class="avatar-group avatar-group-dense"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle " src="../assets/img/team/9.webp"
                                                                alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/9.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Michael Jenkins</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle " src="../assets/img/team/25.webp"
                                                                alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/25.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Ansolo Lazinatov</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/32.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/32.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Jennifer Schramm</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle avatar-placeholder"
                                                                src="../assets/img/team/avatar.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/avatar.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Kristine Cadena</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                    <div class="avatar avatar-s  rounded-circle">
                                                        <div class="avatar-name rounded-circle "><span>+3</span></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap start ps-3">
                                                <p class="mb-0 fs-9 text-body">Dec 12, 2018</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3">
                                                <p class="mb-0 fs-9 text-body">Dec 12, 2026</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap calculation ps-3">
                                                <p class="fw-bold text-body-emphasis fs-9 mb-0">$4</p>
                                                <p class="fw-semibold fs-10 text-body-tertiary mb-0">Cost</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 100%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-8">
                                                <div class="progress progress-stack mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-info" style="width:30%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Active"></div>
                                                    <div class="progress-bar bg-danger" style="width:5%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Damage" role="progressbar"></div>
                                                    <div class="progress-bar bg-warning" style="width:45%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pending" role="progressbar"></div>
                                                    <div class="progress-bar bg-success" style="width:15%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Done" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 project"><a
                                                    class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a>
                                            </td>
                                            <td class="align-middle white-space-nowrap assignees ps-3">
                                                <div class="avatar-group avatar-group-dense"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/22.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/22.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Woodrow Burton</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/28.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/28.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Ashley Garrett</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s">
                                                            <div class="avatar-name rounded-circle"><span>R</span></div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <div class="avatar-name rounded-circle">
                                                                            <span>R</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6 class="text-white">Raymond Mims</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap start ps-3">
                                                <p class="mb-0 fs-9 text-body">Jan 9, 2019</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3">
                                                <p class="mb-0 fs-9 text-body">Dec 9, 2022</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap calculation ps-3"><button
                                                    class="btn btn-phoenix-secondary square-icon-btn"><span
                                                        class="fas fa-plus"></span></button></td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">148 / 223</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success"
                                                        style="width: 66.3677130044843%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-8">
                                                <div class="progress progress-stack mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-info" style="width:20%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Active"></div>
                                                    <div class="progress-bar bg-danger" style="width:15%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Damage" role="progressbar"></div>
                                                    <div class="progress-bar bg-warning" style="width:45%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pending" role="progressbar"></div>
                                                    <div class="progress-bar bg-success" style="width:30%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Done" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 project"><a
                                                    class="fw-bold fs-8" href="#">The Chewing Gum Attack</a></td>
                                            <td class="align-middle white-space-nowrap assignees ps-3">
                                                <div class="avatar-group avatar-group-dense"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/34.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/34.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Jean Renoir</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/59.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/59.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Katerina Karenin</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap start ps-3">
                                                <p class="mb-0 fs-9 text-body">Sep 4, 2019</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3">
                                                <p class="mb-0 fs-9 text-body">Dec 4, 2021</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap calculation ps-3">
                                                <p class="fw-bold text-body-emphasis fs-9 mb-0">$657k</p>
                                                <p class="fw-semibold fs-10 text-body-tertiary mb-0">Estimation</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">277 / 539</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success"
                                                        style="width: 51.39146567717996%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-8">
                                                <div class="progress progress-stack mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-info" style="width:10%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Active"></div>
                                                    <div class="progress-bar bg-danger" style="width:10%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Damage" role="progressbar"></div>
                                                    <div class="progress-bar bg-warning" style="width:35%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pending" role="progressbar"></div>
                                                    <div class="progress-bar bg-success" style="width:45%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Done" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 project"><a
                                                    class="fw-bold fs-8" href="#">Execution of Micky the foul
                                                    mouse</a></td>
                                            <td class="align-middle white-space-nowrap assignees ps-3">
                                                <div class="avatar-group avatar-group-dense"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle " src="../assets/img/team/1.webp"
                                                                alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/1.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Luis Bunuel</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle avatar-placeholder"
                                                                src="../assets/img/team/avatar.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/avatar.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Kristine Cadena</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle " src="../assets/img/team/5.webp"
                                                                alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/5.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Ricky Antony</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/11.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/11.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Roy Anderson</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap start ps-3">
                                                <p class="mb-0 fs-9 text-body">Nov 1, 2019</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3">
                                                <p class="mb-0 fs-9 text-body">Dec 1, 2024</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap calculation ps-3"><button
                                                    class="btn btn-phoenix-secondary square-icon-btn"><span
                                                        class="fas fa-plus"></span></button></td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">16 / 56</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success"
                                                        style="width: 28.57142857142857%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-8">
                                                <div class="progress progress-stack mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-info" style="width:45%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Active"></div>
                                                    <div class="progress-bar bg-danger" style="width:15%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Damage" role="progressbar"></div>
                                                    <div class="progress-bar bg-warning" style="width:20%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pending" role="progressbar"></div>
                                                    <div class="progress-bar bg-success" style="width:20%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Done" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 project"><a
                                                    class="fw-bold fs-8" href="#">Harnessing stupidity from
                                                    Jerry</a></td>
                                            <td class="align-middle white-space-nowrap assignees ps-3">
                                                <div class="avatar-group avatar-group-dense"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/21.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/21.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Michael Jenkins</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/23.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/23.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Kristine Cadena</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/25.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/25.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Ricky Antony</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap start ps-3">
                                                <p class="mb-0 fs-9 text-body">Dec 28, 2019</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3">
                                                <p class="mb-0 fs-9 text-body">Nov 28, 2021</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap calculation ps-3"><button
                                                    class="btn btn-phoenix-secondary square-icon-btn"><span
                                                        class="fas fa-plus"></span></button></td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">169 / 394</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success"
                                                        style="width: 42.89340101522843%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-8">
                                                <div class="progress progress-stack mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-info" style="width:25%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Active"></div>
                                                    <div class="progress-bar bg-danger" style="width:35%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Damage" role="progressbar"></div>
                                                    <div class="progress-bar bg-warning" style="width:20%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pending" role="progressbar"></div>
                                                    <div class="progress-bar bg-success" style="width:15%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Done" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="position-static">
                                            <td class="align-middle time white-space-nowrap ps-0 project"><a
                                                    class="fw-bold fs-8" href="#">Water resistant mosquito killer
                                                    gun</a></td>
                                            <td class="align-middle white-space-nowrap assignees ps-3">
                                                <div class="avatar-group avatar-group-dense"><a
                                                        class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/30.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/30.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Stanly Drinkwater</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle avatar-placeholder"
                                                                src="../assets/img/team/avatar.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/avatar.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Kristine Cadena</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/59.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/59.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Katerina Karenin</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s  rounded-circle">
                                                            <img class="rounded-circle "
                                                                src="../assets/img/team/31.webp" alt="" />
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <img class="rounded-circle border border-light-subtle"
                                                                            src="../assets/img/team/31.webp"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-white">Martina scorcese</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false" data-bs-auto-close="outside">
                                                        <div class="avatar avatar-s">
                                                            <div class="avatar-name rounded-circle"><span>R</span></div>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden"
                                                        style="width: 320px;">
                                                        <div class="position-relative">
                                                            <div class="bg-holder z-n1"
                                                                style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                                                            </div>
                                                            <!--/.bg-holder-->
                                                            <div class="p-3">
                                                                <div class="text-end"><button class="btn p-0 me-2"><span
                                                                            class="fa-solid fa-user-plus text-white"></span></button><button
                                                                        class="btn p-0"><span
                                                                            class="fa-solid fa-ellipsis text-white"></span></button>
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                                                        <div class="avatar-name rounded-circle">
                                                                            <span>R</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6 class="text-white">Roy Anderson</h6>
                                                                    <p
                                                                        class="text-light text-opacity-50 fw-semibold fs-10 mb-2">
                                                                        @tyrion222</p>
                                                                    <div class="d-flex flex-center mb-3">
                                                                        <h6 class="text-white mb-0">224 <span
                                                                                class="fw-normal text-light text-opacity-75">connections</span>
                                                                        </h6><span
                                                                            class="fa-solid fa-circle text-body-tertiary mx-1"
                                                                            data-fa-transform="shrink-10 up-2"></span>
                                                                        <h6 class="text-white mb-0">23 <span
                                                                                class="fw-normal text-light text-opacity-75">mutual</span>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bg-body-emphasis">
                                                            <div class="p-3 border-bottom border-translucent">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex"><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-phone"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span
                                                                                class="fa-solid fa-message"></span></button><button
                                                                            class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span
                                                                                class="fa-solid fa-video"></span></button>
                                                                    </div><button class="btn btn-phoenix-primary"><span
                                                                            class="fa-solid fa-envelope me-2"></span>Send
                                                                        Email</button>
                                                                </div>
                                                            </div>
                                                            <ul class="nav d-flex flex-column py-3 border-bottom">
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span
                                                                            class="me-2 text-body d-inline-block"
                                                                            data-feather="clipboard"></span><span
                                                                            class="text-body-highlight flex-1">Assigned
                                                                            Projects</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link px-3 d-flex flex-between-center"
                                                                        href="#!"> <span class="me-2 text-body"
                                                                            data-feather="pie-chart"></span><span
                                                                            class="text-body-highlight flex-1">View
                                                                            activiy</span><span
                                                                            class="fa-solid fa-chevron-right fs-11"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="p-3 d-flex justify-content-between"><a
                                                                class="btn btn-link p-0 text-decoration-none"
                                                                href="#!">Details </a><a
                                                                class="btn btn-link p-0 text-decoration-none text-danger"
                                                                href="#!">Unassign </a></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap start ps-3">
                                                <p class="mb-0 fs-9 text-body">Feb 24, 2020</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap end ps-3">
                                                <p class="mb-0 fs-9 text-body">Nov 24, 2021</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap calculation ps-3">
                                                <p class="fw-bold text-body-emphasis fs-9 mb-0">$55k</p>
                                                <p class="fw-semibold fs-10 text-body-tertiary mb-0">Budget</p>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-3 projectprogress">
                                                <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                                                <div class="progress" style="height:3px;">
                                                    <div class="progress-bar bg-success" style="width: 100%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle white-space-nowrap ps-8">
                                                <div class="progress progress-stack mt-3" style="height:3px;">
                                                    <div class="progress-bar bg-info" style="width:24%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        role="progressbar" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Active"></div>
                                                    <div class="progress-bar bg-danger" style="width:5%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Damage" role="progressbar"></div>
                                                    <div class="progress-bar bg-warning" style="width:35%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pending" role="progressbar"></div>
                                                    <div class="progress-bar bg-success" style="width:35%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Done" role="progressbar"></div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action">
                                                <div class="btn-reveal-trigger position-static"><button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs-10"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item" href="#!">Export</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item text-danger" href="#!">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                        data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                        href="#!" data-list-view="less">View Less<span
                                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </div>
                                <div class="col-auto d-flex"><button class="page-link"
                                        data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                        data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add activity  -->
        <div class="tab-pane fade" id="addActivity" role="tabpanel" aria-labelledby="addActivity-tab">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                    <li class="breadcrumb-item active">Default</li>
                </ol>
            </nav>
            <h2 class="mb-4">Add an activity</h2>
            <div class="row">
                <div class="col-xl-9">
                    
            <form class="row g-3 mb-6">
              <div class="col-sm-6 col-md-8">
                <div class="form-floating"><input class="form-control" id="floatingInputGrid" type="text" placeholder="Activity title" /><label for="floatingInputGrid">Activity title</label></div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                    <option selected="selected">Select activity domain</option>
                    <option value="1">technical</option>
                    <option value="2">external</option>
                    <option value="3">organizational</option>
                    <option value="4">technical</option>
                    <option value="5">external</option>
                    <option value="6">organizational</option>
                    <option value="7">technical</option>
                    <option value="8">external</option>
                    <option value="9">organizational</option>
                    <option value="10">technical</option>
                    <option value="11">external</option>
                    <option value="12">organizational</option>
                    <option value="13">technical</option>
                    <option value="14">external</option>
                  </select><label for="floatingSelectTask">Defult Activity view</label></div>
              </div>
              {{-- <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectPrivacy">
                    <option selected="selected">Select privacy</option>
                    <option value="1">Data Privacy One</option>
                    <option value="2">Data Privacy Two</option>
                    <option value="3">Data Privacy Three</option>
                  </select><label for="floatingSelectPrivacy">Project privacy</label></div>
              </div> --}}
              <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectTeam">
                    <option selected="selected">Select team</option>
                    <option value="1">Team One</option>
                    <option value="2">Team Two</option>
                    <option value="3">Team Three</option>
                  </select><label for="floatingSelectTeam">Team </label></div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectAssignees">
                    <option selected="selected">Select assignees </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select><label for="floatingSelectAssignees">People </label></div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-floating"><select class="form-select" id="floatingSelectAdmin">
                    <option selected="selected">Select admin</option>
                    <option value="1">Data Privacy One</option>
                    <option value="2">Data Privacy Two</option>
                    <option value="3">Data Privacy Three</option>
                  </select><label for="floatingSelectAdmin">Project Lead</label></div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="flatpickr-input-container">
                  <div class="form-floating"><input class="form-control datetimepicker" id="floatingInputStartDate" type="text" placeholder="end date" data-options='{"disableMobile":true}' /><label class="ps-6" for="floatingInputStartDate">Start date</label><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="flatpickr-input-container">
                  <div class="form-floating"><input class="form-control datetimepicker" id="floatingInputEndDate" type="text" placeholder="end" data-options='{"disableMobile":true}' /><label class="ps-6" for="floatingInputend">End Date</label><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                </div>
              </div>
              <div class="col-12 gy-6">
                <div class="form-floating"><textarea class="form-control" id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"></textarea><label for="floatingProjectOverview">project overview</label></div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating"><select class="form-select" id="floatingSelectClient">
                    <option selected="selected">Select client</option>
                    <option value="1">Client One</option>
                    <option value="2">Client Two</option>
                    <option value="3">Client Three</option>
                  </select><label for="floatingSelectClient">client</label></div>
              </div>
              <div class="col-md-6 gy-6">
                <div class="form-floating"><input class="form-control" id="floatingInputBudget" type="text" placeholder="Budget" /><label for="floatingInputBudget">Budget</label></div>
              </div>
              <div class="col-12 gy-6">
                <div class="form-floating form-floating-advance-select"><label>Add tags</label><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option selected="selected">Stupidity</option>
                    <option>Jerry</option>
                    <option>Not_the_mouse</option>
                    <option>Rick</option>
                    <option>Biology</option>
                    <option>Neurology</option>
                    <option>Brainlessness</option>
                  </select></div>
              </div>
              <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                  <div class="col-auto"><button class="btn btn-phoenix-primary px-5">Cancel</button></div>
                  <div class="col-auto"><button class="btn btn-primary px-5 px-sm-15">Create Project</button></div>
                </div>
              </div>
            </form>
          
                </div>
            </div>
        </div>

        <!-- View activity  -->
        <div class="tab-pane fade" id="viewActivity" role="tabpanel" aria-labelledby="viewActivity-tab">
            <nav class="mb-3" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                <li class="breadcrumb-item active">Default</li>
              </ol>
            </nav>
          <div class="mb-9">
            <div id="projectSummary" data-list='{"valueNames":["projectName","assignees","start","end","task","projectprogress","status","action"],"page":6,"pagination":true}'>
              <div class="row mb-4 gx-6 gy-3 align-items-center">
                <div class="col-auto">
                  <h2 class="mb-0">Activities<span class="fw-normal text-body-tertiary ms-3">(32)</span></h2>
                </div>

                <div class="col-auto">
                  <ul class="navbar-nav nav nav-pills flex-column" id="navbarVerticalNav" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="btn btn-primary px-5 nav-link" id="addActivity-tab" data-bs-toggle="tab" href="#addActivity" role="tab"
                    aria-controls="addActivity" aria-selected="false"><i class="fa-solid fa-plus me-2"></i>Add new activity</a>
                    </li>
                  </ul>
                </div>
              </div>



              <div class="row g-3 justify-content-between align-items-end mb-4">
                <div class="col-12 col-sm-auto">
                  <ul class="nav nav-links mx-n2">
                    <li class="nav-item"><a class="nav-link px-2 py-1 active" aria-current="page" href="#"><span>All</span><span class="text-body-tertiary fw-semibold">(32)</span></a></li>
                    <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Ongoing</span><span class="text-body-tertiary fw-semibold">(14)</span></a></li>
                    <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Cancelled</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
                    <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Finished</span><span class="text-body-tertiary fw-semibold">(14)</span></a></li>
                    <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Postponed</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-auto">
                  <div class="d-flex align-items-center">
                    <div class="search-box me-3">
                      <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                      </form>
                    </div><a class="btn btn-phoenix-primary px-3 me-1 border-0 text-body" href="project-list-view.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="List view"><span class="fa-solid fa-list fs-10"></span></a><a class="btn btn-phoenix-primary px-3 me-1" href="project-board-view.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Board view"><svg width="9" height="9" viewbox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0.5C0 0.223857 0.223858 0 0.5 0H1.83333C2.10948 0 2.33333 0.223858 2.33333 0.5V1.83333C2.33333 2.10948 2.10948 2.33333 1.83333 2.33333H0.5C0.223857 2.33333 0 2.10948 0 1.83333V0.5Z" fill="currentColor"></path>
                        <path d="M3.33333 0.5C3.33333 0.223857 3.55719 0 3.83333 0H5.16667C5.44281 0 5.66667 0.223858 5.66667 0.5V1.83333C5.66667 2.10948 5.44281 2.33333 5.16667 2.33333H3.83333C3.55719 2.33333 3.33333 2.10948 3.33333 1.83333V0.5Z" fill="currentColor"></path>
                        <path d="M6.66667 0.5C6.66667 0.223857 6.89052 0 7.16667 0H8.5C8.77614 0 9 0.223858 9 0.5V1.83333C9 2.10948 8.77614 2.33333 8.5 2.33333H7.16667C6.89052 2.33333 6.66667 2.10948 6.66667 1.83333V0.5Z" fill="currentColor"></path>
                        <path d="M0 3.83333C0 3.55719 0.223858 3.33333 0.5 3.33333H1.83333C2.10948 3.33333 2.33333 3.55719 2.33333 3.83333V5.16667C2.33333 5.44281 2.10948 5.66667 1.83333 5.66667H0.5C0.223857 5.66667 0 5.44281 0 5.16667V3.83333Z" fill="currentColor"></path>
                        <path d="M3.33333 3.83333C3.33333 3.55719 3.55719 3.33333 3.83333 3.33333H5.16667C5.44281 3.33333 5.66667 3.55719 5.66667 3.83333V5.16667C5.66667 5.44281 5.44281 5.66667 5.16667 5.66667H3.83333C3.55719 5.66667 3.33333 5.44281 3.33333 5.16667V3.83333Z" fill="currentColor"></path>
                        <path d="M6.66667 3.83333C6.66667 3.55719 6.89052 3.33333 7.16667 3.33333H8.5C8.77614 3.33333 9 3.55719 9 3.83333V5.16667C9 5.44281 8.77614 5.66667 8.5 5.66667H7.16667C6.89052 5.66667 6.66667 5.44281 6.66667 5.16667V3.83333Z" fill="currentColor"></path>
                        <path d="M0 7.16667C0 6.89052 0.223858 6.66667 0.5 6.66667H1.83333C2.10948 6.66667 2.33333 6.89052 2.33333 7.16667V8.5C2.33333 8.77614 2.10948 9 1.83333 9H0.5C0.223857 9 0 8.77614 0 8.5V7.16667Z" fill="currentColor"></path>
                        <path d="M3.33333 7.16667C3.33333 6.89052 3.55719 6.66667 3.83333 6.66667H5.16667C5.44281 6.66667 5.66667 6.89052 5.66667 7.16667V8.5C5.66667 8.77614 5.44281 9 5.16667 9H3.83333C3.55719 9 3.33333 8.77614 3.33333 8.5V7.16667Z" fill="currentColor"></path>
                        <path d="M6.66667 7.16667C6.66667 6.89052 6.89052 6.66667 7.16667 6.66667H8.5C8.77614 6.66667 9 6.89052 9 7.16667V8.5C9 8.77614 8.77614 9 8.5 9H7.16667C6.89052 9 6.66667 8.77614 6.66667 8.5V7.16667Z" fill="currentColor"></path>
                      </svg></a><a class="btn btn-phoenix-primary px-3" href="project-card-view.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view"><svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z" fill="currentColor"></path>
                        <path d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z" fill="currentColor"></path>
                        <path d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z" fill="currentColor"></path>
                        <path d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z" fill="currentColor"></path>
                      </svg></a>
                  </div>
                </div>
              </div>
              <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0 border-top border-translucent">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="projectName" style="width:30%;">ACTIVITY NAME</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="end" style="width:15%;">END DATE</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="statuses" style="width:10%;">STATUS</th>
                      <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="project-list-table-body">
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a></td>
                      
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">May 21, 2028</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">287</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-success">completed</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Water resistant mosquito killer gun</a></td>
                      
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Mar 08, 2021</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Sep 15, 2022</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">125</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">148 / 223</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 66.3677130044843%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">inactive</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Execution of Micky the foul mouse</a></td>
                     
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Sep 23, 2026</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">72</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">277 / 539</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 51.39146567717996%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-primary">ongoing</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Harnessing stupidity from Jerry</a></td>
                      
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Jan 01, 2016</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Apr 04, 2022</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">91</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">169 / 394</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 42.89340101522843%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Critical</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Making the Butterflies shoot each other dead</a></td>
                      
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Dec 24, 2019</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Jan 15, 2024</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">134</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-primary">ongoing</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">The chewing gum attack</a></td>
                     
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Aug 4, 2018</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Oct 22, 2023</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">24</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">Cancelled</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="position-static">
                      <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Olga Dies Dreaming by Xóchitl González</a></td>
                      
                      <td class="align-middle white-space-nowrap start ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Jan 01, 2018</p>
                      </td>
                      <td class="align-middle white-space-nowrap end ps-3 py-4">
                        <p class="mb-0 fs-9 text-body">Jan 04, 2022</p>
                      </td>
                      <td class="align-middle white-space-nowrap task ps-3 py-4">
                        <p class="fw-bo text-body fs-9 mb-0">80</p>
                      </td>
                      <td class="align-middle white-space-nowrap ps-3 projectprogress">
                        <p class="text-body-secondary fs-10 mb-0">150 / 294</p>
                        <div class="progress" style="height:3px;">
                          <div class="progress-bar bg-success" style="width: 51.02040816326531%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Critical</span></td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs-9 border-bottom border-translucent">
                <div class="d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
@endsection
