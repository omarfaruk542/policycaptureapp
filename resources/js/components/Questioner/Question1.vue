<template>
    <div>
        <div class="card mx-2">
            <div class="card-header py-1" data-card-widget="collapse">
                <h3 class="card-title my-0">Employee Master Data</h3>
            </div>
            <div class="card-body py-2">
                <div class="form-group clearfix mb-0">
                    <label for="questions01">
                        01. Do you want to upload Employee Master Data from Excel template?
                    </label>
                    <div class="icheck-primary d-inline ml-3 mr-2">
                        <input
                            class="btn1 btn-yes"
                            type="radio"
                            id="radioPrimary1"
                            name="r1"
                            value="Yes"
                            @click="fnShowLink()"
                        />
                        <label for="radioPrimary1">Yes, I want to upload</label>
                    </div>
                    <div class="icheck-primary d-inline">
                        <input
                            class="btn2 btn-no"
                            type="radio"
                            id="radioPrimary2"
                            name="r1"
                            value="No"
                            @click="fnHideLink()"
                        />
                        <label for="radioPrimary2">No, I will do manually</label>
                    </div>
                    <div class="mt-2 showDetails" v-show="showLink">
                        <a
                            href="https://drive.google.com/file/d/0BzFSMadq2ktcUG9SWDgzdWNWVjg/view?usp=sharing"
                            target="_blank"
                            id="downloadLink"
                        >Download Employee Master Data Upload Template</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                showLink: false
            }
        },
        methods: {
            fnShowLink(){
                return this.showLink = true
            },
            fnHideLink(){
                return this.showLink = false
            }
        }
    }
</script>

<style scoped>
.card {
    box-shadow: none;
    border: 1px solid rgba(0, 0, 0, 0.15)
}
</style>
