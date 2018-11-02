

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
                                <h2>Almost There!</h2>
                                <h5>Hello <span><?php echo $firstName; ?></span>. Your username is <span><?php echo $email;?></span></h5>
                                <small>Please enter a password to begin using the site.</small>
                            </div>
                        </div>
                       
                        <?php 
                          $fattr = array('class' => 'form-signin');
                          echo form_open(site_url().'main/complete/token/'.$token, $fattr); ?>

                            <div class="form-group row">
                                <div class="col-12">
                                    
                                     <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
                                     <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    
                                    <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
                                    <?php echo form_error('passconf') ?>
                                </div>
                            </div>
                            <?php echo form_hidden('user_id', $user_id);?>
                            

                           

                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    
                                    <?php echo form_submit(array('value'=>'Complete', 'class'=>'btn btn-success btn-block waves-effect waves-light')); ?>

                                </div>
                            </div>

                           

                           


                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            

        </div>
        <!-- end wrapper page -->