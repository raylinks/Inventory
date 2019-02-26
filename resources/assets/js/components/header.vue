<template>
    <div>

        <!-- Header -->
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Search -->
            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                <input type="text" placeholder="Search..." class="form-control">
            </form>

            <!-- Left navbar -->
            <nav class=" navbar-default hidden-xs" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="">Logout <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">logout</a></li>
                            <!--<li><a :href="'http://localhost:8000/logout'">logout</a></li>-->
                            <li><a href="">Italian</a></li>
                            <li><a href="">Spanish</a></li>
                        </ul>
                    </li>
                    <li><a href="">Files</a></li>
                    <li><a href="">OUR STAFFS</a></li>
                </ul>
            </nav>

            <!-- Right navbar -->
            <ul class="list-inline navbar-right top-menu top-right-menu">
                <!-- mesages -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                        <i class="fa fa-envelope-o "></i>
                        <span class="badge badge-sm up bg-purple count">4</span>
                    </a>
                    <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001" style="overflow: hidden; outline: none;">
                        <li>
                            <p>Messages</p>
                        </li>
                        <li>
                            <a href="">
                                <span class="pull-left"><img src="" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="pull-left"><img src="" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="pull-left"><img src="" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <p><a href="" class="text-right">See all Messages</a></p>
                        </li>
                    </ul>
                </li>
                <!-- /messages -->
                <!-- Notification -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-sm up bg-pink count">3</span>
                    </a>
                    <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002" style="overflow: hidden; outline: none;">
                        <li class="noti-header">
                            <p>Notifications</p>
                        </li>
                        <li>
                            <a href="">
                                <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                            </a>
                        </li>

                        <li>
                            <p><a href="" class="text-right">See all notifications</a></p>
                        </li>
                    </ul>
                </li>
                <!-- /Notification -->

                <!-- user login dropdown start-->
                <li class="dropdown text-center">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                        <img alt="" src="" class="img-circle profile-img thumb-sm">
                        <span class="username">{{ authUser.name }} </span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                        <li><a :href="'http://localhost:8000/profile'"><i class="fa fa-briefcase"></i>Profile</a></li>
                        <li><a href=""><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href=""><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                        <li><a :href="'http://localhost:8000/logout'"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- End right navbar -->

        </header>
        <!-- Header Ends -->

    </div>
</template>
<script>
    import {authUsers} from '../utilities/config'
    export default{
        data(){
            return{
                authUser:{

                }
            }
        },
        created(){
            this.authentic();
        },
        methods: {
            authentic() {
                axios.get(authUsers).then((res) => {
                    this.authUser = res.data
                })
            },
        }

    }
</script>