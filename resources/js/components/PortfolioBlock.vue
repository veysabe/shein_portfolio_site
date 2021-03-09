<template>
    <div class="text-white bg-black py-14" v-if="skills.FrontEnd || skills.BackEnd">
        <div class="container mx-auto pb-5 text-white bg-black">
            <div class="text-7xl font-bold">
                Портфолио
            </div>
            <div class="mt-10 flex">
                <SkillItem
                    v-if="skills.FrontEnd"
                    v-for="skill in even(skills.FrontEnd)"
                    v-bind:key="skill.id"
                    v-bind:skill="skill"
                    @toggle-selected="toggleSelected"
                />
            </div>
            <div class="mt-4 flex">
                <SkillItem
                    v-if="skills.BackEnd"
                    v-for="skill in even(skills.BackEnd)"
                    v-bind:key="skill.id"
                    v-bind:skill="skill"
                    @toggle-selected="toggleSelected"
                />
            </div>
        </div>
        <div class="container mx-auto mt-10">
            <transition-group tag="div" class="flex flex-wrap -mx-2" name="fade">
                <WorkItem
                    v-for="work in works"
                    v-bind:key="work.id"
                    v-bind:work="work"
                />
            </transition-group>
        </div>
    </div>
</template>

<script>
import SkillItem from "./SkillItem";
import Helpers from "../helpers";
import WorkItem from './WorkItem';

export default {
    components: {SkillItem, WorkItem},
    props: [
        'skills',
        'works'
    ],
    data: () => ({
        filter: {
            selected: []
        },
    }),
    mounted() {
    },
    computed: {},
    methods: {
        toggleSelected(id) {
            let helpers = new Helpers();
            let index = this.filter.selected.indexOf(id);
            if (index > -1) {
                this.filter.selected.splice(index, 1);
            } else {
                this.filter.selected.push(id);
            }
            console.log(this.filter.selected);
            axios.post('/api/works/filter', {
                body: this.filter.selected
            })
                .then(res => {
                    this.$emit('filter-items', res.data)
                })
        },
        even: function (arr) {
            if (arr) {
                return arr.slice().sort(function (a, b) {
                    return b.works.length - a.works.length;
                });
            }
        },
    }
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */
{
    opacity: 0;
}
</style>
