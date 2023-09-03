<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/food-orphp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:00 GMT -->
<head>
     <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FoodDesk - Online Food Delivery Admin Dashboard" />
	<meta property="og:title" content="FoodDesk - Online Food Delivery Admin Dashboard" />
	<meta property="og:description" content="FoodDesk - Online Food Delivery Admin Dashboard" />
	<meta property="og:image" content="https://fooddesk.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
		<title>FoodDesk - Online Food Delivery Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
	<link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- Style css -->
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
     <link href="assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="dlab-overflow">
        <!--**********************************
            Nav header start
        ***********************************-->
          <div class="nav-header">
            <a href="index-2.php" class="brand-logo">
				<svg class="logo-abbr" width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 21.125L26.9952 23.2623C27.6771 24.0417 28.8616 24.1206 29.6409 23.4387C29.7036 23.3839 29.7625 23.325 29.8173 23.2623L31.6875 21.125H36.375C35.2848 26.5762 30.4985 30.5 24.9393 30.5H14.0607C8.5015 30.5 3.71523 26.5762 2.625 21.125H25.125Z" fill="var(--primary)"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M36.375 9.875H2.625C3.71523 4.4238 8.5015 0.5 14.0607 0.5H24.9393C30.4985 0.5 35.2848 4.4238 36.375 9.875Z" fill="var(--primary)"/>
					<path opacity="0.3" d="M36.375 13.625H2.625C1.58947 13.625 0.75 14.4645 0.75 15.5C0.75 16.5355 1.58947 17.375 2.625 17.375H36.375C37.4105 17.375 38.25 16.5355 38.25 15.5C38.25 14.4645 37.4105 13.625 36.375 13.625Z" fill="var(--primary)"/>
				</svg>
				<svg class="brand-title" width="147" height="22" viewBox="0 0 147 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.532 1.344V5.18H5.524V9.324H11.516V13.048H5.524V21H0.736V1.344H13.532ZM23.1605 21.224C21.6298 21.224 20.2485 20.8973 19.0165 20.244C17.8032 19.5907 16.8418 18.6573 16.1325 17.444C15.4418 16.2307 15.0965 14.812 15.0965 13.188C15.0965 11.5827 15.4512 10.1733 16.1605 8.96C16.8698 7.728 17.8405 6.78533 19.0725 6.132C20.3045 5.47867 21.6858 5.152 23.2165 5.152C24.7472 5.152 26.1285 5.47867 27.3605 6.132C28.5925 6.78533 29.5632 7.728 30.2725 8.96C30.9818 10.1733 31.3365 11.5827 31.3365 13.188C31.3365 14.7933 30.9725 16.212 30.2445 17.444C29.5352 18.6573 28.5552 19.5907 27.3045 20.244C26.0725 20.8973 24.6912 21.224 23.1605 21.224ZM23.1605 17.08C24.0752 17.08 24.8498 16.744 25.4845 16.072C26.1378 15.4 26.4645 14.4387 26.4645 13.188C26.4645 11.9373 26.1472 10.976 25.5125 10.304C24.8965 9.632 24.1312 9.296 23.2165 9.296C22.2832 9.296 21.5085 9.632 20.8925 10.304C20.2765 10.9573 19.9685 11.9187 19.9685 13.188C19.9685 14.4387 20.2672 15.4 20.8645 16.072C21.4805 16.744 22.2458 17.08 23.1605 17.08ZM40.9886 21.224C39.458 21.224 38.0766 20.8973 36.8446 20.244C35.6313 19.5907 34.67 18.6573 33.9606 17.444C33.27 16.2307 32.9246 14.812 32.9246 13.188C32.9246 11.5827 33.2793 10.1733 33.9886 8.96C34.698 7.728 35.6686 6.78533 36.9006 6.132C38.1326 5.47867 39.514 5.152 41.0446 5.152C42.5753 5.152 43.9566 5.47867 45.1886 6.132C46.4206 6.78533 47.3913 7.728 48.1006 8.96C48.81 10.1733 49.1646 11.5827 49.1646 13.188C49.1646 14.7933 48.8006 16.212 48.0726 17.444C47.3633 18.6573 46.3833 19.5907 45.1326 20.244C43.9006 20.8973 42.5193 21.224 40.9886 21.224ZM40.9886 17.08C41.9033 17.08 42.678 16.744 43.3126 16.072C43.966 15.4 44.2926 14.4387 44.2926 13.188C44.2926 11.9373 43.9753 10.976 43.3406 10.304C42.7246 9.632 41.9593 9.296 41.0446 9.296C40.1113 9.296 39.3366 9.632 38.7206 10.304C38.1046 10.9573 37.7966 11.9187 37.7966 13.188C37.7966 14.4387 38.0953 15.4 38.6926 16.072C39.3086 16.744 40.074 17.08 40.9886 17.08ZM50.7528 13.16C50.7528 11.5547 51.0514 10.1453 51.6488 8.932C52.2648 7.71867 53.0954 6.78533 54.1408 6.132C55.1861 5.47867 56.3528 5.152 57.6408 5.152C58.6674 5.152 59.6008 5.36667 60.4408 5.796C61.2994 6.22533 61.9714 6.804 62.4568 7.532V0.28H67.2448V21H62.4568V18.76C62.0088 19.5067 61.3648 20.104 60.5248 20.552C59.7034 21 58.7421 21.224 57.6408 21.224C56.3528 21.224 55.1861 20.8973 54.1408 20.244C53.0954 19.572 52.2648 18.6293 51.6488 17.416C51.0514 16.184 50.7528 14.7653 50.7528 13.16ZM62.4568 13.188C62.4568 11.9933 62.1208 11.0507 61.4488 10.36C60.7954 9.66933 59.9928 9.324 59.0408 9.324C58.0888 9.324 57.2768 9.66933 56.6048 10.36C55.9514 11.032 55.6248 11.9653 55.6248 13.16C55.6248 14.3547 55.9514 15.3067 56.6048 16.016C57.2768 16.7067 58.0888 17.052 59.0408 17.052C59.9928 17.052 60.7954 16.7067 61.4488 16.016C62.1208 15.3253 62.4568 14.3827 62.4568 13.188ZM78.0727 1.344C80.1447 1.344 81.9553 1.75467 83.5047 2.576C85.054 3.39733 86.2487 4.55467 87.0887 6.048C87.9473 7.52267 88.3767 9.23067 88.3767 11.172C88.3767 13.0947 87.9473 14.8027 87.0887 16.296C86.2487 17.7893 85.0447 18.9467 83.4767 19.768C81.9273 20.5893 80.126 21 78.0727 21H70.7087V1.344H78.0727ZM77.7647 16.856C79.5753 16.856 80.9847 16.3613 81.9927 15.372C83.0007 14.3827 83.5047 12.9827 83.5047 11.172C83.5047 9.36133 83.0007 7.952 81.9927 6.944C80.9847 5.936 79.5753 5.432 77.7647 5.432H75.4967V16.856H77.7647ZM105.78 12.936C105.78 13.384 105.752 13.8507 105.696 14.336H94.8604C94.9351 15.3067 95.2431 16.0533 95.7844 16.576C96.3444 17.08 97.0257 17.332 97.8284 17.332C99.0231 17.332 99.8537 16.828 100.32 15.82H105.416C105.155 16.8467 104.679 17.7707 103.988 18.592C103.316 19.4133 102.467 20.0573 101.44 20.524C100.414 20.9907 99.2657 21.224 97.9964 21.224C96.4657 21.224 95.1031 20.8973 93.9084 20.244C92.7137 19.5907 91.7804 18.6573 91.1084 17.444C90.4364 16.2307 90.1004 14.812 90.1004 13.188C90.1004 11.564 90.4271 10.1453 91.0804 8.932C91.7524 7.71867 92.6857 6.78533 93.8804 6.132C95.0751 5.47867 96.4471 5.152 97.9964 5.152C99.5084 5.152 100.852 5.46933 102.028 6.104C103.204 6.73867 104.119 7.644 104.772 8.82C105.444 9.996 105.78 11.368 105.78 12.936ZM100.88 11.676C100.88 10.8547 100.6 10.2013 100.04 9.716C99.4804 9.23067 98.7804 8.988 97.9404 8.988C97.1377 8.988 96.4564 9.22133 95.8964 9.688C95.3551 10.1547 95.0191 10.8173 94.8884 11.676H100.88ZM114.662 21.224C113.3 21.224 112.086 20.9907 111.022 20.524C109.958 20.0573 109.118 19.4227 108.502 18.62C107.886 17.7987 107.541 16.884 107.466 15.876H112.198C112.254 16.4173 112.506 16.856 112.954 17.192C113.402 17.528 113.953 17.696 114.606 17.696C115.204 17.696 115.661 17.584 115.978 17.36C116.314 17.1173 116.482 16.8093 116.482 16.436C116.482 15.988 116.249 15.6613 115.782 15.456C115.316 15.232 114.56 14.9893 113.514 14.728C112.394 14.4667 111.461 14.196 110.714 13.916C109.968 13.6173 109.324 13.16 108.782 12.544C108.241 11.9093 107.97 11.06 107.97 9.996C107.97 9.1 108.213 8.288 108.698 7.56C109.202 6.81333 109.93 6.22533 110.882 5.796C111.853 5.36667 113.001 5.152 114.326 5.152C116.286 5.152 117.826 5.63733 118.946 6.608C120.085 7.57867 120.738 8.86667 120.906 10.472H116.482C116.408 9.93067 116.165 9.50133 115.754 9.184C115.362 8.86667 114.84 8.708 114.186 8.708C113.626 8.708 113.197 8.82 112.898 9.044C112.6 9.24933 112.45 9.53867 112.45 9.912C112.45 10.36 112.684 10.696 113.15 10.92C113.636 11.144 114.382 11.368 115.39 11.592C116.548 11.8907 117.49 12.1893 118.218 12.488C118.946 12.768 119.581 13.2347 120.122 13.888C120.682 14.5227 120.972 15.3813 120.99 16.464C120.99 17.3787 120.729 18.2 120.206 18.928C119.702 19.6373 118.965 20.1973 117.994 20.608C117.042 21.0187 115.932 21.224 114.662 21.224ZM133.468 21L128.708 14.448V21H123.92V0.28H128.708V11.732L133.44 5.376H139.348L132.852 13.216L139.404 21H133.468ZM143.468 21.224C142.628 21.224 141.938 20.9813 141.396 20.496C140.874 19.992 140.612 19.376 140.612 18.648C140.612 17.9013 140.874 17.276 141.396 16.772C141.938 16.268 142.628 16.016 143.468 16.016C144.29 16.016 144.962 16.268 145.484 16.772C146.026 17.276 146.296 17.9013 146.296 18.648C146.296 19.376 146.026 19.992 145.484 20.496C144.962 20.9813 144.29 21.224 143.468 21.224Z" fill="var(--primary)"/>
				</svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dlab-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dlab-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
					<div class="container d-block my-0">
						<div class="d-flex align-items-center justify-content-sm-between justify-content-end">
							<div class="header-left">
								<div class="nav-item d-flex align-items-center">
									<div class="d-flex header-bx">									
										<select class="selectpicker">
											<option data-icon="fa-solid fa-location-dot mx-2">አዲስ አበባ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አዳማ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">ጎንደር</option>
											<option data-icon="fa-solid fa-location-dot mx-2">ባህር ዳር</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አክሱም</option> 
											<option data-icon="fa-solid fa-location-dot mx-2">ጅማ</option> 
											<option data-icon="fa-solid fa-location-dot mx-2">ጋምቤላ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አሶሳ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አሰላ</option>
										</select>
										<div class="input-group search-area2 ps-3" id="Serach-bar">
											<span class="input-group-text h-search"><a href="javascript:void(0)"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M16.6751 19.4916C16.2195 19.036 16.2195 18.2973 16.6751 17.8417C17.1307 17.3861 17.8694 17.3861 18.325 17.8417L22.9917 22.5084C23.4473 22.964 23.4473 23.7027 22.9917 24.1583C22.5361 24.6139 21.7974 24.6139 21.3417 24.1583L16.6751 19.4916Z" fill="var(--primary)"/>
											<path d="M12.8333 18.6667C16.055 18.6667 18.6666 16.055 18.6666 12.8333C18.6666 9.61168 16.055 7 12.8333 7C9.61163 7 6.99996 9.61168 6.99996 12.8333C6.99996 16.055 9.61163 18.6667 12.8333 18.6667ZM12.8333 21C8.32297 21 4.66663 17.3437 4.66663 12.8333C4.66663 8.32301 8.32297 4.66667 12.8333 4.66667C17.3436 4.66667 21 8.32301 21 12.8333C21 17.3437 17.3436 21 12.8333 21Z" fill="var(--primary)"/>
											</svg>
											</a></span>
											<input type="text" class="form-control"  placeholder="What do you want eat today">
											
										</div>
										<div class="search-drop">
											<div class="card tag-bx">
												<div class="card-header d-block border-0">
													<h4>Recently Searched</h4>
													<ul class="d-flex align-items-center flex-wrap">
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Bakery</a></li>		
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Burger</a></li>																
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Beverage</a></li>	
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Chicken</a></li>															
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded mt-3 mt-xl-0">Pizza</a></li>
													</ul>
												</div>
												<div class="card-body pt-0">
													<h4>ታዋቂ ምግቦች</h4>
														<div class="swiper mySwiper-4">
														  <div class="swiper-wrapper">
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href= "javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href= "javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
														  </div>
														</div>
												</div>
											</div>
											<div id="close-searchbox"></div>
										</div>
									</div>
								</div>
							</div>
							
							<ul class="navbar-nav header-right ">
								
								<li class="nav-item d-flex align-items-center">
									
								</li>
								<li>
									
																		<div class="dropdown header-profile2 ">
										<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
											<div class="header-info2 d-flex align-items-center">
												<img src="assets/images/banner-img/pic-1.png" alt="">
												<div class="d-flex align-items-center sidebar-info">
													<div>
														<h6 class="font-w500 mb-0 ms-2">አበበ</h6>
													</div>	
													<i class="fas fa-chevron-down"></i>
												</div>
												
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="app-profphp" class="dropdown-item ai-icon ">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span class="ms-2">መግለጫ</span>
											</a>
											<a href="email-inphp" class="dropdown-item ai-icon">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ms-2">የገቢ መልእክት ሳጥን</span>
											</a>
											<a href="edit-profphp" class="dropdown-item ai-icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span class="ms-2">ኤዲት መግለጫ</span>
											</a>
											<a href="messphp" class="dropdown-item ai-icon ">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="var(--primary)"/>
													</g>
												</svg>
													<span class="ms-2">መልእክት</span>
											</a>
											<a href="notificatphp" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="var(--primary)"/>
													<circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
											<span class="ms-2">ማስታወቂያ </span>
										</a>
										<a href="settphp" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="var(--primary)" fill-rule="nonzero" opacity="0.3"/>
													<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="var(--primary)"/>
												</g>
											</svg>
											<span class="ms-2">ቅንጅት </span>
										</a>
											<a href="lophp" class="dropdown-item ai-icon ms-1">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
												<span class="ms-1">ይውጡ </span>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav border-right">
            <div class="dlabnav-scroll">
					<p class="menu-title style-1"> ዋና ምናሌ</p>
				<ul class="metismenu" id="menu">
                     <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="bi bi-grid"></i>
							<span class="nav-text">ዳሽቦርድ</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="food-orphp">የምግብ ማዘዣ</a></li>
							<li><a href="favorite-mphp">ተወዳጅ ምናሌ</a></li>
							<li><a href="messphp">መልእክት</a></li>	
							<li><a href="order-histphp">የትዕዛዝ ታሪክy</a></li>	
							<li><a href="notificatphp">ማስታወቂያ</a></li>	
							<li><a href="bphp">ሂሳብ</a></li>	
							<li><a href="settphp">ቅንብር</a></li>	
						</ul>

                    </li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						
								<i class="bi bi-shop-window"></i>
							<span class="nav-text">ሬስቶራንት</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="dashbophp">ዳሽቦርድ</a></li>
							<li><a href="mphp">ምናሌ</a></li>
							<li><a href="ordphp">ትዕዛዞች</a></li>
							<li><a href="customer-reviphp">ግምገማዎች</a></li>
							<li><a href="restro-settphp">ቅንብር</a></li>
							
						</ul>

                    </li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="bi bi-bicycle"></i>

							<span class="nav-text">አሽከርካሪዎች</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="deliver-mphp">ዳሽቦርድ</a></li>
							<li><a href="deliver-orphp">ትዕዛዞች</a></li>
							<li><a href="feedbphp">ግብረ መልስ</a></li>
						</ul>

                    </li>
                </ul>
				<div class="plus-box">
					<div class="d-flex align-items-center">
						<h5>ነፃ ቫውቸር ለማግኘት መለያዎን ያሻሽሉ</h5>
						
					</div>
					<a href="javascript:void(0);" class="btn bg-white btn-sm">አሻሽል</a>
				</div>
				<div class="copyright mt-0">
					<p><strong>AASTU - የመስመር ላይ የምግብ አቅርቦት አስተዳዳሪ ዳሽቦርድ</strong> © 2023 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> ሽጋ</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-xxl-12">
						<div class="row">
							<div class="col-xl-4 col-sm-6 sp15">
								<div class="card h-auto b-hover">
									<div class="card-body px-3">
										<div class="text-center">
											<h4>Order #1</h4>
											<p>Nov 11, 2022 , 18:38 PM</p>
										</div>
										<hr>
										<div>
											<h4>Fast Food Resto</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="mb-0">1k+ Reviews</p>
											</div>
											<hr>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>Delivery Time </span>
											<h6 class="mb-0">10 Min</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span>Distance</span>
											<h6 class="mb-0">2.5 Km</h6>
										</div>
										<hr>
										<div class="order-menu">
											<h6 class="font-w600">Order Menu</h6>
											<div class="d-flex align-items-center mb-2">
												<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w500 text-nowrap mb-0"><a href="javascript:void(0);">Pepperoni Pizza</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<div class="d-flex align-items-center">
												<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w500 text-nowrap mb-0"><a href="javascript:void(0);">ፍርፍር</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<hr>
											<div class="d-flex align-items-center justify-content-between mb-4">
												<h4 class="mb-0">Total</h4>
												<h4 class="mb-0 text-primary">$202.00</h4>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-block">Completed</a>
										</div>
									</div>
								</div>
							</div> 
							<div class="col-xl-4 col-sm-6 sp15">
								<div class="card h-auto b-hover">
									<div class="card-body px-3">
										<div class="text-center">
											<h4>Order #2</h4>
											<p>Nov 11, 2022 , 18:38 PM</p>
										</div>
										<hr>
										<div>
											<h4>Fast Food Resto</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="mb-0">1k+ Reviews</p>
											</div>
											<hr>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>Delivery Time </span>
											<h6 class="mb-0">10 Min</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span>Distance</span>
											<h6 class="mb-0">2.5 Km</h6>
										</div>
										<hr>
										<div class="order-menu">
											<h6>Order Menu</h6>
											<div class="d-flex align-items-center mb-2">
												<img class="me-2" src="assets/images/popular-img/review-img/pic-2.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w500 text-nowrap mb-0"><a href="javascript:void(0);">Japan Ramen</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<div class="d-flex align-items-center">
												<img class="me-2" src="assets/images/popular-img/pic-2.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w500 text-nowrap mb-0"><a href="javascript:void(0);">Beef Burger</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<hr>
											<div class="d-flex align-items-center justify-content-between mb-4">
												<h4 class="mb-0">Total</h4>
												<h4 class="mb-0 text-primary">$202.00</h4>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-primary bgl-primary btn-block">Delivering to you</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 sp15">
								<div class="card h-auto b-hover">
									<div class="card-body px-3">
										<div class="text-center">
											<h4>Order #2</h4>
											<p>Nov 11, 2022 , 18:38 PM</p>
										</div>
										<hr>
										<div>
											<h4>Fast Food Resto</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="mb-0">1k+ Reviews</p>
											</div>
											<hr>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>Delivery Time </span>
											<h6 class="mb-0">10 Min</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span>Distance</span>
											<h6 class="mb-0">2.5 Km</h6>
										</div>
										<hr>
										<div class="order-menu">
											<h6>Order Menu</h6>
											<div class="d-flex align-items-center mb-2">
												<img class="me-2" src="assets/images/popular-img/review-img/pic-3.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Fried Rice</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<div class="d-flex align-items-center">
												<img class="me-2" src="assets/images/popular-img/pic-3.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Cheese Burger</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<hr>
											<div class="d-flex align-items-center justify-content-between mb-4">
												<h4 class="mb-0">Total</h4>
												<h4 class="mb-0 text-primary">$202.00</h4>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-info bgl-info btn-block ">Order being prepared</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 sp15">
								<div class="card h-auto b-hover">
									<div class="card-body px-3">
										<div class="text-center">
											<h4>Order #3</h4>
											<p>Nov 11, 2022 , 18:38 PM</p>
										</div>
										<hr>
										<div>
											<h4>Fast Food Resto</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="mb-0">1k+ Reviews</p>
											</div>
											<hr>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>Delivery Time </span>
											<h6 class="mb-0">10 Min</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span>Distance</span>
											<h6 class="mb-0">2.5 Km</h6>
										</div>
										<hr>
										<div class="order-menu">
											<h6>Order Menu</h6>
											<div class="d-flex align-items-center mb-2">
												<img class="me-2" src="assets/images/popular-img/review-img/pic-4.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Vegan Pizza</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<div class="d-flex align-items-center">
												<img class="me-2" src="assets/images/popular-img/pic-4.jpg" alt="">
												<div class="order-items">
													<a href="javascript:void(0);"><h6 class="font-w600 text-nowrap mb-0">Double Burger</h6></a>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<hr>
											<div class="d-flex align-items-center justify-content-between mb-4">
												<h4 class="mb-0">Total</h4>
												<h4 class="mb-0 text-primary">$202.00</h4>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-block">Completed</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 sp15">
								<div class="card h-auto b-hover">
									<div class="card-body px-3">
										<div class="text-center">
											<h4>Order #4</h4>
											<p>Nov 11, 2022 , 18:38 PM</p>
										</div>
										<hr>
										<div>
											<h4>Fast Food Resto</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="mb-0">1k+ Reviews</p>
											</div>
											<hr>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>Delivery Time </span>
											<h6 class="mb-0">10 Min</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span>Distance</span>
											<h6 class="mb-0">2.5 Km</h6>
										</div>
										<hr>
										<div class="order-menu">
											<h6>Order Menu</h6>
											<div class="d-flex align-items-center mb-2">
												<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Pepperoni Pizza</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<div class="d-flex align-items-center">
												<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">ፍርፍር</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<hr>
											<div class="d-flex align-items-center justify-content-between mb-4">
												<h4 class="mb-0">Total</h4>
												<h4 class="mb-0 text-primary">$202.00</h4>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-block">Completed</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-6 sp15">
								<div class="card h-auto b-hover">
									<div class="card-body px-3">
										<div class="text-center">
											<h4>Order #4</h4>
											<p>Nov 11, 2022 , 18:38 PM</p>
										</div>
										<hr>
										<div>
											<h4>Fast Food Resto</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="mb-0">1k+ Reviews</p>
											</div>
											<hr>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>Delivery Time </span>
											<h6 class="mb-0">10 Min</h6>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<span>Distance</span>
											<h6 class="mb-0">2.5 Km</h6>
										</div>
										<hr>
										<div class="order-menu">
											<h6>Order Menu</h6>
											<div class="d-flex align-items-center mb-2">
												<img class="me-2" src="assets/images/popular-img/review-img/pic-2.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Japan Ramen</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<div class="d-flex align-items-center">
												<img class="me-2" src="assets/images/popular-img/pic-3.jpg" alt="">
												<div class="order-items">
													<h6 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Cheese Burger</a></h6>
													<p class="mb-0">x1</p>
												</div>
												<h6 class="text-primary mb-0 ms-auto">+$5.59</h6>
											</div>
											<hr>
											<div class="d-flex align-items-center justify-content-between mb-4">
												<h4 class="mb-0">Total</h4>
												<h4 class="mb-0 text-primary">$202.00</h4>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-block">Completed</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-xxl-12 sp30">
						<div class="card  dlab-position h-auto">
							<div class="card-body px-3">
								<div class="tracker-bx">
									<h4 class="cate-title mb-4">Order Tracker</h4>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14448.885880295826!2d75.81852004999999!3d25.128202299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1658125804979!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									<div>
										<p class="fs-18">Your Address</p>
										<div class="d-flex align-items-center mb-2">
											<svg  class="me-2" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M17.4599 8.63C17.3195 7.16892 16.8031 5.76909 15.9611 4.56682C15.119 3.36456 13.98 2.40083 12.6549 1.7695C11.3298 1.13816 9.86376 0.860724 8.3996 0.964207C6.93543 1.06769 5.52301 1.54856 4.29988 2.36C3.24908 3.06265 2.36693 3.9893 1.71682 5.07339C1.06672 6.15749 0.664776 7.37211 0.539881 8.63C0.417363 9.87966 0.574555 11.1409 1.00005 12.3223C1.42555 13.5036 2.10868 14.5755 2.99988 15.46L8.29988 20.77C8.39284 20.8637 8.50344 20.9381 8.6253 20.9889C8.74716 21.0397 8.87787 21.0658 9.00988 21.0658C9.14189 21.0658 9.2726 21.0397 9.39446 20.9889C9.51632 20.9381 9.62692 20.8637 9.71988 20.77L14.9999 15.46C15.8911 14.5755 16.5742 13.5036 16.9997 12.3223C17.4252 11.1409 17.5824 9.87966 17.4599 8.63ZM13.5999 14.05L8.99988 18.65L4.39988 14.05C3.72197 13.3721 3.20268 12.5523 2.87935 11.6498C2.55601 10.7472 2.43667 9.7842 2.52988 8.83C2.6237 7.86111 2.93164 6.92516 3.43145 6.08985C3.93126 5.25453 4.61044 4.54071 5.41988 4C6.48083 3.29524 7.72619 2.9193 8.99988 2.9193C10.2736 2.9193 11.5189 3.29524 12.5799 4C13.3869 4.53862 14.0646 5.24928 14.5642 6.08094C15.0639 6.9126 15.3732 7.84461 15.4699 8.81C15.5661 9.76743 15.4483 10.7343 15.1249 11.6406C14.8014 12.5468 14.2805 13.3698 13.5999 14.05ZM8.99988 5C8.10986 5 7.23984 5.26392 6.49982 5.75839C5.75979 6.25286 5.18302 6.95566 4.84242 7.77793C4.50183 8.6002 4.41271 9.505 4.58635 10.3779C4.75998 11.2508 5.18856 12.0526 5.8179 12.682C6.44724 13.3113 7.24906 13.7399 8.12197 13.9135C8.99489 14.0872 9.89969 13.9981 10.722 13.6575C11.5442 13.3169 12.247 12.7401 12.7415 12.0001C13.236 11.26 13.4999 10.39 13.4999 9.5C13.4972 8.30734 13.0223 7.16428 12.1789 6.32094C11.3356 5.4776 10.1925 5.00265 8.99988 5ZM8.99988 12C8.50543 12 8.02208 11.8534 7.61096 11.5787C7.19983 11.304 6.8794 10.9135 6.69018 10.4567C6.50096 9.9999 6.45145 9.49723 6.54792 9.01228C6.64438 8.52733 6.88248 8.08187 7.23211 7.73224C7.58175 7.38261 8.0272 7.1445 8.51215 7.04804C8.99711 6.95158 9.49977 7.00109 9.95659 7.1903C10.4134 7.37952 10.8039 7.69996 11.0786 8.11108C11.3533 8.5222 11.4999 9.00555 11.4999 9.5C11.4999 10.163 11.2365 10.7989 10.7676 11.2678C10.2988 11.7366 9.66292 12 8.99988 12Z" fill="#FC8019"/>
											</svg>
											<h4 class="mb-0 font-w700">Elm Street, 23</h4>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
									</div>
								</div>
								<div class="order-menu style-3">
									<h4 class="my-4">Order Menu</h4>
									<div class="d-flex align-items-center mb-3">
										<img class="me-3" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
										<div>
											<h4 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Pepperoni Pizza</a></h4>
											<p class="mb-0">x1</p>
										</div>
										<h4 class="text-primary mb-0 ms-auto">+$5.59</h4>
									</div>
									<div class="d-flex align-items-center mb-3">
										<img class="me-3" src="assets/images/popular-img/review-img/pic-2.jpg" alt="">
										<div>
											<h4 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Japan Ramen</a></h4>
											<p class="mb-0">x1</p>
										</div>
										<h4 class="text-primary mb-0 ms-auto">+$5.59</h4>
									</div>
									<div class="d-flex align-items-center mb-3">
										<img class="me-3" src="assets/images/popular-img/review-img/pic-4.jpg" alt="">
										<div>
											<h4 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Japan Ramen</a></h4>
											<p class="mb-0">x1</p>
										</div>
										<h4 class="text-primary mb-0 ms-auto">+$5.59</h4>
									</div>
									<div class="d-flex align-items-center mb-4">
										<img class="me-3" src="assets/images/popular-img/review-img/pic-3.jpg" alt="">
										<div>
											<h4 class="font-w600 text-nowrap mb-0"><a href="javascript:void(0);">Fried Rice</a></h4>
											<p class="mb-0">x1</p>
										</div>
										<h4 class="text-primary mb-0 ms-auto">+$5.59</h4>
									</div>
									<hr>
								</div>
								<div class="d-flex align-items-center justify-content-between  mb-3 mt-3">
									<h4 class="font-w500">Total</h4>
									<h3 class="text-primary">$202.00</h3>
								</div>
								<a href="javascript:void(0);" class="btn btn-outline-primary bgl-primary btn-block">Delivering to you</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
           <div class="copyright border-top">
   <p>Copyright © Designed   by <a href="https://themeforest.net/user/dexignlabs" target="_blank">DexignLab</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required assets/vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script>
	
	<!-- Apex Chart -->
	<!-- Dashboard 1 -->
    <script src="assets/js/custom.js"></script>
	<script src="assets/js/dlabnav-init.js"></script>
	<script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
	<script>
		$('.my-select').selectpicker();

	</script>
</body>

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/food-orphp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:02 GMT -->
</html>