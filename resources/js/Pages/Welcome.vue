<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';

import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
    initFlowbite();
})

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

</script>

<template>
    <Head title="Welcome" />
    <Layout :can-login="canLogin" :can-register="canRegister">
        <!-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
            
            <div class="relative min-h-screen overflow-hidden rounded-lg">
                
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img :src="'../storage/slide/keeping.jpg'" 
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="mx-auto text-white">
                            <p class="text-center font-extrabold text-5xl my-10">บริการออกแบบ ติตตั้ง </p>
                            <p class="text-white text-center font-extrabold text-5xl my-10"> ซ่อมบำรุงรอกและเครน</p>
                            <div class="flex justify-center">
                                <button class="font-semibold px-6 py-4 bg-amber-600 rounded-lg mr-4">สินค้าทั้งหมด</button>
                                <button class="font-semibold px-6 py-4 rounded-lg border-2 border-white">บริการของเรา</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img :src="'../storage/slide/keeping.jpg'" 
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="mx-auto text-white">
                            <p class="text-center font-extrabold text-5xl my-10">บริการออกแบบ ติตตั้ง </p>
                            <p class="text-white text-center font-extrabold text-5xl my-10"> ซ่อมบำรุงรอกและเครน</p>
                            <div class="flex justify-center">
                                <button class="font-semibold px-6 py-4 bg-amber-600 rounded-lg mr-4">สินค้าทั้งหมด</button>
                                <button class="font-semibold px-6 py-4 rounded-lg border-2 border-white">บริการของเรา</button>
                            </div>
                        </div>
                    </div>
                </div>



                
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img :src="'../storage/slide/crane.jpg'"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="mx-auto text-white">
                            <p class="text-center font-extrabold text-5xl my-10">บริการออกแบบ ติตตั้ง </p>
                            <p class="text-white text-center font-extrabold text-5xl my-10"> ซ่อมบำรุงรอกและเครน</p>
                            <div class="flex justify-center">
                                <button class="font-semibold px-6 py-4 bg-amber-600 rounded-lg mr-4">สินค้าทั้งหมด</button>
                                <button class="font-semibold px-6 py-4 rounded-lg border-2 border-white">บริการของเรา</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img :src="'../storage/slide/prepare.jpg'"  
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="mx-auto text-white">
                            <p class="text-center font-extrabold text-5xl my-10">บริการออกแบบ ติตตั้ง </p>
                            <p class="text-white text-center font-extrabold text-5xl my-10"> ซ่อมบำรุงรอกและเครน</p>
                            <div class="flex justify-center">
                                <button class="font-semibold px-6 py-4 bg-amber-600 rounded-lg mr-4">สินค้าทั้งหมด</button>
                                <button class="font-semibold px-6 py-4 rounded-lg border-2 border-white">บริการของเรา</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img :src="'../storage/slide/product.jpg'"  
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="mx-auto text-white">
                            <p class="text-center font-extrabold text-5xl my-10">บริการออกแบบ ติตตั้ง </p>
                            <p class="text-white text-center font-extrabold text-5xl my-10"> ซ่อมบำรุงรอกและเครน</p>
                            <div class="flex justify-center">
                                <button class="font-semibold px-6 py-4 bg-amber-600 rounded-lg mr-4">สินค้าทั้งหมด</button>
                                <button class="font-semibold px-6 py-4 rounded-lg border-2 border-white">บริการของเรา</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img :src="'../storage/slide/sending_product.jpg'"  
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="mx-auto text-white">
                            <p class="text-center font-extrabold text-5xl my-10">บริการออกแบบ ติตตั้ง </p>
                            <p class="text-white text-center font-extrabold text-5xl my-10"> ซ่อมบำรุงรอกและเครน</p>
                            <div class="flex justify-center">
                                <button class="font-semibold px-6 py-4 bg-amber-600 rounded-lg mr-4">สินค้าทั้งหมด</button>
                                <button class="font-semibold px-6 py-4 rounded-lg border-2 border-white">บริการของเรา</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div> -->

        <div class="container mx-auto">
            <p class="text-center font-semibold text-3xl my-10">เกี่ยวกับเรา</p>
            <p class="text-center px-[10%] font-normal leading-loose">
                บริษัท เค เอส เอ็น เอ็นจิเนียริ่ง จำกัด ได้ก่อตั้งขึ้นในปี พ.ศ. 2537 เพื่อดำเนินธุรกิจ<br>
                ทางด้านการส่งเสริมอุตสาหกรรมของประเทศไทย เป็นตัวแทนจำหน่ายรอกเครน, ลิฟต์<br>
                ขนส่งสินค้าเพื่อตอบสนองความต้องการในโรงงานอุตสาหกรรม ตลอดจนผู้ใช้งานทั่วไป<br>
                บริษัทมุ่งเน้นถึงคุณภาพของการผลิตทุกขั้นตอน คำนึงถึงความปลอดภัยของผู้ใช้<br>
                งานล้วนเลือกคัดสรรแต่สินค้าที่มีคุณภาพเท่านั้นไว้ให้บริการ ด้วยความมุ่งมั่นและพัฒนา อย่างต่อเนื่อง<br>
                จึงทำให้ผลงานเป็นที่ประจักษ์ต่อลูกค้าที่ได้ใช้บริการ ด้วยระยะเวลา รวมถึงประสบการณ์ที่ยาวนาน<br>
                และตั้งอยู่บนฐานของความซื่อสัตย์ พร้อมมิตรไมตรีทางธุรกิจจึงทำให้เราได้รับความไว้วางใจจากลูกค้าเป็นจำนวนมาก
            </p>
            <hr class="my-14 w-[432px] mx-auto border-black border-2 rounded-full">
        </div>

        <p class="ml-[5%] text-4xl font-semibold mb-5">รายการสินค้า</p>

        <div class="contianer mx-auto flex overflow-x-auto w-screen my-10">    
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <div class="container mx-auto">
            <p class="text-center font-semibold text-3xl my-5">บริการของเรา</p>
            <hr class="border-black w-[432px] mx-auto mb-5">

            <div class="flex h-[300px] justify-center items-center space-x-4">
                <img :src="'../storage/image/pen-icon.png'" class="w-[147px] h-[152px]" alt="">
                <div class="w-[25%]">
                    <p class="font-semibold text-center text-lg">ออกแบบ ติดตั้งรอกและเครน</p>
                    <p class="text-center">บริการออกแบบ <br>ให้คำแนะนำสำหรับการติดตั้งรอกและ เครนในอุตสาหกรรมทุกประเภทโดยผู้เชี่ยวชาญ</p>
                </div>
                <img :src="'../storage/image/repair-icon.png'" class="w-[147px] h-[152px]" alt="">
                <div class="w-[25%]">
                    <p class="font-semibold text-center text-lg">บริการซ่อม</p>
                    <p class="text-center">บริการซ่อมรอกโดยทีมงานผู้เชี่ยวชาญ และพร้อมให้บริการในกรณีซ่อมด่วน</p>
                </div>
            </div>
            <hr class="border-black my-10">
                <div class="flex justify-center">
                    <img :src="'../storage/image/list-icon.png'" alt="" class="w-[202px] h-[202px]">
                    <div class="flex-col w-[25%] justify-center">
                        <p class="text-center font-semibold">บริการตรวจเช็ค</p>
                        <p class="text-center">บริการตรวจเช็ครอกและเครนประจำปี รายงานการตรวจเช็คและให้คำแนะนำในการบำรุงรักษาเพื่อให้มีความปลอดภัย จากการใช้งาน</p>
                    </div>
                </div>
            <hr class="border-black my-10">
            
            <div class="grid grid-cols-2">
                <div>
                    <p class="text-center font-semibold">ผลงานการติดตั้ง</p>
                    <p>asidfjaisdvapnsibgnp</p>
                </div>
                
                <img :src="'../storage/slide/crane.jpg'" alt="">
            </div>
            <button class="text-black font-semibold rounded-lg border-4 border-black p-5 mr-5">ผลงานเพิ่มเติม</button>
            <button class="text-white font-semibold rounded-lg bg-[#03045E] p-6">ข้อมูลเพิ่มเติม</button>
        </div>
    </Layout>
        

</template>

<style>

</style>
