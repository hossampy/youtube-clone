<script setup>
import { ref } from 'vue';
import MenuIcon from 'vue-material-design-icons/Menu.vue';
import MagnifyIcon from 'vue-material-design-icons/Magnify.vue';
import SideNavItem from "@/Components/SideNavItem.vue";


import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="relative">
        <div id="TopNav" class="w-[100%] h-[60px] fixed bg-black z-20 flex items-center justify-between">
            <div class="flex items-center">
                <button @click="" class="p-2 ml-3 rounded-full hover:bg-gray-800 inline-block cursor-pointer">
                    <MenuIcon fillColor="#FFFFFF" :size="26"/>
                </button>
                <div class="mx-2"></div>
                <div class="flex text-red-50 items-center justify-center mr-10 capitalize text-2xl cursor-pointer">Youtube </div>
            </div>

            <div class="w-[600px] md:block hidden">
                <div class="rounded-full flex items-center bg-[#222222] ">
                    <input
                        type="text"
                        class="
                            form-control
                            block
                            w-full
                            px-5
                            py-1.5
                            text-base
                            font-normal
                            text-gray-200
                            bg-black
                            placeholder-gray-400
                            bg-clip-padding
                            border
                            border-solid
                            border-l-gray-700
                            border-y-gray-700
                            rounded-l-full
                            transition
                            ease-in-out
                            m-0
                            border-transparent
                            focus:ring-0
                        "
                        placeholder="Search"
                    />
                    <MagnifyIcon class="mx-6" fillColor="#FFFFFF" :size="23"/>
                </div>
            </div>
            <div>
                <img
                    class="rounded-full mx-8"
                    width="35"
                    src="https://yt3.ggpht.com/ysLHmrLE5AZ6iypekgvwdSouurPDzR6ShhKpGyrJsewZDA-HjhJEqN7oURLQ5gOwyQwmkV4B=s88-c-k-c0x00ffffff-no-rj"
                >
            </div>
        </div>

        <div id="sideNave" class="h-[100%] fixed z-0 bg-black w-[240px]">
            <ul class="mt-[60px] w-full">
                <SideNavItem :openSideNav="false" :iconString="'Home'"/>
            </ul>

        </div>




    </div>

        <slot />
</template>
