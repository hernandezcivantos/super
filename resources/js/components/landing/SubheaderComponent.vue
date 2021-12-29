<template>
    <header class="header clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="/">
                    <img src="img/landing/logo-v2.svg" width="140" height="35" alt="" class="logo_normal">
                    <img src="img/landing/logo-v2-color.svg" width="140" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu">
                <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
            <nav class="main-menu">
                <div id="header_menu">
                    <a href="#0" class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="/"><img src="img/landing/logo-v2.svg" width="140" height="35" alt=""></a>
                </div>
                <ul>
                    <li class="submenu">
                        <a href="/" class="show-submenu">Home</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header -->
</template>

<script>
export default {
    name: "SubheaderComponent"
}
</script>

<style scoped>

</style>
