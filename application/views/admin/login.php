<!-- start: LOGIN -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<img src="{base_url}/assets/images/logo.png" alt="Clip-Two"/>
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
					<form class="form-login" action="<?=base_url('admin/login')?>" method="post">
						<fieldset>
							<legend>
								{login_page_msg_1}
							</legend>
							<p>
								{login_page_msg_2}
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="{login_page_ph_username}">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="{login_page_ph_password}">
									<i class="fa fa-lock"></i>
									<a class="forgot" href="login_forgot.html">
										{login_page_forgot}
									</a> </span>
							</div>
							<div class="form-actions">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="remember" value="1">
									<label for="remember">
										{login_page_remember}
									</label>
								</div>
								<button type="submit" class="btn btn-primary pull-right">
									{login_page_submit} <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> {panel_owner} </span>. <span>{login_page_footer}</span>
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
			</div>
		</div>
		<!-- end: LOGIN -->