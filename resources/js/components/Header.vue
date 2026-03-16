<template>
    <header class="bg-[#001A36]">
        <div class="container flex justify-between items-center py-4">
            <div class="font-jomolhar text-8xl font-bold text-white">GCI</div>
            <div><img src="/public/images/gem.svg" alt="gem"></div>
            <div class="flex items-center gap-4">
                <nav class="space-x-6 text-lg">
                    <a href="#" class="font-jomolhar no-underline inline-block transition-transform duration-100 hover:scale-115 text-lg text-white">CALCULATION</a>
                    <router-link to="/" class="font-jomolhar no-underline inline-block transition-transform duration-100 hover:scale-115 text-lg text-white">
                        HOME
                    </router-link>
                    <a href="contact us.html" class="font-jomolhar no-underline inline-block transition-transform duration-100 hover:scale-115 text-lg text-white">CONTACT US</a>
                </nav>
            </div>
        </div>
    </header>
</template>
<!--
header bg-color
#33bdff
-->
<script setup lang="ts">
</script>
