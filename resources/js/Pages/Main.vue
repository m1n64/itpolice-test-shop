<script setup>
import {Head, Link} from '@inertiajs/inertia-vue3';
import Header from "@/Components/Header.vue";

const props = defineProps({

});
</script>
<template>
    <Head title="Main Page"/>

    <Header />

    <div class="flex py-[20%] justify-center backdrop-contrast-200" style="background-image: url('images/bg.jpg'); background-size: cover; background-position: center">
        <span class="font-bold uppercase text-3xl bg-[#FFFFFF90] px-16 py-3 backdrop-opacity-60">Welcome to our best shop!</span>
    </div>

    <div class="flex mx-auto container pt-8">
        <h1 class="text-3xl font-bold">Top products</h1>
    </div>
</template>
