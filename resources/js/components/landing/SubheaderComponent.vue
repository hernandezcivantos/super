<template>
    <header class="header clearfix element_to_stick" :class="sticky ? 'sticky' : ''">
        <div class="container">
            <div id="logo">
                <a href="/">
                    <img v-if="sticky" src="img/landing/logo-v2-color.svg" width="140" height="35" alt="">
                    <img v-else src="img/landing/logo-v2.svg" width="140" height="35" alt="">
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
    name: "SubheaderComponent",
    data() {
        return {
            sticky: false
        }
    },
    methods: {
        updateScroll() {
            this.sticky = window.scrollY > 2
        }
    },
    mounted() {
        window.addEventListener('scroll', this.updateScroll);
    }
}
</script>

<style scoped>

</style>
