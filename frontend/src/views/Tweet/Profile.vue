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
            <a href="index.html" class="text-decoration-none">
                <img src="../../assets/logo.svg" class="img-fluid logo-mobile" alt="brand-logo" />
            </a>
            <button class="ms-auto btn btn-primary ln-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <div class="py-4">
            <div class="container">
                <div class="row position-relative">
                    <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                        <div class="main-content">
                            <div class="mb-4 d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <a href="index.html" class="material-icons text-dark text-decoration-none m-none me-3">arrow_back</a>
                                    <p class="ms-2 mb-0 fw-bold text-body fs-6">Shay Jordon</p>
                                </div>
                                <a href="#" class="text-decoration-none material-icons md-20 ms-auto text-muted">share</a>
                            </div>
                            <div class="bg-white rounded-4 shadow-sm profile">
                                <div class="d-flex align-items-center px-3 pt-3">
                                    <img src="img/rmate2.jpg" class="img-fluid rounded-circle" alt="profile-img" />
                                    <div class="ms-3">
                                        <h6 class="mb-0 d-flex align-items-start text-body fs-6 fw-bold">
                                            {{ profile.first_name }} {{ profile.last_name }} <span
                                                class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                        </h6>
                                        <p class="text-muted mb-0">@{{ profile.user_name }}</p>
                                    </div>
                                    <!-- <div class="ms-auto btn-group" role="group"
                                        aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="btncheck1" />
                                        <label class="btn btn-outline-primary btn-sm px-3 rounded-pill"
                                            for="btncheck1"><span class="follow">+ Follow</span><span
                                                class="following d-none">Following</span></label>
                                    </div> -->
                                </div>
                                <div class="p-3">
                                    <!-- <p class="mb-2 fs-6">The standard chunk of Lorem Ipsum used since is
                                        reproduced. Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature..
                                    </p> -->
                                    <p class="d-flex align-items-center mb-3">
                                        <!-- <span class="material-icons me-2 rotate-320 text-muted md-16">link</span><a
                                            href="/profile" class="text-decoration-none">profile/{{ profile.user_name }}</a> -->
                                        <span
                                            class="material-icons me-2 text-muted md-16 ms-4">calendar_today</span><span>Joined
                                            on {{ new Date(profile.created_at).toDateString() }}</span>
                                    </p>
                                    <div class="d-flex followers">
                                        <div>
                                            <p class="mb-0" v-if="profile.followers">{{ profile.followers.length }} <span class="text-muted">Followers</span>
                                            </p>
                                            <!-- <div class="d-flex">
                                                <img src="img/rmate1.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                                <img src="img/rmate2.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                                <img src="img/rmate3.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                                <img src="img/rmate4.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                                <img src="img/rmate5.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                            </div> -->
                                        </div>
                                        <div class="ms-5 ps-5">
                                            <p class="mb-0" v-if="profile.following">{{ profile.following.length }} <span class="text-muted">Following</span></p>
                                            <!-- <div class="d-flex">
                                                <img src="img/rmate1.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                                <img src="img/rmate2.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                                <img src="img/rmate3.jpg" class="img-fluid rounded-circle"
                                                    alt="follower-img" />
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="top-osahan-nav-tab nav nav-pills justify-content-center nav-justified mb-4 shadow-sm rounded-4 overflow-hidden bg-white mt-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="p-3 nav-link text-muted active" id="pills-feed-tab" data-bs-toggle="pill" data-bs-target="#pills-feed" type="button" role="tab" aria-controls="pills-feed" aria-selected="true">
                                        Tweets ({{ profile.tweets.length }})
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="p-3 nav-link text-muted" id="pills-people-tab" data-bs-toggle="pill" data-bs-target="#pills-people" type="button" role="tab" aria-controls="pills-people" aria-selected="false">
                                        <span v-if="profile.followers.length">Followers ({{ profile.followers.length }})</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="p-3 nav-link text-muted" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">
                                        
                                        <span v-if="profile.following.length">Following ({{ profile.following.length }})</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-feed" role="tabpanel" aria-labelledby="pills-feed-tab">
                                    <div class="ms-1">
                                        <div class="feeds">
                                            <div class="pt-4 feeds">
                                                <div class="bg-white p-3 feed-item rounded-4 mb-3 shadow-sm"
                                                    v-for="(tweet, index) in profile.tweets" :key="index">
                                                    <div class="d-flex">
                                                        <img src="img/rmate4.jpg" class="img-fluid rounded-circle user-img"
                                                            alt="profile-img">
                                                        <div class="d-flex ms-3 align-items-start w-100">
                                                            <div class="w-100">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <a v-if="profile" href="profile.html"
                                                                        class="text-decoration-none d-flex align-items-center">
                                                                        <h6 class="fw-bold mb-0 text-body">{{
                                                                            profile.first_name }} {{ profile.last_name }}
                                                                        </h6>

                                                                        <span
                                                                            class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                                        <small class="text-muted ms-2">@{{ profile.user_name }}</small>
                                                                    </a>
                                                                    <div class="d-flex align-items-center small">
                                                                        <p class="text-muted mb-0">{{ new
                                                                            Date(tweet.created_at).toDateString() }}</p>
                                                                        <div class="dropdown">
                                                                            <a href="#"
                                                                                class="text-muted text-decoration-none material-icons ms-2 md-20 rounded-circle bg-light p-1"
                                                                                id="dropdownMenuButton2"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">more_vert</a>
                                                                            <ul class="dropdown-menu fs-13 dropdown-menu-end"
                                                                                aria-labelledby="dropdownMenuButton2">
                                                                                <li><a class="dropdown-item text-muted"
                                                                                        href="#"><span
                                                                                            class="material-icons md-13 me-1">edit</span>Edit</a>
                                                                                </li>
                                                                                <li><a @click="deleteTweet(tweet.id)" class="dropdown-item text-muted"
                                                                                        href="#"><span
                                                                                            class="material-icons md-13 me-1">delete</span>Delete</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="my-2">
                                                                    <p v-if="tweet.content != null" class="d-flex justify-content-start">{{ tweet.content }}</p>
                                                                    <a href="#" class="text-decoration-none"
                                                                        data-bs-toggle="modal" data-bs-target="#commentModal">
                                                                    </a>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <div>
                                                                            <a href="#" @click.prevent="like_post(tweet.id)" class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                    class="material-icons md-20 me-2">thumb_up_off_alt</span><span>{{
                                                                                        tweet.like_count }}</span></a>
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
                                <div class="tab-pane fade" id="pills-people" role="tabpanel" aria-labelledby="pills-people-tab">
                                    <div class="feeds">
                                        <div class="bg-white rounded-4 overflow-hidden mb-4 shadow-sm">
                                            <a v-for="(follower, index) in profile.followers" :key="index" href="#" class="p-3 border-bottom d-flex text-dark text-decoration-none account-item pf-item">
                                                <img src="img/rmate5.jpg" class="img-fluid rounded-circle me-3" alt="profile-img" />
                                                <div v-if="follower.follower">
                                                    <p class="fw-bold mb-0 pe-3 d-flex align-items-center">{{ follower.follower.first_name }} {{ follower.follower.last_name }} <span class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span></p>
                                                    <div class="text-muted fw-light">
                                                        <p class="mb-1 small">@{{ follower.follower.user_name }}</p>
                                                        <!-- <span class="text-muted d-flex align-items-center small"><span class="material-icons me-1 small">open_in_new</span>Promoted</span> -->
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span @click="toggleFollow(follower.follower.id)" class="btn btn-outline-primary btn-sm px-3 rounded-pill">+ Follow</span>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                                    <div class="feeds">
                                        <div class="bg-white rounded-4 overflow-hidden mb-4 shadow-sm">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <LeftSideBar></LeftSideBar>
                    <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="fix-sidebar">
                            <div class="side-trend lg-none">
                                <div class="sticky-sidebar2 mb-3">
                                    <div class="input-group mb-4 shadow-sm rounded-4 overflow-hidden py-2 bg-white">
                                        <span
                                            class="input-group-text material-icons border-0 bg-white text-primary">search</span>
                                        <input type="text" class="form-control border-0 fw-light ps-1"
                                            placeholder="Search Vogel">
                                    </div>

                                    <!-- WhoToFollow -->
                                    <WhoToFollow></WhoToFollow>
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
                        <span class="me-3 small">©2023 <b class="text-primary">Your Website</b>. All rights reserved</span>
                    </div>
                    <div class="col-md-4 text-end">
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-facebook"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-twitter"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-linkedin"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-youtube-play"></i></a>
                        <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i class="icofont-instagram"></i></a>
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

export default {
    name: "HomeView",
    components: {
        WhoToFollow,
        LeftSideBar
    },
    data: function () {
        return {
            tweets: {},
            profile: {}
        };
    },
    created: async function () {
        let auth_user = localStorage.getItem('user_info');
        this.auth_user = JSON.parse(auth_user);
        await this.getMyData();
    },
    methods: {
        getMyData: function () {
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
                this.getMyData();
            });
            
        },
    },

};
</script>
