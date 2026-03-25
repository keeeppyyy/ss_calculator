<template>
    <header class="bg-[#001A36]">
        <div class="container flex justify-between items-center py-4">
            <div class="font-jomolhar text-8xl font-bold text-white">GCI</div>
            <div class="w-[135px] ml-[70px]"><img src="/public/images/gem.svg" alt="gem"></div>
            <div class="flex items-center gap-4">
                <nav class="space-x-6 text-lg">
                    <button
                        @click="goToCalculation"
                       class="font-jomolhar cursor-pointer inline-block transition-transform duration-100 hover:scale-115 text-lg text-white">CALCULATION
                    </button>
                    <router-link to="/" class="font-jomolhar no-underline inline-block transition-transform duration-100 hover:scale-115 text-lg text-white">
                        HOME
                    </router-link>
                    <router-link to="/about" class="font-jomolhar no-underline inline-block transition-transform duration-100 hover:scale-115 text-lg text-white">
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
