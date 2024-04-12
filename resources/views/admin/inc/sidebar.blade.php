 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item nav-category">Main Menu</li>
         
         <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.users.index') }}">
                 <i class="menu-icon typcn typcn-shopping-bag"></i>
                 <span class="menu-title">Users </span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.products.index') }}">
                 <i class="menu-icon typcn typcn-th-large-outline"></i>
                 <span class="menu-title">Products</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="">
                 <i class="menu-icon typcn typcn-bell"></i>
                 <span class="menu-title">Orders</span>
             </a>
         </li>
        
         <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>
            </li> -->
     </ul>
 </nav>