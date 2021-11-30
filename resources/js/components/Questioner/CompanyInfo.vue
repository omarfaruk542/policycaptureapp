<template>
    <div>
        <div class="form-group clearfix px-2">
            <div class="row mb-2">
                <label for="inputCompany" class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-10">
                    <input
                        class="form-control"
                        list="companyName"
                        id="inputCompany"
                        placeholder="Type Company Name"
                        name="companyName"
                        v-model="companyName"
                        readonly
                    />
                </div>
            </div>
            <div class="row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Company Address</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        id="inputAddress"
                        rows="1"
                        placeholder="Type Company Address"
                        v-model="companyAddress"
                        readonly
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            companyName: "",
            companyAddress: "",
        };
    },
    components: {},
    computed: {},
    mounted() {
        axios
            .get("/api/company/" + this.$store.getters.getUser.com_id)
            .then((response) => {
                (this.companyName = response.data.name),
                    (this.companyAddress = response.data.address);
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>
