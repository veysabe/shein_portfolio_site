<template>
    <div class="bg-black h-screen flex justify-center align-middle">
        <div class="container grid grid-cols-2 m-auto text-white">
            <div class="text-8xl flex flex-col items-center">
                <p class="font-black uppercase">Ше<span class="text-red-200">и</span>н</p>
                <p>Павел</p>
            </div>
            <div class="flex flex-col justify-between">
                <div>
                    <p class="tracking-widest text-7xl">Fullstack</p>
                    <p class="text-4xl">веб-разработчик</p>
                </div>
                <div>
                    <div>
                        Опыт коммерческой разработки - более <span class="font-black">1 года</span>
                    </div>
                    <div>
                        Опыт изучения языков программирования - более <span class="font-black">3 лет</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
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
