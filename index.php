<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <!-- CSS toatr -->
    <link href="JS/CSS/toastr.min.css" rel="stylesheet">
    <link href="JS/CSS/nprogress.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="JS/toastr.min.js"></script>
	<script src="JS/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
     <script>
        $(document).ready(function () {
            $(document).ajaxStart(function () {
                NProgress.start();
                $('body').after('<div class="loading"></div>');
            }).ajaxStop(function () {
                NProgress.done();
                NProgress.remove();
                $('.loading').remove();
            });
        });
    </script>
    <meta name="description" content="The description of my page" />
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>ĐĂNG NHẬP</h1>
              <div>
                <input type="text" class="form-control" id="tk" placeholder="Tên đăng nhập" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="mk" placeholder="Mật khẩu" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" id="dangnhap" href="#">Đăng nhập</a>
                <a class="reset_pass" href="#">Quên mật khẩu</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-user-secret"></i>QUẢN LÝ LƯƠNG</h1>
                  <p>©2016 Được thiết kế bởi nhóm IT YL-TN</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  	<script type="text/javascript">
	$(document).ready(function(){
		$('#dangnhap').click(function(){
			var tk=$('#tk').val();
			var mk=$('#mk').val();
			if(tk.length==0){
				toastr.warning('Tài khoản không được bỏ trống');
			}else{
				if(mk.length==0){
					toastr.warning('Chưa nhập mật khẩu');
				}else{
					$.post('Controller/login.php',{tk:tk,mk:mk},function(data){
						if(data=="OK"){
							window.location="Area/admin/index.php";
						}else{
							toastr.warning('Tên đăng nhập hoặc tài khoản không hợp lệ');
						}
					})
				}
			}
		})
	})
	</script>
</html>