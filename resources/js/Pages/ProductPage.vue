<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Layout from '@/Layouts/Layout.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

</script>

<template>
    <Layout :can-login="canLogin" :can-register="canRegister">
            <!--Head-->
            <div class="bg-red-400">
                <div class="grid grid-cols-12 gap-x-12 ">
                    <div class="col-start-6 col-span-2">
                        <h3 class="flex justify-center text-4xl py-4">
                            สินค้าของเรา
                        </h3>
                    </div>
                    <div class="col-start-4 col-span-6">
                        <p class="flex justify-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, repellendus voluptatem consequuntur quos aperiam, obcaecati iure commodi quam aliquam quasi ex ea eveniet maiores eaque molestias eos. Pariatur, totam eligendi.
                        </p>
                    </div>
                </div>
        
                <div class="flex justify-center">
                    <div class="">
                        <a href="" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                            รายละเอียด
                        </a>
                    </div>
                    <div class="">
                        <a href="" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                            รายละเอียด
                        </a>
                    </div>
                </div>
                <div>&nbsp</div>
            </div>
        
        
        
            <div class="grid grid-cols-12 pt-16 pb-8">
                <div class="rounded-lg bg-slate-800 text-cyan-50 p-5 col-start-2 col-span-10 text-xl">
                    รอก
                </div>
            </div>
        
            <div class="flex flex-row mx-52 space-x-20">
                <!--Card-->
                <div class="">
        
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="	https://siamkito.co.th/wp-content/uploads/2022/10/ER2-series.webp" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        
                <!--Card-->
                <div class="">
        
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="	https://siamkito.co.th/wp-content/uploads/2022/10/ER2-series.webp" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        
                <!--Card-->
                <div class="">
        
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="	https://siamkito.co.th/wp-content/uploads/2022/10/ER2-series.webp" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        
        
                
        
        
        
            </div>
        <!--
        <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="https://siamkito.co.th/wp-content/uploads/2022/10/ER2-series.webp" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
            <button class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Buy Now</button>
            </div>
        </div>
        </div>
        -->
    </Layout>
</template>

