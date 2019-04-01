<ul class="nav">
    <!--main pages start-->
    <li class="nav-item nav-category">
        <span class="nav-link">Main</span>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboardSubmenu" aria-expanded="false"
           aria-controls="collapseExample">
            <i class="mdi mdi-compass"></i>
            <span class="menu-title">Product</span>
            <i class="mdi mdi-chevron-right"></i>
        </a>
        <div class="collapse" id="dashboardSubmenu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductController@index')}}">List product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductController@create')}}">Create product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductImportController@create')}}">Import product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/dashboard/dashboard-4.html">Dashboard 4</a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item" >
        <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false"
           aria-controls="collapseExample">
            <i class="mdi mdi-view-grid"></i>
            <span class="menu-title">Category</span>
            <i class="mdi mdi-chevron-right"></i>
        </a>
        <div class="collapse" id="layoutsSubmenu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductCategoryController@index')}}">List category</a>
                    <a class="nav-link" href="{{action('ProductCategoryController@create')}}">Add category</a>
                </li>
            </ul>
        </div>
    </li>
</ul>
