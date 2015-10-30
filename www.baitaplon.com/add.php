<html lang="en"><head>
        <meta charset="UTF-8">
        <title>Đăng nhập vào hệ thống</title>
        <base href="http://localhost/www.baitaplon.com/www.baitaplon.com/">
        <link rel="icon" href="template/frontend/sis/favicon.ico" type="image/gif" sizes="16x16">
        <link href="template/frontend/sis/css/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="template/frontend/sis/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/frontend/sis/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="template/frontend/sis/css/style.css">
        <link rel="stylesheet" href="template/frontend/sis/css/reponsive.css">
        <script src="template/frontend/sis/js/jquery.min.js" type="text/javascript"></script>
        <script src="template/frontend/sis/js/bootstrap.min.js"></script>
    </head>
    <body>
    <section class="wrapper">
        <!---header---->
        <header id="header" class="container">
            <section class="top clearfix">
                <figure><img src="template/frontend/sis/images/sis_topbg.png"></figure>
                <!---form---->
                <form class="form-inline" role="form" action="" method="post">
                    <input name="csrf_test_name" value="e2619547c7b00ec6325531d7d6e5bde7" type="hidden">
                     <div class="form-group">
                        <label for="user">Tài khoản:</label>
                        <input class="form-control" id="name" name="id" type="text">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input class="form-control" id="pwd" name="password" type="password">
                    </div>
                    <button type="submit" class="btn btn-default" name="submit" value="Đăng nhập">Đăng nhập</button>
                </form>
                <!---end form---->
            </section>
            <!---navigater---->
            <nav id="main-nav" class="navbar navbar-inverse navbar-static-top">
                <section class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </section>
                <section class="navbar-collapse collapse" id="menu">
                    <ul class="l1 nav navbar-nav">
                        <li class="l1"><a href="">Trang chủ</a></li>
                        <li class="l1"><a href="">Thông tin ngưởi sử dụng</a></li>
                        <li class="l1"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kết quả học tập
                            <span class="caret"></span></a>
                            <ul class="l2 dropdown-menu">
                                <li><a href="#">Bảng điểm học phần</a></li>
                                <li><a href="#">Tra điểm </a></li>
                                <li><a href="#">Bảng điểm cá nhân</a></li> 
                            </ul>
                        </li>
                        <li class="l1"><a href="">Đăng ký học tập</a></li>
                        <li class="l1"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chương trình đào tạo
                            <span class="caret"></span></a>
                            <ul class="l2 dropdown-menu">
                                <li><a href="#">Đăng ký lớp học</a></li>
                                <li><a href="#">Đăng ký học phần</a></li>
                                <li><a href="#">Xem lớp đăng ký</a></li> 
                            </ul>
                        </li>
                        <li class="l1"><a href="">Kế hoạch học tập</a></li>
                        <li class="l1"><a href="">Tra cứu</a></li>
                    </ul>
                </section>
            </nav><!---end navigate---->
        </header> 
        <!---end header---->

        <!---Body---->
        <section id="body">
                <section class="container">
                  
					<section id="home" class="row">
                        <header class="home">
                           <i class="fa fa-file-text-o"></i>

                            <span>Đăng nhập</span>
                        </header>
                        <section id="form-login" class="col-sm-6">
                            <h3 class="title">Thông Tin Cần Nhập</h3>
                            <br><br>
                            <form class="form-horizontal" method="post" action="">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"/>
                                <div class="form-login" class="col-sm-8">
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Họ Đệm</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user" name="id" placeholder="Họ Đệm">
                                        </div>
                                        <label for="user" class="col-sm-1 control-label"> Tên</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Tên">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Mã Số Sinh Viên</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="MSSV" name="MSSV" placeholder="Mã Số Sinh Viên">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Mã Lớp</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="MaLop" name="MaLop" placeholder="Mã Lớp">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Ngày Sinh</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" id="date" name="NgaySinh" placeholder="dd/mm/yy">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gerner" class="col-sm-2 control-label">Giới tính:</label>
                                        <div class="radio-inline">
                                        <label><input type="radio" name="optradio">Nam</label>
                                        </div>
                                        <div class="radio-inline">
                                        <label><input type="radio" name="optradio">Nữ</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Quê Quán</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="MSSV" name="MSSV" placeholder="Quê Quán">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="user" class="col-sm-2 control-label">Mật Khẩu</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="Password" name="Password" placeholder="Mật Khẩu">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix" width="200px">
                                          <label for="sel1" class="col-sm-2 control-label">Khóa:</label>
                                          <div class="col-sm-6">
                                             <select class="form-control" id="sel1">
                                                  <option>K60</option>
                                                  <option>K59</option>
                                                  <option>K58</option>
                                                  <option>K57</option>
                                                  <option>K56</option>
                                             </select>
                                          </div>
                                    </div>
                                     <div class="form-group">   
                                      <button type="reset" class="btn btn-default btn-sm">Reset</button>
                                      <button type="submit" class="btn btn-success btn-sm">Nhập</button>
                                     </div> 
                                    
                                    
                                </div>

                            </form>
                            
                        </section>
                    </section>
                </section>  
        </section>
        <!---end Body---->
        <!---footer---->
        <footer id="footer">
            <section class="container">
                <section class="row">
                    <p class="title">Trang SIS phòng Đào tạo Đại học trường Đại học Bách Khoa Hà Nội </p>
                    <p class="name">Hanoi University of Science and Technology - No. 1, Dai Co Viet Str., Hanoi, Vietnam  </p>
                    <p class="name">Tel: (+844)38682305, (+844)38692008 - E-mail: <a class="mail" href="#">DTDH@mail.hust.edu.vn </a></p>
                </section>
            </section>
        </footer>
        <!---end footer---->
    
    
</body></html>