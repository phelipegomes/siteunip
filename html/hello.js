var banners = ["img1.jpg", "img2.jpg", "img3.jpg"];
var bannerAtual = 0;

function trocaBanner() {

	bannerAtual = (bannerAtual + 1) % 3; 
	// porcentagem 2, pq duas fotos
	// assim sucessivamente.
	document.querySelector('.banners img')
	.src = banners[bannerAtual];

}

setInterval(trocaBanner, 5000);
