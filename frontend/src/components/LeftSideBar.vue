<template>
    <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
        <div class="p-2 bg-light offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">
            <div class="sidebar-nav mb-3">
                <div class="pb-4">
                    <a href="/" class="text-decoration-none">
                        <img src="../assets/logo.svg" class="img-fluid logo" alt="brand-logo">
                    </a>
                </div>
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a href="/" class="nav-link active"><span class="material-icons me-3">house</span>
                            <span>Feed</span></a>
                    </li>
                    <li class="nav-item">
                        <a :to="{ name: `profile` }" class="nav-link"><span class="material-icons me-3">account_circle</span>
                            <span>Profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a @click="logout()" href="#" class="nav-link"><span class="material-icons me-3">logout</span>
                            <span>Logout</span></a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn btn-primary w-100 text-decoration-none rounded-4 py-3 fw-bold text-uppercase m-0"
                data-bs-toggle="modal" data-bs-target="#signModal">Sign In +</a>
        </div>
        <div class="ps-0 m-none fix-sidebar">
            <div class="sidebar-nav mb-3">
                <div class="pb-4 mb-4">
                    <a href="/" class="text-decoration-none">
                        <img src="../assets/logo.svg" class="img-fluid logo" alt="brand-logo">
                    </a>
                </div>
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <router-link :to="{ name: `home` }" href="#" class="nav-link"><span class="material-icons me-3">house</span>
                            <span>Feed</span></router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: `profile` }" class="nav-link"><span class="material-icons me-3">account_circle</span>
                            <span>Profile</span></router-link>
                    </li>
                    
                    <li class="nav-item">
                        <a @click="logout()" class="nav-link"><span class="material-icons me-3">logout</span>
                            <span>Logout</span></a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="material-icons me-3">web</span> Pages
                        </a>
                        <ul class="dropdown-menu px-2 py-1 mb-2">
                            <li><a class="dropdown-item rounded-3 px-2 py-1 my-1" href="contact.html">Contact</a></li>
                            <li><a class="dropdown-item rounded-3 px-2 py-1 my-1" href="faq.html">FAQ</a></li>
                            <li><a class="dropdown-item rounded-3 px-2 py-1 my-1" href="404.html">404 Error</a></li>
                            <li><a class="dropdown-item rounded-3 px-2 py-1 my-1" href="edit-profile.html">Edit Profile</a>
                            </li>
                        </ul>
                    </li> -->
                    
                </ul>
            </div>
            <a href="/#tweet_post_form" class="btn btn-primary w-100 text-decoration-none rounded-4 py-3 fw-bold text-uppercase m-0"
                >Post now +</a>
        </div>
    </aside>
</template>
  
<script>
export default {
    data: function () {
        return {
            users: {},
            auth_user: {},
            followd_users: []
        };
    },
    created: async function () {
        // await this.toFollowUser();
        const response = await axios.get('/user/to-follow-users');
        this.users = response.data

        const followedResponse = await axios.get('/user/user-follower')
        this.followedUsers = followedResponse.data

        this.users.forEach(user => {
            // user.isFollowing = this.followedUsers.some(followed => followed.id === user.id)
            user.isFollowing = this.followedUsers.some(followed => followed.id === user.id);
            console.log(user.isFollowing);
        })

        let auth_user = localStorage.getItem('user_info');
        this.auth_user = JSON.parse(auth_user);
    },
    methods: {
        
        logout() {
            axios.post('/user/api-logout', {
            }).then((response) => {
                localStorage.removeItem('token')
                location.href ='/login'
            })
            .catch((e) => {
                console.log(e.response);
            });
        },
    },

};
</script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
  