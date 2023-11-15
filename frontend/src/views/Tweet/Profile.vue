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
                <img src="img/logo.png" class="img-fluid logo-mobile" alt="brand-logo">
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
                                    <button class="p-3 nav-link text-muted" id="pills-people-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-people" type="button" role="tab" aria-controls="pills-people"
                                        aria-selected="false">People</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-feed" role="tabpanel"
                                    aria-labelledby="pills-feed-tab">
                                    <!-- <div class="tweet_post">
                                        <form>
                                            <div class="mb-3">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="What's Happening!"></textarea>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary d-flex justify-content-end">Post</button>
                                        </form>
                                    </div> -->

                                    <div>
                                        <div class="bg-white rounded-4 shadow-sm profile">
                                            <div class="d-flex align-items-center px-3 pt-3">
                                                <img src="img/rmate2.jpg" class="img-fluid rounded-circle"
                                                    alt="profile-img">
                                                <div class="ms-3">
                                                    <h6 class="mb-0 d-flex align-items-start text-body fs-6 fw-bold">Shay
                                                        Jordon <span
                                                            class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                    </h6>
                                                    <p class="text-muted mb-0">@shay-jordon</p>
                                                </div>
                                                <div class="ms-auto btn-group" role="group"
                                                    aria-label="Basic checkbox toggle button group">
                                                    <input type="checkbox" class="btn-check" id="btncheck1">
                                                    <label class="btn btn-outline-primary btn-sm px-3 rounded-pill"
                                                        for="btncheck1"><span class="follow">+ Follow</span><span
                                                            class="following d-none">Following</span></label>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <p class="mb-2 fs-6">The standard chunk of Lorem Ipsum used since is
                                                    reproduced. Contrary to popular belief, Lorem Ipsum is not simply random
                                                    text. It has roots in a piece of classical Latin literature..</p>
                                                <p class="d-flex align-items-center mb-3"><span
                                                        class="material-icons me-2 rotate-320 text-muted md-16">link</span><a
                                                        href="profile.html"
                                                        class="text-decoration-none">profile/shayjordon</a>
                                                    <span
                                                        class="material-icons me-2 text-muted md-16 ms-4">calendar_today</span><span>Joined
                                                        on Feb 2023</span>
                                                </p>
                                                <div class="d-flex followers">
                                                    <div>
                                                        <p class="mb-0">391k <span class="text-muted">Followers</span></p>
                                                        <div class="d-flex">
                                                            <img src="img/rmate1.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                            <img src="img/rmate2.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                            <img src="img/rmate3.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                            <img src="img/rmate4.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                            <img src="img/rmate5.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                        </div>
                                                    </div>
                                                    <div class="ms-5 ps-5">
                                                        <p class="mb-0">3 <span class="text-muted">Following</span></p>
                                                        <div class="d-flex">
                                                            <img src="img/rmate1.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                            <img src="img/rmate2.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
                                                            <img src="img/rmate3.jpg" class="img-fluid rounded-circle"
                                                                alt="follower-img">
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

export default {
    name: "HomeView",
    components: {
        WhoToFollow,
        LeftSideBar
    },
    data: function () {
        return {
            tweets: {},
        };
    },
    created: function () {
        this.getData();
    },
    methods: {
        getData: function () {
            let url = `/tweets/list`;
            window.axios.get(url).then((res) => {
                console.log(res.data);
                this.tweets = res.data;
            });
        },
    },

};
</script>
