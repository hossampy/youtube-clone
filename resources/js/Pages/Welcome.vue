<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from "@/Layouts/NavLayout.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});


</script>

<template>
    <Head title="youtube clone" />

    <nav-layout> </nav-layout>
    <h1 class="bg-amber-500"> hello it me</h1>
</template>
