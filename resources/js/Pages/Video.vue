<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue'
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue'
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue'
import RecommendedVideos from "@/Components/recommendedVideos.vue";



let vid = {
    title: "the best tiger",
    user: "hossam",
    views: "23M",
    image: "https://picsum.photos/id/15/100",
    video: "/videos/tiger.mp4",
    thumbnail: "/videos/thumbnails/tiger.png"
};


</script>

<template>
    <Head title="youtube clone" />

    <NavLayout>
       <div class="xl:flex">
           <div class="p-3">
               <video src="/videos/tiger.mp4" controls autoplay />
               <div class="text-white text-2xl font-extrabold mt-4"> the best tiger</div>
               <div class="flex items-center mb-4">
                   <img
                       class="rounded-full mt-2 flex items-baseline w-12 h-12"
                       :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''"  >
                   <div class="pl-2 mt-1">
                       <div class="text-white text-lg font-bold flex items-center">
                          hossam <CheckCircle class="pl-2" fillColor="#888888" :size="17"/>
                       </div>
                       <div class="text-gray-400 text-sm font-bold">23M</div>
                   </div>
               </div>
               <div class="bg-[#3F3F3F] rounded-kg w-full p-3 text-white">
                   <div class="text-white text-lg font-bold" >the best tiger</div>
                   <div class="text-white text-sm font-bold mb-6" >the best tiger</div>
                   <div class="text-white text-sm font-bold " >the best tiger</div>
               </div>
            <div class="mt-6">
                <div class="text-white text-lg font-extrabold">12 commnets</div>
                <div class="flex items-flex mb-4 mt-2">
                    <img
                        class="rounded-full mt-2 w-12 h-12"
                        :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''"  >
                    <div class="pl-2 mt-2">
                        <div class="text-white flex items-baseline ">
                            <div class=" font-bold pl-3 capitalize">
                                hossam
                            </div>
                            <div class="text-gray-400 text-sm pl-2">
                                4 days ago
                            </div>
                        </div>
                        <div class="text-gray-400 text-sm font-semibold">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in malesuada nibh, sed sodales ipsum. Suspendisse dictum dignissim hendrerit.
                        </div>
                        <div class="mt-4 flex items-center">
                            <ThumbUpOutline fillColor="#FFFFFF" :size="20" class="pr-2 hover:bg-gray-400 rounded-full"/>
                            <div class="text-gray-400 text-sm font-extrabold pr-5">{{ (Math.random() * 100).toFixed(0) }}</div>
                            <ThumbDownOutline fillColor="#FFFFFF" :size="20"/>
                        </div>
                    </div>




                </div>
            </div>

           </div>
           <div class="w-[500px] p-3 sm:block hidden">

                       <RecommendedVideos :vid="vid" />

               </div>
           </div>


    </NavLayout>

</template>
