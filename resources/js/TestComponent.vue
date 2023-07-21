<template>
  <div>
    <h2>Test Component</h2>
    <p>Este é um exemplo de componente Vue.js com Laravel Mix.</p>
    <button @click="showMessage">Clique para mostrar o alerta</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: "Olá, este é um componente Vue simples!",
    };
  },
  methods: {
    showMessage() {
      alert(this.message);
    },
  },
};
</script>

<style>
h2 {
  color: blue;
}

p {
  font-size: 16px;
}
</style>
