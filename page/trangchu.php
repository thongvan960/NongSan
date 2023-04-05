<style>

/*Slider*/

.bg-1 {
	background-image: url("public/demo/banner1.jpg");
	height: 100%;
}
.bg-2,
.fruit__juice {
	background-image: url("public/demo/banner2.png");
	height: 100%;
}
.item {
	height: 70vh;
	width: 100%;
}
#slider .owl-theme .owl-nav {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	width: 100%;
	display: flex;
	justify-content: space-between;
	padding: 0 50px !important;
	display: none;
}

#slider .owl-theme .owl-prev,
#slider .owl-theme .owl-next{
	padding: 0px 16px !important;
	border-radius: 50%;
	color: white;
	background-color: transparent;
	border: 2px solid #ddd;
	font-weight: bold;
}
#slider .owl-theme .owl-prev span,
#slider .owl-theme .owl-next span{
	font-size: 40px;
	line-height: 40px;
	font-weight: bold;
	display: inline-block;
	transform: translateY(-11%);
}
#slider .owl-theme .owl-dots {
	position: absolute;
	bottom: 25px;
	width: 100%;
}
#slider .owl-theme .owl-dot {
	margin: 0 5px !important;
}
#slider .owl-theme .owl-dot span {
	width: 15px;
	height: 15px;
	background-color: rgba(255, 255, 255, 0.6);
}
#slider .owl-theme .owl-dot.active {
	background-color: white;
	border-radius: 50%;
}

/*Hover*/
#slider .owl-theme .owl-prev:hover,
#slider .owl-theme .owl-next:hover {
	background-color: var(--primary-color);
	border: none;
}

#slider .owl-theme:hover .owl-nav {
	display: flex;
}
/*End Slider*/

/*Start Process*/
.process__image:nth-child(1) {
	background-image: url("public/demo/process1.png");
	height: 100%;
	transition: all 0.5s linear;
}
.process__image:nth-child(2) {
	background-image: url("public/demo/process2.png");
	height: 100%;
}
.process__image:nth-child(3) {
	background-image: url("public/demo/process3.png");
	height: 100%;
}
.process__image {
	border-radius: 15px;
}
.height__process {
	height: 153px !important;
	border: 2px solid #fdc215;
	border-radius: 15px;
	overflow: hidden;
	transition: all 0.5s linear;
}
.process__inner {
	background-color: rgba(0, 0, 0, 0.2);
	visibility: hidden;
	transition: all 0.5s linear;
}
.height__process:hover .process__image{
	transform: scale(1.1);
}

.height__process:hover .process__inner {
	visibility: visible;
}


/*End Process*/

/*Start Fruit*/
.fruit-title::before {
	content: "";
	width: 32%;
	height: 2px;
	background-color: #ddd;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	left: 0;

}
.fruit-title::after {
	content: "";
	width: 32%;
	height: 2px;
	background-color: #ddd;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	right: 0;

}

.fruit .card,
.fruit__juice .card {
	border-radius: 20px;
	border: 2px solid #fdc215;
}
.fruit .card img,
.fruit__juice .card img {
	border-top-left-radius: 20px;
	border-top-right-radius: 20px;
}
.fruit__discount {
	top: 20px;
	left: 20px;
	width: 44px;
	height: 44px;
	line-height: 44px;
	background-color: var(--secondary-color);
}

.fruit .logo__absolute {
	width: 75%;
    display: flex;
    justify-content: center;
    left: 18%;
}
/*End Fruit*/

/*Start News*/
.bg__news-1 {
	background-image: url("public/demo/new1.jpg");
	width: 35%;
}
.bg__news-2 {
	background-image: url("public/demo/new2.jpg");
	width: 35%;
}
.bg__news-3 {
	background-image: url("public/demo/new3.jpg");
	width: 35%;
}
.bg__news-4 {
	background-image: url("public/demo/new4.png");
	width: 35%;
}

/*End News*/

/*Respone sive*/
/*Mobile*/
@media (max-width: 739px) {
    .fruit-title::after,
    .fruit-title::before {
        display: none;
    }
    #slider .item {
    	height: 25vh;
    }
    .w-75 {
    	width: 100%;
    }

}
</style>

<!-- Start Slider -->

<div id="slider" class="position-relative">
	<div class="owl-carousel owl-theme h-100">
	    <div class="item background__cover bg-1 w-100"></div>
	    <div class="item background__cover bg-2 w-100"></div>	    
	</div>
</div>

<!-- End Slider -->

<!-- Start Process -->
<div class="row px-6 gap-4 py-5">
	<div class="col-12 col-md height__process position-relative">
		<div class="background__cover process__image"></div>
		<div class="process__inner position-absolute start-0 end-0 top-0 bottom-0"></div>
	</div>
	<div class="col-md col-12 height__process position-relative">
		<div class="background__cover process__image"></div>
		<div class="process__inner position-absolute start-0 end-0 top-0 bottom-0"></div>
	</div>
	<div class="col-md col-12 height__process position-relative">
		<div class="background__cover process__image"></div>
		<div class="process__inner position-absolute start-0 end-0 top-0 bottom-0"></div>
	</div>
