<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="sidebar-item">
                <h4 class="sidebar-link  waves-effect waves-dark profile-dd text-center">
                    
                    <span><?php echo e(Auth::user()->name); ?></span>
                </h4>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link  waves-effect waves-dark" href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-table"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <!-- <a class="sidebar-link  waves-effect waves-dark" href=""> -->
                    <i class="fa fa-table"></i>
                    <span>Author</span>
                </a>
            </li>



                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-cubes"></i>
                        <span class="hide-menu">Category</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="">
                                <i class="fa fa-table"></i>
                                <span>Category</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="">
                                <i class="fa fa-table"></i>
                                <span>Sub Category</span>
                            </a>
                        </li>

                    </ul>
                </li>

            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="fa fa-cubes"></i>
                    <span class="hide-menu">Post</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                            <i class="fa fa-table"></i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                            <i class="fa fa-table"></i>
                            <span>Tags</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
<?php /**PATH X:\xampp\htdocs\veuBlog\resources\views/admin/layouts/_left-sidebar.blade.php ENDPATH**/ ?>