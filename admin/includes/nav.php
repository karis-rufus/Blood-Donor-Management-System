
<!-- Navigation -->
<style>
    /* Set a fixed height for the navbar */
    .navbar {
        min-height: 50px; /* Adjust as needed */
    }

    /* Set a fixed height for the sidebar */
    .navbar-default.sidebar {
        height: 100%;
        width: 250px; /* Adjust width as needed */
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        padding-top: 50px; /* Adjust based on navbar height */
        overflow-y: auto;
        background-color: cyan; /* Adjust background color as needed */
    }

    /* Adjust padding for the sidebar */
    .sidebar-nav {
        padding: 20px; /* Adjust as needed */
    }

    /* Ensure main content doesn't overlap with the sidebar */
    #page-wrapper {
        margin-left: 250px; /* Same as sidebar width */
        padding: 20px; /* Adjust as needed */
    }
</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li class="divider"></li> -->
                        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
               
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>

                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-heartbeat"></i> Blood Collection Details <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addblood.php">Add Blood</a>
                                </li>
                                <li>
                                    <a href="viewblood.php">View Blood</a>
                                </li>
                                <li>
                                    <a href="editblood.php">Edit Blood</a>
                                </li>
                                <li>
                                    <a href="deleteblood.php">Remove Blood</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="adddonor.php"><i class="fa fa-table fa-user-plus"></i> Add Donor</a>
                        </li>
                        <li>
                            <a href="viewdonor.php"><i class="fa fa-edit fa-eye"></i> View Donor Details</a>
                        </li>
                        <li>
                            <a href="editview.php"><i class="fa fa-edit fa-fw"></i> Edit Donor Details</a>
                        </li>
                        <li>
                            <a href="deleteview.php"><i class="fa fa-user-times"></i> Delete Donor Details</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bullhorn"></i> Announcements <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="makeannouncement.php">Make Announcement</a>
                                </li>
                                <li>
                                    <a href="viewannoucement.php">View Announcement</a>
                                </li>
                                <li>
                                    <a href="editannounceform.php">Edit Announcement</a>
                                </li>
                                <li>
                                    <a href="deleteannouncement.php">Remove Announcement</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""><i class="fa fa-flag"></i> Campaigns <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="newcampaign.php">New Campaign</a>
                                </li>
                                <li>
                                        <a href="viewcampaign.php">View Campaign</a>
                                    </li>
                                    <li>
                                        <a href="updatecampaign.php">Update Campaign</a>
                                    </li>
                                    <li>
                                        <a href="deletedcampaign.php">Delete Campaign</a>
                                    </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Blood bank Location <i class='bx bxs-location-plus'> </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="newbloodbank.php">New Bank</a>
                                </li>
                                <li>
                                        <a href="viewbloodbank.php">View Banks</a>
                                    </li>
                                    <li>
                                        <a href="editbankform.php">Update Bank</a>
                                    </li>
                                    <li>
                                        <a href="deletebank.php">Delete Bank</a>
                                    </li>
                            </ul>
                        </li>
            
                        
                       
                    </ul>
                   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <script>
    // Get the search input field
    var searchInput = document.querySelector('.sidebar-search input[type="text"]');

    // Add event listener for input focus
    searchInput.addEventListener('focus', function() {
        this.parentNode.parentNode.classList.add('active-search');
    });

    // Add event listener for input blur
    searchInput.addEventListener('blur', function() {
        this.parentNode.parentNode.classList.remove('active-search');
    });
</script>
