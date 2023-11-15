<template>
    <div class="bg-white rounded-4 overflow-hidden shadow-sm account-follow mb-4">
        <h6 class="fw-bold text-body p-3 mb-0 border-bottom">Who to follow</h6>
        <div v-for="(user, index) in users" :key="index"
            class="p-3 border-bottom d-flex text-dark text-decoration-none account-item">
            <a href="profile.html">
                <img src="img/rmate5.jpg" class="img-fluid rounded-circle me-3" alt="profile-img">
            </a>
            <div>

                <p class="fw-bold mb-0 pe-3 d-flex align-items-center"><a class="text-decoration-none text-dark"
                        href="profile.html">{{ user.first_name }} {{ user.last_name }} </a><span
                        class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                </p>
                <div class="text-muted fw-light">
                    <p class="mb-1 small">@{{ user.user_name }}</p>
                </div>
            </div>
            <div class="ms-auto">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <span :key="user.id">
                        <!-- <button @click.prevent="follow(user.id)" class="btn btn-outline-primary btn-sm px-3 rounded-pill">+ Follow {{ check_follow(user.id) }}</button> -->
                        <button class="btn" @click="toggleFollow(user)" :class="{
                            'btn-outline-primary': !user.isFollowing,
                            'btn-primary': user.isFollowing
                        }">
                            <span v-if="user.isFollowing">Unfollow</span>
                            <span v-else>Follow</span>
                        </button>
                    </span>

                    <!-- <input type="checkbox" class="btn-check" id="btncddheck7">
                    <label class="btn btn-outline-primary btn-sm px-3 rounded-pill" for="btncddheck7">
                        <span v-if="check_follow(user.id)" class="follow">+ Follow</span>
                        <span v-else>Unfollow</span>
                    </label> -->
                </div>
            </div>
        </div>
    </div>
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
        toFollowUser: function () {
            let url = `/user/to-follow-users`;
            window.axios.get(url).then((res) => {
                // console.log(res.data);
                this.users = res.data;
            });
        },
        async toggleFollow(user) {
            let data = {
                followd_id: user.id,
                follower_id: this.auth_user.id
            }
            if (user.isFollowing) {

                await axios.post('/follower/follow', data)
                user.isFollowing = false
            } else {
                await axios.post('/follower/follow', data)
                user.isFollowing = true
            }
        },
        // follow: async function (user_id) {
        //     let data = {
        //         followd_id: user_id,
        //         follower_id: this.auth_user.id
        //     }
        //     axios.post('/follower/follow', data).then((response) => {
        //         if (response.data) {
        //             console.log(response.data);
        //         }
        //     })
        //         .catch((e) => {
        //             if (e.response.status == 401) {
        //                 console.log(e.response.data);
        //             }
        //             console.log(e.response);
        //         });
        // },
        // check_follow: function (user_id) {
        //     this.auth_user?.following.forEach(element => {
        //         if (element.followed_id == user_id) {
        //             console.log(element);
        //             return "checked";
        //         }
        //     });

        // },
    },

};
</script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss"></style>
  