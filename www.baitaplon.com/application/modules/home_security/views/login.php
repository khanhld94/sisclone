
					<section id="home" class="row">
                        <header class="home">
                           <i class="fa fa-sign-in"></i>
                           <span>Đăng nhập</span>
                        </header>
                        <section id="form-login" class="col-sm-4">
                        	<h3 class="title">Đăng nhập hệ thống</h3>
                        	<div class="error col-sm-12"><?php echo validation_errors(); ?></div>
                        	<form class="form-horizontal" method="post" action="">
               					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"/>
	                        	<div class="form-login" class="col-sm-8">
	                      			<div class="form-group clearfix">
										<label for="user" class="col-sm-4 control-label">Tài khoản</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="user" name="id" placeholder="Tài khoản">
										</div>
									</div>
									<div class="form-group clearfix">
										<label for="user" class="col-sm-4 control-label">Mật Khẩu</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
										</div>
									</div>
									<div class="form-group clearfix">
										<label for="user" class="col-sm-4 control-label">Capchar</label>
										<div class="col-sm-4">
											<img style="width:90%" src="<?php echo base_url('home/home/captcha');?>" class="imgCaptcha" />
										</div>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="capchar" name="capchar" placeholder="">
										</div>
									</div>
	                        		<button type="submit" class="btn btn-primary" name="submit" value="Đăng nhập">Đăng nhập</button>
	                        	</div>
	                        </form>
                        </section>
                    </section>
                </section>