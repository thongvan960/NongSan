<style>
	.introduce-banner {
		background-image: url("public/demo/banner2.png");
/*		height: 75vh;*/
	}
	.benefit-title::before {
	content: "";
	width: 25%;
	height: 2px;
	background-color: gray;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	left: 0;

}
.benefit-title::after {
	content: "";
	width: 25%;
	height: 2px;
	background-color: gray;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	right: 0;

}

.product-item:hover .product__inner{
	display: block;
}

.product__inner {
	top: 0;
	bottom: 0;
	width: 100%;
	background-color: rgba(0, 0, 0, 0.5);
	display: none;
	transition: all 0.3s linear;
}
/*Respone sive*/
/*Mobile*/
@media (max-width: 739px) {
    .fruit-title::after,
    .fruit-title::before {
        display: none;
    }
    

}
</style>


<!-- Banner -->
<div class="row px-6 introduce-banner background__cover pb-3">
	<div class="col-md-4 col-12 pt-4 mt-2 mb-3">
		<!-- form -->
		<form class="ms-4 py-4 px-3 border__secondary border__radius box__shadow bg-white">
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
	</div>
</div>

<!-- VỀ CHÚNG TÔI -->
<div class="row px-6 mt-4">
	<div class="col-md-6 col-12 pt-4">
		<h2 class="fw-bold fs-3 mb-3 mt-5">VỀ CHÚNG TÔI</h2>
		<p class="fs-6 lh-base">Công ty cổ phần thực phẩm dinh dưỡng  là Công ty chuyên cung cấp các loại trái cây hoa quả, rau sạch. Chúng tôi cam kết chất lượng sản phẩm sạch từ thiên nhiên không quahóa chất.</p>
		<p class="mt-3 fs-6 lh-base">Rau củ quả cảu chúng tôi sẽ mang đến khách hàng một sản phẩm chất lượng, một thương hiệu đáng tin cậy. Công ty chúng tôi mong muốn có cơ hội được phục vụ quý khách và góp phần phát triền ngànhthực phẩm sạch tại Việt Nam</p>
	</div>
	<div class="col-md-6 col-12">
		<img src="public/demo/fruit2.png" class="img-fluid w-100" alt="">
	</div>
</div>

<!-- End Về chúng tôi -->

<!-- Start Benefit -->
<div id="benefit" class="px-6 bg-primary py-4">
	<h2 class="fw-bold fs-4 text-center text-white fruit-title position-relative benefit-title">VÌ SAO CHỌN SẢN PHẨM CỦA CHÚNG TÔI
	</h2>
	<p class="text-center fs-6 mt-3 lh-base text-white mb-5">Rau củ quả cảu chúng tôi sẽ mang đến khách hàng một sản phẩm chất lượng, một thương hiệu đáng tin cậy. Công ty chúng tôi mong muốn có cơ hội được phục vụ quý khách và góp phần phát triền ngànhthực phẩm sạch tại Việt Nam</p>

	<div class="row mb-5">
		<div class="col">
			<div class="d-flex justify-content-center">
				<img src="public/demo/benefit1.png" class="img-fluid" alt="">
			</div>
			<div class="mt-3 text-center">
				<h5 class="fs-5 fw-bold text-white">MIỄN PHÍ VẬN CHUYỂN</h5>
				<p class="fs-6 text-white mt-3">Bán kính 2km</p>
			</div>
		</div>
		<div class="col">
			<div class="d-flex justify-content-center">
				<img src="public/demo/benefit2.png" class="img-fluid" alt="">
			</div>
			<div class="mt-3 text-center">
				<h5 class="fs-5 fw-bold text-white">Hỗ trợ 24/7</h5>
				<p class="fs-6 text-white mt-3">Hotline: 0906.399.613</p>
			</div>
		</div>
		<div class="col">
			<div class="d-flex justify-content-center">
				<img src="public/demo/benefit3.png" class="img-fluid" alt="">
			</div>
			<div class="mt-3 text-center">
				<h5 class="fs-5 fw-bold text-white">Giờ làm việc</h5>
				<p class="fs-6 text-white mt-3">T2 – T7 Giờ hành chính</p>
			</div>
		</div>
	</div>
</div>
<!-- End Benefit -->

<!-- Product -->
<div class="row py-4 px-6 gap-md-3 gap-0">
	<div class="col-md col-6 product-item position-relative">
		<a href="#" class="d-inline-block">
			<img src="public/demo/fruit4.png" class="img-fluid" alt="">
			<div class="product__inner position-absolute"></div>
		</a>
	</div>
	<div class="col-md col-6 product-item position-relative">
		<a href="#" class="d-inline-block">
			<img src="public/demo/fruit3.png" class="img-fluid" alt="">
			<div class="product__inner position-absolute"></div>
		</a>
	</div>
	<div class="col-md col-6 product-item position-relative">
		<a href="#" class="d-inline-block">
			<img src="public/demo/fruit2.png" class="img-fluid" alt="">
			<div class="product__inner position-absolute"></div>
		</a>
	</div>
	<div class="col-md col-6 product-item position-relative">
		<a href="#" class="d-inline-block">
			<img src="public/demo/fruit1.png" class="img-fluid" alt="">
			<div class="product__inner position-absolute"></div>
		</a>
	</div>
</div>
<!-- End Product -->