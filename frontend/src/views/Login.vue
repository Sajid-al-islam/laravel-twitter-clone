<template>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="../assets/logo.svg" alt="logo" width="100">
                        <h1 class="fs-4 card-title fw-bold mb-4 mt-4">Login to continue</h1>
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">

                            <form @submit.prevent="Login($event)" class="login-form">
                                <div class="mb-3">
                                    <label for="inputEmail" class="sr-only">Email Address</label>
                                    <input type="email" v-model="user.email" name="email" id="inputEmail"
                                        class="form-control mb-2" placeholder="Email address" required autofocus />
                                    <div class=" mt-1 text-danger d-flex align-items-center" v-if="error.email"
                                        role="alert">
                                        {{ error.email }}
                                    </div>
                                </div>
                                <div class="mt-1 mb-3">
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" v-model="user.password" name="password" id="inputPassword"
                                        class="form-control mb-2" placeholder="Password" required />
                                    <div class=" mt-1 text-danger d-flex align-items-center" v-if="error.email"
                                        role="alert">
                                        {{ error.password }}
                                    </div>
                                </div>

                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        Login
                                    </button>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Don't have an account? <a href="/register" class="text-dark">Create One</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2023 &mdash; Twitter clone
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>

export default {
    name: 'HomeView',
    data() {
        return {
            user: {
                email: '',
                password: ''
            },
            error: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        Login(event) {
            if (this.user.email == "") {
                this.error.email = 'The email field is required.'
            } else {
                this.error.email = null
            }
            if (this.user.password == "") {
                this.error.password = 'The password field is required.'
            } else {
                this.error.password = null
            }
            if (this.user.email != "" && this.user.password != "") {
                axios.post('/user/api-login', {
                    email: this.user.email,
                    password: this.user.password
                }).then((response) => {
                    if (response.data?.access_token) {
                        localStorage.setItem('token', response.data.access_token);
                        localStorage.setItem('user_info', JSON.stringify(response.data.user));
                        location.href = '/'

                        // this.$router.replace({ name: 'Dashboard' })
                    }
                })
                .catch((e) => {
                    if (e.response.status == 401) {
                        console.log(e.response.data);
                        this.error.email = e.response.data.message;
                    }
                });
            }
        },
        checkToken() {
            let token = localStorage.getItem('token');
            console.log(token);
            if (token) {
                // this.$router.replace({ name: 'Dashboard' })
                location.href = '/'
            }
        }
    },
    created() {
        this.checkToken();
    },
    computed: {

    },
};
</script>

<style scoped></style>
