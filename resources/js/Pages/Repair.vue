<script>
import axios from 'axios';


export default {
    data() {
        return {
            products: []
        };
    },
    methods: {
        // เรียก API เพื่อดึงข้อมูล
        getProducts() {
            axios.get('/api/repair').then((response) => {
                this.products = response.data;
                console.log(response.data);
            });
        }
    },
    mounted() {
        this.getProducts();
    }
};


</script>
<template>


<div >
    <h1>
        Report Repair
    </h1>
    <div v-for="product in products" :key="product.id" class="bg-blue-400">
        <h3>{{ product.id }} || Name: {{ product.name }} || price: {{ product.price }}</h3>
    </div>

</div>

</template>