</div>

<!-- End Process -->

<!-- Fruit -->
<div class="fruit my-3 py-5 px-6 bg-white--light">
<!-- TRÁI CÂY NHẬP KHẨU -->
	<h2 class="fw-bold text-center text-primary fruit-title position-relative">TRÁI CÂY NHẬP KHẨU</h2>
	<p class="text-center mt-2 mb-4 fs-6">Là nhà cung cấp thực phẩm tươi sạch hàng đầu khu vực phía nam</p>

	<div class="row my-3 gap-4">
		<div class="col-md col-12 position-relative">
			<a href="#">
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit1.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Bom mỹ</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">200.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">180.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-10%</span>
			</a>
		</div>
		<div class="col-md col-12 position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit2.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Vãi nhập khẩu</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">80.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">60.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-25%</span>
			</a>
		</div>
		<div class="col-md col-12 position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit3.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Táo nhập khẩu</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">50.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">30.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-40%</span>
			</a>
		</div>
		<div class="col-md col-12 position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit4.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Cà chua đà lạt</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">100.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">80.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-20%</span>
			</a>
		</div>
	</div>

	<!-- Button Xem Thêm -->
	<div class="d-flex justify-content-center mt-4">
		<a href="#" type="button" class="btn border border-success rounded-pill bg-primary--hover transition__hover border--primary mt-2 py-2 px-3 text-primary">Xem thêm</a>
	</div>

<!-- End TRÁI CÂY NHẬP KHẨU -->

<!-- Start Logo -->
	<div class="row position-relative justify-content-center">
		<div class="w-75 col-12">
			<img class="img-fluid w-50" src="public/demo/logo2.png" alt="">
		</div>
		<div class="position-absolute logo__absolute w-75 col-12">
			<img class="img-fluid w-50" src="public/demo/logo3.png" alt="">
		</div>
	</div>
<!-- End Logo -->

<!-- Start Trái cây nội địa -->
	<h2 class="fw-bold text-center mt-5 text-primary fruit-title position-relative text-uppercase">TRÁI CÂY NỘI ĐỊA</h2>
	<p class="text-center mt-2 mb-4 fs-6">Có hàng ngàn mẫu hoa quả tươi đủ loại cho bạn chọn!</p>

	<div class="row my-3 gap-4">
		<div class="col-md col-12 position-relative">
			<a href="#">
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit1.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Bom mỹ</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">200.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">180.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-10%</span>
			</a>
		</div>
		<div class="col-12 col-md position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit2.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Vãi nhập khẩu</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">80.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">60.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-25%</span>
			</a>
		</div>
		<div class="col-12 col-md position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit3.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Táo nhập khẩu</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">50.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">30.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-40%</span>
			</a>
		</div>
		<div class="col-md col-12 position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit4.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Cà chua đà lạt</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">100.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">80.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-20%</span>
			</a>
		</div>
	</div>

	<!-- Button Xem Thêm -->
	<div class="d-flex justify-content-center mt-4">
		<a href="#" type="button" class="btn border border-success rounded-pill bg-primary--hover transition__hover border--primary mt-2 py-2 px-3 text-primary">Xem thêm</a>
	</div>

<!-- End Trái cây nội địa -->

</div>

<!-- Start Các loại nước ép -->
<div class="border__secondary--big px-6 py-4 fruit__juice background__cover">
	<h2 class="fw-bold text-center mt-5 text-primary fruit-title position-relative text-uppercase">các loại nước ép</h2>
	<p class="text-center mt-2 mb-4 fs-6">Mang lại sự sản khoái khi thưởng thức nước ép tại Halona Fruits</p>

	<div class="row my-3 gap-4">
		<div class="col-md col-12 position-relative">
			<a href="#">
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit1.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Bom mỹ</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">200.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">180.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-10%</span>
			</a>
		</div>
		<div class="col-12 col-md position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit2.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Vãi nhập khẩu</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">80.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">60.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-25%</span>
			</a>
		</div>
		<div class="col-12 col-md position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit3.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Táo nhập khẩu</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">50.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">30.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-40%</span>
			</a>
		</div>
		<div class="col-12 col-md position-relative">
			<a href="#" >
				<div class="card hover__shadow">
	  				<img src="public/demo/fruit4.png" class="card-img-top hover__opacity transition__hover" alt="">
				  	<div class="card-body">
					    <h5 class="card-title text-center mt-2 text-secondary fs-6">Cà chua đà lạt</h5>
					    <div class="d-flex justify-content-center align-items-center">
					    	<p class="text-decoration-line-through fs-5 text-gray">100.000<span >đ</span></p>
					    	<p class="text-danger fw-bold fs-5 ms-2">80.000<span>đ</span></p>
					    </div>
					    <div class="text-center py-2">
					    	<a href="#" class="btn bg-primary text-white py-1 px-4 rounded-pill hover__shadow">Thêm vào giỏ hàng</a>
					    </div>
				  	</div>
				</div>
				<span class="fruit__discount d-inline-block fs-6 text-center text-white position-absolute rounded-circle">-20%</span>
			</a>
		</div>
	</div>
