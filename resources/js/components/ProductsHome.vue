<template>
  <section class="products-home canidelo-container px-lg-9 mb-5">
    <h2 class="text-center text-uppercase fw-semibold text-primary mb-2">
      {{ title }}
    </h2>
    <p v-if="subtitle" class="text-center">
      {{ subtitle }}
    </p>

    <div class="position-relative px-3 mt-4">
      <canidelo-carousel
        v-if="products.length"
        :custom-ref="`carousel${section}`"
        :options="carouselOptions"
        arrow-light
      >
        <ProductGrid
          v-for="product in products"
          :key="product.id"
          :product="product"
        />
      </canidelo-carousel>
    </div>
  </section>
</template>

<script>
import ProductGrid from "./products/ProductGrid.vue";
import CanideloCarousel from "./core/CanideloCarousel.vue";

export default {
  name: "products-home",

  components: {
    ProductGrid,
    CanideloCarousel,
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
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 1,
        initialSlide: 0,
        responsive: [
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 4,
            },
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              initialSlide: 1,
              dots: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              initialSlide: 1,
              dots: true,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
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
  },
};
</script>

<style lang="scss" scoped>
</style>