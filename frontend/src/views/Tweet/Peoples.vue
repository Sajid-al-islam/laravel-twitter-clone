<template>
    <div class="home">
        <!-- <div class="theme-switch-wrapper ms-3">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <span class="slider round"></span>
                <i class="icofont-ui-brightness"></i>
            </label>
            <em>Enable Dark Mode!</em>
        </div> -->
        <div class="web-none d-flex align-items-center px-3 pt-3">
            <a href="/" class="text-decoration-none">
                <img src="../../assets/logo.svg" class="img-fluid logo-mobile" alt="brand-logo">
            </a>
            <button class="ms-auto btn btn-primary ln-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <div class="py-4">
            <div class="container">
                <div class="row position-relative">
                    <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                        <div class="main-content">
                            <ul class="top-osahan-nav-tab nav nav-pills justify-content-center nav-justified mb-4 shadow-sm rounded-4 overflow-hidden bg-white sticky-sidebar2"
                                id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <router-link :to="{ name: 'home' }" class="p-3 nav-link text-muted"
                                        id="pills-people-tab" aria-controls="pills-people"
                                        aria-selected="false">Feed</router-link>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <router-link :to="{ name: 'people' }" class="p-3 nav-link text-muted active"
                                        id="pills-people-tab" aria-controls="pills-people"
                                        aria-selected="false">People</router-link>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-feed" role="tabpanel"
                                    aria-labelledby="pills-feed-tab">
                                    <div class="tweet_post">
                                        <form @submit.prevent="TweetSubmit($event)" id="tweet_post_form" method="POST">
                                            <div class="mb-3">
                                                <textarea v-model="content" class="form-control" name="content"
                                                    id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="What's Happening!"></textarea>
                                            </div>
                                            <div class="text-danger d-flex align-items-center" v-if="error" role="alert">
                                                {{ error }}
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary d-flex justify-content-end">Post</button>
                                        </form>
                                    </div>

                                    <div>
                                        <div class="pt-4 feeds">

                                            <div class="bg-white rounded-4 overflow-hidden shadow-sm account-follow mb-4">
                                                <h6 class="fw-bold text-body p-3 mb-0 border-bottom">All x users</h6>
                                                <div
                                                    class="mt-2 mx-2 input-group mb-4 shadow-sm rounded-4 overflow-hidden py-2 bg-white">
                                                    <span
                                                        class="input-group-text material-icons border-0 bg-white text-primary">search</span>
                                                    <input @keyup="search($event)" type="text"
                                                        class="form-control border-0 fw-light ps-1"
                                                        placeholder="Search tweet">
                                                </div>
                                                <div v-for="(follower, index) in users" :key="index"
                                                    class="p-3 border-bottom d-flex text-dark text-decoration-none account-item">
                                                    <a href="#">
                                                        <img :src="follower.photo" class="img-fluid rounded-circle me-3"
                                                            alt="profile-img">
                                                    </a>
                                                    <div>

                                                        <p class="fw-bold mb-0 pe-3 d-flex align-items-center">{{
                                                            follower.first_name }} {{ follower.last_name }} <span
                                                                class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                        </p>
                                                        <div class="text-muted fw-light">
                                                            <p class="mb-1 small">@{{ follower.user_name }}</p>
                                                            <!-- <span class="text-muted d-flex align-items-center small"><span class="material-icons me-1 small">open_in_new</span>Promoted</span> -->
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span v-if="isUserFollowed(follower.id)"
                                                            @click="toggleFollow(follower.id)"
                                                            class="btn btn-outline-primary btn-sm px-3 rounded-pill">- Unfollow</span>
                                                        <span v-else
                                                            @click="toggleFollow(follower.id)"
                                                            class="btn btn-outline-primary btn-sm px-3 rounded-pill">+ Follow</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="text-center mt-4">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="mb-0 mt-2">Loading</p>
                        </div> -->
                    </main>
                    <!-- Left sidebar -->
                    <LeftSideBar></LeftSideBar>

                    <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="fix-sidebar">
                            <div class="side-trend lg-none">
                                <div class="sticky-sidebar2 mb-3">


                                    <!-- WhoToFollow -->
                                    <div class="bg-white rounded-4 overflow-hidden shadow-sm account-follow mb-4">
                                        <span v-if="profile.following">
                                            <h6 class="fw-bold text-body p-3 mb-0 border-bottom">My follow list</h6>
                                            <a v-for="(following, index) in profile.following" :key="index" href="#"
                                                class="p-3 border-bottom d-flex text-dark text-decoration-none account-item pf-item">
                                                <img :src="following.following.photo" class="img-fluid rounded-circle me-3"
                                                    alt="profile-img" />
                                                <div v-if="following.following">
                                                    <p class="fw-bold mb-0 pe-3 d-flex align-items-center">{{
                                                        following.following.first_name }} {{ following.following.last_name }} <span
                                                            class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                    </p>
                                                    <div class="text-muted fw-light">
                                                        <p class="mb-1 small">@{{ following.following.user_name }}</p>
                                                        <!-- <span class="text-muted d-flex align-items-center small"><span class="material-icons me-1 small">open_in_new</span>Promoted</span> -->
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span @click="toggleFollow(following.following.id)"
                                                        class="btn btn-outline-primary btn-sm px-3 rounded-pill">+
                                                        Unfollow</span>
                                                </div>
                                            </a>
                                        </span>
                                        <span v-else>
                                            <h6 class="fw-bold text-body p-3 mb-0 border-bottom">No following yet</h6>
                                        </span>
                                    </div>
                                    <!-- <WhoToFollow></WhoToFollow> -->
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="py-3 bg-white footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <span class="me-3 small">©2023 <b class="text-primary">Your Website</b>. All rights
                            reserved</span>
                    </div>
                    <div class="col-md-4 text-end">
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                                class="icofont-facebook"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                                class="icofont-twitter"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                                class="icofont-linkedin"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                                class="icofont-youtube-play"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                                class="icofont-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
// @ is an alias to /src
import WhoToFollow from "@/components/WhoToFollow.vue";
import LeftSideBar from "@/components/LeftSideBar.vue";
import { RouterLink } from "vue-router";

