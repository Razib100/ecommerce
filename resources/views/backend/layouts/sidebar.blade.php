<div class="tab-content p-l-0 p-r-0">
    <div class="tab-pane active" id="admin">
        <nav class="sidebar-nav">
            <ul class="main-menu metismenu">
                <li class="active"><a href="{{ route('admin')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Banner Management</span> </a>
                    <ul>
                        <li><a href="{{ route('banner.index') }}">All Banners</a></li>
                        <li><a href="{{ route('banner.create') }}">Add Banner</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-target"></i><span>Category Management</span> </a>
                    <ul>
                        <li><a href="{{ route('category.index') }}">All Category</a></li>
                        <li><a href="{{ route('category.create') }}">Add Category</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-pin"></i><span>Brand Management</span> </a>
                    <ul>
                        <li><a href="{{ route('brand.index') }}">All Brands</a></li>
                        <li><a href="{{ route('brand.create') }}">Add Brand</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-list"></i><span>Product Management</span> </a>
                    <ul>
                        <li><a href="{{ route('product.index') }}">All Products</a></li>
                        <li><a href="{{ route('product.create') }}">Add Product</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-info"></i><span>User Management</span> </a>
                    <ul>
                        <li><a href="{{ route('user.index') }}">All Users</a></li>
                        <li><a href="{{ route('user.create') }}">Add User</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-wallet"></i><span>Payments</span> </a>
                    <ul>
                        <li><a href="payments.html">Payments</a></li>
                        <li><a href="payments-add.html">Add Payment</a></li>
                        <li><a href="payments-invoice.html">Invoice</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>