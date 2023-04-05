<style>
/* Hover	*/

.white-blur:hover {
	color: white;
}

.form-control {
	border: 1px solid #ddd;
}
.form-control:focus {
	border: 1px solid #ddd;
	box-shadow: 0px 0px;
}

.active__link:hover {
	color: white;
}
.transition__hover:hover {
	background-color: var(--primary-color);
	color: white !important;
}
.transition__hover.boder--primary:hover {
	border: 1px solid var(--primary-color) !important;
}

/*Dropdown*/
.dropdown__show-menu:hover .dropdown__menu{
	display: block;
}

.dropdown__menu {
	border: 2px solid #ddd;
	width: 250px;
	z-index: 5;
	display: none;
	background-color: white;
}
.dropdown__menu >li {
	border-bottom: 2px solid #ddd;
}

.dropdown__menu >li > a:hover {
	background-color: var(--primary-color);
} 

.dropdown__menu::after {
	content: "";
	width: 0;
	height: 0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	position: absolute;
	border-bottom: 10px solid #ddd;
	top: -10px;
    left: 25%;
}
	
	@media (min-width: 768px) {
		
	}

	@media (min-width: 992px) {
		
	}
</style>

<!-- Header Top -->
<div class="row bg-primary px-6 py-2 justify-content-between align-items-center">
	<div class="col-md-4 col-12">
		<p class="text-white">Chuyên cung cấp thực phẩm sạch | Halona Fruist</p>
	</div>
	
	<ul class="d-md-flex d-none col-md-4 justify-content-end">
		<li>
			<a class="white-blur" href="#">Tài Khoản</a>
		</li>
		<li class="px-3">
			<a class="white-blur" href="#">Thanh toán</a>
		</li>
		<li>
			<a class="white-blur" href="#">Cửa hàng</a>
		</li>
	</ul>	
</div>

<!-- Header Bottom -->
<div class="row px-6 py-1 align-items-center d-md-flex d-none header">
	<div class="col">
		<img class="img-fluid w-75 logo__header" src="public/demo/halonalogo.png" alt="Logo Img">
	</div>
	<div class="col me-3">
		<div class="input-group">
		  <input type="text" class="form-control py-2 ps-3 border-end-0" placeholder="Tìm kiếm..." aria-label="Recipient's username" aria-describedby="basic-addon2">
		  <span type="button" class="input-group-text d-inline-block py-2 px-2 bg-primary fs-6" id="basic-addon2">
		  	<i class="bi bi-search text-white"></i>
		  </span>
		</div>
	</div>
	<!-- Navbar -->
	<div class="col-7">
		<ul class="d-flex justify-content-between">

			<li>
				<a class="active__link d-inline-block px-2 py-1 rounded-pill" href="index.php">Trang chủ</a>
			</li>
			<li>
				<a class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover" href="gioi_thieu.php">Giới thiệu</a>
			</li>
			<li class="position-relative dropdown__show-menu">
				<a href="#" class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Cửa hàng #Halona
					<i class="bi bi-chevron-down"></i>
				</a>
				<!-- Dropdown -->
				<ul class="dropdown__menu position-absolute start-0 box__shadow">
					<li>
						<a class="text-dark px-3 py-2 d-inline-block w-100" href="#">Trái cây nội địa</a>
					</li>
					<li>
						<a class="text-dark px-3 py-2 d-inline-block w-100" href="#">Trái cây nhập khẩu</a>
					</li>
					<li>
						<a class="text-dark px-3 py-2 d-inline-block w-100" href="#">Các loại hạt dinh dưỡng</a>
					</li>
					<li>
						<a class="text-dark px-3 py-2 d-inline-block w-100" href="#">Các loại rau củ quả Oragnic</a>
					</li>
					<li>
						<a class="text-dark px-3 py-2 d-inline-block w-100" href="#">Nước ép</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="lam_dep.php" class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Làm đẹp</a>
			</li>
			<li>
				<a href="tin_tuc.php" class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Tin tức</a>
			</li>
			<li>
				<a href="lien_he.php" class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Liên hệ</a>
			</li>
			<li>
				<a href="#" class="boder--primary d-inline-block px-2 py-1 rounded border border-dark text-dark transition__hover">
					<i class="bi bi-bag-fill"></i>
				</a>
			</li>
			
		</ul>
	</div>
