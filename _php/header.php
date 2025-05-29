<div id="sidebar_menu">
    <button class="btn btn-radius btn-sm btn-secondary toggle-sidebar"><i class="fas fa-angle-left mr-2"></i>Close
        menu</button>
    <div class="sb-setting">
        <div class="header-setting">
            <div class="hs-toggles">
                <a href="<?= $websiteUrl ?>/anime" class="hst-item" data-toggle="tooltip"
                    data-original-title="Select Anime List">
                    <div class="hst-icon"><i class="fas fa-list"></i></div>
                    <div class="name"><span>Anime</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/popular" class="hst-item" data-toggle="tooltip"
                    data-original-title="Popular Anime List">
                    <div class="hst-icon"><i class="fas fa-star"></i></div>
                    <div class="name"><span>Popular</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/anilist/random" rel="nofollow" class="hst-item" data-toggle="tooltip"
                    data-original-title="Select Random Anime">
                    <div class="hst-icon"><i class="fas fa-random"></i></div>
                    <div class="name"><span>Random</span></div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <ul class="nav sidebar_menu-list">
        <li class="nav-item active"><a class="nav-link" href="<?= $websiteUrl ?>/" title="Home"><i
                    class="fas fa-home"></i>
                Home</a></li>
        <li class="nav-item">
            <div class="nav-link" title="Types"><strong><i class="fa fa-angle-down"></i> Types</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/type/movies"
                            title="Movies">Movies</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/type/tv-series" title="TV Series">TV
                            Series</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/ova"
                            title="OVA">OVA</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/ona"
                            title="ONAs">ONA</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/special"
                            title="Special">Special</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Status"><strong><i class="fa fa-angle-down"></i> Status</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/status/completed" title="Completed">Completed</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/status/ongoing" title="Ongoing">Ongoing</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Latest"><strong><i class="fa fa-angle-down"></i> Latest</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/latest/subbed" title="Subbed">Subbed</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/latest/dubbed" title="Dubbed">Dubbed</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/latest/chinese" title="Chinese">Chinese</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Latest"><strong><i class="fa fa-angle-down"></i> Other</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_types">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/popular" title="Popular">Popular</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/new-season" title="New Season">New
                            Season</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Season"><strong><i class="fa fa-angle-down"></i> Season</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_top">
                <ul class="nav sub-menu color-list">
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/fall-2021-anime"
                            title="Fall">Fall</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/summer-2021-anime"
                            title="Summer">Summer</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/spring-2021-anime"
                            title="Spring">Spring</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $websiteUrl ?>/sub-category/winter-2022-anime"
                            title="Winter">Winter</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="nav-link" title="Genre"><strong><i class="fa fa-angle-down"></i> Genre</strong></div>
            <div class="sidebar_menu-sub show" id="sidebar_subs_genre">
                <ul class="nav color-list sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/action"
                            title="Action">Action</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/adventure"
                            title="Adventure">Adventure</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/cars" title="Cars">Cars</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/comedy"
                            title="Comedy">Comedy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/dementia"
                            title="Dementia">Dementia</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/demons"
                            title="Demons">Demons</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/drama"
                            title="Drama">Drama</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/ecchi"
                            title="Ecchi">Ecchi</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/fantasy"
                            title="Fantasy">Fantasy</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/game" title="Game">Game</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/harem"
                            title="Harem">Harem</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/historical"
                            title="Historical">Historical</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/horror"
                            title="Horror">Horror</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/josei"
                            title="Josei">Josei</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/kids" title="Kids">Kids</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/magic"
                            title="Magic">Magic</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/martial+arts"
                            title="Martial Arts">Martial Arts</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/mecha"
                            title="Mecha">Mecha</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/military"
                            title="Military">Military</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/music"
                            title="Music">Music</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/mystery"
                            title="Mystery">Mystery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/parody"
                            Title="Parody">Parody</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/police"
                            title="Police">Police</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/psychological"
                            title="Psychological">Psychological</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/romance"
                            title="Romance">Romance</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/samurai"
                            title="Samurai">Samurai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/school"
                            title="School">School</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/sci-fi" title="Sci Fi">Sci
                            Fi</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/seinen"
                            title="Seinen">Seinen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shoujo"
                            title="Shoujo">Shoujo</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shoujo+ai"
                            title="Shoujo Ai">Shoujo Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shounen"
                            title="Shounen">Shounen</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/shounen+Ai"
                            title="Shounen Ai">Shounen Ai</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/slice+of+life"
                            title="Slice of Life">Slice of Life</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/space"
                            title="Space">Space</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/sports"
                            title="Sports">Sports</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/super+power"
                            title="Super Power">Super Power</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/supernatural"
                            title="Supernatural">Supernatural</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/thriller"
                            title="Thriller">Thriller</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/vampire"
                            title="Vampire">Vampire</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/yaoi" title="Yaoi">Yaoi</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= $websiteUrl ?>/genre/yuri" title="Yuri">Yuri</a>
                    </li>
                    <li class="nav-item nav-more">
                        <a class="nav-link"><i class="fas fa-plus mr-2"></i>More</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<div id="header" class="header-home ">
    <div class="container">
        <div id="mobile_menu"><i class="fa fa-bars"></i></div>
        <a href="<?= $websiteUrl ?>/home" id="logo" title="<?= $websiteTitle ?>">
            <img src="<?= $websiteLogo ?>" width="100%" height="auto" alt="<?= $websiteTitle ?>">
            <div class="clearfix"></div>
        </a>
        <div id="search">
            <div class="search-content">
                <form action="<?= $websiteUrl ?>/search" autocomplete="off">
                    <input type="text" class="form-control search-input" name="keyword" id="searching"
                        placeholder="Search anime..." required>
                    <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="header-group">
            <div class="zoro-group">
                <div class="zrg-title"><span class="top">Join now</span><span class="bottom">
                        <?= $websiteTitle ?> Groups
                    </span></div>
                <div class="zrg-list">
                    <div class="item"><a target="_blank" href="<?= $websiteUrl ?>/donate"
                            class="zr-social-button tl-btn"><i class="fas fa-donate"></i></a></div>
                    <div class="item"><a href="<?= $telegram ?>" target="_blank" class="zr-social-button dc-btn"><i
                                class="fab fa-telegram"></i></a></div>
                    <div class="item"><a href="<?= $discord ?>" target="_blank" class="zr-social-button dc-btn"><i
                                class="fab fa-discord"></i></a></div>
                    <div class="item"><a href="<?= $redit ?>" target="_blank" class="zr-social-button rd-btn"><i
                                class="fab fa-reddit-alien"></i></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header-setting">
            <div class="hs-toggles">
                <a href="<?= $websiteUrl ?>/anime" class="hst-item" data-toggle="tooltip"
                    data-original-title="Select Anime List">
                    <div class="hst-icon"><i class="fas fa-list"></i></div>
                    <div class="name"><span>Anime</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/popular" class="hst-item" data-toggle="tooltip"
                    data-original-title="Popular Anime List">
                    <div class="hst-icon"><i class="fas fa-star"></i></div>
                    <div class="name"><span>Popular</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/type/movies" class="hst-item" data-toggle="tooltip"
                    data-original-title="Anime Movies">
                    <div class="hst-icon"><i class="fas fa-film"></i></div>
                    <div class="name"><span>Movie</span></div>
                </a>
                <a href="<?= $websiteUrl ?>/random" class="hst-item" data-toggle="tooltip"
                    data-original-title="Select Random Anime">
                    <div class="hst-icon"><i class="fas fa-random"></i></div>
                    <div class="name"><span>Random</span></div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="pick_menu">
            <div class="pick_menu-ul">
                <ul class="ulclear">
                    <li class="pmu-item pmu-item-home">
                        <a class="pmu-item-icon" href="<?= $websiteUrl ?>/" title="Home">
                            <img src="<?= $websiteUrl ?>/files/images/pick-home.svg" data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Home">
                        </a>
                    </li>
                    <li class="pmu-item pmu-item-movies">
                        <a class="pmu-item-icon" href="<?= $websiteUrl ?>/type/movies" title="Movies">
                            <img src="<?= $websiteUrl ?>/files/images/pick-movies.svg" data-toggle="tooltip" data-placement="right"
                                title="" data-original-title="Movies">
                        </a>
                    </li>
                    <li class="pmu-item pmu-item-show">
                        <a class="pmu-item-icon" href="<?= $websiteUrl ?>/type/tv-series" title="TV Series">
                            <img src="<?= $websiteUrl ?>/files/images/pick-show.svg" data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="TV Series">
                        </a>
                    </li>
                    <li class="pmu-item pmu-item-popular">
                        <a class="pmu-item-icon" href="<?= $websiteUrl ?>/popular" title="Most Popular">
                            <img src="<?= $websiteUrl ?>/files/images/pick-popular.svg" data-toggle="tooltip" data-placement="right"
                                title="" data-original-title="Most Popular">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php


        if (isset($_COOKIE['userID'])) {
            $user_id_cookie = $_COOKIE['userID'];
            $fetch = null; // Initialize fetch to null

            // Validate user_id as integer
            if (filter_var($user_id_cookie, FILTER_VALIDATE_INT)) {
                $user_id = (int)$user_id_cookie;

                $stmt_user = mysqli_prepare($conn, "SELECT id, name, email, image FROM user_form WHERE id = ?");
                if ($stmt_user) {
                    mysqli_stmt_bind_param($stmt_user, "i", $user_id);
                    if (mysqli_stmt_execute($stmt_user)) {
                        $result_user = mysqli_stmt_get_result($stmt_user);
                        if ($result_user) {
                            $fetch = mysqli_fetch_assoc($result_user); // Will be null if no user found
                        } else {
                            error_log("Header user fetch: Getting result set failed: " . mysqli_stmt_error($stmt_user));
                        }
                    } else {
                        error_log("Header user fetch: Statement execution failed: " . mysqli_stmt_error($stmt_user));
                    }
                    mysqli_stmt_close($stmt_user);
                } else {
                    error_log("Header user fetch: Statement preparation failed: " . mysqli_error($conn));
                }
            } else {
                // Invalid user ID format in cookie, potentially clear cookie or log
                error_log("Header user fetch: Invalid userID format in cookie: " . $user_id_cookie);
                // To prevent further issues, ensure $fetch remains null or unset cookie
                setcookie('userID', '', time() - 3600, '/'); // Clear invalid cookie
            }

            // Proceed only if $fetch is not null (i.e., user was found and data fetched)
            if ($fetch) { ?>
            <div id="header_right">
                <div id="user-slot">
                    <div class="header_right-user logged">
                        <div class="dropdown">
                            <div class="btn-user-avatar" data-toggle="dropdown" aria-expanded="false"
                                aria-controls="user_menu">
                                <div class="profile-avatar">
                                    <?php if (empty($fetch['image'])) { // Check if image is empty
                                        echo '<img src="' . htmlspecialchars($websiteUrl) . '/files/avatar/default/default.jpeg">';
                                    } else {
                                        echo '<img src="' . htmlspecialchars($websiteUrl) . '/files/avatar/' . htmlspecialchars($fetch['image']) . '">';
                                    } ?>
                                </div>
                            </div>
                            <div id="user_menu" class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item dropdown-item-user">
                                    <div class="user-detail">
                                        <div class="name"><strong>
                                                <?php echo htmlspecialchars($fetch['name']); ?>
                                            </strong></div>
                                        <div class="mail"><a> 
                                                <?php echo htmlspecialchars($fetch['email']); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="grid-menu">
                                    <a class="dropdown-item" href="<?= $websiteUrl ?>/user/profile"><i
                                            class="fas fa-user mr-2"></i>Profile</a>
                                    <a class="dropdown-item" href="<?= $websiteUrl ?>/user/watchlist"><i
                                            class="fas fa-heart mr-2"></i>Watch List</a>
                                    <a class="dropdown-item" href="<?= $websiteUrl ?>/user/changepass"><i
                                            class="fas fa-cog mr-2"></i>Change
                                        Password</a>
                                    <div class="clearfix"></div>

                                </div>
                                <a class="dropdown-item text-right text-white" href="<?= $websiteUrl ?>/user/logout">Logout<i
                                        class="fas fa-arrow-right ml-2 mr-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


        <?php if (!isset($_COOKIE['userID'])) { ?>
            <div id="header_right">
                <div id="user-slot">
                    <div class="header_right-user">
                        <a href="<?= $websiteUrl ?>/user/login" class="btn-user btn btn-sm btn-primary btn-login"><i
                                class="fa-solid fa-user"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div id="mobile_search" class=""><i class="fa fa-search"></i></div>
        <div class="clearfix"></div>
    </div>
</div>