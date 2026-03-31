<template>
    <header class="bg-[#001A36]">
        <div class="container flex flex-col md:flex-row xl:flex-row justify-between items-center py-2 md:py-3 xl:py-4 gap-2 md:gap-0 xl:gap-0">
            <div class="flex items-center justify-center w-full md:w-auto gap-4 md:gap-0 xl:w-[51%] xl:justify-between">
                <div class="font-jomolhari text-3xl md:text-5xl xl:text-8xl font-bold text-white">GCI</div>
                <div class="w-[50px] md:w-[80px] xl:w-[135px] ml-0 md:ml-[100px] xl:ml-[100px]">
                    <img src="/public/images/gem.svg" alt="gem" class="w-full h-auto">
                </div>
            </div>

            <div class="flex items-center justify-center w-full md:w-auto xl:w-auto">
                <nav class="space-x-3 md:space-x-4 xl:space-x-6 text-sm md:text-base xl:text-xl">
                    <button
                        @click="goToCalculation"
                        class="font-jomolhari cursor-pointer inline-block transition-transform duration-100 hover:scale-115 text-white">
                        CALCULATION
                    </button>
                    <router-link to="/" class="font-jomolhari no-underline inline-block transition-transform duration-100 hover:scale-115 text-white">
                        HOME
                    </router-link>
                    <router-link to="/about" class="font-jomolhari no-underline inline-block transition-transform duration-100 hover:scale-115 text-white">
                        CONTACT US
                    </router-link>
                </nav>
            </div>
        </div>
    </header>
</template>

<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

const goToCalculation = () => {
    if (router.currentRoute.value.name === 'Home') {
        router.push({ hash: '#calculation' })
    } else {
        router.push({ name: 'Home', hash: '#calculation' })
    }
}
</script>
