<template>
  <div class="canidelo-help bottom-0 position-fixed shadow">
    <div
      class="
        canidelo-help__header
        d-flex
        align-items-center
        justify-content-center
        fs-5
        fw-semibold
        text-white
      "
      @click="showChat = !showChat"
    >
      <i class="iconify fs-3 me-3" data-icon="mdi-email-outline"></i>
      Apoio Farmacêutico
    </div>

    <form
      v-if="!inConversation && showChat"
      class="bg-white p-3"
      @submit.prevent="initChat"
    >
      <input
        type="text"
        class="form-control border-0 shadow-none mb-3"
        placeholder="Preencha seu nome"
        v-model="name"
        required
      />
      <input
        type="email"
        class="form-control border-0 shadow-none mb-3"
        placeholder="Preencha seu e-mail"
        required
      />

      <button class="btn text-white w-100">Iniciar atendimento</button>
    </form>

    <div v-if="inConversation && showChat" class="bg-white p-3">
      <div class="canidelo-help__transcript d-flex flex-column overflow-auto">
        <div v-for="(data, index) in transcript" :key="index" class="mb-2">
          <small
            class="d-flex fw-semibold mb-1"
            :class="{ 'justify-content-end': data.type === 'user' }"
          >
            {{ data.name }}:
          </small>
          <span
            class="canidelo-help__transcript-message px-2 py-1"
            :class="{
              'canidelo-help__transcript-message--orange': data.type === 'user',
              'float-start': data.type !== 'user',
              'float-end': data.type === 'user',
            }"
          >
            {{ data.message }}
          </span>
        </div>
      </div>

      <div class="input-group">
        <input
          type="text"
          class="form-control border-0 shadow-none"
          placeholder="Escreva sua mensagem"
          v-model="message"
        />
        <button class="btn text-white" @click="fakeAlert()">
          <i class="iconify" data-icon="mdi-send-outline"></i>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "canidelo-help",

  data() {
    return {
      showChat: false,
      inConversation: false,
      name: "",
      message: "",
      transcript: [],
    };
  },

  created() {
    setTimeout(() => {
      if (!this.showChat) {
        this.showChat = true;
      }
    }, 10000);
  },

  methods: {
    async initChat() {
      this.inConversation = true;

      this.transcript.push({
        name: "Farma Bot",
        type: "bot",
        message: `Bem vindo ${this.name}!`,
      });

      this.transcript.push({
        name: this.name,
        type: "user",
        message: "Gostaria da ajuda de um farmacêutico.",
      });

      await this.writing(3000).finally(() => {
        this.transcript.splice(-1);
        this.transcript.push({
          name: "Farma Bot",
          type: "bot",
          message:
            "Aguarde, um de nossos farmacêuticos já irá lhe atender. Posição na fila: 10.",
        });
      });
    },

    writing(time) {
      return new Promise((resolve) => {
        this.transcript.push({
          name: "Farma Bot",
          type: "bot",
          message: "...",
        });
        setTimeout(() => {
          resolve();
        }, time);
      });
    },

    fakeAlert() {
      this.message = "";
      alert("Chat fake não funcional.");
    },
  },
};
</script>

<style lang="scss" scoped>
.canidelo-help {
  right: 50px;
  width: 288px;
  z-index: 10;

  &__header {
    background: #eb741d;
    height: 58px;
    border-radius: 5px 5px 0 0;
    cursor: pointer;
  }

  .btn {
    background-color: #eb741d;
    border-color: #eb741d;
  }

  &__transcript {
    height: 300px;

    &::-webkit-scrollbar {
      display: none;
    }

    &-message {
      width: max-content;
      border-radius: 5px;
      max-width: 100%;
      background-color: #ededed;

      &--orange {
        background-color: #eb741d;
        color: #fff;
      }
    }
  }

  input::placeholder,
  textarea::placeholder {
    color: #212529 !important;
  }
}
</style>