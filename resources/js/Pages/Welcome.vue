<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from "@/Layouts/NavLayout.vue";
import VideoCard from "@/Components/VideoCard.vue";

defineProps({
    videos: Array

});


</script>

<template>
    <Head title="youtube clone" />

    <NavLayout>
        <div>
            <div class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2">
                <div v-for="video in videos" :key="video.id">
                    <VideoCard
                        :title="video.title"
                        :user="video.user"
                        :views="video.views"
                        :image="`https://picsum.photos/id/${index}/100`"
                        :videoUrl="video.video"
                        :thumbnail="video.thumbnail"
                    />

                </div>




            </div>
        </div>
    </NavLayout>
    <h1 class="bg-amber-500"> hello it me</h1>
</template>
