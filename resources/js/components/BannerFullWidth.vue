<template>
  <section class="banner-full-width">
    <canidelo-carousel
      v-if="banners.length"
      custom-ref="carouselBanners"
      :custom-arrows="false"
      :options="carouselOptions"
    >
      <div v-for="banner in banners" :key="banner.id">
        <img :src="banner.img_src" class="d-block w-100" :alt="banner.title" />
      </div>
    </canidelo-carousel>
  </section>
</template>

<script>
import CanideloCarousel from "./core/CanideloCarousel.vue";

export default {
  name: "banner-full-width",

  components: {
    CanideloCarousel,
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
  .slick-slide {
    padding: 0;
  }

  .slick-dots {
    bottom: 10px;
  }
}
</style>