</div>

<!-- Header Bottom Mobile -->
<div class="header__mobile row px-3 d-md-none d-flex align-items-center justify-content-between py-2">
	<a class="col-2 fs-30 d-inline-block text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
		<i class="bi bi-list"></i>
	</a>
	<div class="col-4">
		<img src="public/demo/halonalogo.png" alt="logo" class="img-fluid">
	</div>
	<div class="col-2 text-end">
		<a href="#" class="boder--primary d-inline-block px-2 py-1 rounded border border-dark text-dark transition__hover">
			<i class="bi bi-bag-fill "></i>
		</a>
	</div>
</div>

<!-- Header offcanvas -->
<div class="offcanvas offcanvas-start w-100 bg-primary--light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header justify-content-end me-3 mt-3">
    <span class="d-inline-block text-white text-end fs-4" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></span>
  </div>
  <div class="offcanvas-body mt-5 pt-5">
    <ul class="d-flex flex-column">
    	<div class="input-group w-75 mx-auto">
		  <input type="text" class="form-control py-2 ps-3 border-end-0" placeholder="Tìm kiếm..." aria-label="Recipient's username" aria-describedby="basic-addon2">
		  <span type="button" class="input-group-text d-inline-block py-2 px-2 bg-primary fs-6" id="basic-addon2">
		  	<i class="bi bi-search text-white"></i>
		  </span>
		</div>
		<li class="text-center" class="text-center">
			<a class="active__link d-inline-block px-2 py-1 rounded-pill fs-3 fw-bold text-dark text-uppercase py-2 lh-lg" href="index.php">Trang chủ</a>
		</li>
		<li class="text-center">
			<a class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover fs-3 fw-bold text-dark text-uppercase py-2 lh-lg" href="gioi_thieu.php">Giới thiệu</a>
		</li>
		<li class="text-center" class="position-relative dropdown__show-menu">
			<a id="dropdownMenuButton" data-bs-toggle="dropdown" href="#" class="d-inline-block px-2 py-1 rounded-pill text-dark transition__hover fs-3 fw-bold text-dark text-uppercase py-2 lh-lg w-100">Cửa hàng #Halona
				<i class="bi bi-chevron-down text-white"></i>
			</a>
				<!-- Dropdown -->
				<ul class="dropdown-menu w-100 text-center transition__hover bg-primary--light" aria-labelledby="dropdownMenuButton">
			        <li><a class="dropdown-item lh-base py-3" href="#">Trái cây nội địa</a></li>
			        <li><a class="dropdown-item lh-base py-3" href="#">Trái cây nhập khẩu</a></li>
			        <li><a class="dropdown-item lh-base py-3" href="#">Các loại hạt dinh dưỡng</a></li>
			        <li><a class="dropdown-item lh-base py-3" href="#">Các loại rau củ quả Oragnic</a></li>
			        <li><a class="dropdown-item lh-base py-3" href="#">Nước ép</a></li>
      			</ul>
			</li>
			<li class="text-center">
				<a href="lam_dep.php" class="fs-3 fw-bold text-dark text-uppercase py-2 lh-lg d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Làm đẹp</a>
			</li>
			<li class="text-center">
				<a href="tin_tuc.php" class="fs-3 fw-bold text-dark text-uppercase py-2 lh-lg d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Tin tức</a>
			</li>
			<li class="text-center">
				<a href="lien_he.php" class="fs-3 fw-bold text-dark text-uppercase py-2 lh-lg d-inline-block px-2 py-1 rounded-pill text-dark transition__hover">Liên hệ</a>
			</li>
			
			
		</ul>
    </div>
  </div>
</div>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(window).scroll(function(event){
				if ($(this).scrollTop() > 150){
			   $('.header').addClass('header__scroll');
			   $('.header__mobile').addClass('header__scroll');
			   
		   } else {
			   $('.header').removeClass('header__scroll');
			   $('.header__mobile').removeClass('header__scroll');
			   
		   }
		});
	});
</script>
