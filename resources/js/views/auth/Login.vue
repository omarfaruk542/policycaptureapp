<template>
  <div class="root">
    <div class="content">
      <form action="#" @submit.prevent="login" method="POST">
        <AlertError :form="form" />
        <div class="card">
          <div class="card-header d-flex justify-content-between p-2">
            <img :src="'/assets/logo/kormeebee3.png'" :alt="'Logo'" />
            <span class="title">KORMEE</span>
            <span></span>
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="col-12">
                <label class="sr-only" for="inputusername">Username</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-user"></i>
                    </div>
                  </div>
                  <input
                    type="email"
                    class="form-control"
                    id="inputusername"
                    placeholder="Enter email address"
                    name="email"
                    v-model="form.email"
                  />
                  <HasError :form="form" field="email" />
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-12">
                <label class="sr-only" for="inputpassword">Password</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </div>
                  </div>
                  <input
                    type="password"
                    class="form-control"
                    id="inputpassword"
                    placeholder="Enter password"
                    name="password"
                    v-model="form.password"
                  />
                  <HasError :form="form" field="password" />
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer py-2 px-4">
            <Button :form="form" class="btn btn-primary float-right btn-login">
              Log In
            </Button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Form from "vform";
import {
  Button,
  HasError,
  AlertError,
  AlertErrors,
  AlertSuccess,
} from "vform/src/components/bootstrap4";

export default {
  components: {
    Button,
    HasError,
    AlertError,
    AlertErrors,
    AlertSuccess,
  },
  data() {
    return {
      form: new Form({
        email: "",
        password: "",
      }),
      errors: {
        email: "",
        password: "",
      },
      date: new Date().toLocaleDateString(),
    };
  },
  methods: {
    login() {
      axios
        .get("http://127.0.0.1:8000/sanctum/csrf-cookie")
        .then((response) => {
          this.form.post("/api/login").then((response) => {
            if (response.data.user.for_client == 1) {
              this.$router.push({
                name: "Questioner",
                params: { userdata: response.data.user },
              });
              this.$store.commit('SET_USER',response.data.user);
            } else {
              this.$router.push({
                name: "Dashboard",
                params: { userdata: response.data.user },
              });
            }
          });
        });
    },
  },
};
</script>

<style scoped>
.root {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  /* border: 5px solid red; */
}
.content {
  width: 400px;
  height: 400px;
  /* border: 5px solid blue; */
}
.card-header {
  background-color: #ef6e2e;
  color: #fff;
  font-size: 18px;
  padding-left: 20px !important;
  padding-right: 20px !important;
}
.card-footer {
  background-color: #feebdd;
}
.btn-login {
  background-color: #fac8a0;
  border: 0;
  color: #000;
  border-radius: 0;
  padding: 6px 20px;
}
</style>

