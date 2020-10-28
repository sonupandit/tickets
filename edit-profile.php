<?php include("header.php"); ?>
<section class="section page-section pb-5 animTop">
    <div class="container">
        <div class="row myaccount-title align-items-center">
            <div class="col-12 col-md">
                <h1>Edit Profile</h1>
            </div>
            <div class="col-12 col-md-auto pt-3 pt-md-0">
                <div class="back-link">
                     <a href="my-account.php">&lt; Back to Account</a>               
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
       <div class="row justify-content-center">
           <div class="col-12 col-md-4">
              <form action="">
                <div class="form-group">
                    <label for="">Your Name</label>
                    <input type="text" value="Nawal Goyal" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" class="form-control" disabled value="naval@iws.in" placeholder="Email Address">
                </div> 
                <div class="form-group">
                    <label for="">Enter Old Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Enter New Password</label>
                    <input type="password" class="form-control">
                </div>                
                <div class="form-group mb-0">
                    <button class="btn btn-lg btn-block btn-warning">SAVE CHANGES</button>
                </div>
            </form>
           </div>
       </div>
    </div>
   
</section>
<?php include("footer.php");?>