import { createApp } from 'vue'
import App from './App.vue'
import axios from "axios";
import router from './router'
import LocomotiveScroll from 'locomotive-scroll';
import 'locomotive-scroll/dist/locomotive-scroll.css';

import './bootstrap';

const app = createApp(App)

app.config.globalProperties.axios = axios
app.use(router)

app.mount('#app')
window.addEventListener('load', () => {
    const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        multiplier: 0.8,
        smartphone: {
            smooth: true,
            multiplier: 0.6
        },
        tablet: {
            smooth: true,
            multiplier: 0.7
        }
    });
});
