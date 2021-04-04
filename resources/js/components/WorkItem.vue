<template>
    <div class="w-1/4 hover:w-1/3 transition-all duration-300 ease-in-out group mb-8 mx-2">
        <div class="mb-2 ml-2">{{ work.name }}</div>
        <div class="h-80 rounded-xl overflow-hidden">
            <div
                class="h-full transition-all duration-300 ease-in-out bg-cover bg-no-repeat bg-center group-hover:h-3/4 group-hover:bg-full"
                v-bind:style="`background-image: url(/storage/${work.image})`">
                <!--                <img v-bind:src="'/storage/' + work.image" alt="" class="h-full max-w-none">-->
            </div>
            <div class="h-0 overflow-hidden group-hover:h-1/4 transition-all duration-300 ease-in-out">
                <div class="w-full h-full bg-gray-300 p-3 flex justify-between bg-opacity-10">
                    <div class="flex flex-col justify-between">
                        <a v-if="work.link != '0'" v-bind:href="'http://'+work.link" class="text-sm font-medium" target="_blank">Project Link</a>
                        <a v-if="work.url != '0'" v-bind:href="'http://'+work.url" class="text-xs" target="_blank">GitHub</a>
                    </div>
                    <div class="flex flex-col justify-between">
                        <div class="flex items-center">
                            <div class="text-sm font-bold pr-2">FrontEnd</div>
                            <div class="flex">
                                <span class="text-xs rounded-lg bg-opacity-20 bg-white p-1 mr-1"
                                      v-for="skill in skills.FrontEnd">{{ skill.name }}</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm font-bold pr-2">BackEnd</div>
                            <div class="flex">
                                <span class="text-xs rounded-lg bg-opacity-20 bg-white p-1 mr-1"
                                      v-for="skill in skills.BackEnd">{{ skill.name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "WorkItem",
    props: ['work'],
    data: () => ({
        skills: {
            FrontEnd: [],
            BackEnd: []
        }
    }),
    mounted() {
        for (let i in this.work.skills) {
            this.skills[this.work.skills[i].type].push(this.work.skills[i]);
        }
    },
}
</script>

<style scoped>

</style>
