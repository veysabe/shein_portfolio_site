<template>
    <div class="bg-black flex justify-center align-middle">
        <div class="container m-auto text-white">
            <div class="w-full my-4 p-2 flex" v-for="work in this.result.works" v-bind:key="work.id">
                <div class="w-3/12">
                    <img v-bind:src="`/storage/${work.image}`" alt="">
                </div>
                <div class="flex items-center ml-4 font-bold">
                    {{ work.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        result: null
    }),
    mounted() {
        axios.get('/api/admin').then((res) => {
            this.result = res.data;
        })
    }
}
</script>
