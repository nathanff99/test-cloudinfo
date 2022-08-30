<template>
  <section
    id="carouselBannerHome"
    data-bs-ride="carousel"
    class="banner-full-width carousel slide"
  >
    <div class="carousel-inner">
      <div
        v-for="(banner, index) in banners"
        :key="banner.id"
        class="carousel-item"
        :class="{ active: index === 0 }"
      >
        <img :src="banner.src" class="d-block w-100" :alt="banner.title" />
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "banner-full-width",

  props: {
    // { id, title, src }
    banners: {
      type: Array,
      required: true,
    },
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