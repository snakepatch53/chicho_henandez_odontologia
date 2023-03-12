<?php
$slider_rs = $sliderDao->select();
$slider_array = [];
while ($slider_r = mysqli_fetch_assoc($slider_rs)) {
    $slider_array[] = [
        "src" => $proyect['url'] . 'view/file.general/slider_img/' . $slider_r['slider_img'],
        "description" => ""
    ];
}
?>

<slider id="component-slider">
    <div class="float">
        <div class="col">
            <!-- <h2>LLEGAMOS A DONDE NADIE MÁS LLEGA!</h2> -->
            <h1><?= $info_name ?></h1>
            <h2><?= $info_slider_title ?></h2>
            <h3><?= $info_slider_desc ?></h3>
            <a href="<?= $proyect['root_absolute'] ?>contactos">
                <span>Contáctanos</span>
            </a>
        </div>
        <div class="col">
            <img src="<?= $proyect['root_absolute'] ?>view/img.general/banner.png" alt="Imagen para Banner">
        </div>
    </div>
</slider>
<script src="<?= $proyect['root_absolute'] ?>control/library.general/idea-slider/idea-slider.min.js"></script>
<script>
    const ComponentSliderMain = () => {
        ComponentSlider.fun.iniSlider();
    }
    const ComponentSlider = {
        fun: {
            iniSlider: function() {
                const array_slider = JSON.parse('<?= json_encode($slider_array) ?>');
                console.log(array_slider);
                new IdeaSlider({
                    idSliderContainer: 'component-slider',
                    arrayImages: array_slider,
                    timeForImg: 10000,
                    timeForTransition: 1000
                });
            }
        }
    }
    ComponentSliderMain();
</script>