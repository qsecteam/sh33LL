
<?php

session_start();
//$username = base64_encode();
$password = "123";

?>
<!doctype html>
<html>
<head>
    <title>tobi webshell </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<style>
	@import url('https://fonts.googleapis.com/css2?family=Splash&display=swap');
	*{
		font-family: 'Splash', cursive;
	}
   .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
 .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
</style>
</head>

<body class="bg-dark">
	<div class="container-fluid bg-dark">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills mx-auto">
        <li class="nav-item"><a href="#" class="nav-link active text-center" aria-current="page">obITo's Sh3LL</a></li>
        
      </ul>
    </header>
  </div>
  <main class="bg-dark bg-gradient">
   <form id="frmlogin" class="form-signin mx-auto text-center" action="" method="post">
    <img class="mb-4 rounded rounded-circle" src="https://cloud-bbx.pw/bbx.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal text-info">Login Tod</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="kang coli..">
      <label  for="floatingInput">username lu</label>
    </div>
    <div class="form-floating">
      <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">password lu</label>
    </div>
    <button name="kentod" class="w-100 btn btn-lg btn-outline-primary" type="submit">Tusbol</button>
    <p class="mt-5 mb-3 text-muted">&copy; Created by uchiha obITo</p>
  </form>
  </main>

  <?php
  	if (isset($_POST['kentod'])) {
  		$tobi1 = "e0dd692dcb560bc04bfa1cbfaca9ecff";//tobi
		$nama = "ojan";
		if ($_POST['username'] == $nama && md5($_POST['pwd']) == $tobi1) {
		
			// echo '<script>alert("benar");</script>';
			?>
				<script>
					document.getElementById("frmlogin").style.display = "none";
				</script>
				<div class="container-fluid justify-content-center d-flex">
				<div class="row align-items-center">
				    <div class="col">
				     <div class="card" style="width: 18rem;">
						  <img src="..." class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">web info</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
				    </div>
				    <div class="col">
				      <div class="card" style="width: 18rem;">
							  <img src="..." class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title">Card title</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-primary">Go somewhere</a>
							  </div>
							</div>
				    </div>
				    <div class="col">
				     <div class="card" style="width: 18rem;">
						  <img src="..." class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
						</div>
				    </div>
				  </div>
				</div>
			<div class="container-fluid table-responsive">
			<table id="example" class="display table table-striped table-warning table-hover" style="width: 100%">
        <thead>
            <tr>
                <th>Nama File</th>
                <th>Permission</th>
                <th>aksi</th>
               <!-- <th class="btn btn-danger">>></th> -->
            </tr>
        </thead>
        <tbody>
        	<?php for($i=0; $i<=100; $i++){ ?>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>
                	<select>
					   <option>Pilih</option>
					   <option>Edit</option>
					    <option>Hapus</option>
					</select >
                </td>
                
            </tr>
           <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Nnama File</th>
                <th>Permission</th>
                <th>aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
		<?php }elseif($_POST['username'] != $nama && $_POST['pwd'] != $pwd ){
			echo '<script>alert("username password salah tolol");</script>';
			session_destroy();
		}else{
		echo '<script>alert("username dan password salah");</script>';	
		}
  	}

  ?>

  <div class="container-fluid bg-dark mt-0">
  <footer class="py-3 my-4">
   <!-- <ul class="nav justify-content-center border-bottom pb-3 mb-3 text-info">
      <li class="nav-item"><a href="#" class="nav-link px-2">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">About</a></li>
    </ul>
-->
<?php


?>
    <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
  </footer>
</div>
</footer>
</div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</html>