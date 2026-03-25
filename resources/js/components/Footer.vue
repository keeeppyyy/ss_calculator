<template>
    <footer class="bg-[#001A36]">
        <div class="container flex justify-between items-center py-4">
            <div class="text-white">
                <h2 class="font-kameron text-3xl font-bold">CALCULATION</h2>
                <div class="mt-5 space-y-2">
                    <button
                        @click="goToCalculationBlock('average-section')"
                        class="block font-jomolhar font-bold cursor-pointer transition-transform duration-100 hover:scale-115 text-base">
                        AVERAGE DIAMETER
                    </button>
                    <button
                        @click="goToCalculationBlock('weight-section')"
                        class="block font-jomolhar font-bold cursor-pointer transition-transform duration-100 hover:scale-115 text-base">
                        DIAMETER TO WEIGHT
                    </button>
                </div>
            </div>
            <div class="text-white">
                <h2 class="font-kameron text-3xl font-bold">COMPANY</h2>
                <div class="mt-5 space-y-2">
                    <router-link to="/" class="font-jomolhar no-underline block transition-transform duration-100 hover:scale-115 text-lg text-white">
                        HOME
                    </router-link>
                    <router-link to="/about" class="font-jomolhar no-underline block transition-transform duration-100 hover:scale-115 text-lg text-white">
                        CONTACT US
                    </router-link>
                </div>
            </div>
            <div>
                <h2 class="font-kameron text-3xl font-bold text-white">FOLLOW US</h2>
                <div class="flex items-center mt-5">
                    <a href="https://www.instagram.com/gemcalculation" class="inline-block"><img src="/public/images/gci_instagram.svg" alt="INSTAGRAM"></a>
                    <a href="https://www.linkedin.com/company/gci-org/" class="inline-block ml-4"><img src="/public/images/gci_in.svg" alt="IN"></a>
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
