<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">
            <form method="post">
                <div class="col-md-6">
				    <h3 class="dark-grey">Đăng ký</h3>
				
				    <div class="form-group col-lg-12">
					    <label>Tên đăng nhập</label>
					    <input type="text" name="username" class="form-control" >
				    </div>
				
                    <div class="form-group col-lg-6">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control" >
                    </div>
                                
                    <div class="form-group col-lg-6">
                        <label>Nhập Email</label>
                        <input type="text" name="email" class="form-control" >
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label>Họ và tên</label>
                        <input type="text" name="fullname" class="form-control" >
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Ngày tháng năm sinh</label>
                        <input type="date" name="birthday" class="form-control" >
                    </div>

                    <div　class="form-group col">
                        <div class ="row">
                            <div class="col-xs-4 ">
                                <label class="gender">Giới tính:</label>
                            </div>
                
                            <div class="col-xs-4 male">	 
                                <input type="radio" name="sex" value="Nam">Nam</input>
                            </div>
                    
                            <div class="col-xs-4 female">
                                <input type="radio"  name="sex" value="Nữ" >Nữ</input>
                            </div>
                        </div>
                    </div>	
                </div>			
			<div class="col-md-6">
				<h3 class="dark-grey">Các điều khoản và điều kiện</h3>
				<p>
					Bằng cách nhấp vào "Đăng ký", bạn đồng ý với Điều khoản và Điều kiện của Công ty
				</p>
				<p>
					Mặc dù hiếm, giá có thể thay đổi dựa trên biến động tỷ giá hối đoái - nếu biến động như vậy xảy ra, chúng tôi có thể yêu cầu thanh toán bổ sung. Bạn có tùy chọn để yêu cầu hoàn trả đầy đủ hoặc trả giá mới. (Đoạn 13,5.8)
				</p>
				<p>
					Nếu có lỗi trong mô tả hoặc giá cả của sản phẩm, chúng tôi sẽ hoàn lại tiền đầy đủ cho bạn (Đoạn 13,5.6)
				</p>
				<p>
					Việc chúng tôi chấp nhận đơn đặt hàng phụ thuộc vào khả năng cung cấp sản phẩm của nhà cung cấp. (Đoạn 13,5.6)
				</p>
				
				<button type="submit" class="btn btn-primary">Đăng ký</button>
                <input type="reset" class="btn btn-primary" value="Nhập lại" >
                <input onclick="location.href='index.php?module=login'" class="btn btn-primary" value="Đăng nhập">
			</div>
            </form>	
            
		</div>
	</section>
    
</div>

</body>
</html>