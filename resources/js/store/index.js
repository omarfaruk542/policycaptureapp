import Vue from "vue";
import Vuex, { Store } from "vuex";
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

const store = new Store({
    state: {
        user: {},
        company: {},
    },
    getters: {
        getUser(state) {
            return state.user;
        },
    },
    mutations: {
        SET_USER(state, data) {
            state.user = data;
        },
    },
    plugins: [createPersistedState()],
});

export default store;
