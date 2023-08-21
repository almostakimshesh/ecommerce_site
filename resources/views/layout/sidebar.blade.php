
@php
    $categories = category();
@endphp

<style>
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}
</style>

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a href="/dashboard">
                                <i class="far fa-check-square"></i>Dashboard</a>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Feature</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li class="has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-table"></i>Tables</a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li class="has-sub">
                                                    <a href="/calendar">
                                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                                </li>
                                                <li class="has-sub">
                                                    <a href="/map">
                                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li class=" has-sub">
                                        <a href="form.html">
                                            <i class="far fa-check-square"></i>Forms</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Orders</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li class=" has-sub">
                                        <a href="{{url('dashboard/orders')}}">
                                            <i class="far fa-check-square"></i>order</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Brands</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" name="cat">
                                <li>
                                    <a href="{{route('category.index')}}">Add Category</a>
                                </li>
                             @foreach ($categories as $category)
<div class="dropdown">
<button name="cat" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"  value="{{$category->id}}">
                                        <a href="/dashboard/{{$category->categoryname }}">{{$category->categoryname }} &raquo;</a>
                                        </button>
                <ul name="subcategories" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <li><a class="dropdown-item text-center" href=""></a></li>

                                        </ul>
                                      </div>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <li>
            <div class="btn-group">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Walton
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-center" href="category">Add Catagory</a>
                  <a class="dropdown-item text-center" href="{{route('posts.index')}}">Television</a>
                  <a class="dropdown-item text-center" href="{{route('posts2.index')}}">Mobile</a>
                </div>
            </div>
        </li>
        <!-- END MENU SIDEBAR-->

        <script>
            jQuery(document).ready(function() {
               jQuery('ul[name="cat"] li').on('mouseenter', function() {
                  var categoryID = jQuery(this).find('button').attr('value');
                  if (categoryID) {
                     jQuery.ajax({
                        url: 'dashboard/getSubcategories/'+ categoryID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                           var subcategoriesDropdown = jQuery(this).find('ul[name="subcategories"]');
                           subcategoriesDropdown.empty(); // Clear existing options
                           jQuery.each(data, function(key, value) {
                              subcategoriesDropdown.append('<li><a class="dropdown-item text-center" href="#">' + value + '</a></li>');
                           });
                        }.bind(this)
                     });
                  } else {
                     jQuery(this).find('ul[name="subcategories"]').empty();
                  }
               });

               jQuery('ul[name="cat"] li').on('mouseleave', function() {
                  jQuery(this).find('ul[name="subcategories"]').empty();
               });
            });
         </script>
