<template>
  <div>
    <h1>Dashboard</h1>
    <button @click.prevent="logout()">Log Out</button>
  </div>
</template>

<script>
export default {
  data() {},
  methods: {
    logout() {
      axios.post("/logout").then((response) => {
        this.$router.push({ name: "Login" });
      });
    },
  },
};
</script>
