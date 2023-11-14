<template>
  <div class="home">
    <div class="theme-switch-wrapper ms-3">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <span class="slider round"></span>
                <i class="icofont-ui-brightness"></i>
            </label>
            <em>Enable Dark Mode!</em>
        </div>
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
                                    <button class="p-3 nav-link text-muted active" id="pills-feed-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-feed" type="button" role="tab"
                                        aria-controls="pills-feed" aria-selected="true">Feed</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="p-3 nav-link text-muted" id="pills-people-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-people" type="button" role="tab"
                                        aria-controls="pills-people" aria-selected="false">People</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-feed" role="tabpanel"
                                    aria-labelledby="pills-feed-tab">
                                    <div class="input-group mb-4 shadow-sm rounded-4 overflow-hidden py-2 bg-white"
                                        data-bs-toggle="modal" data-bs-target="#postModal">
                                        <span
                                            class="input-group-text material-icons border-0 bg-white text-primary">account_circle</span>
                                        <input type="text" class="form-control border-0 fw-light ps-1"
                                            placeholder="What's on your mind.">
                                        <a href="#"
                                            class="text-decoration-none input-group-text bg-white border-0 material-icons text-primary">add_circle</a>
                                    </div>
                                    <div>
                                        <div class="pt-4 feeds">
                                            <div class="bg-white p-3 feed-item rounded-4 mb-3 shadow-sm">
                                                <div class="d-flex">
                                                    <img src="img/rmate2.jpg"
                                                        class="img-fluid rounded-circle user-img" alt="profile-img">
                                                    <div class="d-flex ms-3 align-items-start w-100">
                                                        <div class="w-100">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <a href="profile.html"
                                                                    class="text-decoration-none d-flex align-items-center">
                                                                    <h6 class="fw-bold mb-0 text-body">Shay Jordon</h6>
                                                                    <span
                                                                        class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                                    <small class="text-muted ms-2">@shay-jordon</small>
                                                                </a>
                                                                <div class="d-flex align-items-center small">
                                                                    <p class="text-muted mb-0">19 Feb</p>
                                                                    <div class="dropdown">
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none material-icons ms-2 md-20 rounded-circle bg-light p-1"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">more_vert</a>
                                                                        <ul class="dropdown-menu fs-13 dropdown-menu-end"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">edit</span>Edit</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">delete</span>Delete</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1 ltsp-n5">arrow_back_ios
                                                                                        arrow_forward_ios</span>Embed
                                                                                    Vogel</a></li>
                                                                            <li><a class="dropdown-item text-muted d-flex align-items-center"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">share</span>Share
                                                                                    via another apps</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2">
                                                                <p class="mb-3 text-primary">Welcome to the Vogel family
                                                                    🙂
                                                                </p>
                                                                <ul class="list-unstyled mb-3">
                                                                    <li>1. Follow people you like by clicking on the ’+
                                                                        Follow’ button to see their posts in your feed.
                                                                    </li>
                                                                    <li>2. Share your thoughts with others and gain a
                                                                        following.</li>
                                                                </ul>
                                                                <p class="text-dark">Happy Vogel to you!</p>
                                                                <a href="#" class="text-decoration-none"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#commentModal">
                                                                    <img src="img/post1.png"
                                                                        class="img-fluid rounded mb-3" alt="post-img">
                                                                </a>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-2">
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-20 me-2">thumb_up_off_alt</span><span>30.4k</span></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-20 me-2">chat_bubble_outline</span><span>4.0k</span></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-20 me-2">repeat</span><span>617</span></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-18 me-2">share</span><span>Share</span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-3"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#commentModal">
                                                                    <span
                                                                        class="material-icons bg-white border-0 text-primary pe-2 md-36">account_circle</span>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm rounded-3 fw-light"
                                                                        placeholder="Write Your comment">
                                                                </div>
                                                                <div class="comments">
                                                                    <div class="d-flex mb-2">
                                                                        <a href="#"
                                                                            class="text-dark text-decoration-none"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#commentModal">
                                                                            <img src="img/rmate1.jpg"
                                                                                class="img-fluid rounded-circle"
                                                                                alt="commenters-img">
                                                                        </a>
                                                                        <div class="ms-2 small">
                                                                            <a href="#"
                                                                                class="text-dark text-decoration-none"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#commentModal">
                                                                                <div
                                                                                    class="bg-light px-3 py-2 rounded-4 mb-1 chat-text">
                                                                                    <p class="fw-500 mb-0">Macie Bellis
                                                                                    </p>
                                                                                    <span class="text-muted">Consectetur
                                                                                        adipisicing elit, sed do eiusmod
                                                                                        tempor incididunt ut labore et
                                                                                        dolor.</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="d-flex align-items-center ms-2">
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Like</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Reply</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <span class="small text-muted">1h</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mb-2">
                                                                        <a href="#"
                                                                            class="text-dark text-decoration-none"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#commentModal">
                                                                            <img src="img/rmate3.jpg"
                                                                                class="img-fluid rounded-circle"
                                                                                alt="commenters-img">
                                                                        </a>
                                                                        <div class="ms-2 small">
                                                                            <a href="#"
                                                                                class="text-dark text-decoration-none"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#commentModal">
                                                                                <div
                                                                                    class="bg-light px-3 py-2 rounded-4 mb-1 chat-text">
                                                                                    <p class="fw-500 mb-0">John Smith
                                                                                    </p>
                                                                                    <span class="text-muted">Lorem ipsum
                                                                                        dolor sit amet, consectetur
                                                                                        adipisicing elit, sed do eiusmod
                                                                                        tempor incididunt ut labore et
                                                                                        dolore magna aliqua. Ut enim ad
                                                                                        minim veniam.</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="d-flex align-items-center ms-2">
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Like</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Reply</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <span
                                                                                    class="small text-muted">20min</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mb-2">
                                                                        <a href="#"
                                                                            class="text-dark text-decoration-none"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#commentModal">
                                                                            <img src="img/rmate2.jpg"
                                                                                class="img-fluid rounded-circle"
                                                                                alt="commenters-img">
                                                                        </a>
                                                                        <div class="ms-2 small">
                                                                            <a href="#"
                                                                                class="text-dark text-decoration-none"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#commentModal">
                                                                                <div
                                                                                    class="bg-light px-3 py-2 rounded-4 mb-1 chat-text">
                                                                                    <p class="fw-500 mb-0">Shay Jordon
                                                                                    </p>
                                                                                    <span class="text-muted">With our
                                                                                        vastly
                                                                                        improved notifications system,
                                                                                        users
                                                                                        have more control.</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="d-flex align-items-center ms-2">
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Like</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Reply</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <span
                                                                                    class="small text-muted">10min</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-white p-3 feed-item rounded-4 mb-3 shadow-sm">
                                                <div class="d-flex">
                                                    <img src="img/rmate4.jpg"
                                                        class="img-fluid rounded-circle user-img" alt="profile-img">
                                                    <div class="d-flex ms-3 align-items-start w-100">
                                                        <div class="w-100">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <a href="profile.html"
                                                                    class="text-decoration-none d-flex align-items-center">
                                                                    <h6 class="fw-bold mb-0 text-body">John Smith</h6>
                                                                    <span
                                                                        class="ms-2 material-icons bg-primary p-0 md-16 fw-bold text-white rounded-circle ov-icon">done</span>
                                                                    <small class="text-muted ms-2">@johnsmith</small>
                                                                </a>
                                                                <div class="d-flex align-items-center small">
                                                                    <p class="text-muted mb-0">19 Feb</p>
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
                                                                            <li><a class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">delete</span>Delete</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item text-muted"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1 ltsp-n5">arrow_back_ios
                                                                                        arrow_forward_ios</span>Embed
                                                                                    Vogel</a></li>
                                                                            <li><a class="dropdown-item text-muted d-flex align-items-center"
                                                                                    href="#"><span
                                                                                        class="material-icons md-13 me-1">share</span>Share
                                                                                    via another apps</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="my-2">
                                                                <p>Nam malis menandri ea, facete debitis volumus est ut,
                                                                    commune placerat nominati ei sea. Labore alterum
                                                                    probatus no sed, ius ea quas iusto inermis, ex
                                                                    tantas
                                                                    populo nonumes nam. Quo ad verear copiosae
                                                                    gubergren,
                                                                    quis commodo est et. </p>
                                                                <a href="#" class="text-decoration-none"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#commentModal">
                                                                    <img src="img/post2.png"
                                                                        class="img-fluid rounded mb-3" alt="post-img">
                                                                </a>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-2">
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-20 me-2">thumb_up_off_alt</span><span>30.4k</span></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-20 me-2">chat_bubble_outline</span><span>4.0k</span></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-20 me-2">repeat</span><span>617</span></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#"
                                                                            class="text-muted text-decoration-none d-flex align-items-start fw-light"><span
                                                                                class="material-icons md-18 me-2">share</span><span>Share</span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-3"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#commentModal">
                                                                    <span
                                                                        class="material-icons bg-white border-0 text-primary pe-2 md-36">account_circle</span>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm rounded-3 fw-light"
                                                                        placeholder="Write Your comment">
                                                                </div>
                                                                <div class="comments">
                                                                    <div class="d-flex mb-2">
                                                                        <a href="#"
                                                                            class="text-dark text-decoration-none"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#commentModal">
                                                                            <img src="img/rmate1.jpg"
                                                                                class="img-fluid rounded-circle"
                                                                                alt="commenters-img">
                                                                        </a>
                                                                        <div class="ms-2 small">
                                                                            <a href="#"
                                                                                class="text-dark text-decoration-none"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#commentModal">
                                                                                <div
                                                                                    class="bg-light px-3 py-2 rounded-4 mb-1 chat-text">
                                                                                    <p class="fw-500 mb-0">Macie Bellis
                                                                                    </p>
                                                                                    <span class="text-muted">Consectetur
                                                                                        adipisicing elit, sed do eiusmod
                                                                                        tempor incididunt ut labore et
                                                                                        dolor.</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="d-flex align-items-center ms-2">
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Like</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Reply</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <span class="small text-muted">1h</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mb-2">
                                                                        <a href="#"
                                                                            class="text-dark text-decoration-none"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#commentModal">
                                                                            <img src="img/rmate3.jpg"
                                                                                class="img-fluid rounded-circle"
                                                                                alt="commenters-img">
                                                                        </a>
                                                                        <div class="ms-2 small">
                                                                            <a href="#"
                                                                                class="text-dark text-decoration-none"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#commentModal">
                                                                                <div
                                                                                    class="bg-light px-3 py-2 rounded-4 mb-1 chat-text">
                                                                                    <p class="fw-500 mb-0">Osahan Smith
                                                                                    </p>
                                                                                    <span class="text-muted">Great Work
                                                                                        :)</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="d-flex align-items-center ms-2">
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Like</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Reply</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <span
                                                                                    class="small text-muted">20min</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex mb-2">
                                                                        <a href="#"
                                                                            class="text-dark text-decoration-none"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#commentModal">
                                                                            <img src="img/rmate2.jpg"
                                                                                class="img-fluid rounded-circle"
                                                                                alt="commenters-img">
                                                                        </a>
                                                                        <div class="ms-2 small">
                                                                            <a href="#"
                                                                                class="text-dark text-decoration-none"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#commentModal">
                                                                                <div
                                                                                    class="bg-light px-3 py-2 rounded-4 mb-1 chat-text">
                                                                                    <p class="fw-500 mb-0">Shay Jordon
                                                                                    </p>
                                                                                    <span class="text-muted">With our
                                                                                        vastly
                                                                                        improved notifications system,
                                                                                        users
                                                                                        have more control.</span>
                                                                                </div>
                                                                            </a>
                                                                            <div class="d-flex align-items-center ms-2">
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Like</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <a href="#"
                                                                                    class="small text-muted text-decoration-none">Reply</a>
                                                                                <span
                                                                                    class="fs-3 text-muted material-icons mx-1">circle</span>
                                                                                <span
                                                                                    class="small text-muted">10min</span>
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
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="mb-0 mt-2">Loading</p>
                        </div>
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
};
</script>
