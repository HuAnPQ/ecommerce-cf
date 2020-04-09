<template lang="html">
    <materia-transition-group tag="div" class="row">
        <product-card-component v-bind:product="product" v-for="(product, index) in products" v-bind:key="product.id" :data-index="index"></product-card-component>
    </materia-transition-group>
</template>

<script>
    export default {
        data(){
            return { 
                name: 'Products Component',
                products: [],
                endpoint: '/productos'
            }
        },
        created(){
            this.fetchProducts();
        },
        methods: {
            fetchProducts(){
                axios.get(this.endpoint).then((response) => {
                    console.log(response.data.data);
                    this.products = response.data.data;
                });
            }
        }
};
</script>
