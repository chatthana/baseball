<template lang="html">
  <div class="product-slider clearfix">
    <div class="card" v-for="product in products">
      <product-component :item="product"></product-component>
    </div>
  </div>
</template>

<script>

import ProductComponent from './ProductComponent';

export default {
  components: {
    productComponent: ProductComponent
  },

  created() {
    axios.get('/api/v1/products').then(({data}) => {
      this.products = data;
    });
  },

  mounted() {
    console.log('===== Slider mounted =====');
  },

  data () {
    return {
      products: this.products
    };
  }

}
</script>

<style lang="scss" scoped>
  .product-slider {
    > .card {
      float:left;
      margin:0 10px;
      // width:200px;
    }
  }
</style>
