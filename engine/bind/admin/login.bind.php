<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SPK Topsis - Pemilihan Smartphone</title>
    <!-- Icons-->
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?=STYLEBASE."admin/"; ?>asset/css/style.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Administrator</p>
                
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="Username" id='txtUsername'>
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="Password" id='txtPassword'>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <a href='#!' class="btn btn-primary px-4" id='btnLogin'>Login</a>
                    </div>
                   
                  </div>
                
                <div style="margin-top:20px;">
                  SPK Topsis - Pemilihan Smartphone by Agung Hamdika Surya
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?=STYLEBASE."home/"; ?>js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        const server = "<?=HOMEBASE; ?>";
        $('#btnLogin').click(function(){
            let username = document.getElementById('txtUsername').value;
            let password = document.getElementById('txtPassword').value;

            if(username === '' || password === ''){
                window.alert("Isi username & password");
            }else{
                $('#btnLogin').addClass('disabled');
                $.post(server+'admin/prosesLogin', {'username':username, 'password':password}, function(data){
                let obj = JSON.parse(data);
                if(obj.status === 'sukses'){
                    window.location.assign(server+"admin/dasbor");
                }else{
                    window.alert("Username / password salah!!");
                    $('#btnLogin').removeClass('disabled');
                }
            });
            }
       });
    });
</script>

  </body>
</html>
