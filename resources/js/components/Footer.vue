<template>
    <footer class="bg-[#001A36]">
        <div class="container flex flex-wrap justify-center md:justify-center xl:justify-between items-start gap-6 py-4 text-[10px] md:text-sm xl:text-base">
            <div class="hidden sm:block w-[200px] sm:w-[180px] md:w-[180px] text-center">
                <div class="w-[50px] sm:w-[40px] md:w-[40px] xl:w-[80px] mx-auto">
                    <img src="/public/images/gem.svg" alt="gem" class="w-full h-auto">
                </div>
                <p class="font-kameron text-[10px] sm:text-[9px] md:text-[9px] xl:text-[12px] text-white text-center mt-2 leading-tight">
                    Gem Calculation — modern gemological calculations with precision, speed, and reliability.
                </p>
            </div>

            <div class="text-white text-center min-w-[100px]">
                <h2 class="font-kameron text-xs md:text-sm xl:text-2xl font-bold">CALCULATION</h2>
                <div class="mt-1 space-y-0.5">
                    <button
                        @click="goToCalculationBlock('average-section')"
                        class="block font-jomolhari font-bold cursor-pointer transition-transform duration-100 hover:scale-115 whitespace-nowrap text-[9px] md:text-[10px] xl:text-lg">
                        AVERAGE DIAMETER
                    </button>
                    <button
                        @click="goToCalculationBlock('weight-section')"
                        class="block font-jomolhari font-bold cursor-pointer transition-transform duration-100 hover:scale-115 whitespace-nowrap text-[9px] md:text-[10px] xl:text-lg">
                        DIAMETER TO WEIGHT
                    </button>
                </div>
            </div>

            <div class="text-white text-center min-w-[80px]">
                <h2 class="font-kameron text-xs md:text-sm xl:text-2xl font-bold">COMPANY</h2>
                <div class="mt-1 space-y-0.5">
                    <router-link to="/" class="font-jomolhari no-underline block transition-transform duration-100 hover:scale-115 text-white text-[9px] md:text-[10px] xl:text-lg">
                        HOME
                    </router-link>
                    <router-link to="/about" class="font-jomolhari no-underline block transition-transform duration-100 hover:scale-115 text-white text-[9px] md:text-[10px] xl:text-lg">
                        CONTACT US
                    </router-link>
                </div>
            </div>

            <div class="text-center min-w-[100px]">
                <h2 class="font-kameron text-xs md:text-sm xl:text-2xl font-bold text-white">FOLLOW US</h2>
                <div class="flex items-center justify-center gap-2 mt-1">
                    <a href="https://www.instagram.com/gemcalculation" class="inline-block transition-transform duration-100 hover:scale-110">
                        <img src="/public/images/gci_instagram.svg" alt="INSTAGRAM" class="w-7 sm:w-6 md:w-6 xl:w-auto h-auto">
                    </a>
                    <a href="https://www.linkedin.com/company/gci-org/" class="inline-block transition-transform duration-100 hover:scale-110">
                        <img src="/public/images/gci_in.svg" alt="IN" class="w-6 sm:w-5 md:w-5 xl:w-auto h-auto">
                    </a>
                    <a href="https://www.youtube.com/@gci-gemcalculationinstruments" class="inline-block transition-transform duration-100 hover:scale-110">
                        <img src="/public/images/icon-youtube.svg" alt="youtube" class="w-6 sm:w-5 md:w-5 xl:w-auto h-auto">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

const goToCalculationBlock = (blockId) => {
    if (router.currentRoute.value.name === 'Home') {
        router.push({ hash: `#${blockId}` })
    } else {
        router.push({ name: 'Home', hash: `#${blockId}` })
    }
}
</script>
