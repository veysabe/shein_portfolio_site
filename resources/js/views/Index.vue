<template>
    <div v-bind:class="{'bg-black h-screen': loading}">
<!--        <Spin v-if="loading"></Spin>-->
        <div>
            <main-block></main-block>
            <portfolio-block
                v-bind:skills="skills"
                v-bind:works="works"
                v-on:filter-items="filterItems"
            ></portfolio-block>
        </div>
    </div>
</template>

<script>
import Spin from "../components/Spin";
import axios from "axios";
export default {
    name: "Index",
    components: {Spin},

    data: () => ({
        loading: true,
        skills: [],
        works: [],
    }),
    mounted() {
        this.loadSkills();
        this.loadWorks();
    },
    methods: {
        loadSkills() {
            axios.get('/api/skills')
            .then(res => {
                this.skills = res.data;
            })
        },
        loadWorks() {
            axios.get('/api/works')
                .then(res => {
                    this.works = res.data;
                })
        },
        filterItems(data) {
            this.works = data;
            console.log(data);
        }
    }
}
</script>
