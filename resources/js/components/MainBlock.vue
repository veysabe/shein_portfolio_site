<template>
    <div class="bg-black h-screen flex justify-center align-middle">
        <div class="container grid grid-cols-2 m-auto text-white">
            <div class="text-8xl flex flex-col items-center">
                <p class="font-black uppercase" v-html="locale.last_name"></p>
                <p v-html="locale.first_name"></p>
            </div>
            <div class="flex flex-col justify-between">
                <div>
                    <p class="tracking-widest text-7xl" v-html="locale.web_grade"></p>
                    <p class="text-4xl" v-html="locale.post"></p>
                </div>
                <div>
                    <div v-html="locale.work_experience">
                    </div>
                    <div v-html="locale.learn_experience">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['locale'],
    mounted() {
        console.log(this.locale);
    }
}
</script>

<style scoped>
.main-block {
    background: black;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-red {
    color: #FFB5B5;
}

.main-block-inner {
    width: 100%;
}

.main-block__heading {
    font-size: 120px;
    line-height: 90%;
}

.lastname {
    font-weight: 900;
    text-transform: uppercase;
    margin-bottom: 0;
}

.name {
    margin-bottom: 0;
}

.main-block__description {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.level-profession .level {
    font-weight: 500;
    font-size: 72px;
    line-height: 100%;
    letter-spacing: 0.1em;
}

.level-profession .profession {
    margin-top: -20px;
    font-size: 36px;
    line-height: 42px;
}
</style>
