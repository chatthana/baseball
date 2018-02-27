<template>
  <div class="product-container clearfix">
    <div class="product-image">
      <img src="https://raw.githubusercontent.com/chatthana/baseballapp/master/public/images/Bestball-Bat.png" alt="" />
    </div>
    <div class="details">
      <div class="specification">
        <p class="title">SERIES :</p>
        <p class="value">{{product.name}}</p>
      </div>
      <div class="specification">
        <p class="title">น้ำหนัก :</p>
        <p class="value">12 Kg.</p>
      </div>
      <div class="specification">
        <p class="title">วัสดุ :</p>
        <p class="value">สแตนเลส</p>
      </div>
      <div class="specification">
        <p class="title">สี :</p>
        <p class="value">ดำเมททัลลิก</p>
      </div>
      <div class="specification">
        <p class="title">ราคา :</p>
        <p class="value">{{product.price}} บาท</p>
      </div>
      <a href="#" v-on:click="getProduct(product.id)" class="button red rounded">Add to cart</a>
    </div>
  </div>
</template>

<style lang="scss" scoped>
  .product-container {
    position: relative;
    width:100%;
    max-width:425px;
    background-color: #fff;
    opacity: 0.95;
    color: #000;
    border-radius: 8px;
    padding: 30px 0;
    margin:10px 0;
  }

  .product-container .product-image {
    position: relative;
    float: left;
    padding: 10px;
    width: 50%;
    @media screen and (max-width:479px) {
      float:none;
      width:100%;
    }
  }

  .product-container .product-image img {
    max-width: 100%;
  }

  .product-container .details {
    position: relative;
    float: left;
    width: 50%;
    padding: 10px;
    @media screen and (max-width: 479px) {
      float:none;
      width:100%;
      text-align:center;
    }
  }

  .product-container .details .specification {
    position: relative;
    margin: 10px 0;
    @media screen and (max-width: 479px) {
      text-align:center;
    }
  }

  .product-container .details .specification p {
    margin: 5px 0;
  }

  .product-container .details .specification .title {
    color: #515151;
  }

  .product-container .details .specification .value {
    color: #979797;
  }
</style>

<script>
  export default {

      created() {
        console.log(this.item);
      },

      mounted() {
        console.log('===== Product component mounted =====');
      },

      props: ['item'],

      data() {
        return {
          product: this.item
        }
      },

      methods: {
        getProduct(product_id) {
          console.log(product_id);
        }
      }
  }
</script>
