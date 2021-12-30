<template>
    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Categorías populares</h2>
                <p>Lo que más se visita últimamente, para que estés al día.</p>
            </div>
            <template slot="prev"><span class="prev">prev</span></template>
            <carousel
                :autoplay="false"
                :dots="false"
                :nav="false"
                :responsive="{0:{items:1,nav:false},900:{items:5,nav:false},600:{items:3,nav:false}}"
            >
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <i class="icon-food_icon_fish"></i>
                        <h3>Pescaderías</h3>
                        <small>Precio medio 35€</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>78</span>
                        <i class="icon-food_icon_vegetarian"></i>
                        <h3>Frutería</h3>
                        <small>Precio medio 20€</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>65</span>
                        <i class="icon-food_icon_chicken"></i>
                        <h3>Carnicería</h3>
                        <small>Precio medio 30€</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>65</span>
                        <i class="icon-food_icon_shop"></i>
                        <h3>Súpermercado</h3>
                        <small>Precio medio 90€</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>65</span>
                        <i class="icon-food_icon_hair"></i>
                        <h3>Tienda gourmet</h3>
                        <small>Precio medio 150€</small>
                    </a>
                </div>
            </carousel>
            <template slot="next"><span class="next">next</span></template>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->
</template>

<script>
import carousel from 'vue-owl-carousel';

export default {
    name: "PopularCategoriesComponent",
    components: { carousel }
}
</script>

<style scoped>
    .owl-stage .item {
        height: 300px;
        margin-right: 20px;
        background-color: #fff;
        padding: 70px 20px;
        text-align: center;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        position: relative;
        margin-bottom: 25px;
    }

    .owl-stage .item a i {
        font-size: 4.375rem;
        margin: 0;
        padding: 0;
        display: block;
    }

    .item a span, .item_version_2 a span {
        position: absolute;
        right: 15px;
        top: 15px;
        display: inline-block;
        line-height: 37px;
        background-color: #f0f0f0;
        color: #777;
        font-size: 0.75rem;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        text-align: center;
        font-weight: 500;
        z-index: 9;
    }
</style>
