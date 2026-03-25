<script setup>
import DiamToWeight from "../components/DiamToWeight.vue";
import AverageWeight from "../components/AverageWeight.vue";

import { useRoute } from 'vue-router'
import { onMounted, watch } from 'vue'

const route = useRoute()

const scrollToTarget = () => {
    const hash = route.hash?.slice(1)
    if (hash) {
        const el = document.getElementById(hash)
        if (el) {
            el.scrollIntoView({ behavior: 'smooth' })
        }
    }
}

onMounted(scrollToTarget)
watch(() => route.hash, scrollToTarget)
</script>

<template>
    <main class="container py-40 space-y-20">

        <section class="bg-[#001A36] text-white rounded-4xl">
            <div class="flex justify-between items-center">
                <img src="/public/images/gemologist.svg" alt="Gemologist" class="rounded-l-4xl w-[49%]">
                <div class="space-y-4 w-[510px] text-center">
                    <p class="font-kameron text-xl pr-10">
                        GCIGem Calculation — the digital assistant for<br> gemologists.
                        Are you ready to quickly and accurately calculate all the key parameters of your round diamond?
                    </p>
                    <button class="font-kameron mt-4 bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-white font-bold py-2 px-4 rounded cursor-pointer transition-all duration-200 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/50">
                        CALCULATION
                    </button>
                </div>
            </div>
        </section>

        <section class="bg-[#001A36] flex items-center rounded-4xl">
            <div class="p-8">
                <img src="http://127.0.0.1:5176/public/images/gci_size.svg" alt="Wireframe">
            </div>
            <div class="flex-1 flex justify-end">
                <img src="http://127.0.0.1:5176/public/images/gci_brill.svg" alt="Proportions" class="rounded-r-4xl w-full h-auto">
            </div>
        </section>

        <section class="bg-[#001A36] flex justify-between items-center rounded-4xl">
            <img src="/public/images/gci_mess.svg" alt="Tools" class="rounded-l-4xl w-[27%]">
            <h2 class="text-3xl text-center font-kameron text-white w-[550px] pr-20">Measure and fill in the diamond parameters.</h2>
        </section>

        <section class="bg-[#001A36] flex justify-between items-center rounded-4xl">
            <p class="font-kameron text-xl text-center text-white w-[650px] pl-[90px]">
                First of all, this is a prototype of the GemCalculation program. By simply filling in 2 parameters,
                you will get 2 important calculations. Just enter the minimum and maximum diameter of a round diamond,
                and the program will calculate the average diameter and the corresponding ideal weight.
            </p>
            <img src="/public/images/gci_diam.svg" alt="Diamond" class="rounded-r-4xl w-[32%]">
        </section>

        <div id="calculation">
            <div id="average-section">
                <AverageWeight/>
            </div>
            <div id="weight-section">
                <DiamToWeight/>
            </div>
        </div>

        <div>
            <p class="font-kameron text-2xl text-center text-[#001A36] w-[990px] m-auto">
                GCI Reference Standard: All estimations are calibrated against an ideal Round Brilliant model with a 60.3% depth and a precision-cut 3% girdle. This benchmark provides the most accurate mathematical baseline for professional weight analysis. Please note that individual stone variations in proportions and finishing may result in slight weight deviations. For commercial transactions, physical verification on a certified scale is recommended.
            </p>
        </div>
    </main>
</template>

