<template>
    <div class="py-1 px-2.5 mr-4 rounded-lg bg-opacity-20 cursor-pointer transition duration-300 ease-in-out"
         :class="classObject"
         @click="hasWorks ? toggleSelected(skill.id) : ''"
    >{{ skill.name }}
    </div>
</template>

<script>
export default {
    name: "SkillItem",
    props: ['skill'],
    data() {
        return {
            hasWorks: this.skill.works.length > 0,
            selected: false,
        }
    },
    computed: {
        classObject: function () {
            return {
                'bg-gray-300 hover:bg-white hover:bg-opacity-30': this.hasWorks && !this.selected,
                'text-gray-600 bg-gray-600 cursor-default': !this.hasWorks,
                'bg-white bg-opacity-100 text-black': this.selected
            }
        },
    },
    methods: {
        toggleSelected(id) {
            this.$emit('toggle-selected', id);
            this.selected = !this.selected;
        }
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
