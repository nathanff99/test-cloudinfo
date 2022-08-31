<template>
  <section class="products-home canidelo-container">
    <h2 class="products-home__title text-center text-primary">{{ title }}</h2>
    <p v-if="subtitle" class="products-home__subtitle text-center">
      {{ subtitle }}
    </p>

    <div class="products-home__carousel">
      <div
        class="
          products-home__carousel-arrow products-home__carousel-arrow--left
        "
        @click="showPrev"
      >
        <i class="iconify" data-icon="mdi-chevron-left"></i>
      </div>

      <VueSlickCarousel
        v-if="products.length"
        :ref="`carousel${section}`"
        v-bind="carouselOptions"
      >
        <ProductGrid
          v-for="product in products"
          :key="product.id"
          :product="product"
        />
      </VueSlickCarousel>

      <div
        class="
          products-home__carousel-arrow products-home__carousel-arrow--right
        "
        @click="showNext"
      >
        <i class="iconify" data-icon="mdi-chevron-right"></i>
      </div>
    </div>
  </section>
</template>

<script>
import VueSlickCarousel from "vue-slick-carousel";
import "vue-slick-carousel/dist/vue-slick-carousel.css";
import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";

import ProductGrid from "./products/ProductGrid.vue";

export default {
  name: "products-home",

  components: {
    VueSlickCarousel,
    ProductGrid,
  },

  props: {
    section: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
    subtitle: {
      type: String,
      default: "",
    },
  },

  data() {
    return {
      carouselOptions: {
        dots: false,
        arrows: false,
        infinite: false,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 5,
        initialSlide: 0,
        responsive: [
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              initialSlide: 1,
              dots: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              initialSlide: 1,
              dots: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
            },
          },
        ],
      },
    };
  },

  computed: {
    products() {
      return this.$store.getters[`products/${this.section}`];
    },
  },

  created() {
    this.loadProducts();
  },

  methods: {
    loadProducts() {
      this.$store.dispatch("products/get", this.section);
    },

    showPrev() {
      this.$refs[`carousel${this.section}`].prev();
    },

    showNext() {
      this.$refs[`carousel${this.section}`].next();
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../sass/components/productsHome.scss";
</style>

<style lang="scss">
.slick-slide {
  padding: 0 9px;
}

.slick-dots {
  bottom: -35px;

  li {
    button {
      &:before {
        font-size: 10px;
      }
    }
    &.slick-active {
      button {
        &:before {
          font-size: 15px;
        }
      }
    }
  }
}
</style>