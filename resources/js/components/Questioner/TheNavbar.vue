<template>
  <div>
    <header id="header" class="sticky-top">
      <div class="nav-bar">
        <div class="d-flex justify-content-between nav-inner">
          <router-link to="/questioner">
            <img
              :src="'/assets/logo/KormeeLeft.gif'"
              :alt="'Logo'"
              class="logo"
            />
            <img
              :src="'/assets/logo/KormeeTop.gif'"
              :alt="'Logo'"
              class="logo"
            />
          </router-link>
          <div class="users mt-3 mr-2">
            <span class="text-white mr-2">{{ getUser.name }}</span>
            <button @click.prevent="logout()" class="btn btn-sm btn-danger">
              <i class="fas fa-sign-out-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: "HR & Payroll Policy Capture System",
      user: {},
    };
  },
  methods: {
    logout() {
      axios.post("/logout").then((response) => {
        this.$router.push({ name: "Login" });
      });
    },
  },
  computed: {
      getUser(){
        return this.user = this.$store.getters.getUser;
      }
  }
};
</script>
<style scoped>
.nav-bar {
  background-color: #fff;
  height: 100px;
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px !important;
}
.nav-inner {
  background-color: #f26721 !important;
  height: 60px;
  border-top: 1px solid #fff;
}
.logo {
  min-height: 50px;
  max-height: 95px;
  float: left;
  margin-top: -1px;
}
.logo2 {
  width: 25px;
}
</style>
