<template>
    <div class="hero_single version_2">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1>Hacer la compra</h1>
                        <p>Por internet nunca fue tan sencillo</p>
                        <form method="post" action="grid-listings-filterscol.html">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <input class="form-control no_border_r" type="text" placeholder="Código postal">
                                        <i class="icon_pin_alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" value="Buscar">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
    <!-- /hero_single -->
</template>

<script>
export default {
    name: "SearchAreaComponent"
}
</script>

<style scoped>

</style>
