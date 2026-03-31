<script>
import axios from 'axios';

export default {
    data() {
        return {
            minDiam: '',
            maxDiam: '',
            avgDiam: 0,
            weight: 0,
            errorMessage: ''
        };
    },
    methods: {
        async calculateAverage() {
            this.errorMessage = '';

            if (!this.minDiam || !this.maxDiam) {
                alert('Please fill in both fields');
                return;
            }

            const min = parseFloat(this.minDiam);
            const max = parseFloat(this.maxDiam);

            try {
                const response = await axios.get('/api/average-weight', {
                    params: {min, max}
                });

                this.avgDiam = parseFloat(response.data.diameter) || 0;
                this.weight = parseFloat(response.data.weight) || 0;

            } catch (error) {
                this.avgDiam = 0;
                this.weight = 0;

                if (error.response?.status === 404) {
                    this.errorMessage = 'No matching diameter found. Please try different values.';
                } else {
                    this.errorMessage = 'Server error. Please try again.';
                }
            }
        },

        handleKeyPress(event) {
            if (event.key === 'Enter') {
                this.calculateAverage();
            }
        }
    }
};
</script>

<template>
    <section class="mt-[20px] md:mt-[0]">
        <h2 class="text-3xl sm:text-4xl md:text-4xl xl:text-6xl font-kameron font-bold text-[#001A36] text-center">
            CALCULATION
        </h2>
        <div class="flex flex-col sm:flex-row md:flex-row xl:flex-row justify-center gap-4 sm:gap-5 md:gap-5 xl:gap-6 mt-4 sm:mt-6 md:mt-6 xl:mt-10">

            <div class="bg-[#001A36] p-4 sm:p-5 md:p-5 xl:p-6 rounded-2xl flex flex-col items-center w-full sm:w-64 md:w-64 xl:w-72 space-y-3 sm:space-y-3 md:space-y-3 xl:space-y-4">
                <h3 class="text-lg sm:text-xl md:text-xl xl:text-2xl text-white font-bold">GEMOLOGIST</h3>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold text-sm sm:text-sm md:text-sm xl:text-base">DIAMETER MIN</label>
                    <input
                        type="number"
                        step="0.01"
                        v-model="minDiam"
                        placeholder="0.00"
                        @keypress="handleKeyPress"
                        class="w-full p-2 rounded text-center bg-[#e7f6ff] outline-none cursor-pointer"
                    >
                </div>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold text-sm sm:text-sm md:text-sm xl:text-base">DIAMETER MAX</label>
                    <input
                        type="number"
                        step="0.01"
                        v-model="maxDiam"
                        placeholder="0.00"
                        @keypress="handleKeyPress"
                        class="w-full p-2 rounded text-center bg-[#e7f6ff] outline-none cursor-pointer"
                    >
                </div>
                <button
                    @click="calculateAverage"
                    class="font-kameron mt-2 bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-white font-bold py-2 px-4 rounded cursor-pointer transition-all duration-200 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/50"
                >
                    CALCULATION
                </button>
            </div>

            <div class="bg-[#001A36] p-4 sm:p-5 md:p-5 xl:p-6 rounded-2xl flex flex-col items-center w-full sm:w-64 md:w-64 xl:w-72 space-y-3 sm:space-y-3 md:space-y-3 xl:space-y-4">
                <h3 class="text-lg sm:text-xl md:text-xl xl:text-2xl text-white font-bold">GEMCALCULATION</h3>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold text-sm sm:text-sm md:text-sm xl:text-base">AVERAGE DIAMETER</label>
                    <div class="text-center rounded py-2 bg-[#e7f6ff] text-sm sm:text-sm md:text-sm xl:text-base">
                        {{ avgDiam ? avgDiam.toFixed(2) : '0.00' }}
                    </div>
                </div>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold text-sm sm:text-sm md:text-sm xl:text-base">WEIGHT (ct)</label>
                    <div class="text-center rounded py-2 bg-[#e7f6ff] text-sm sm:text-sm md:text-sm xl:text-base">
                        {{ weight ? weight.toFixed(3) : '0.000' }}
                    </div>
                </div>
                <div v-if="errorMessage" class="text-red-400 text-xs sm:text-xs md:text-xs xl:text-sm text-center mt-2">
                    ⚠️ {{ errorMessage }}
                </div>
            </div>
        </div>
    </section>
</template>
