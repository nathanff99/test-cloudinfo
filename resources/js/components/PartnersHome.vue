<template>
  <div class="partners-home bg-white pb-8 pt-6">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div
          v-for="partner in partners"
          :key="partner.id"
          class="col-6 col-md-4 col-lg-3 col-xxl-2 px-5 mb-6 mb-lg-0"
        >
          <img class="img-fluid" :src="partner.img_src" :alt="partner.name" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "partners-home",

  props: {
    partners: {
      type: Array,
      default: () => [],
    },
  },
};
</script>

<style>
</style>