</div>
<!-- End Các loại nước ép -->

<!-- Start News -->
<div class="row px-6 pt-5 bg-gray--light pb-6">
	<div class="col-md-8 col-12">
		<h2 class="fw-bold mb-2 fs-3 text-center text-primary fruit-title position-relative text-uppercase">"có thể bạn cần"</h2>

		<div class="d-flex flex-column mt-3">
			<div class="d-flex border--primary__hover mb-3">
				<div class="hover__opacity background__cover bg__news-1"></div>
				<div class="bg-white ps-3 pe-md-3 pe-0 pb-3 flex__1">
					<h5 class="mt-2 text-primary lh-base mb-2">Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản</h5>
					<span class="d-inline-block text-gray mb-2 fs-6">16 Tháng Một, 2019</span>
					<hr class="w-10">
					<p class="mt-3 d-md-inline-block d-none">
						Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi. Nhưng người trồng cũng cần ...
					</p>
				</div>
			</div>

			<div class="d-flex border--primary__hover mb-3">
				<div class="hover__opacity background__cover bg__news-2"></div>
				<div class="bg-white ps-3 pe-md-3 pe-0 pb-3 flex__1">
					<h5 class="mt-2 text-primary lh-base mb-2">Eat Clean – bí kíp để có thân hình xinh như mơ của cô nàng 9x</h5>
					<span class="d-inline-block text-gray mb-2 fs-6">16 Tháng Một, 2019</span>
					<hr class="w-10">
					<p class="mt-3 d-none d-md-block">
						Đối với nhiều người, “Eat Clean” vẫn còn mơ hồ như một đích đến xa xăm thì đối với cô gái 9x này hai từ ấy đã trở thành một phần của cuộc sống hàng ngày Trong bài viết được đăng ...
					</p>
				</div>
			</div>

			<div class="d-flex border--primary__hover mb-3">
				<div class="hover__opacity background__cover bg__news-3">
					
				</div>
				<div class="bg-white ps-3 pe-md-3 pe-0 pb-3 flex__1">
					<h5 class="mt-2 text-primary lh-base mb-2">Lấy lại vòng eo con kiến nhờ công thức đơn giản từ củ đậu và rau cải</h5>
					<span class="d-inline-block text-gray mb-2 fs-6">16 Tháng Một, 2019</span>
					<hr class="w-10">
					<p class="mt-3 d-none d-md-block">
						Bụng mỡ nhiều đến mấy cũng trở nên phẳng lỳ với công thức từ củ đậu và rau cải mỗi ngày, hãy tham khảo cách làm dưới đây nhé! Chẳng cần tập luyện hay kiêng khem khổ cực, bạn có thể ...
					</p>
				</div>
			</div>

			<div class="d-flex border--primary__hover mb-3">
				<div class="hover__opacity background__cover bg__news-4">
					
				</div>
				<div class="bg-white ps-3 pe-md-3 pe-0 pb-3 flex__1">
					<h5 class="mt-2 text-primary lh-base mb-2">KM: Tháng giải phóng mỡ thừa, da xấu, độc tố trong cơ thể</h5>
					<span class="d-inline-block text-gray mb-2 fs-6">16 Tháng Một, 2019</span>
					<hr class="w-10">
					<p class="mt-3 d-none d-md-block">
						Tháng 4, hoà trong không khí giải phóng dân tộc, đối với chúng tôi, đây là tháng: GIẢI PHÓNG MỠ THỪA, KHÔNG CHỪA 1 LẠNG Kế hoạch cho những ngày nghỉ lớn của tháng 4 đã sẵn sàng, tuy nhiên bạn ...
					</p>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="col-md-4 col-12 pt-4 mt-2">
		<!-- form -->
		<form class="ms-md-4 ms-0 py-4 px-3 border__secondary border__radius box__shadow">
			<h2 class="fs-4 text-primary text-center fw-bold mb-4">LIÊN HỆ TƯ VẤN MUA HÀNG</h2>
		  <div class="mb-3 w-100">
		    <input class="rounded border__secondary ps-3 py-1 input__focus w-100" type="text" placeholder="Họ tên của bạn..">
		    
		  </div>
		  <div class="mb-3 w-100">
		    <input class="rounded border__secondary ps-3 py-1 input__focus w-100" type="text" placeholder="Số điện thoại..">
		  </div>
		  <div class="mb-3 w-100">
		    <textarea class="rounded border__secondary input__focus w-100 ps-3 py-2 text-gray" placeholder="Nội dung cần tư vấn..." rows="6"></textarea>
		  </div>
		  <button type="submit" class="btn bg__secondary py-1 mb-4 text-center text-white fs-5 w-100 rounded-pill">Gửi liên hệ</button>
		</form>

		<!-- Video Youtube -->
		<div class="ms-md-4 ms-0 mt-5">
			<iframe class="w-100 rounded border__secondaryx" height="201" src="https://www.youtube.com/embed/i493IC18WvY" title="Imovie sample video fruits film clip ( HD)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- End News -->

<script>
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    nav:true,
	    items: 1,
	    autoplay: true
	})
</script>
