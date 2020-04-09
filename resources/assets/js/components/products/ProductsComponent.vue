<template lang="html">
    <div class="row">
        <product-card-component v-bind:product="product" v-for="product in products"></product-card-component>
    </div>
</template>

<script>
    export default {
        data(){
            return { 
                name: 'Products Component',
                products: [
                    {title: 'Curso Ruby', price: 200, description: 'Un buen curso'},
                    {title: 'Curso Laravel', price: 300, description: 'Un buen curso laravel'}
                ]
            }
        }
};
</script>
