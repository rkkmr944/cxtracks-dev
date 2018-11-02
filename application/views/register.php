<div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

          <div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="index.html" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Uplon</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign Up</h6>
                            </div>
                        </div>

                        <?php if ($this->session->flashdata('flash_message')) { ?>
                                 <div class="alert alert-danger"> <?= $this->session->flashdata('flash_message') ?> </div>
                         <?php } ?>
                       
                        <?php
                          $fattr = array('class' => 'form-signin m-t-20');
                          echo form_open('/main/register', $fattr); 
                        ?>

                            <div class="form-group row">
                                <div class="col-12">
                                    
                                     <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
                                     <?php echo form_error('email');?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    
                                    <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'Username', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
                                    <?php echo form_error('firstname');?>
                                </div>
                            </div>
                           
                             <div class="form-group row">
                                <div class="col-12">
                                    
                                     <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
                                    <?php echo form_error('password');?>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-signup" type="checkbox" checked="checked">
                                        <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                   <button value="Join Now" class="btn btn-success btn-block waves-effect waves-light">Join Now</button> 
                                    
                                </div>
                            </div>

                            <div class="form-group row m-t-30 mb-0">
                                <div class="col-12 text-center">
                                    <h5 class="text-muted"><b>Sign Up with</b></h5>
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-12">
                                    <button type="button" class="btn btn-facebook font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-facebook m-r-5"></i> Facebook
                                    </button>

                                    <button type="button" class="btn btn-twitter font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-twitter m-r-5"></i> Twitter
                                    </button>

                                    <button type="button" class="btn btn-googleplus font-14 waves-effect waves-light m-t-20">
                                       <i class="fa fa-google-plus m-r-5"></i> Google+
                                    </button>
                                </div>
                            </div>


                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Already have account? <a href="<?php echo site_url();?>" class="text-white m-l-5"><b>Sign In</b> </a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->