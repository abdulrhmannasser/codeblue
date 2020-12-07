<html>
	<head>
		<title>Code-Blue</title>
    <meta charset="utf-8"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
<script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"></link>
<style>
.dropdown-item{
	white-space: normal;
	width:320px;
	border-bottom:1px solid #CDCACA;
	
	}
</style>

	</head>
	
	<body>
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
    </script>

    
    <div style=" background-image:url(img/top1.jpg);  background-repeat: no-repeat;background-size: 100% 100%;">
	<div class="container">
    <div class="row">
    <div class=" col-sm-12 col-md-6">
      <div class="btn-toolbar mt-3" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group m-2" role="group" aria-label="First group">
    <div class="dropdown show">
  <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="fa-layers fa-fw  fa-2x mx-1" >
    <i class="fas fa-bell"></i>
    <span class="fa-layers-counter fa-lg" style="background:Tomato">150</span>
  </span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="z-index: 90000 !important; max-height:400px;overflow:auto;" >
    
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fas fa-envelope text-danger mr-3"></i>Action Action Action Action </a>
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"> <i class="fas fa-envelope-open text-success mr-3"></i>Action Action Action Action Action Action Action Action Action Action Action Action Action</a>
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"> <i class="fas fa-envelope text-danger mr-3"></i>Action Action Action Action Action</a>
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fas fa-envelope text-danger mr-3"></i>Action Action Action Action Action Action Action Action  Action Action</a>
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fas fa-envelope-open  text-success mr-3"></i>Action Action Action Action Action Action Action Action Action Action Action Action Action</a>
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fas fa-envelope text-danger mr-3"></i>Action Action Action Action Action Action Action Action</a>
    <a class="dropdown-item d-flex justify-content-start" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fas fa-envelope text-danger mr-3"></i>Action Action Action Action Action Action Action Action</a>
    
  </div>
</div>
    
    <a href="#"><i class="fas fa-user fa-2x mx-1"></i></a>
    <a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-phone-square fa-2x mx-1"></i></a>
    
    
  </div>
  
  <div class=" input-group py-1 border-dark"  >
      <span class=" input-group-btn  ">
        <button class=" btn btn-light " type="button"><i class="fas fa-search"></i></button>
      </span>
      <input type="text" class="form-control border-0 bg-light my-0 py-0" placeholder="Search for..." aria-label="Search for...">
    </div>
  
</div>
    </div>
    <div class=" col-sm-12 col-md-6">
      <img class="" src="img/kfmc_logo.png" width="70%" style="margin: 15px"  alt=""/>
    </div>
    <div class=" col-12">
      <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top font-weight-bold mb-2"  >
    <div class="container">
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Code Blue</a> </li>
          <li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="statistics.php">Statistcs</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Logout</a> </li>
        </ul>
      </div>
    </div>
  </nav>
    </div>
  	</div>
    </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">phone number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>