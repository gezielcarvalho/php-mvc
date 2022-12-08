<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <?php
                            foreach ($breadcrumbs as $item) {
                            ?>
                            <li class="breadcrumb-item <?= $item['href'] === 'active' ? 'active' : '' ?>">
                                <?= $item['href'] !== 'active' ? '<a href="' . $item['href'] . '">' . $item['title'] .
                                    '</a>' : $item['title'] ?>
                            </li>
                            <?php
                            }
                            ?>
                        </ol>
                    </div>
                    <h4 class="page-title">User Management</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

    </div> <!-- container -->

</div> <!-- content -->

Users ....
