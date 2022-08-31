<template>
  <div class="bg-white py-5">
    <section class="blog-home canidelo-container px-lg-9">
      <h2 class="text-center text-uppercase fw-semibold text-primary mb-2">
        Blog
      </h2>

      <div class="position-relative px-3 mt-4">
        <canidelo-carousel
          v-if="posts.length"
          custom-ref="carouselPosts"
          :options="carouselOptions"
        >
          <PostGrid v-for="post in posts" :key="post.id" :post="post" />
        </canidelo-carousel>
      </div>
    </section>
  </div>
</template>

<script>
import PostGrid from "./blog/PostGrid.vue";
import CanideloCarousel from "./core/CanideloCarousel.vue";

export default {
  name: "blog-home",

  components: {
    PostGrid,
    CanideloCarousel,
  },

  data() {
    return {
      carouselOptions: {
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        initialSlide: 0,
        responsive: [
          {
            breakpoint: 1500,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              initialSlide: 1,
              dots: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
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
    posts() {
      return this.$store.getters[`blog/posts`];
    },
  },

  created() {
    this.loadPosts();
  },

  methods: {
    loadPosts() {
      this.$store.dispatch("blog/getPosts");
    },
  },
};
</script>

<style lang="scss" scoped>
</style>