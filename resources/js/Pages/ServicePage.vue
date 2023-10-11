<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AppLayout from '@/Layouts/AppLayout.vue';

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
    <AppLayout title="Home">
        <div id="default-carousel" class="relative w-full p-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-72 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://siamkito.co.th/wp-content/uploads/2022/11/crane-slider-2.webp" class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                
                    <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://siamkito.co.th/wp-content/uploads/2022/11/crane-slider-2.webp" class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://siamkito.co.th/wp-content/uploads/2022/11/crane-slider-3.webp" class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://siamkito.co.th/wp-content/uploads/2022/11/crane-slider-1.webp" class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6"
                        data-carousel-slide-to="5"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="w-full justify-center items-center flex py-10 flex-col">
                <div class="bg-gray-400 w-full flex justify-center">
                    <div>
                        <p class="text-3xl my-5 font-semibold text-gray-900 dark:text-white">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="w-2/3 bg-gray-200 rounded-xl p-3 m-5">
                    <p class="text-lg my-5 font-semibold text-gray-900 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus itaque eum voluptate soluta cum doloremque iusto, possimus expedita, dolorum, quaerat eaque ullam? Aperiam at explicabo eveniet esse inventore enim architecto?</p>
                </div>
                        
            </div>


            <div class="flex flex-col justify-center items-center">
                <div class="w-full flex-row flex">
                    <div class="w-1/2 m-10">
                        <p class="text-2xl p-2 bg-gray-400 rounded-2xl text-gray-900 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, voluptates?</p>
                        <p class="text-3xl my-5 font-semibold text-gray-900 dark:text-white">Lorem ipsum dolor sit amet.</p>
                        <p class="text-lg text-gray-900 dark:text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed quos cum iusto similique, nobis minus voluptatum illum vel blanditiis sint provident perspiciatis quae numquam! Laudantium dolor accusamus quisquam non labore.</p>
                        <div class="col-span-6 col-start-6 mt-6 ">
                            <a href="" class="m-4 rounded-r-lg group relative px-8 py-1 overflow-hidden bg-white text-xl shadow my-6">
                                <div class="absolute inset-0 w-3 bg-lime-600 transition-all duration-[250ms] ease-out group-hover:w-full rounded-r-lg"></div>
                                    <span class="relative text-black group-hover:text-white ">View</span>
                            </a>
                            <a href="" class="m-4 rounded-r-lg group relative px-8 py-1 overflow-hidden bg-white text-xl shadow my-6">
                                <div class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full rounded-r-lg"></div>
                                    <span class="relative text-black group-hover:text-white ">View</span>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 m-10 flex justify-center">
                        <img class="h-auto object-cover max-w-lg rounded-lg" src="https://media.discordapp.net/attachments/474941945882476546/1080548697336725524/image.png?width=847&height=564" alt="image description">
                    </div>
                </div>
                <div class="w-full flex-row flex">
                    <div class="w-1/2 m-10 flex justify-center">
                        <img class="h-auto object-cover max-w-lg rounded-lg" src="https://media.discordapp.net/attachments/474941945882476546/1080548697336725524/image.png?width=847&height=564" alt="image description">    
                    </div>
                    <div class="w-1/2 m-10">
                        <p class="text-2xl p-2 bg-gray-400 rounded-2xl text-gray-900 dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, voluptates?</p>
                        <p class="text-3xl my-5 font-semibold text-gray-900 dark:text-white">Lorem ipsum dolor sit amet.</p>
                        <p class="text-lg text-gray-900 dark:text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed quos cum iusto similique, nobis minus voluptatum illum vel blanditiis sint provident perspiciatis quae numquam! Laudantium dolor accusamus quisquam non labore.</p>
                        <div class="col-span-6 col-start-6 mt-6 ">
                            <a href="" class="m-4 rounded-r-lg group relative px-8 py-1 overflow-hidden bg-white text-xl shadow my-6">
                                <div class="absolute inset-0 w-3 bg-lime-600 transition-all duration-[250ms] ease-out group-hover:w-full rounded-r-lg"></div>
                                    <span class="relative text-black group-hover:text-white ">View</span>
                            </a>
                            <a href="" class="m-4 rounded-r-lg group relative px-8 py-1 overflow-hidden bg-white text-xl shadow my-6">
                                <div class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full rounded-r-lg"></div>
                                    <span class="relative text-black group-hover:text-white ">View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </AppLayout>
</template>