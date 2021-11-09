jQuery(document).ready($ => {

	window.addEventListener("scroll", transformImage);

	let scale = 1
	let lastScrollTop = 0
	let scrollTop = 0
  const height = $('.bg-image-animate').offset().top + $('.bg-image-animate').height()

	function transformImage() {

	  let scrollTop = $(window).scrollTop()
	  console.log(height)
	  console.log(scrollTop)

	  if (scale >= 1 && scrollTop < height) {
	  	scale = 1 + scrollTop / 3000
		  // if (lastScrollTop > scrollTop) {
			 //  scale -= 0.001
		  // } else {
		  // 	scale += 0.001
		  // }
			$('.bg-image-animate').css({transform: `scale(${scale})`})
			lastScrollTop = scrollTop
	  }

	}

})