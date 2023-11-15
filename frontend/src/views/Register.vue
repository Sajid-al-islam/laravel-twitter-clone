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

                            <form @submit.prevent="Register()" class="login-form">
                                <div class="mb-3">
                                    <label for="inputname" class="sr-only">First name</label>
                                    <input type="name" v-model="user.first_name" name="name" id="inputname" class="form-control mb-2"
                                        placeholder="Your name" required autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="inputname" class="sr-only">Last name</label>
                                    <input type="name" v-model="user.last_name" name="name" id="inputname" class="form-control mb-2"
                                        placeholder="Your name" required autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="sr-only">Username</label>
                                    <input type="text" v-model="user.user_name" name="user_name" id="inputEmail" class="form-control mb-2"
                                        placeholder="user name, must be unique" required autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="mobile_number" class="sr-only">Mobile Number</label>
                                    <input type="number" v-model="user.mobile_number"  name="mobile_number" id="mobile_number" class="form-control mb-2"
                                        placeholder="01548484" required autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="sr-only">Email Address</label>
                                    <input type="email" v-model="user.email" name="email" id="inputEmail" class="form-control mb-2"
                                        placeholder="Email address" required autofocus />
                                </div>
                                <div class="mt-1 mb-3">
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" v-model="user.password" name="password" id="password" class="form-control mb-2"
                                        placeholder="Password" required />
                                </div>

                                <div class="mt-1 mb-3">
                                    <label for="inputPassword" class="sr-only">Confirm Password</label>
                                    <input type="password" v-model="user.password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control mb-2"
                                        placeholder="confirm passowrd" required />
                                </div>
                                
                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        Register
                                    </button>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Already have an account? <a href="/login" class="text-dark">login</a>
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
                first_name: '',
                last_name: '',
                mobile_number: '',
                email: '',
                password: '',
                password_confirmation: '',
                user_name: ''
            },
            error: {
                email: '',
                password: '',
                user_name: '',
                password: ''
            }
        }
    },
    methods: {
        Register(event) {
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
                axios.post('/user/api-register', this.user).then((response) => {
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

<style scoped>
</style>
