<div class="container_12">
    <div class="grid_12 header-repeat">
        <div id="branding">
            <div class="floatleft logo">
                <img src="/assets/admin/img/livelogo.png" alt="Logo" />
            </div>
            <div class="floatleft middle">
                <h1>Training with live project</h1>
                <p>www.trainingwithliveproject.com</p>
            </div>
            <div class="floatright">

                <div class="floatleft marginleft10">
                    <ul class="inline-ul floatleft">

                        <li>
                            <?php
                            if(Auth::checkAuth()){
                                ?>

                                <a  class="label-user-full-name" href="<?php echo Route::name('edit-profile')?>">
                                    <img src="<?php echo Auth::user()->getAvatar();?>" class="avatar_header">
                                    <?php
                                    echo Auth::user()->getFullName();
                                    ?>
                                </a>

                                <?php
                            }else{
                                ?>
                                <a href="<?php echo Route::name('auth.show-login')?>">
                                    Đăng nhập
                                </a>
                                <?php
                            }
                            ?>
                            <?php
                            if(Auth::checkAuth()){
                                ?>
                                <a href="<?php echo Route::name('logout')?>">
                                    Đăng xuất
                                </a>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="grid_12">
        <ul class="nav main">
            <li class="ic-dashboard"><a href="<?php echo Route::name('index-admin')?>"><span>Dashboard</span></a> </li>
            <li class="ic-form-style"><a href=""><span>User Profile</span></a></li>
            <li class="ic-typography"><a href="changepassword "><span>Change Password</span></a></li>
            <li class="ic-grid-tables"><a href="inbox "><span>Inbox</span></a></li>
            <li class="ic-charts"><a href=""><span>Visit Website</span></a></li>
        </ul>
    </div>
    <div class="clear">
    </div>
