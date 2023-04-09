<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>
<script>
import Layout from "../Layouts/Layout.vue";
export default {
    layout: Layout
}
</script>
<template>
    <div class="flex justify-center">
        <div class="flex flex-col pt-16">
            <span class="text-6xl text-white">Esitle oma sõidukit  uuel moel!</span>
            <span class="text-2xl text-white">Auto müümine mugavam, lihtsam ja esinduslikum kui kunagi varem.</span>
            <div class="flex">
                <div class="flex rounded-full text-white bg-[#ED9B40] h-14 w-40 items-center justify-center"><span>MÜÜN AUTOT</span></div>
                <div class="flex border-[#ED9B40] border rounded-full text-white h-14 w-40 items-center justify-center">OSTAN AUTOT</div>
            </div>
        </div>
        <img src="../Assets/BMWback.svg" alt="">
    </div>
</template>
