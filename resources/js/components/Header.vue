<template>
    <div class="header">
        <router-link to="/" class="header-item">Главная</router-link>
        <router-link to="/portfolio" class="header-item">Портфолио</router-link>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 0;
        text-transform: uppercase;
        font-size: 24px;
    }

    .header-item {
        color: white;
        text-decoration: none;
        padding-right: 20px;
    }
</style>
