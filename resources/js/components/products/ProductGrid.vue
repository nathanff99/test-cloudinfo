<template>
  <article class="product-grid bg-white">
    <div
      v-if="product.discount > 0"
      class="product-grid__discount bg-primary text-center text-white"
    >
      {{ product.discount }}%
    </div>

    <div class="product-grid__favorite" @click="isFavorite = !isFavorite">
      <i class="iconify" data-icon="mdi-heart-outline"></i>
    </div>

    <img
      class="product-grid__image"
      :src="product.img_src"
      :alt="product.title"
    />

    <div class="product-grid__details text-center">
      <h5 class="product-grid__details-title">
        {{ product.title }}
      </h5>

      <span class="product-grid__details-price">
        <small
          v-if="product.discount > 0"
          class="product-grid__details-price--through"
        >
          {{ formatPrice(product.price) }}€
        </small>
        {{
          formatPrice(product.price - (product.price * product.discount) / 100)
        }}€
      </span>

      <span
        class="product-grid__details-stock d-block"
        :class="{ 'product-grid__details-stock--red': product.stock === 0 }"
      >
        {{ product.stock > 0 ? "Disponível" : "Indisponível" }}
      </span>

      <button
        class="
          product-grid__details-button
          btn btn-primary
          text-white
          w-100
          mt-2
        "
        :class="{ 'product-grid__details-button--orange': product.stock === 0 }"
      >
        {{ product.stock > 0 ? "Comprar" : "Reservar" }}
      </button>
    </div>
  </article>
</template>

<script>
export default {
  name: "product-grid",

  props: {
    product: {
      type: Object,
      required: true,
    },
  },

  data() {
    return {
      isFavorite: false,
    };
  },

  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(2);
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
  },
};
</script>

<style lang="scss" scoped>
.product-grid {
  height: 455px;
  border-radius: 18px;
  padding: 16px;
  position: relative;

  &__discount {
    position: absolute;
    top: 16px;
    left: 16px;
    border-radius: 50%;
    font-weight: 600;
    width: 52px;
    height: 52px;
    font-size: 17px;
    line-height: 52px;
  }

  &__favorite {
    position: absolute;
    top: 16px;
    right: 16px;
    font-weight: 600;
    font-size: 30px;
    color: #eb741d;
  }

  &__image {
    width: 100%;
    object-fit: contain;
    max-height: 270px;
    margin: 5px 0 25px;
  }

  &__details {
    &-title {
      font-size: 12px;
      text-transform: uppercase;
      max-width: 200px;
      margin: 0 auto;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
    }

    &-price {
      position: relative;
      color: #eb741d;
      font-size: 20px;
      font-weight: 500;

      &--through {
        position: absolute;
        left: -64px;
        bottom: 2px;
        font-size: 70%;
        font-weight: 500;
        color: #8b8b8b;
        text-decoration: line-through;
        text-decoration-color: #eb741d;
      }
    }

    &-stock {
      color: var(--bs-primary);
      font-weight: 500;
      font-size: 13px;

      &--red {
        color: #ff1010;
      }
    }

    &-button {
      max-width: 200px;
      height: 32px;
      padding: 0;
      font-weight: 200;
      border-radius: 10px;

      &--orange {
        background-color: #eb741d;
        border-color: #eb741d;
      }
    }
  }
}
</style>