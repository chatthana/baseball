<template lang="html">
  <div class="product-slider clearfix">
    <slick ref="slick" :options="sliderOptions">
        <product-component v-for="product in products" :key="product.id" :item="product"></product-component>
    </slick>
  </div>
</template>

<script>
// import '~slick-carousel/slick/slick.css';
import Slick from 'vue-slick';
import ProductComponent from './ProductComponent';

export default {
  components: {
    ProductComponent,
    Slick
  },  

  created() {
    axios.get('/api/v1/products').then(({data}) => {
      this.products = data;
      this.reInit();
    });
  },

  mounted() {
  
  },

  data () {
    return {
      sliderOptions: {
        slidesToShow: 3,
        centerMode: true
      },
      products: this.products
    };
  },

  methods: {
    hyperloop: () => {
      console.log('Hyperloop');
    },

    next() {
      this.$refs.slick.next();
    },

    prev() {
      this.$refs.slick.prev();
    },

    reInit() {
      console.log("REINITIALIZED");
      let currentSlide = this.$refs.slick.currentSlide();
      this.$refs.slick.destroy();
      this.$nextTick(() => {
        this.$refs.slick.create();
        this.$refs.slick.goTo(currentSlide, true);
      });
    },
  }

}
</script>

<style lang="scss">

  @import "~slick-carousel/slick/slick.css";
  @import "~slick-carousel/slick/slick-theme.css";

  .product-slider {
    > .card {
      float:left;
      margin:0 10px;
    }
    .new-card {
      position:relative;
      background-color: #fff;
      color:#000;
      padding:50px 0;
    }
  }

  .slick-slide {
    margin: 0 27px !important;
    opacity: 0.75;
    &.slick-center {
      opacity: 1;
    }
  }
  
</style>
