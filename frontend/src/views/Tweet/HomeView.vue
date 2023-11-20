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
                                    <button class="p-3 nav-link text-muted active" id="pills-feed-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-feed" type="button" role="tab" aria-controls="pills-feed"
                                        aria-selected="true">Feed</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <router-link :to="{ name: 'people' }" class="p-3 nav-link text-muted" id="pills-people-tab" aria-controls="pills-people"
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

                                            <div class="bg-white p-3 feed-item rounded-4 mb-3 shadow-sm"
                                                v-for="(tweet, index) in tweets" :key="index">
                                                <div class="d-flex">
                                                    <img src="img/rmate4.jpg" class="img-fluid rounded-circle user-img"
                                                        alt="profile-img">
                                                    <div class="d-flex ms-3 align-items-start w-100">
                                                        <div class="w-100">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <a v-if="tweet.user" href="profile.html"
                                                                    class="text-decoration-none d-flex align-items-center">
                                                                    <h6 v-if="tweet.user_id == auth_user.id" class="fw-bold mb-0 text-body">
                                                                        {{ profile.first_name }} {{ profile.last_name }}
                                                                    </h6>
                                                                    <h6 v-else class="fw-bold mb-0 text-body">{{
                                                                        tweet.user.first_name }} {{ tweet.user.last_name }}
                                                                    </h6>

                                                                    <span
                                                                        class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                                    <small class="text-muted ms-2">@{{ tweet.user.user_name }}</small>
                                                                </a>
                                                                <div class="d-flex align-items-center small">
                                                                    <p class="text-muted mb-0">{{ new
                                                                        Date(tweet.created_at).toDateString() }}</p>
                                                                    <div class="dropdown">
                                                                        <a v-if="tweet.user_id == auth_user.id" href="#"
                                                                            class="text-muted text-decoration-none material-icons ms-2 md-20 rounded-circle bg-light p-1"
                                                                            id="dropdownMenuButton2"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">more_vert</a>
                                                                        <ul class="dropdown-menu fs-13 dropdown-menu-end"
                                                                            aria-labelledby="dropdownMenuButton2">
                                                                            <!-- <li><a class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">edit</span>Edit</a>
                                                                            </li> -->
                                                                            
                                                                            <li><a @click="deleteTweet(tweet.id)"
                                                                                    class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">delete</span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2">
                                                                <p v-if="tweet.content != null"
                                                                    class="d-flex justify-content-start">{{ tweet.content }}
                                                                </p>
                                                                <a href="#" class="text-decoration-none"
                                                                    data-bs-toggle="modal" data-bs-target="#commentModal">
                                                                    <!-- <img src="img/post2.png" class="img-fluid rounded mb-3"
                                                                        alt="post-img"> -->
                                                                </a>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-2">
                                                                    <div>
                                                                        <a href="#" @click.prevent="like_post(tweet.id)"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light">
                                                                            <span v-if="isLiked(tweet.id)" class="material-icons md-20 me-2">thumb_up_off_alt</span>
                                                                            <span v-else class="material-icons md-20 me-2">thumb_up</span>
                                                                            <span>
                                                                                {{ tweet.like_count }}
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
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
                                        <span v-if="profile.following.length > 0">
                                            <h6 class="fw-bold text-body p-3 mb-0 border-bottom">My follow list</h6>
                                            <a v-for="(following, index) in profile.following" :key="index" href="#" class="p-3 border-bottom d-flex text-dark text-decoration-none account-item pf-item">
                                                <img src="img/rmate5.jpg" class="img-fluid rounded-circle me-3" alt="profile-img" />
                                                <div v-if="following.following">
                                                    <p class="fw-bold mb-0 pe-3 d-flex align-items-center">{{ following.following.first_name }} {{ following.following.last_name }} <span class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span></p>
                                                    <div class="text-muted fw-light">
                                                        <p class="mb-1 small">@{{ following.following.user_name }}</p>
                                                        <!-- <span class="text-muted d-flex align-items-center small"><span class="material-icons me-1 small">open_in_new</span>Promoted</span> -->
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span @click="toggleFollow(following.following.id)"  class="btn btn-outline-primary btn-sm px-3 rounded-pill">+ Unfollow</span>
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
            profile: ''
        };
    },
    created: async function () {

        await this.getUserdata();
        await this.getData();
        let auth_user = localStorage.getItem('user_info');
        this.auth_user = JSON.parse(auth_user);
    },
    methods: {
        isLiked(tweetId) {
            // Check if the tweet is in the user's likes list
            return this.profile.likes.some(like => like.tweet_id === tweetId);
        },
        getData: function () {
            let url = `/tweets/list`;
            window.axios.get(url).then((res) => {
                this.tweets = res.data;
            });
        },
        deleteTweet: async function (tweet_id) {
            let data = {
                id: tweet_id,
            }
            axios.post('/tweets/destroy', data).then((response) => {
                if (response.data) {
                    this.getData();
                }
            })
                .catch((e) => {
                    if (e.response.status == 401) {
                        console.log(e.response.data);
                    }
                    console.log(e.response);
                });
        },
        like_post: async function (tweet_id) {
            let data = {
                tweet_id: tweet_id,
                user_id: this.auth_user.id
            }
            axios.post('/tweets/like-post', data).then((response) => {
                if (response.data) {
                    this.getData();
                }
            })
                .catch((e) => {
                    if (e.response.status == 401) {
                        console.log(e.response.data);
                    }
                    console.log(e.response);
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
                console.log(res.data);
                this.profile = res.data;
            });
        },
        toggleFollow: async function(user) {
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
