<template>
  <section
    id="carouselBannerHome"
    data-bs-ride="carousel"
    class="banner-full-width carousel slide"
  >
    <VueSlickCarousel v-bind="carouselOptions">
      <div v-for="banner in banners" :key="banner.id">
        <img :src="banner.src" class="d-block w-100" :alt="banner.title" />
      </div>
    </VueSlickCarousel>
  </section>
</template>

<script>
import VueSlickCarousel from "vue-slick-carousel";
import "vue-slick-carousel/dist/vue-slick-carousel.css";
import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";

export default {
  name: "banner-full-width",

  components: {
    VueSlickCarousel,
  },

  props: {
    banners: {
      type: Array,
      required: true,
    },
  },

  data() {
    return {
      carouselOptions: {
        dots: true,
        arrows: false,
        infinite: true,
        fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        initialSlide: 0,
      },
    };
  },
};
</script>

<style lang="scss" scoped>
.banner-full-width {
  margin-top: 176px;

  @media (min-width: 532px) {
    margin-top: 155px;
  }
}
</style>

<style lang="scss">
.banner-full-width {
  .slick-dots {
    bottom: 10px;

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
}
</style>