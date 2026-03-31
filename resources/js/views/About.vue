<template>
    <div class="about-page py-10 sm:py-16 md:py-20" style="background-color: rgba(231, 246, 255, 1);">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-center text-[#001A36] mb-6 sm:mb-8 md:mb-10">About Us & Contact</h1>
        <div class="flex flex-col md:flex-row gap-6 sm:gap-8 max-w-6xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="flex-1 bg-white/90 backdrop-blur-sm rounded-2xl p-6 sm:p-8 shadow-xl border border-white/20">
                <h2 class="text-2xl sm:text-3xl font-semibold mb-3 sm:mb-4 text-[#001A36] font-kameron">📬 Contact Us</h2>
                <h3 class="text-lg sm:text-xl font-medium mb-2 font-kameron">Get in Touch</h3>
                <p class="mb-4 text-gray-700 leading-relaxed font-kameron text-base sm:text-lg">
                    We are always open to new partnerships, feedback, and inquiries. If you have questions regarding our platform or wish to discuss potential collaborations, we are here to help!
                </p>
                <div class="mt-6 flex flex-col space-y-3 text-gray-800 items-start">
                    <a href="mailto:gemcalculation@gmail.com"
                       class="inline-flex items-center gap-3 font-kameron text-base sm:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                        <span>📧</span>
                        gemcalculation@gmail.com
                    </a>
                    <a href="https://www.instagram.com/gemcalculation"
                       class="inline-flex items-center gap-3 font-kameron text-base sm:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                        <img src="/public/images/icon_instagram.png" alt="INSTAGRAM" class="w-[18px] sm:w-[20px]">
                        INSTAGRAM
                    </a>
                    <a href="https://www.linkedin.com/company/gci-org/"
                       class="inline-flex items-center gap-3 font-kameron text-base sm:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                        <img src="/public/images/gci_in.svg" alt="IN" class="w-[18px] sm:w-[20px]">
                        LinkedIn
                    </a>
                    <a href="https://www.youtube.com/@gci-gemcalculationinstruments"
                       class="inline-flex items-center gap-2 sm:gap-3 font-kameron text-sm sm:text-base md:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                        <img src="/public/images/icon-youtube.svg" alt="youtube" class="w-[16px] sm:w-[18px] md:w-[20px]">
                        Youtube
                    </a>
                </div>
            </div>

            <div class="flex-1 bg-white/90 backdrop-blur-sm rounded-2xl p-6 sm:p-8 shadow-xl border border-white/20">
                <h2 class="text-2xl sm:text-3xl font-semibold mb-3 sm:mb-4 text-[#001A36] font-kameron">💎 About Us</h2>
                <p class="mb-4 text-gray-700 leading-relaxed font-kameron text-base sm:text-lg">
                    We are a young, dynamic company dedicated to bringing technological precision to the jewelry industry. While we are at the beginning of our journey, every solution we provide is built upon a foundation of immense practical expertise.
                </p>
                <p class="mb-4 text-gray-700 leading-relaxed font-kameron text-base sm:text-lg">
                    Our algorithms are more than just theoretical formulas. Every weight calculation is verified through the analysis of thousands of real diamonds. Our calculations are based on a <strong class="text-[#001A36]">60.3% total depth</strong> standard for round brilliant diamonds, representing our benchmark for ideal proportions and aesthetic excellence. This approach provides a high level of accuracy down to 0.01 carats, serving as a reliable guide for industry professionals.
                </p>
                <div class="mt-6 p-4 sm:p-5 bg-[#001A36]/5 rounded-xl border-l-4 border-[#001A36]">
                    <p class="italic text-gray-700 font-kameron text-base sm:text-lg">“We are building the future of gemology on a foundation of precision and trust.”</p>
                </div>
            </div>
        </div>

        <div class="mt-10 sm:mt-12 md:mt-15 text-center text-gray-700 px-4">
            <p class="text-lg sm:text-xl font-medium font-kameron">Our Details:</p>
            <div class="flex flex-wrap justify-center gap-4 sm:gap-6 mt-4">
                <a href="mailto:gemcalculation@gmail.com"
                   class="inline-flex items-center gap-2 sm:gap-3 font-kameron text-sm sm:text-base md:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                    <span>📧</span>
                    gemcalculation@gmail.com
                </a>
                <a href="https://www.instagram.com/gemcalculation"
                   class="inline-flex items-center gap-2 sm:gap-3 font-kameron text-sm sm:text-base md:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                    <img src="/public/images/icon_instagram.png" alt="INSTAGRAM" class="w-[16px] sm:w-[18px] md:w-[20px]">
                    INSTAGRAM
                </a>
                <a href="https://www.linkedin.com/company/gci-org/"
                   class="inline-flex items-center gap-2 sm:gap-3 font-kameron text-sm sm:text-base md:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                    <img src="/public/images/gci_in.svg" alt="IN" class="w-[16px] sm:w-[18px] md:w-[20px]">
                    LinkedIn
                </a>
                <a href="https://www.youtube.com/@gci-gemcalculationinstruments"
                   class="inline-flex items-center gap-2 sm:gap-3 font-kameron text-sm sm:text-base md:text-lg transition-transform duration-100 hover:scale-110 origin-center">
                    <img src="/public/images/icon-youtube.svg" alt="youtube" class="w-[16px] sm:w-[18px] md:w-[20px]">
                    Youtube
                </a>
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
</script>
