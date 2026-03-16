<script>
export default {
    data() {
        return {
            inputValue: '',
            resultValue: '',
            error: null,
            isReversed: false
        }
    },
    methods: {
        async calculate() {
            this.error = null;
            this.resultValue = '';

            if (!this.inputValue) {
                this.error = 'Enter a value';
                return;
            }

            try {
                let url, params;

                if (this.isReversed) {
                    url = '/api/get-diameter';
                    params = { weight: this.inputValue };
                } else {
                    url = '/api/get-weight';
                    params = { diam: this.inputValue };
                }

                const response = await axios.get(url, { params });

                // Successful request
                this.resultValue = this.isReversed ? response.data.diameter : response.data.weight;
                this.error = null;

            } catch (error) {
                // Handle server error
                if (error.response && error.response.status === 404) {
                    if (this.isReversed) {
                        this.error = `Weight ${this.inputValue} does not exist`;
                    } else {
                        this.error = `Diameter ${this.inputValue} does not exist`;
                    }
                } else {
                    this.error = 'An error occurred while requesting';
                    console.error('API Error:', error);
                }
                this.resultValue = '';
            }
        },

        clearResult() {
            this.resultValue = '';
            this.error = null;
        },

        toggleMode() {
            this.isReversed = !this.isReversed;
            this.inputValue = '';
            this.resultValue = '';
            this.error = null;
        }
    }
}
</script>

<template>
    <section class="space-y-6 font-montserrat">
        <h2 class="text-6xl font-kameron text-bold text-[#001A36] text-center">DIAMETR TO WEIGHT</h2>
        <div class="bg-[#0a3147] p-8 rounded-2xl max-w-3xl mx-auto p-10">
            <div class="flex justify-between">
                <div>
                    <p>{{ isReversed ? 'WEIGHT(ct)' : 'DIAMETR' }}</p>
                    <input
                        v-model="inputValue"
                        type="number"
                        step="0.01"
                        id="input-1"
                        placeholder="0.00"
                        class="p-2 rounded text-center w-40 bg-[#e7f6ff] outline-none cursor-pointer mt-1"
                        :class="{ 'border-2 border-red-500': error }"
                        @input="clearResult">
                    <p v-if="error" class="text-red-400 text-sm mt-1 absolute">{{ error }}</p>
                </div>
                <div class="flex items-end">
                    <button
                        id="reverse-btn"
                        class="p-2 rounded cursor-pointer transition-all duration-300 hover:scale-125 active:scale-90 bg-transparent hover:bg-transparent"
                        :class="{ 'rotate-180': isReversed }"
                        @click="toggleMode">
                        <img src="/public/images/arrow_circular.svg" alt="Swap" class="w-12 h-12 transition-transform duration-300">
                    </button>
                </div>
                <div>
                    <p>{{ isReversed ? 'DIAMETR' : 'WEIGHT(ct)' }}</p>
                    <input
                        v-model="resultValue"
                        type="number"
                        step="0.01"
                        id="input-2"
                        placeholder="0.00"
                        class="p-2 rounded text-center w-40 bg-[#e7f6ff] outline-none cursor-pointer mt-1"
                        readonly>
                </div>
            </div>
            <button
                @click="calculate"
                class="bg-blue-500 hover:bg-blue-600 font-bold py-2 px-4 rounded cursor-pointer mt-10"
                :disabled="!inputValue">
                {{ isReversed ? 'CALCULATE DIAMETER' : 'CALCULATE WEIGHT' }}
            </button>
        </div>
    </section>
</template>


