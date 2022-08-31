<template>
  <div class="canidelo-carousel">
    <div
      v-if="customArrow"
      class="canidelo-carousel__arrow canidelo-carousel__arrow--left"
      :class="{ 'canidelo-carousel__arrow--light': arrowLight }"
      @click="showPrev"
    >
      <i class="iconify" data-icon="mdi-chevron-left"></i>
    </div>

    <VueSlickCarousel :ref="customRef" v-bind="options">
      <slot />
    </VueSlickCarousel>

    <div
      v-if="customArrow"
      class="canidelo-carousel__arrow canidelo-carousel__arrow--right"
      :class="{ 'canidelo-carousel__arrow--light': arrowLight }"
      @click="showNext"
    >
      <i class="iconify" data-icon="mdi-chevron-right"></i>
    </div>
  </div>
</template>

<script>
import VueSlickCarousel from "vue-slick-carousel";
import "vue-slick-carousel/dist/vue-slick-carousel.css";
import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";

export default {
  name: "canidelo-carousel",

  components: {
    VueSlickCarousel,
  },

  props: {
    customRef: {
      type: String,
      required: true,
    },
    customArrow: {
      type: Boolean,
      default: true,
    },
    arrowLight: {
      type: Boolean,
      default: false,
    },
    options: {
      type: Object,
      required: true,
    },
  },

  methods: {
    showPrev() {
      this.$refs[this.customRef].prev();
    },

    showNext() {
      this.$refs[this.customRef].next();
    },
  },
};
</script>

<style lang="scss" scoped>
.canidelo-carousel {
  &__arrow {
    display: none;

    @media (min-width: 992px) {
      display: block;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      width: 35px;
      height: 35px;
      font-size: 35px;
      line-height: 35px;
      background: #f0f0f0;
      color: var(--bs-primary);
      border-radius: 50%;
      cursor: pointer;

      &--left {
        left: -50px;
      }

      &--right {
        right: -50px;
      }

      &--light {
        background: #fff;
      }
    }
  }
}
</style>

<style lang="scss">
.canidelo-carousel {
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
}
</style>