<template>
    <div>

    <!-- Aside Start-->
    <aside class="left-panel" tabindex="5002" style="overflow: hidden; outline: none;">

        <!-- brand -->
        <div class="logo">
            <a href="" class="logo-expanded">
                <img :src="'http://localhost:8000/css/velonic/stylepalette.jpg'" alt="logo">
                <span class="nav-label"></span>
            </a>
        </div>


        <!-- / brand -->

        <!-- Navbar Start -->
        <nav class="navigation">
            <ul class="list-unstyled">
                <li class="has-submenu active"><a :href="'http://localhost:8000/home'"><i class="ion-home"></i> <span class="nav-label">Home</span></a>

                </li>
                <li class="has-submenu"><a :href="'http://localhost:8000/category'"><i class="ion-flask"></i> <span class="nav-label">Category</span></a>

                </li>
                <li class="has-submenu"><a :href="'http://localhost:8000/product'"><i class="ion-settings"></i> <span class="nav-label">Product</span></a>

                </li>
                <li class="has-submenu"><a :href="'http://localhost:8000/customer'"><i class="ion-compose"></i> <span class="nav-label">Customer</span></a>

                </li>



            </ul>
        </nav>

    </aside>
    <!-- Aside Ends-->
    </div>

</template>