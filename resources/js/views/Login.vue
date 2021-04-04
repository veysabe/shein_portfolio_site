<template>
    <div class="h-screen w-screen bg-black">
        <div class="container m-auto flex items-center justify-center h-screen text-white">
            <form class="border border-gray-300 p-4 rounded">
                <div class="font-bold w-full text-center mb-4 text-2xl">Авторизация</div>
                <div class="mb-4 text-black">
                    <input type="text" name="email" v-model="formData.email" class="outline-none bg-gray-50 p-2 border rounded">
                </div>
                <div class="text-black">
                    <input type="password" name="password" v-model="formData.password" class="outline-none bg-gray-50 p-2 border rounded">
                </div>
                <button type="submit" class="mt-4 py-1 px-3 bg-indigo-600 rounded font-bold w-full" @click.prevent="loginUser">Войти</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login",

    data: () => ({
        formData: {
            email: '',
            password: ''
        },
        errors: []
    }),
    methods:{
        loginUser () {
            axios.post('/api/login', this.formData).then((res) => {
                this.$router.push({name: 'Dashboard'});
            }).catch((error) => {
               this.errors = error.response.data.errors;
            });
        }
    }
}
</script>
