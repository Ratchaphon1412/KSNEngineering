<script setup>
import { Head } from '@inertiajs/vue3';
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
        
        <section class="w-screen ">
            <div class="relative">
                <div class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth rounded-lg " id="slider" style="-ms-overflow-style: none; scrollbar-width: none;">
                    <img class="snap-start object-cover" :src="'../storage/slide/keeping.jpg'" style="flex: 1 0 100%;" id="slide1">
                    <img class="snap-start object-cover" :src="'../storage/slide/prepare.jpg'" style="flex: 1 0 100%;" id="slide2">
                    <img class="snap-start object-cover" :src="'../storage/slide/product.jpg'" style="flex: 1 0 100%;" id="slide3">
                    <img class="snap-start object-cover" :src="'../storage/slide/crane.jpg'" style="flex: 1 0 100%;" id="slide4">
                    <img class="snap-start object-cover" :src="'../storage/slide/sending_product.jpg'" style="flex: 1 0 100%;" id="slide5">
                </div>

                <div class="flex flex-col gap-1 absolute top-1/4 inset-y-0 right-0 mr-10 z-10 -translate-x-1/2">
                    <a class="w-5 h-5 border rounded-full transition ease-in-out delay-100 bg-yellow-500 hover:bg-white duration-300" href="#slide1"></a>
                    <a class="w-5 h-5 border rounded-full transition ease-in-out delay-100 bg-yellow-500 hover:bg-white duration-300" href="#slide2"></a>
                    <a class="w-5 h-5 border rounded-full transition ease-in-out delay-100 bg-yellow-500 hover:bg-white duration-300" href="#slide3"></a>
                    <a class="w-5 h-5 border rounded-full transition ease-in-out delay-100 bg-yellow-500 hover:bg-white duration-300" href="#slide4"></a>
                    <a class="w-5 h-5 border rounded-full transition ease-in-out delay-100 bg-yellow-500 hover:bg-white duration-300" href="#slide5"></a>
                </div>
            </div>

        </section>
       

        <section class="container mx-auto">
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
        </section>

        <p class="ml-[5%] text-4xl font-semibold mb-5">รายการสินค้า</p>

        <section class="contianer mx-auto flex overflow-x-auto w-screen my-10">    
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
                    <img class="rounded-t-lg" src="" alt="" />
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

        </section>

        <section class="container mx-auto">
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
        </section>
    </Layout>
        

</template>

<style scoped>
#slider::-webkit-scrollbar{
  display: none;
}
</style>