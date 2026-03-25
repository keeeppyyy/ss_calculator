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
                    params: { min, max }
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
        }
    }
};
</script>

<template>
    <section>
        <h2 class="text-6xl font-kameron text-bold text-[#001A36] text-center">CALCULATION</h2>
        <div class="flex flex-col md:flex-row justify-center gap-6 mt-10">
            <div class="bg-[#001A36] p-6 rounded-2xl flex flex-col items-center w-72 space-y-4">
                <h3 class="text-xl text-white font-bold">GEMOLOGIST</h3>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold">DIAMETER MIN</label>
                    <input
                        type="number"
                        step="0.01"
                        placeholder="0.00"
                        class="w-full p-2 rounded text-center bg-[#e7f6ff] outline-none cursor-pointer"
                    >
                </div>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold">DIAMETER MAX</label>
                    <input
                        type="number"
                        step="0.01"
                        placeholder="0.00"
                        class="w-full p-2 rounded text-center bg-[#e7f6ff] outline-none cursor-pointer"
                    >
                </div>
                <button
                    class="font-kameron mt-2 bg-gradient-to-r from-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-white font-bold py-2 px-4 rounded cursor-pointer transition-all duration-200 hover:scale-105 hover:shadow-xl hover:shadow-blue-500/50"
                >
                    CALCULATION
                </button>
            </div>

            <div class="bg-[#001A36] p-6 rounded-2xl flex flex-col items-center w-72 space-y-4">
                <h3 class="text-xl text-white font-bold">GEMCALCULATION</h3>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold">AVERAGE DIAMETER</label>
                    <div class="text-center rounded py-2 bg-[#e7f6ff]">
                        {{ avgDiam ? avgDiam.toFixed(2) : '0.00' }}
                    </div>
                </div>
                <div class="w-full space-y-2">
                    <label class="block text-white text-center font-semibold">WEIGHT (ct)</label>
                    <div class="text-center rounded py-2 bg-[#e7f6ff]">
                        {{ weight ? weight.toFixed(3) : '0.000' }}
                    </div>
                </div>
                <div v-if="errorMessage" class="text-red-400 text-sm text-center mt-2">
                    ⚠️ {{ errorMessage }}
                </div>
            </div>
        </div>
    </section>
</template>
