            
            
<div class="container">
 <div class="page-header">
                    <h1>Newspage <small>Administration</small></h1>
 </div><!-- div.page-header -->
 <div class="row">
        <div class="col-md-6">
            <p>Vui lòng đăng nhập để tiếp tục.</p>
            <form method="POST" id="formSignin" onsubmit="return false;">
            
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" id="user_signin">
                    </div><!-- div.input-group -->
                </div><!-- div.form-group -->
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" placeholder="Mật khẩu" id="pass_signin">
                    </div><!-- div.input-group -->
                </div><!-- div.form-group -->
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div><!-- div.form-group -->
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form><!-- form#formSignin -->            
        </div><!-- dib.col-md-6 -->
    </div><!-- div.row -->
</div><!-- div.containe-->


<script language="javascript">
	$(document).ready(function(e) {
        $('#formSignin button').click(function(){
			$this=$('#formSignin button');
			$this.html(' Đang tải...');
			//lấy các giá trị của ô đăng nhập
			$user_signin = $('#formSignin #user_signin').val();
  			$pass_signin = $('#formSignin #pass_signin').val();
			//kiểm tra các giá trị đăng nhập
			if($user_signin==''&&$pass_signin=='')
			{
				
				 $('#formSignin .alert').removeClass('hidden');
                 $('#formSignin .alert').html('Vui lòng điền đầy đủ thông tin.');
                 $this.html('<i class="fa fa-lock"></i> Đăng nhập');
				 
			}
			else
			{
				$.ajax({
					url: 'admin/signin.php',
					type: 'post',
					dataType: 'text',
					data: {
						user_signin: $user_signin,
						pass_signin: $pass_signin
						},
					success: function(result)
					{
						$('#formSignin .alert').html(result);
						$this.html('<i class="fa fa-lock"></i> Đăng nhập');
					}
				});
			}
		});
    });
</script>