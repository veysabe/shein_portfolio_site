<template>
    <div v-bind:class="{'bg-black h-screen': loading}">
        <Spin v-if="loading.skills || loading.works || loading.locale"></Spin>
        <div v-if="!loading.skills && !loading.works && !loading.locale">
            <main-block v-bind:locale="this.locale"></main-block>
            <portfolio-block
                v-bind:skills="skills"
                v-bind:works="works"
                v-bind:locale="this.locale"
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
        loading: {
            skills: true,
            works: true,
            locale: true
        },
        skills: [],
        works: [],
        locale: null
    }),
    mounted() {
        this.loadSkills();
        this.loadWorks();
        this.loadLocale();
    },
    methods: {
        loadSkills() {
            axios.get('/api/skills')
                .then(res => {
                    this.skills = res.data;
                    this.loading.skills = false;
                })
        },
        loadWorks() {
            axios.get('/api/works')
                .then(res => {
                    this.works = res.data;
                    this.loading.works = false;
                })
        },
        loadLocale() {
            axios.get('/api/getlocale')
                .then(res => {
                    if (res.data === 'ru')
                        this.locale = require('../lang/ru/main.js').default;
                    else
                        this.locale = require('../lang/en/main.js').default;

                    this.loading.locale = false;
                });
        },
        filterItems(data) {
            this.works = data;
        }
    }
}
</script>
