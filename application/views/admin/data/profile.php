<!-- Begin Page Content -->
<style>
    img.img-profile {
        height: 150px;
        weight: 150px;
        border-radius: 150px;
    }

    @media (max-width: 900px) {
        img.img-profile {
            height: 130px;
            weight: 130px;
            border-radius: 150px;
        }
    }

    @media(max-width:500px) {
        img.img-profile {
            height: 90px;
            weight: 90px;
            border-radius: 150px;
        }
    }
</style>
<div class="container mt-4">

    <h1 class="h3 mb-2 text-gray-800"><?php echo $head_page; ?></h1>

    <!--
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
        -->
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    Profile Picture
                </div>
                <div class="card-body text-center">
                    <img class="img-profile img-account-profile rounded-circle mb-2" src="<?= base_url('assets/front/'); ?>img/teams/fajar.jpg" alt="">
                    <div class="small font-italic text-muted mb-4">
                        JPG or PNG no large than 5 MB.
                    </div>
                    <button type="button" class="btn btn-primary">Uploud ne image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo "fajar"; ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="form-row">
                            <!-- Form Group (first name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="form-row">
                            <!-- Form Group (organization name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputOrgName">Organization name</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Row-->
                        <div class="form-row">
                            <!-- Form Group (phone number)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes Account</button>
                    </form>
                    <hr>
                    <form action="">
                        <div class="form-group">
                            <label class="small mb-1" for="txtpassword">Current Password</label>
                            <input class="form-control" id="txtpassword" type="password" placeholder="Enter curent password">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="txtpasswordnew">New Password</label>
                            <input class="form-control" id="txtpasswordnew" type="password" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="txtpasswordconfirm">Confirm Password</label>
                            <input class="form-control" id="txtpasswordconfirm" type="password" placeholder="Enter confirm password">
                        </div>
                        <button class="btn btn-primary" type="button">Save Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->