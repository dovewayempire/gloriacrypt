<ul class="menu-list flex-grow-1 mt-3">
    <li><a class="m-link active" href="{{route('admin.dashboard')}}"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>
    <li><a class="m-link" href="{{route('admin.secret')}}"><i class="icofont-focus fs-5"></i> <span>Secret Content</span></a></li>
    <li><a class="m-link" href="{{route('admin.users')}}"><i class="icofont-paint fs-5"></i> <span>Users</span></a></li>
    <li class="collapsed">
        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-product" href="#">
            <i class="icofont-truck-loaded fs-5"></i> <span>Users Administrator</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-product">
                <li><a class="ms-link" href="product-grid.html">Product Grid</a></li>

            </ul>
    </li>





</ul>
