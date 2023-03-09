<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Developer's View</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="header">
     <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    </div>
</div>

        <section id="Home">

            <div class="container">
  <img src="img_snow_wide.jpg" alt="Hello World" style="width:100%;">
  <div class="centered">Hello World</div>
  <center><a href="login.php">Start</a></center>
            </div>
                    </div>
                </div>

        </section>

        <section id="About">
                        <h1>
                           About Us
                        </h1>
                       
        </section>

        <section id="Contact">
            <h1>
                Contact Info
            </h1>
        </section>
        <!-- <div id="page-wrapper">

            <div class="container-fluid"> -->

                <!-- Page Heading -->
                
                <!-- /.row -->


             <!-- <div class="col-lg-12">
                  <h2>User Information's</h2>
                      <div class="col-lg-6">
                       <?php include 'config.php'; ?>

                        <?php $results = mysqli_query($db, "SELECT * FROM profile"); ?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Comment</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
             <td><?php echo $row['mid_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
             <td><?php echo $row['contact_no']; ?></td>
             <td><?php echo $row['email_add']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['profile_id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="del.php?id=<?php echo $row['profile_id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table> -->
                <!--     </div>
                </div> -->
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>


    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>
</html>