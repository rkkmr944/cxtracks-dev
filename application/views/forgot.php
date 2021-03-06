
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
                                <h6 class="text-muted text-uppercase mb-0 m-t-0">Reset Password</h6>
                                <p class="text-muted m-b-0 font-13 m-t-20">Please enter your email address and we'll send you instructions on how to reset your password</p>
                            </div>
                        </div>
                       
                        <?php $fattr = array('class' => 'form-signin');
                              echo form_open(site_url().'main/forgot/', $fattr); ?>
                            <div class="form-group row">
                                <div class="col-12">
                                    <?php echo form_input(array(
                                        'name'=>'email', 
                                        'id'=> 'email', 
                                        'placeholder'=>'Email', 
                                        'class'=>'form-control', 
                                        'value'=> set_value('email'))); ?>
                                      <?php echo form_error('email') ?>
                                </div>
                                 
                            </div>

                            <div class="form-group row text-center m-t-20 mb-0">
                                <div class="col-12">
                                    
                                    <?php echo form_submit(array('value'=>'Reset Password', 'class'=>'btn btn-success btn-block waves-effect waves-light')); ?>
                                </div>
                            </div>

                         <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Return to<a href="<?php echo site_url();?>" class="text-white m-l-5"><b>Sign In</b></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->

