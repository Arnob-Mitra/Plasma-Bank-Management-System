<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plasma Bank Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Plasma Bank Management System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for plasma</h4>
                   
                        <p class="card-text" style="padding-left:2%">As the need for a COVID vaccine grows, most medical practitioners have recommended an old method for fighting the infectious disease. This treatment used is called plasma therapy. It is a medical process where blood is donated by recovered patients to establish antibodies that fight the infection. Why is it done? How effective has this medical procedure been on COVID patients are questions that this article will shed some light on.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">I Have Fully Recovered From COVID-19. Am I Eligible to Donate Plasma?</h4>
                   
                        <p class="card-text" style="padding-left:2%">People who have fully recovered from COVID-19 for at least two weeks are encouraged to consider donating plasma, which may help save the lives of other patients. COVID-19 convalescent plasma must only be collected from recovered individuals if they are eligible to donate blood. Individuals must have had a prior diagnosis of COVID-19 documented by a laboratory test and meet other donor qualifications. Individuals must have complete resolution of symptoms for at least 14 days prior to donation. A negative lab test for active COVID-19 disease is not necessary to qualify for donation.  </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Bangladesh: Faith in the Fight Against COVID-19</h4>
                   
                        <p class="card-text" style="padding-left:2%">The International Committee of the Red Cross (ICRC) is working with religious leaders in Bangladesh to provide the population with health information to keep themselves, their family, and their communities safe during the COVID-19 pandemic.

Religious leaders and faith-based organizations are playing a crucial role in supporting the government's strategy in tackling the spread of COVID-19. Communities look to their religion in times of difficulty and religious leaders can assist the government and health workers by providing advice and guidance to keep safe. This is all the more important now that winter season is approaching and fears of a second wave are growing.

 </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Some of the Donar</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS for PLASMA</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/plasma-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4> Be a Plasma Donar</h4>
                <p>Because the need for plasma is so great, we are looking for committed donors. It is only after two satisfactory health screenings and negative test results within six months that you may receive Qualified Donor status. Until you have met this requirement, your plasma will not be used to manufacture therapies. This is important to help ensure the quality and safety of the therapies that patients need to treat life-threatening diseases.
</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
