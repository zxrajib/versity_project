<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" id="topnav-dashboard">
                            <i class="bx bx-home-circle mr-2"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" id="topnav-uielement"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-tone mr-2"></i>
                            <span key="t-ui-elements"> Setup </span>
                            <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                             aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        @if(auth()->user()->user_type == "Admin")
                                        <a href="{{ route('brand.list') }}" class="dropdown-item"
                                           key="t-alerts">Brand</a>
                                        <a href="{{ route('category.list') }}" class="dropdown-item"
                                           key="t-alerts">Category</a>
                                        <a href="{{ route('attribute.list') }}" class="dropdown-item"
                                           key="t-alerts">Attribute</a>
                                        <a href="{{ route('unit.list') }}" class="dropdown-item"
                                           key="t-alerts">Unit</a>
                                        <a href="{{ route('supplier.list') }}" class="dropdown-item"
                                           key="t-alerts">Supplier</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        @if(auth()->user()->user_type == "Admin")
                                        <a href="{{ route('charge.list') }}" class="dropdown-item" key="t-alerts">Charge</a>
                                            <a href="{{ route('product.list') }}" class="dropdown-item"
                                               key="t-alerts">Product</a>
                                            <a href="{{ route('review.list') }}" class="dropdown-item" key="t-alerts">Reviews</a>
                                            <a href="{{ route('discount.list') }}" class="dropdown-item" key="t-alerts">Discount</a>
{{--                                        <a href="{{ route('expense.list') }}" class="dropdown-item" key="t-alerts">Expense</a>--}}
{{--                                        <a href="{{ route('supplier.list') }}" class="dropdown-item" key="t-alerts">Supplier</a>--}}
{{--                                        <a href="{{ route('payment.list') }}" class="dropdown-item" key="t-alerts">Payment</a>--}}
{{--                                        <a href="{{ route('paymenttype.list') }}" class="dropdown-item" key="t-alerts">Payment Type</a>--}}
{{--                                            <a href="{{ route('supplierPayments') }}" class="dropdown-item" key="t-alerts">Supplier Payment</a>--}}
{{--                                            <a href="{{ route('slider.list') }}" class="dropdown-item" key="t-alerts">Slider</a>--}}
{{--                                            <a href="{{ route('purchase.list') }}" class="dropdown-item" key="t-alerts">Purchase</a>--}}
                                        @else
                                            <a href="{{ route('product.list') }}" class="dropdown-item"
                                               key="t-alerts">Product</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    @if(auth()->user()->user_type == "Admin")
                        <li class="nav-item">

                            <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" id="topnav-uielement"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-tone mr-2"></i>
                                <span key="t-ui-elements"> WebControls </span>
                                <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                 aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('slider.list') }}" class="dropdown-item"
                                               key="t-alerts">Slider</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('product_ads_list') }}" class="dropdown-item"
                                               key="t-alerts">Product Ads</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('footer.list') }}" class="dropdown-item"
                                               key="t-alerts">Footer</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{--                        <a class="nav-link" href="{{ route('webControl.list') }}" id="topnav-dashboard">--}}
                            {{--                            <i class="bx bx-home-circle mr-2"></i>--}}
                            {{--                            <span>WebControls</span>--}}
                            {{--                        </a>--}}
                        </li>
                    @endif
                    @if(auth()->user()->user_type == "Vendor")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" id="topnav-uielement"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-tone mr-2"></i>
                                <span key="t-ui-elements"> Stocks </span>
                                <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                 aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('stock.list') }}" class="dropdown-item" key="t-alerts">Stock
                                                List</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('stock_in') }}" class="dropdown-item"
                                               key="t-alerts">stock_in</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                    @if(auth()->user()->user_type == "Admin")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0)" id="topnav-uielement"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-tone mr-2"></i>
                                <span key="t-ui-elements"> Reports </span>
                                <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                 aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('reports.list') }}" class="dropdown-item"
                                               key="t-alerts">Order Report</a>
                                            <a href="{{ route('category.list') }}" class="dropdown-item"
                                               key="t-alerts">Supplier Payment </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <a href="{{ route('charge.list') }}" class="dropdown-item"
                                               key="t-alerts">Charge</a>

                                            <a href="{{ route('expense.list') }}" class="dropdown-item"
                                               key="t-alerts">Expense</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
