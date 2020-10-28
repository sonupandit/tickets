<?php include("header.php"); ?>
<section class="section page-section pb-5 animTop">
    <div class="container">
        <div class="row myaccount-title align-items-center">
            <div class="col-12 col-md">
                <h1>Welcome Nawal Goyal</h1>
            </div>
            <div class="col-12 col-md-auto pt-3 pt-md-0">
                <div class="btn-wrap my-account-nav">
                   <ul class="nav">
                       <li><a href="edit-profile.php" class="btn btn-large btn-warning">EDIT PROFILE</a></li>
                       <li><a href="#" class="btn btn-large btn-outline-warning">LOGOUT</a></li>
                   </ul>                    
                </div>
            </div>
        </div>
    </div>
    <div class="container px-0">
         <div class="row no-gutters myaccount-status">
            <div class="col-12 col-md">
                <a href="your-tickets.php" class="ms-box">
                    <div class="ms-inner align-self-center">
                        <h2>Your Ticktes</h2>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md">
                <div class="ms-box">
                    <div class="ms-inner">
                        <h2>Your Membership</h2>
                        <h3>&nbsp;</h3>

                        <div class="plan-info">
                            <h4>Gold</h4>
                            <div class="date-info">
                                Valid Upto: 12 Sep 2021
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="ms-box">
                    <div class="ms-inner">
                        <h2>Support</h2>
                        <h3>Your Active Ticket</h3>

                        <div class="plan-info">
                            <h4>Platinum</h4>
                            <div class="date-info">
                               Renews 12th of every month
                            </div>
                            <a href="support-ticket.php" class="btn btn-block btn-accent2">CANCEL / MODIFY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>
<?php include("footer.php");?>