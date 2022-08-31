<template>
  <div class="post-grid">
    <img class="post-grid__image w-100" :src="post.img_src" :alt="post.title" />

    <div class="p-4">
      <div class="d-flex justify-content-between mb-2">
        <span class="text-primary text-uppercase fw-semibold">
          {{ post.category }}
        </span>
        <span class="post-grid__date fw-semibold">{{ post.date }}</span>
      </div>

      <h5 class="fs-2 fw-bolder mb-0">{{ post.title }}</h5>
      <p class="fs-4 fw-light mb-0">{{ post.subtitle }}</p>

      <p class="post-grid__description fw-semibold mt-3">
        {{ post.description }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "post-grid",

  props: {
    post: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
// @import "../../../sass/components/postGrid.scss";

.post-grid {
  position: relative;
  height: 535px;
  border-radius: 8px;
  background-color: #f0f0f0;

  &__image {
    object-fit: cover;
    height: 235px;
    border-radius: 8px 8px 0 0;
  }

  &__date {
    color: #919191;
    font-size: 12px;
  }

  &__description {
    color: #7b8591;
    font-size: 0.86rem;
  }
}
</style>