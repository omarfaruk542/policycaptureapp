<template>
    <div>
        <TheNavbar />
        <section id="content">
            <div class="container container-sm">
                <div class="card card-outline card-warning my-4">
                    <div class="card-header py-1">
                        <div class="d-flex justify-content-between">
                            <h3>Questionnaire</h3>
                            <span
                                >Date :
                                {{ new Date().toLocaleDateString() }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="POST">
                            <!-- Company Info -->
                            <CompanyInfo />
                            <Question1 />
                            <!-- Company Info End  -->
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Save Policy</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import TheNavbar from "../components/Questioner/TheNavbar.vue";
import CompanyInfo from "../components/Questioner/CompanyInfo";
import Question1 from "../components/Questioner/Question1.vue"

export default {
    data() {
        return {};
    },
    components: {
        TheNavbar,
        CompanyInfo,
        Question1
    },
};
</script>
