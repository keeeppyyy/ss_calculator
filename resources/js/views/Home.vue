<script setup>
import DiamToWeight from "../components/DiamToWeight.vue";
</script>

<template>
    <main class="container py-40 space-y-20">

        <section class="bg-[#001A36] text-white rounded-4xl p-10">
            <div class="flex justify-between items-center">
                <img src="/public/images/gemologist.svg" alt="Gemologist" class=" rounded">
                <div class="space-y-4 w-[510px] text-center">
                    <p class="font-kameron text-xl">
                        GCIGem Calculation — the digital assistant for<br> gemologists.
                        Are you ready to quickly and accurately calculate all the key parameters of your round diamond?
                    </p>
                    <button class="font-kameron bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded cursor-pointer mt-7">CALCULATION</button>
                </div>
            </div>
        </section>

        <section class="bg-[#001A36] flex justify-between items-center rounded-4xl p-10">
            <div>
                <img src="/public/images/gci_size.svg" alt="Wireframe">
            </div>
            <div>
                <img src="/public/images/gci_brill.svg" alt="Proportions">
            </div>
        </section>

        <section class="bg-[#001A36] flex justify-between items-center rounded-4xl py-10 px-40">
            <img src="/public/images/gci_mess.svg" alt="Tools">
            <h2 class="text-5xl font-kameron text-white w-[550px]">Measure and fill in the diamond parameters.</h2>
        </section>

        <section class="bg-[#001A36] flex justify-between items-center rounded-4xl p-10 px-30">
            <p class="font-kameron text-lg text-center text-white w-[650px]">
                First of all, this is a prototype of the GemCalculation program. By simply filling in 2 parameters,
                you will get 2 important calculations. Just enter the minimum and maximum diameter of a round diamond,
                and the program will calculate the average diameter and the corresponding ideal weight.
            </p>
            <img src="/public/images/gci_diam.svg" alt="Diamond">
        </section>

        <section class="">
            <h2 class="text-6xl font-kameron text-bold text-[#001A36] text-center">CALCULATION</h2>
            <div class="flex flex-col md:flex-row justify-center gap-6">

                <div class="bg-gray-600 p-6 rounded-2xl flex flex-col items-center w-72 space-y-4">
                    <h3 class="text-xl font-bold">GEMOLOGIST</h3>
                    <input type="number" step="0.01" id="min_diam" placeholder="DIAMETR MIN" class="w-full p-2 rounded text-center bg-[#e7f6ff] outline-none cursor-pointer">
                    <input type="number" step="0.01" id="max_diam" placeholder="DIAMETR MAX" class="w-full p-2 rounded text-center bg-[#e7f6ff] outline-none cursor-pointer">
                    <button id="run_calc" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">CALCULATION</button>
                </div>

                <div class="bg-gray-700 p-6 rounded-2xl flex flex-col items-center w-72 space-y-4">
                    <h3 class="text-xl font-bold">GEMCALCULATION</h3>
                    <div class="w-full space-y-2">
                        <label class="block text-center font-semibold">AVERAGE DIAMETR</label>
                        <div id="avg_res" class="bg-gray-300 text-center rounded py-1">0.00</div>
                    </div>
                    <div class="w-full space-y-2">
                        <label class="block text-center font-semibold">WEIGHT (ct)</label>
                        <div id="weight_res" class="bg-gray-300 text-center rounded py-1">0.00</div>
                    </div>
                </div>
            </div>
        </section>

        <DiamToWeight/>

        <div>
            <p class="font-kameron text-2xl text-center text-[#001A36] w-[990px] m-auto">
                GCI Reference Standard: All estimations are calibrated against an ideal Round Brilliant model with a 60.3% depth and a precision-cut 3% girdle. This benchmark provides the most accurate mathematical baseline for professional weight analysis. Please note that individual stone variations in proportions and finishing may result in slight weight deviations. For commercial transactions, physical verification on a certified scale is recommended.
            </p>
        </div>
    </main>
</template>