export default {
    name: "HomeView",
    components: {
        WhoToFollow,
        LeftSideBar,
        RouterLink
    },
    data: function () {
        return {
            tweets: {},
            content: '',
            auth_user: '',
            error: '',
            users: '',
            profile: '',
            followers: [],
            followings: []
        };
    },
    created: async function () {

        await this.getUserdata();
        await this.getData();
        let auth_user = localStorage.getItem('user_info');
        this.auth_user = JSON.parse(auth_user);
    },
    watch: {
        followers: function (val) {
            // let that = this;
            // this.custom_routine = val.filter(function (item) {
            //     if (that.check_null(item)) {
            //         return item;
            //     }
            // })
            // if(val) {

            // }
        }
    },
    methods: {
        
        isUserFollowed(userId) {
            
            return this.profile.following.some(following => following.following.id === userId);
        },
        getData: async function () {

            await axios.get('/user/to-follow-users').then((res) => {
                this.users = res.data;
            });
        },
        search: async function (event) {
            let query = event.target.value;
            await axios.get('/user/to-follow-users?search_key=' + query).then((res) => {
                this.users = res.data;
            });
        },
        TweetSubmit: async function (event) {
            if (this.content == "") {
                this.error = 'tweet content is required.';
                return 0;
            }
            let submit_data = {
                content: this.content,
                user_id: this.auth_user.id
            }

            axios.post('/tweets/store', submit_data).then((response) => {
                if (response.data) {
                    this.getData();
                    location.href = "/";
                }
                this.content = '';
            })
                .catch((e) => {
                    if (e.response.status == 401) {
                        console.log(e.response.data);
                    }
                    console.log(e.response);
                });
            // event.reset();
        },
        getUserdata: async function () {
            let url = `/user/my-profile`;
            window.axios.get(url).then((res) => {
                // console.log(res.data);
                this.profile = res.data;
            });
        },
        toggleFollow: async function (user) {
            let data = {
                followd_id: user,
                follower_id: this.auth_user.id
            }

            await axios.post('/follower/follow', data).then((res) => {
                this.getUserdata();
            });

        },
    },

};
</script>
