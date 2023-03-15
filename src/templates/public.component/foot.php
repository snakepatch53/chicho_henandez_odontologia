<script src="<?= $DATA['http_domain'] ?>public/library.general/smooth-scroll.min.js"></script>
<script src="<?= $DATA['http_domain'] ?>public/library.general/swiper/swiper-bundle.min.js"></script>
<script src="<?= $DATA['http_domain'] ?>public/js.public/template.js"></script>



<script>
    const swiper = new Swiper('.swiper', {
        speed: 400,
        allowTouchMove: true,
        autoplay: {
            delay: 5000,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    const $swiper = document.querySelector('.swiper').swiper;

    // Now you can use all slider methods like
    // $swiper.slideNext();
</script>