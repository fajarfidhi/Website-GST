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
                    <img class="img-profile img-account-profile rounded-circle mb-2" src="<?= base_url('assets/front/img/teams/'); ?><?= $this->session->userdata('picture') ?>" alt="">
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
                            <label class="small mb-1" for="txtusername">Username</label>
                            <input class="form-control" id="txtusername" type="text" placeholder="Enter your username" value="<?= $_SESSION['username']; ?>">
                        </div>
                        <div class="form-row">
                            <!-- Form Group (organization name)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="txtname">Name</label>
                                <input class="form-control" id="txtname" type="text" placeholder="Enter your name" value="<?= $_SESSION['name']; ?>">
                            </div>
                            <?php
                            if ($_SESSION['access'] == "Administrator") {
                            ?>
                                <div class="form-group col-md-6">
                                    <label class="small mb-1" for="txtaccess">Access</label>
                                    <select name="txtaccess" id="txtaccess" class="form-control">
                                        <option value=""><?= $_SESSION['access'] ?></option>
                                    </select>
                                </div>
                            <?php
                            } else {
                            ?>
                                <!-- Form Group (location)-->
                                <div class="form-group col-md-6">
                                    <label class="small mb-1" for="txtaccess">Access</label>
                                    <input class="form-control" id="txtaccess" type="text" placeholder="Enter your Access" disabled value="<?= $_SESSION['access']; ?>">
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                        <!-- Form Row        -->
                        <div class="form-row">
                            <!-- Form Group (organization name)-->
                            <div class="form-group col-md-9">
                                <label class="small mb-1" for="txtaddress">Address</label>
                                <input class="form-control" id="txtaddress" type="text" placeholder="Enter your address" value="<?= $_SESSION['address']; ?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="form-group col-md-3">
                                <label class="small mb-1" for="txtcity">City</label>
                                <input class="form-control" id="txtcity" type="text" placeholder="Enter your city" value="<?= $_SESSION['city']; ?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="form-group">
                            <label class="small mb-1" for="txtemail">Email address</label>
                            <input class="form-control" id="txtemail" type="email" placeholder="Enter your email address" value="<?= $_SESSION['email']; ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="form-row">
                            <!-- Form Group (phone number)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="txtphone">Phone number</label>
                                <input class="form-control" id="txtphone" type="text" placeholder="Enter your phone number" value="<?= $_SESSION['phone']; ?>">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="form-group col-md-6">
                                <label class="small mb-1" for="txtbirthday">Birthday</label>
                                <input class="form-control" id="txtbirthday" type="text" name="birthday" placeholder="Enter your birthday" value="<?= date("d-F-Y", strtotime($_SESSION['birthday'])) ?>">
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