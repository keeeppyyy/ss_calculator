<script setup>
import DiamToWeight from "../components/DiamToWeight.vue";
import AverageWeight from "../components/AverageWeight.vue";
import { useRoute } from 'vue-router'
import { onMounted, watch } from 'vue'

const route = useRoute()
const scrollToCalculation = () => {
    const el = document.getElementById('calculation')
    el?.scrollIntoView({ behavior: 'smooth' })
}

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
    <main class="container py-10 space-y-10 xl:py-20 xl:space-y-20">
        <section class="bg-[#001A36] text-white rounded-4xl">
            <div class="flex flex-col sm:flex-row md:flex-row xl:flex-row justify-between items-center">
                <img
                    src="/public/images/gemologist.svg"
                    alt="Gemologist"
                    class="rounded-t-4xl sm:rounded-l-4xl sm:rounded-t-none md:rounded-l-4xl md:rounded-t-none xl:rounded-l-4xl w-full sm:w-[45%] md:w-[45%] xl:w-[45%]"
                >
                <div class="w-full text-center sm:text-left md:text-left xl:text-left sm:space-y-4 md:space-y-4 xl:space-y-4 sm:w-[45%] md:w-[45%] xl:w-[510px] my-4 sm:my-0 md:my-0 xl:my-0">
                    <p class="font-kameron text-base px-2.5 sm:px-0 md:px-0 xl:px-0 sm:text-lg md:text-lg xl:text-2xl sm:pr-4 md:pr-4 xl:pr-10 xl:text-center">
                        GCIGem Calculation — the digital assistant for gemologists.
                        Are you ready to quickly and accurately calculate all the key parameters of your round diamond?
                    </p>
                    <div class="flex justify-center sm:justify-center md:justify-center xl:justify-center">
                        <button
                            @click="scrollToCalculation"
                            class="font-kameron mt-4 sm:mt-0 md:mt-0 xl:mt-4 xl:mr-[50px] bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-white font-bold py-2 px-4 rounded cursor-pointer transition-all duration-200 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/50">
                            CALCULATION
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#001A36] flex flex-col sm:flex-row md:flex-row xl:flex-row items-center rounded-4xl">
            <div class="pt-3 md:pt-0 sm:w-[39%] md:w-[40%]">
                <img src="/public/images/gci_size.svg" alt="Wireframe" class="w-full rounded-t-4xl sm:rounded-t-none sm:rounded-l-4xl md:rounded-t-none md:rounded-l-4xl">
            </div>
            <div class="flex-1 flex justify-center sm:justify-center md:justify-center xl:justify-end">
                <img src="/public/images/gci_brill.svg" alt="Proportions" class="rounded-b-4xl sm:rounded-bl-none sm:rounded-r-4xl md:rounded-b-none md:rounded-r-4xl xl:rounded-r-4xl w-full h-auto">
            </div>
        </section>

        <section class="bg-[#001A36] flex flex-col xl:flex-row justify-between items-center rounded-4xl">
            <div class="w-full xl:w-[28%] h-[200px] xl:h-auto overflow-hidden rounded-t-4xl xl:rounded-l-4xl xl:rounded-r-none">
                <img src="/public/images/gci_gem.svg" alt="Tools" class="w-full h-full object-cover">
            </div>
            <p class="text-base xl:text-2xl text-center xl:text-left font-kameron text-white w-full xl:w-[60%] xl:pr-12 p-4 xl:p-0">
                GCI — Gem Calculation & Instruments

                was created to solve one simple yet essential problem:

                gemologists, jewelers, and diamond trade professionals

                face the need for fast, accurate, and reliable calculations

                every day.<br>

                Years of experience in gemology and gemstone

                evaluation have led us to a clear conclusion:

                traditional tables, manual calculations, and combining

                data from multiple sources are time-consuming and

                often lead to errors.

            </p>
        </section>

        <section class="bg-[#001A36] flex flex-col xl:flex-row justify-between items-center rounded-4xl">
            <p class="text-base xl:text-2xl text-center xl:text-left font-kameron text-white w-full xl:w-[55%] xl:pl-12 p-4 xl:p-0">
                GCI was created as a true assistant for

                gemologists.<br>

                Our platform allows you to:
                <span class="block">
                    • quickly calculate diamond weight (carat)
                    based on real measurements
                </span>

                <span class="block">
                    • work with round and other fancy cuts
                </span>

                <span class="block">
                    • reduce the risk of human error
                </span>

                <span class="block">
                    • save valuable time during exhibitions,
                </span>

                purchasing, and evaluation processes<br>

                GCI brings together science, experience, and

                technology, enabling gemologists to focus<br>

                on what matters most —<br>

                making the right decisions.
            </p>
            <div class="w-full xl:w-[40%] h-[200px] xl:h-auto overflow-hidden rounded-b-4xl xl:rounded-r-4xl xl:rounded-bl-none">
                <img src="/public/images/gci_gem_inst.svg" alt="Tools" class="w-full h-full object-cover">
            </div>
        </section>

        <section class="bg-[#001A36] flex flex-col xl:flex-row justify-between items-center rounded-4xl">
            <p class="font-kameron text-base xl:text-2xl text-center xl:text-left text-white w-full xl:w-[60%] xl:px-10 p-4 xl:p-0">
                First of all, this is a prototype of the GemCalculation program. By simply filling in 2 parameters,
                you will get 2 important calculations. Just enter the minimum and maximum diameter of a round diamond,
                and the program will calculate the average diameter and the corresponding ideal weight.
            </p>
            <div class="w-full xl:w-[50%] h-[200px] xl:h-auto overflow-hidden rounded-b-4xl xl:rounded-r-4xl xl:rounded-bl-none">
                <img src="/public/images/gci_diamond.jpg" alt="Diamond" class="w-full h-full object-cover">
            </div>
        </section>

        <div id="calculation">
            <div id="average-section">
                <AverageWeight/>
            </div>
            <div id="weight-section">
                <DiamToWeight/>
            </div>
        </div>

        <section class="bg-[#001A36] flex flex-col sm:flex-row md:flex-row xl:flex-row justify-between items-center rounded-t-4xl rounded-b-4xl sm:rounded-4xl md:rounded-4xl xl:rounded-4xl">
            <div class="w-full sm:w-[40%] md:w-[40%] xl:w-[30%] overflow-hidden">
                <img src="/public/images/gci_gem_proj.svg" alt="Tools" class="w-full h-full object-cover rounded-t-4xl sm:rounded-l-4xl sm:rounded-tr-none md:rounded-l-4xl md:rounded-tr-none xl:rounded-l-4xl max-h-[200px] sm:max-h-none">
            </div>
            <label class="text-base sm:text-base md:text-lg xl:text-2xl flex flex-col items-center font-kameron text-white w-full sm:w-[55%] md:w-[55%] xl:w-[710px] sm:pr-2 md:pr-4 xl:pr-20 space-y-3 p-4 sm:p-0 md:p-0 xl:p-0 text-center sm:text-left md:text-left xl:text-left">
                <p>👤 Project Credits</p>
                <p>Idea & Concept:</p>
                <a href="https://www.instagram.com/alex__khachatryan_a.k"
                   class="inline-block underline underline-offset-2 transition-transform duration-100 hover:scale-110 origin-center">
                    Alex Khachatryan
                </a>
                <a href="https://www.instagram.com/samvel_galstyaaan"
                   class="inline-block underline underline-offset-2 transition-transform duration-100 hover:scale-110 origin-center">
                    Samvel Galstyan
                </a>
                <p>DÉMAR JEWELRY Gemologists Team</p>
                <p>Design:</p>
                <a href="https://www.instagram.com/alex__khachatryan_a.k"
                   class="inline-block underline underline-offset-2 transition-transform duration-100 hover:scale-110 origin-center">
                    Alex Khachatryan
                </a>
            </label>
        </section>

        <div>
            <p class="font-kameron text-base xl:text-2xl text-center text-[#001A36] w-full xl:w-[990px] m-auto p-4 xl:p-0">
                GCI Reference Standard: All estimations are calibrated against an ideal Round Brilliant model with a 60.3% depth and a precision-cut 3% girdle. This benchmark provides the most accurate mathematical baseline for professional weight analysis. Please note that individual stone variations in proportions and finishing may result in slight weight deviations. For commercial transactions, physical verification on a certified scale is recommended.
            </p>
        </div>
    </main>
</template>
