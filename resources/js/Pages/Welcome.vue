<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from "@/Layouts/NavLayout.vue";
import VideoCard from "@/Components/VideoCard.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },

});


</script>

<template>
    <Head title="youtube clone" />

    <NavLayout>
        <div>
            <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2">


                        <VideoCard
                            title="the best tiger"
                            user="hossam"
                            views="23M"
                            image="https://picsum.photos/id/15/100"
                            videoUrl="/videos/tiger.mp4"
                            thumbnail="/videos/thumbnails/tiger.png"
                        />


            </div>
        </div>
    </NavLayout>
    <h1 class="bg-amber-500"> hello it me</h1>
</template>
