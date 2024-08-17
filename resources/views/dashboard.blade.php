<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

  
<!-- Mirrored from prium.github.io/phoenix/v1.18.1/dashboard/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2024 05:29:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="../vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
    <link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text">Home</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                      <li class="collapsed-nav-item-title d-none">Home</li>
                      <li class="nav-item"><a class="nav-link" href="../index.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">E commerce</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link active" href="project-management.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="crm.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">CRM</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="travel-agency.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Travel agency</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/social/feed.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Social feed</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Apps</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-e-commerce">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">E commerce</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce">
                      <li class="collapsed-nav-item-title d-none">E commerce</li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-admin">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Admin</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-admin">
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/add-product.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Add product</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/products.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Products</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/customers.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Customers</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/customer-details.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Customer details</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/orders.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Orders</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/order-details.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Order details</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/refund.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Refund</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-customer" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-customer">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Customer</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-customer">
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/homepage.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/product-details.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Product details</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/products-filter.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Products filter</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/cart.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Cart</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/checkout.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Checkout</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/shipping-info.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Shipping info</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/profile.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/favourite-stores.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Favourite stores</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/wishlist.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Wishlist</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/order-tracking.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Order tracking</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/invoice.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Invoice</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-CRM">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">CRM</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-CRM">
                      <li class="collapsed-nav-item-title d-none">CRM</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/analytics.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Analytics</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/deals.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Deals</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/deal-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Deal details</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/leads.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Leads</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/lead-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Lead details</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/reports.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Reports</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/report-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Report details</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/crm/add-contact.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Add contact</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-project-management">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text">Project management</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management">
                      <li class="collapsed-nav-item-title d-none">Project management</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/create-new.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Create new</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-list-view.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Project list view</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-card-view.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Project card view</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-board-view.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Project board view</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/todo-list.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Todo list</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-details.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Project details</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-travel-agency" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-travel-agency">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="briefcase"></span></span><span class="nav-link-text">Travel agency</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-travel-agency">
                      <li class="collapsed-nav-item-title d-none">Travel agency</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/landing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Landing</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-hotel">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Hotel</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#travel-agency" id="nv-hotel">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel-admin" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-hotel-admin">
                                <div class="d-flex align-items-center">
                                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Admin</span>
                                </div>
                              </a><!-- more inner pages-->
                              <div class="parent-wrapper">
                                <ul class="nav collapse parent" data-bs-parent="#hotel" id="nv-hotel-admin">
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/add-property.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Add property</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/add-room.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Add room</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Room listing</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/room-search.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Search room</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel-customer" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-hotel-customer">
                                <div class="d-flex align-items-center">
                                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Customer</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                                </div>
                              </a><!-- more inner pages-->
                              <div class="parent-wrapper">
                                <ul class="nav collapse parent" data-bs-parent="#hotel" id="nv-hotel-customer">
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/homepage.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Hotel details</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Hotel compare</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/checkout.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Checkout</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/payment.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Payment</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/gallery.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Gallery</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">new</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-flight" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-flight">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Flight</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#travel-agency" id="nv-flight">
                            <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/flight/homepage.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/flight/booking.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Booking</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/flight/payment.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Payment</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-trip" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-trip">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Trip</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">new</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#travel-agency" id="nv-trip">
                            <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/trip/homepage.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/trip/trip-details.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Trip details</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/trip/checkout.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Checkout</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../apps/chat.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Chat</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-email">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="mail"></span></span><span class="nav-link-text">Email</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-email">
                      <li class="collapsed-nav-item-title d-none">Email</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/email/inbox.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Inbox</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/email/email-detail.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Email detail</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/email/compose.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Compose</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-events">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="bookmark"></span></span><span class="nav-link-text">Events</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-events">
                      <li class="collapsed-nav-item-title d-none">Events</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/events/create-an-event.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Create an event</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/events/event-detail.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Event detail</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-kanban">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="trello"></span></span><span class="nav-link-text">Kanban</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-kanban">
                      <li class="collapsed-nav-item-title d-none">Kanban</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/kanban/kanban.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Kanban</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/kanban/boards.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Boards</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/kanban/create-kanban-board.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Create board</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-social">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="share-2"></span></span><span class="nav-link-text">Social</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-social">
                      <li class="collapsed-nav-item-title d-none">Social</li>
                      <li class="nav-item"><a class="nav-link" href="../apps/social/profile.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../apps/social/settings.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Settings</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../apps/calendar.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Calendar</span></span></div>
                  </a></div>
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Pages</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/starter.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="compass"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Starter</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-faq">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="help-circle"></span></span><span class="nav-link-text">Faq</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-faq">
                      <li class="collapsed-nav-item-title d-none">Faq</li>
                      <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-accordion.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Faq accordion</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-tab.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Faq tab</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-landing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-landing">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="globe"></span></span><span class="nav-link-text">Landing</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-landing">
                      <li class="collapsed-nav-item-title d-none">Landing</li>
                      <li class="nav-item"><a class="nav-link" href="../pages/landing/default.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Default</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../pages/landing/alternate.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Alternate</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-pricing">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="tag"></span></span><span class="nav-link-text">Pricing</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-pricing">
                      <li class="collapsed-nav-item-title d-none">Pricing</li>
                      <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-column.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Pricing column</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-grid.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Pricing grid</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/notifications.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="bell"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Notifications</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/members.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Members</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/timeline.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="clock"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Timeline</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-errors">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="alert-triangle"></span></span><span class="nav-link-text">Errors</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-errors">
                      <li class="collapsed-nav-item-title d-none">Errors</li>
                      <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">404</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../pages/errors/403.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">403</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">500</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-authentication">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text">Authentication</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-authentication">
                      <li class="collapsed-nav-item-title d-none">Authentication</li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-simple">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Simple</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#authentication" id="nv-simple">
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/sign-in.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/sign-up.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/sign-out.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/forgot-password.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/reset-password.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/lock-screen.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/2FA.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">2FA</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-split">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Split</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#authentication" id="nv-split">
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/sign-in.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/sign-up.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/sign-out.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/forgot-password.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/reset-password.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/lock-screen.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/2FA.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">2FA</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-Card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-Card">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Card</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#authentication" id="nv-Card">
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/sign-in.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/sign-up.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/sign-out.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/forgot-password.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/reset-password.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/lock-screen.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/2FA.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">2FA</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-layouts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-layouts">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="layout"></span></span><span class="nav-link-text">Layouts</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-layouts">
                      <li class="collapsed-nav-item-title d-none">Layouts</li>
                      <li class="nav-item"><a class="nav-link" href="../demo/vertical-sidenav.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Vertical sidenav</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/dark-mode.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Dark mode</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/sidenav-collapse.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav collapse</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/darknav.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Darknav</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/topnav-slim.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Topnav slim</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/navbar-horizontal.html" target="_blank">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Navbar horizontal</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/horizontal-slim.html" target="_blank">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal slim</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/combo-nav.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/combo-nav-slim.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav slim</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../demo/dual-nav.html" target="_blank">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Dual nav</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Modules</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-forms">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text">Forms</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-forms">
                      <li class="collapsed-nav-item-title d-none">Forms</li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-basic">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Basic</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#forms" id="nv-basic">
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/form-control.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Form control</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/input-group.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Input group</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/select.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Select</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/checks.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Checks</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/range.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Range</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/floating-labels.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Floating labels</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/layout.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Layout</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-advance">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Advance</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#forms" id="nv-advance">
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/advance-select.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Advance select</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/date-picker.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Date picker</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/editor.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Editor</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/file-uploader.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">File uploader</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/range.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Range</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/rating.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Rating</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/emoji-button.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Emoji button</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/forms/validation.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Validation</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/forms/wizard.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Wizard</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-icons">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="grid"></span></span><span class="nav-link-text">Icons</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-icons">
                      <li class="collapsed-nav-item-title d-none">Icons</li>
                      <li class="nav-item"><a class="nav-link" href="../modules/icons/feather.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Feather</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/icons/font-awesome.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Font awesome</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/icons/unicons.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Unicons</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-tables">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="columns"></span></span><span class="nav-link-text">Tables</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-tables">
                      <li class="collapsed-nav-item-title d-none">Tables</li>
                      <li class="nav-item"><a class="nav-link" href="../modules/tables/basic-tables.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Basic tables</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/tables/advance-tables.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Advance tables</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/tables/bulk-select.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Bulk Select</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-ECharts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-ECharts">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="bar-chart-2"></span></span><span class="nav-link-text">ECharts</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-ECharts">
                      <li class="collapsed-nav-item-title d-none">ECharts</li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/line-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Line charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/bar-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Bar charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/candlestick-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Candlestick charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/geo-map.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Geo map</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/scatter-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Scatter charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/pie-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Pie charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/gauge-chart.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Gauge chart</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/radar-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Radar charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/heatmap-charts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Heatmap charts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/echarts/how-to-use.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">How to use</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-components">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="package"></span></span><span class="nav-link-text">Components</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-components">
                      <li class="collapsed-nav-item-title d-none">Components</li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/accordion.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Accordion</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/avatar.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Avatar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/alerts.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Alerts</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/badge.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Badge</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/breadcrumb.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Breadcrumb</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/button.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Buttons</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/calendar.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Calendar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/card.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Card</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-carousel">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Carousel</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#components" id="nv-carousel">
                            <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/bootstrap.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Bootstrap</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/swiper.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Swiper</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/collapse.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Collapse</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/dropdown.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Dropdown</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/list-group.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">List group</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/modal.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Modals</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-navs-_and_-Tabs">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Navs &amp; Tabs</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#components" id="nv-navs-_and_-Tabs">
                            <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navs.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Navs</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navbar.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Navbar</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/tabs.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Tabs</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/offcanvas.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Offcanvas</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/progress-bar.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Progress bar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/placeholder.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Placeholder</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/pagination.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Pagination</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/popovers.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Popovers</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/scrollspy.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Scrollspy</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/sortable.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Sortable</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/spinners.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Spinners</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/toast.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Toast</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/tooltips.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Tooltips</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/typed-text.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Typed text</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/components/chat-widget.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Chat widget</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-utilities">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="tool"></span></span><span class="nav-link-text">Utilities</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-utilities">
                      <li class="collapsed-nav-item-title d-none">Utilities</li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/background.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Background</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/borders.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Borders</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/colors.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Colors</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/display.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Display</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/flex.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Flex</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/stacks.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Stacks</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/float.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Float</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/grid.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Grid</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/interactions.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Interactions</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/opacity.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Opacity</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/overflow.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Overflow</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/position.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Position</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/shadows.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Shadows</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/sizing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Sizing</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/spacing.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Spacing</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/typography.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Typography</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/vertical-align.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Vertical align</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../modules/utilities/visibility.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Visibility</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../widgets.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="server"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Widgets</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-multi-level">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="layers"></span></span><span class="nav-link-text">Multi level</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-multi-level">
                      <li class="collapsed-nav-item-title d-none">Multi level</li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-level-two">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Level two</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#multi-level" id="nv-level-two">
                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 1</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 2</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-level-three">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Level three</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#multi-level" id="nv-level-three">
                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 3</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-item-4">
                                <div class="d-flex align-items-center">
                                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Item 4</span>
                                </div>
                              </a><!-- more inner pages-->
                              <div class="parent-wrapper">
                                <ul class="nav collapse parent" data-bs-parent="#level-three" id="nv-item-4">
                                  <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Item 5</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-level-four">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Level four</span>
                          </div>
                        </a><!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#multi-level" id="nv-level-four">
                            <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-item-7">
                                <div class="d-flex align-items-center">
                                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Item 7</span>
                                </div>
                              </a><!-- more inner pages-->
                              <div class="parent-wrapper">
                                <ul class="nav collapse parent" data-bs-parent="#level-four" id="nv-item-7">
                                  <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                      <div class="d-flex align-items-center"><span class="nav-link-text">Item 8</span></div>
                                    </a><!-- more inner pages-->
                                  </li>
                                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-item-9">
                                      <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Item 9</span>
                                      </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                      <ul class="nav collapse parent" data-bs-parent="#item-7" id="nv-item-9">
                                        <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 10</span></div>
                                          </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../index-2.html#!.html">
                                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 11</span></div>
                                          </a><!-- more inner pages-->
                                        </li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Documentation</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Getting started</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-customization">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Customization</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-customization">
                      <li class="collapsed-nav-item-title d-none">Customization</li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/customization/configuration.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Configuration</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/customization/styling.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Styling</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/customization/color.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Color</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/customization/dark-mode.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Dark mode</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/customization/plugin.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-layouts-doc" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-layouts-doc">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="table"></span></span><span class="nav-link-text">Layouts doc</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-layouts-doc">
                      <li class="collapsed-nav-item-title d-none">Layouts doc</li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/layouts/vertical-navbar.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Vertical navbar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/layouts/horizontal-navbar.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal navbar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/layouts/combo-navbar.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Combo navbar</span></div>
                        </a><!-- more inner pages-->
                      </li>
                      <li class="nav-item"><a class="nav-link" href="../documentation/layouts/dual-nav.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Dual nav</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fa-brands fa-gulp ms-1 me-1 fa-lg"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Gulp</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../documentation/design-file.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="figma"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Design file</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="git-merge"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Changelog</span></span></div>
                  </a></div><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link label-1" href="../showcase.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Showcase</span></span></div>
                  </a></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                  <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-body">
                        <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                      <div class="avatar avatar-l  me-2 text-body">
                        <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
              <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent border-0">
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-body-emphasis position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                      </div>
                      <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label></div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search" style="height:12px;width:12px;"></span></span></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="bell" style="height:12px;width:12px;"></span></span></a>
              <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent border-0">
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-body-emphasis position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span class="fa-solid fa-chevron-down fs-10"></span></span></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                      </div>
                      <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item active" href="project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="travel-agency.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/report-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing</div>
                      </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Hotel</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-property.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add property</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-room.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add room</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Room listing</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-search.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Search room</div>
                              </a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/homepage.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel details</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel compare</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/checkout.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/payment.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/gallery.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Gallery</div>
                              </a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Flight</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/booking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Booking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/payment.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Trip</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/trip-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Trip details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-horizontal.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar horizontal</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item active" href="project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="travel-agency.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/report-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing</div>
                      </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Hotel</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-property.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add property</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-room.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add room</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Room listing</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-search.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Search room</div>
                              </a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/homepage.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel details</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel compare</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/checkout.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/payment.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/gallery.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Gallery</div>
                              </a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Flight</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/booking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Booking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/payment.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Trip</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/trip-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Trip details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-horizontal.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar horizontal</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label></div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search" style="height:12px;width:12px;"></span></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="bell" style="height:12px;width:12px;"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span class="fa-solid fa-chevron-down fs-10"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item active" href="project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="travel-agency.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/report-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing</div>
                      </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Hotel</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-property.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add property</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-room.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add room</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Room listing</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-search.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Search room</div>
                              </a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/homepage.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel details</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel compare</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/checkout.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/payment.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/gallery.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Gallery</div>
                              </a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Flight</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/booking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Booking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/payment.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Trip</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/trip-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Trip details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-horizontal.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar horizontal</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item active" href="project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="travel-agency.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/report-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing</div>
                      </a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Hotel</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-property.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add property</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-room.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add room</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Room listing</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-search.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Search room</div>
                              </a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/homepage.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel details</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel compare</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/checkout.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/payment.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                              </a></li>
                            <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/gallery.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Gallery</div>
                              </a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Flight</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/booking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Booking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/flight/payment.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Trip</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/trip-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Trip details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/trip/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-horizontal.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar horizontal</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label></div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search" style="height:12px;width:12px;"></span></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="bell" style="height:12px;width:12px;"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span class="fa-solid fa-chevron-down fs-10"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;">
        <div class="w-100">
          <div class="d-flex flex-between-center dual-nav-first-layer">
            <div class="navbar-logo">
              <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
              <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                    <h5 class="logo-text ms-2 d-none d-sm-block">phoenix</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
              <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                        <div class="avatar avatar-l status-online  me-2 text-body">
                          <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                        <div class="avatar avatar-l  me-2 text-body">
                          <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="text-center">
                    <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                  </div>
                </div>
              </div>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                  <div class="card position-relative border-0">
                    <div class="card-header p-2">
                      <div class="d-flex justify-content-between">
                        <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="scrollbar-overlay" style="height: 27rem;">
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3">
                                <div class="avatar-name rounded-circle"><span>J</span></div>
                              </div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent border-0">
                      <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-body-emphasis position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                  <div class="card position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                        </div>
                        <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr />
                      <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse navbar-top-collapse justify-content-center" id="navbarTopCollapse">
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../index.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                    </a></li>
                  <li><a class="dropdown-item active" href="project-management.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                    </a></li>
                  <li><a class="dropdown-item" href="crm.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                    </a></li>
                  <li><a class="dropdown-item" href="travel-agency.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/social/feed.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                    </a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                            </a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/deals.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/leads.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/reports.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/report-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing</div>
                        </a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Hotel</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                              <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-property.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add property</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-room.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add room</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Room listing</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-search.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Search room</div>
                                </a></li>
                            </ul>
                          </li>
                          <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                              <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/homepage.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel details</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel compare</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/checkout.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/payment.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                                </a></li>
                              <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/gallery.html">
                                  <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Gallery</div>
                                </a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Flight</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../apps/travel-agency/flight/homepage.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/travel-agency/flight/booking.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Booking</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/travel-agency/flight/payment.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="trip" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Trip</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../apps/travel-agency/trip/homepage.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/travel-agency/trip/trip-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Trip details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/travel-agency/trip/checkout.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                            </a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../apps/chat.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/email/inbox.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/email/compose.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/social/profile.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/social/settings.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../apps/calendar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                    </a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../pages/starter.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/landing/default.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../pages/notifications.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../pages/members.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../pages/timeline.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/errors/404.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/errors/403.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/errors/500.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/dark-mode.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/darknav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/navbar-horizontal.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar horizontal</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/combo-nav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/dual-nav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                  <div class="border-0 scrollbar" style="max-height: 60vh;">
                    <div class="px-3 pt-4 pb-3 img-dropdown">
                      <div class="row gx-4 gy-5">
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Forms</h6>
                          </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Icons</h6>
                          </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">ECharts</h6>
                          </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Components</h6>
                          </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Tables</h6>
                          </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Utilities</h6>
                          </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../documentation/getting-started.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                    </a></li>
                  <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/color.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../documentation/gulp.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/design-file.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../changelog.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../showcase.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                    </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script>
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        var navbarPosition = window.config.config.phoenixNavbarPosition;
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTop = document.querySelector('#navbarTop');
        var topNavSlim = document.querySelector('#topNavSlim');
        var navbarTopSlim = document.querySelector('#navbarTopSlim');
        var navbarCombo = document.querySelector('#navbarCombo');
        var navbarComboSlim = document.querySelector('#navbarComboSlim');
        var dualNav = document.querySelector('#dualNav');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarPosition === 'dual-nav') {
          topNavSlim?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          navbarDefault?.remove();
          navbarVertical?.remove();
          dualNav.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'dual');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          topNavSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault?.remove();
          navbarVertical?.remove();
          navbarTop?.remove();
          topNavSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarTopSlim.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
          navbarDefault?.remove();
          navbarTop?.remove();
          topNavSlim?.remove();
          navbarCombo?.remove();
          navbarTopSlim?.remove();
          dualNav?.remove();
          navbarComboSlim.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault?.remove();
          topNavSlim?.remove();
          navbarVertical?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarTop.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'horizontal');
        } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
          topNavSlim?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarDefault?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarCombo.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'combo');
        } else {
          topNavSlim?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
      </script>
      <div class="content">
        <div class="row gy-3 mb-6 justify-content-between">
          <div class="col-md-9 col-auto">
            <h2 class="mb-2 text-body-emphasis">Projects Dashboard</h2>
            <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
          </div>
          <div class="col-md-3 col-auto">
            <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
          </div>
        </div>
        <div class="row mb-3 gy-6">
          <div class="col-12 col-xxl-2">
            <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-dark"></span>
                  <div class="ms-2">
                    <div class="d-flex align-items-end">
                      <h2 class="mb-0 me-2">32</h2><span class="fs-7 fw-semibold text-body">Projects</span>
                    </div>
                    <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-dark"></span>
                  <div class="ms-2">
                    <div class="d-flex align-items-end">
                      <h2 class="mb-0 me-2">94</h2><span class="fs-7 fw-semibold text-body">Members</span>
                    </div>
                    <p class="text-body-secondary fs-9 mb-0">Working hard</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-dark"></span>
                  <div class="ms-2">
                    <div class="d-flex align-items-end">
                      <h2 class="mb-0 me-2">23</h2><span class="fs-7 fw-semibold text-body">Invoices</span>
                    </div>
                    <p class="text-body-secondary fs-9 mb-0">Soon to be cleared</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-dark"></span>
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
                      <div class="d-flex align-items-end me-3"><label class="form-check-label mb-0 me-2 lh-1 text-body" for="progress">Progress</label>
                        <div class="form-check form-switch min-h-auto mb-0"><input class="form-check-input" id="progress" type="checkbox" checked="" data-gantt-progress="data-gantt-progress" /></div>
                      </div>
                      <div class="d-flex align-items-end flex-1"><label class="form-check-label mb-0 me-2 lh-1 text-body" for="links">Links</label>
                        <div class="form-check form-switch min-h-auto flex-1 mb-0"><input class="form-check-input" id="links" type="checkbox" checked="" data-gantt-links="data-gantt-links" /></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-auto">
                    <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input class="btn-check" id="weekView" type="radio" name="scaleView" value="week" checked="" /><label class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0" for="weekView">Week</label><input class="btn-check" id="monthView" type="radio" name="scaleView" value="month" /><label class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0" for="monthView">Month</label><input class="btn-check" id="yearView" type="radio" name="scaleView" value="year" /><label class="btn btn-phoenix-secondary bg-body-highlight-hover fs-10 py-1 mb-0" for="yearView">Year</label></div>
                  </div>
                </div>
                <div class="gantt-zero-roadmap-chart"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
            <div class="card border h-100 w-100 overflow-hidden">
              <div class="bg-holder d-block bg-card" style="background-image:url(../assets/img/spot-illustrations/32.png);background-position: top right;"></div>
              <!--/.bg-holder-->
              <div class="d-dark-none">
                <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url(../assets/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;"></div>
                <!--/.bg-holder-->
              </div>
              <div class="d-light-none">
                <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url(../assets/img/spot-illustrations/dark_21.png);background-position: bottom right; background-size: auto;"></div>
                <!--/.bg-holder-->
              </div>
              <div class="card-body px-5 position-relative">
                <div class="badge badge-phoenix fs-10 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div>
                <h3 class="mb-5">Early bird gets the warm leads!</h3>
                <p class="text-body-tertiary fw-semibold">Phoenix CRM Dashboard is coming to <br class="d-none d-sm-block" />market soon for fulfilling your every <br class="d-none d-sm-block" />CRM related needs. </p>
              </div>
              <div class="card-footer border-0 py-0 px-5 z-1">
                <p class="text-body-tertiary fw-semibold">Follow <a href="https://themewagon.com/">ThemeWagon </a>at <br class="d-none d-xxl-block" />Bootstrap Marketplace for updates.</p>
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
                  <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-info-light bullet-item me-2"></span>
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Product design</p>
                    <h5 class="mb-0 text-body">78</h5>
                  </div>
                  <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-warning-light bullet-item me-2"></span>
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Development</p>
                    <h5 class="mb-0 text-body">63</h5>
                  </div>
                  <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-danger-light bullet-item me-2"></span>
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">QA &amp; Testing</p>
                    <h5 class="mb-0 text-body">56</h5>
                  </div>
                  <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-success-light bullet-item me-2"></span>
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">Customer queries</p>
                    <h5 class="mb-0 text-body">36</h5>
                  </div>
                  <div class="d-flex align-items-center"><span class="d-inline-block bg-primary bullet-item me-2"></span>
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">R &amp; D</p>
                    <h5 class="mb-0 text-body">24</h5>
                  </div><button class="btn btn-outline-primary mt-5">See Details<span class="fas fa-angle-right ms-2 fs-10 text-center"></span></button>
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
              <p class="text-body-tertiary mb-0 mb-xl-3">Deadline &amp; progress</p>
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
                            <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                              <span class="fas fa-search search-box-icon"></span>
                            </form>
                          </div>
                        </div>
                        <div class="col-auto d-flex">
                          <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p><button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body py-0 scrollbar to-do-list-body">
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Designing the dungeon</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-primary">DRAFT</span></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Hiring a motion graphic designer</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-warning">URGENT</span></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a><a class="text-warning fw-bold fs-10 me-2" href="#!"><span class="fas fa-tasks me-1"></span>3</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily Meetings Purpose, participants</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON PROCESS</span></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>4</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Dec, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">05:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Finalizing the geometric shapes</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily meeting with team members</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center">
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">1 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Daily Standup Meetings</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-warning fw-bold fs-10 me-2" href="#!"><span class="fas fa-tasks me-1"></span>4</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">13 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">10:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Procrastinate for a month</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-info">ON PROCESS</span></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">warming up</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-secondary">CLOSE</span></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Make ready for release</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a><a class="text-warning fw-bold fs-10 me-2" href="#!"><span class="fas fa-tasks me-1"></span>2</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">2o Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">1:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-9" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Modify the component</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>4</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">22 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">1:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-translucent border-top border-bottom"><input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-10" data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-translucent gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-8 me-2 line-clamp-1 text-body cursor-pointer">Delete overlapping tasks and articles</label><span class="badge badge-phoenix ms-auto fs-10 badge-phoenix-secondary">CLOSE</span></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><a class="text-body-tertiary fw-bold fs-10 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                          <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">25 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl">1:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent"><button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content bg-body overflow-hidden">
                        <div class="modal-header justify-content-between px-6 py-5 pe-sm-5 px-md-6 dark__bg-gray-1100">
                          <h3 class="text-body-highlight fw-bolder mb-0">Designing the Dungeon Blueprint</h3><button class="btn btn-phoenix-secondary btn-icon btn-icon-xl flex-shrink-0" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                        </div>
                        <div class="modal-body bg-body-highlight px-6 py-0">
                          <div class="row gx-14">
                            <div class="col-12 col-lg-7 border-end-lg">
                              <div class="py-6">
                                <div class="mb-7">
                                  <div class="d-flex align-items-center mb-3">
                                    <h4 class="text-body me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                                  </div>
                                  <p class="text-body-highlight mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                                </div>
                                <div class="mb-7">
                                  <h4 class="mb-3">Subtasks</h4>
                                  <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined1" /><label class="form-check-label mb-0 fs-8" for="subtaskundefined1">Study Dragons</label></div>
                                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-body-tertiary px-0"><span class="fa-solid fa-xmark fs-8"></span></button></div>
                                  </div>
                                  <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined2" /><label class="form-check-label mb-0 fs-8" for="subtaskundefined2">Procrastinate a bit</label></div>
                                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-body-tertiary px-0"><span class="fa-solid fa-xmark fs-8"></span></button></div>
                                  </div>
                                  <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top border-bottom mb-3">
                                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined3" /><label class="form-check-label mb-0 fs-8" for="subtaskundefined3">Staring at the notebook for 5 mins</label></div>
                                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-body-tertiary px-0"><span class="fa-solid fa-xmark fs-8"></span></button></div>
                                  </div><a class="fw-bold fs-9" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                                </div>
                                <div class="mb-3">
                                  <div>
                                    <h4 class="mb-3">Files</h4>
                                  </div>
                                  <div class="border-top px-0 pt-4 pb-3">
                                    <div class="me-n3">
                                      <div class="d-flex flex-between-center">
                                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                          <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                        </div>
                                        <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                      </div>
                                      <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="../assets/img/generic/40.png" alt="" style="width:230px" />
                                    </div>
                                  </div>
                                  <div class="border-top px-0 pt-4 pb-3">
                                    <div class="me-n3">
                                      <div class="d-flex flex-between-center">
                                        <div>
                                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                                            <p class="text-body-highlight mb-0 lh-1">All_images.zip</p>
                                          </div>
                                          <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>12.8 mb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></div>
                                        </div>
                                        <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="border-top px-0 pt-4 pb-3 border-bottom">
                                    <div class="me-n3">
                                      <div class="d-flex flex-between-center">
                                        <div>
                                          <div class="d-flex align-items-center mb-1 flex-wrap"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                            <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                          </div>
                                          <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>123 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></div>
                                        </div>
                                        <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mt-3"><label class="btn btn-link p-0" for="customFile"><span class="fas fa-plus me-1"></span>Add file(s)</label><input class="d-none" id="customFile" type="file" /></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-lg-5">
                              <div class="py-6">
                                <h4 class="mb-4 text-body-emphasis">Others Information</h4>
                                <h5 class="text-body-highlight mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                                  <option selected="">Select</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                                <h5 class="text-body-highlight mb-2">Due Date</h5>
                                <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span></div>
                                <h5 class="text-body-highlight mb-2">Reminder</h5>
                                <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-body-tertiary"></span></div>
                                <h5 class="text-body-highlight mb-2">Tag</h5>
                                <div class="choices-select-container mb-6"><select class="form-select" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Select organizer...</option>
                                    <option>Massachusetts Institute of Technology</option>
                                    <option>University of Chicago</option>
                                    <option>GSAS Open Labs At Harvard</option>
                                    <option>California Institute of Technology</option>
                                  </select><span class="uil uil-tag-alt choices-icon text-body-tertiary" style="top: 26%;"></span></div>
                                <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer border-0"><a class="fw-bold fs-9 mt-4" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a></div>
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
                            <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 DEC, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                          </div>
                          <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-chess text-primary-dark fs-10"></span></div><span class="timeline-bar border-end border-dashed"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="timeline-item-content ps-6 ps-md-3">
                            <h5 class="fs-9 lh-sm">Phoenix Template: Unleashing Creative Possibilities</h5>
                            <p class="fs-9">by <a class="fw-semibold" href="#!">Shantinon Mekalan</a></p>
                            <p class="fs-9 text-body-secondary mb-5">Discover limitless creativity with the Phoenix template! Our latest update offers an array of innovative features and design options.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-md-3">
                        <div class="col-12 col-md-auto d-flex">
                          <div class="timeline-item-date order-1 order-md-0 me-md-4">
                            <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">05 DEC, 2023<br class="d-none d-md-block" /> 12:30 AM</p>
                          </div>
                          <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-dove text-primary-dark fs-10"></span></div><span class="timeline-bar border-end border-dashed"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="timeline-item-content ps-6 ps-md-3">
                            <h5 class="fs-9 lh-sm">Empower Your Digital Presence: The Phoenix Template Unveiled</h5>
                            <p class="fs-9">by <a class="fw-semibold" href="#!">Bookworm22</a></p>
                            <p class="fs-9 text-body-secondary mb-5">Unveiling the Phoenix template, a game-changer for your digital presence. With its powerful features and sleek design,</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-md-3">
                        <div class="col-12 col-md-auto d-flex">
                          <div class="timeline-item-date order-1 order-md-0 me-md-4">
                            <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">15 DEC, 2023<br class="d-none d-md-block" /> 2:30 AM</p>
                          </div>
                          <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-dungeon text-primary-dark fs-10"></span></div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="timeline-item-content ps-6 ps-md-3">
                            <h5 class="fs-9 lh-sm">Phoenix Template: Simplified Design, Maximum Impact</h5>
                            <p class="fs-9">by <a class="fw-semibold" href="#!">Sharuka Nijibum</a></p>
                            <p class="fs-9 text-body-secondary mb-0">Introducing the Phoenix template, where simplified design meets maximum impact. Elevate your digital presence with its sleek and intuitive features.</p>
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
              <div id="projectSummary" data-list='{"valueNames":["project","assignees","start","deadline","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
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
                        <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="project" style="width:30%;">PROJECT NAME</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="assignees" style="width:10%;">Assignees</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="calculation" style="width:12%;">CALCULATION</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                        <th class="align-middle ps-8" scope="col" data-sort="status" style="width:10%;">STATUS</th>
                        <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody class="list" id="project-summary-table-body">
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Making the Butterflies shoot each other dead</a></td>
                        <td class="align-middle white-space-nowrap assignees ps-3">
                          <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/9.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/9.webp" alt="" /></div>
                                    <h6 class="text-white">Michael Jenkins</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/25.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/25.webp" alt="" /></div>
                                    <h6 class="text-white">Ansolo Lazinatov</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/32.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/32.webp" alt="" /></div>
                                    <h6 class="text-white">Jennifer Schramm</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/avatar.webp" alt="" /></div>
                                    <h6 class="text-white">Kristine Cadena</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <div class="avatar-name rounded-circle "><span>+3</span></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs-9 text-body">Dec 12, 2018</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs-9 text-body">Dec 12, 2026</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3">
                          <p class="fw-bold text-body-emphasis fs-9 mb-0">$4</p>
                          <p class="fw-semibold fs-10 text-body-tertiary mb-0">Cost</p>
                        </td>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                            <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                            <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                            <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a></td>
                        <td class="align-middle white-space-nowrap assignees ps-3">
                          <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/22.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/22.webp" alt="" /></div>
                                    <h6 class="text-white">Woodrow Burton</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/28.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/28.webp" alt="" /></div>
                                    <h6 class="text-white">Ashley Garrett</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s">
                                <div class="avatar-name rounded-circle"><span>R</span></div>
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                      <div class="avatar-name rounded-circle"><span>R</span></div>
                                    </div>
                                    <h6 class="text-white">Raymond Mims</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs-9 text-body">Jan 9, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs-9 text-body">Dec 9, 2022</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button></td>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">148 / 223</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                            <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                            <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                            <div class="progress-bar bg-success" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">The Chewing Gum Attack</a></td>
                        <td class="align-middle white-space-nowrap assignees ps-3">
                          <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/34.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/34.webp" alt="" /></div>
                                    <h6 class="text-white">Jean Renoir</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/59.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/59.webp" alt="" /></div>
                                    <h6 class="text-white">Katerina Karenin</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs-9 text-body">Sep 4, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs-9 text-body">Dec 4, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3">
                          <p class="fw-bold text-body-emphasis fs-9 mb-0">$657k</p>
                          <p class="fw-semibold fs-10 text-body-tertiary mb-0">Estimation</p>
                        </td>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">277 / 539</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                            <div class="progress-bar bg-danger" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                            <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                            <div class="progress-bar bg-success" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Execution of Micky the foul mouse</a></td>
                        <td class="align-middle white-space-nowrap assignees ps-3">
                          <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/1.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/1.webp" alt="" /></div>
                                    <h6 class="text-white">Luis Bunuel</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/avatar.webp" alt="" /></div>
                                    <h6 class="text-white">Kristine Cadena</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/5.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/5.webp" alt="" /></div>
                                    <h6 class="text-white">Ricky Antony</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/11.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/11.webp" alt="" /></div>
                                    <h6 class="text-white">Roy Anderson</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs-9 text-body">Nov 1, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs-9 text-body">Dec 1, 2024</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button></td>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">16 / 56</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 28.57142857142857%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                            <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                            <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                            <div class="progress-bar bg-success" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Harnessing stupidity from Jerry</a></td>
                        <td class="align-middle white-space-nowrap assignees ps-3">
                          <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/21.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/21.webp" alt="" /></div>
                                    <h6 class="text-white">Michael Jenkins</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/23.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/23.webp" alt="" /></div>
                                    <h6 class="text-white">Kristine Cadena</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/25.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/25.webp" alt="" /></div>
                                    <h6 class="text-white">Ricky Antony</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs-9 text-body">Dec 28, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs-9 text-body">Nov 28, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button></td>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">169 / 394</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                            <div class="progress-bar bg-danger" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                            <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                            <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-8" href="#">Water resistant mosquito killer gun</a></td>
                        <td class="align-middle white-space-nowrap assignees ps-3">
                          <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/30.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                                    <h6 class="text-white">Stanly Drinkwater</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/avatar.webp" alt="" /></div>
                                    <h6 class="text-white">Kristine Cadena</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/59.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/59.webp" alt="" /></div>
                                    <h6 class="text-white">Katerina Karenin</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle " src="../assets/img/team/31.webp" alt="" />
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="../assets/img/team/31.webp" alt="" /></div>
                                    <h6 class="text-white">Martina scorcese</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                              <div class="avatar avatar-s">
                                <div class="avatar-name rounded-circle"><span>R</span></div>
                              </div>
                            </a>
                            <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                              <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;"></div>
                                <!--/.bg-holder-->
                                <div class="p-3">
                                  <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                                  <div class="text-center">
                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                      <div class="avatar-name rounded-circle"><span>R</span></div>
                                    </div>
                                    <h6 class="text-white">Roy Anderson</h6>
                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                    <div class="d-flex flex-center mb-3">
                                      <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                      <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                                  </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                  <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                                </ul>
                              </div>
                              <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs-9 text-body">Feb 24, 2020</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs-9 text-body">Nov 24, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3">
                          <p class="fw-bold text-body-emphasis fs-9 mb-0">$55k</p>
                          <p class="fw-semibold fs-10 text-body-tertiary mb-0">Budget</p>
                        </td>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:24%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar" data-bs-toggle="tooltip" data-bs-placement="top" title="Active"></div>
                            <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Damage" role="progressbar"></div>
                            <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending" role="progressbar"></div>
                            <div class="progress-bar bg-success" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Done" role="progressbar"></div>
                          </div>
                        </td>
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
                <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                  <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                  </div>
                  <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.1</p>
            </div>
          </div>
        </footer>
      </div>
      <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
        <div class="modal-dialog">
          <div class="modal-content mt-15 rounded-pill">
            <div class="modal-body p-0">
              <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                  <div class="scrollbar-overlay" style="max-height: 30rem;">
                    <div class="list pb-3">
                      <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                          <div class="avatar avatar-l  me-2 text-body">
                            <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="text-center">
                      <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="support-chat-container">
        <div class="container-fluid support-chat">
          <div class="card bg-body-emphasis">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
              <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
              <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
              </div>
            </div>
            <div class="card-body chat p-0">
              <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a></div>
                <div class="text-center mt-auto">
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                  <h5 class="mt-2 mb-3">Eric</h5>
                  <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
              <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
            </div>
          </div>
        </div><button class="btn btn-support-chat p-0 border border-translucent"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="ping-icon-wrapper mt-n4 ms-n6 mt-sm-0 ms-sm-2 position-absolute position-sm-relative"><span class="ping-icon-bg"></span><span class="fa-solid fa-circle ping-icon"></span></span><span class="fa-solid fa-headset text-primary fs-8 d-sm-none"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
            <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
      </div>
      <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
          <h5 class="setting-panel-item-title">Color Scheme</h5>
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/auto.png" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">RTL </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Change text direction</p>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Toggle support chat</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Navigation Type</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../vendors/feather-icons/feather.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/choices/choices.min.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
    <script src="../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../assets/js/phoenix.js"></script>
    <script src="../assets/js/projectmanagement-dashboard.js"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.18.1/dashboard/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2024 05:30:05 GMT -->
</html>