document.addEventListener('DOMContentLoaded', function() {
	var toggle = document.querySelector('.site-header__toggle');
	var nav = document.querySelector('.global-nav');
	var toggleText = document.querySelector('.site-header__toggle-text');
	if (!toggle || !nav) return;

	function setExpandedState() {
		toggle.setAttribute('aria-expanded', nav.classList.contains('is_open'));
	}

	function updateToggleText() {
		if (toggleText) {
			toggleText.textContent = nav.classList.contains('is_open') ? 'CLOSE' : 'MENU';
		}
	}

	toggle.addEventListener('click', function(e) {
		nav.classList.toggle('is_open');
		setExpandedState();
		updateToggleText();
	});

	toggle.addEventListener('keydown', function(e) {
		if (e.key === 'Enter' || e.key === ' ') {
			e.preventDefault();
			nav.classList.toggle('is_open');
			setExpandedState();
			updateToggleText();
		}
	});

	// 初期状態のaria属性を設定
	setExpandedState();
	updateToggleText();


	// ユーザーの声スライダー
	const userVoice = document.querySelector(".users-voice");
    if (!userVoice) return;

    const userList = userVoice.querySelector(".users-voice__list");
    const userItems = [...userVoice.querySelectorAll(".users-voice__item")];
    const userPrevButton = userVoice.querySelector(".users-voice__button--prev");
    const userNextButton = userVoice.querySelector(".users-voice__button--next");
    const userPagination = userVoice.querySelector(".users-voice__pagination");

    let userCurrentIndex = 0;

    // ドット生成
    userItems.forEach((_, index) => {
        const userDot = document.createElement("button");
        userDot.type = "button";
        userDot.className = "users-voice__dot";
        userDot.setAttribute("aria-label", `${index + 1}枚目へ`);

        userDot.addEventListener("click", () => {
            userCurrentIndex = index;
            userUpdateSlider();
        });

        userPagination.appendChild(userDot);
    });

    const userDots = [...userPagination.querySelectorAll(".users-voice__dot")];

    function userUpdateSlider() {
        const userContainerWidth = userVoice.querySelector(".flow-container").clientWidth;
        const userItemWidth = userItems[userCurrentIndex].offsetWidth;

        const userOffset =
            userItems[userCurrentIndex].offsetLeft
            - (userContainerWidth - userItemWidth) / 2;

        userList.style.transform = `translateX(${-userOffset}px)`;

        userPrevButton.disabled = userCurrentIndex === 0;
        userNextButton.disabled = userCurrentIndex === userItems.length - 1;

        userDots.forEach((dot, index) => {
            dot.classList.toggle("is-active", index === userCurrentIndex);
        });

        userItems.forEach((item, index) => {
            item.classList.toggle("is-active", index === userCurrentIndex);
        });
    }

    function userGoPrev() {
        if (userCurrentIndex > 0) {
            userCurrentIndex--;
            userUpdateSlider();
        }
    }

    function userGoNext() {
        if (userCurrentIndex < userItems.length - 1) {
            userCurrentIndex++;
            userUpdateSlider();
        }
    }

    userPrevButton.addEventListener("click", userGoPrev);
    userNextButton.addEventListener("click", userGoNext);

    // スワイプ
    let userStartX = 0;
    let userCurrentX = 0;

    userList.addEventListener("touchstart", e => {
        userStartX = e.touches[0].clientX;
    });

    userList.addEventListener("touchmove", e => {
        userCurrentX = e.touches[0].clientX;
    });

    userList.addEventListener("touchend", () => {
        const diff = userCurrentX - userStartX;

        if (diff > 50) userGoPrev();
        if (diff < -50) userGoNext();

        userStartX = 0;
        userCurrentX = 0;
    });

    userUpdateSlider();

    // 職員の声スライダー
	const staffVoice = document.querySelector(".staffs-voice");
    if (!staffVoice) return;

    const staffList = staffVoice.querySelector(".staffs-voice__list");
    const staffItems = [...staffVoice.querySelectorAll(".staffs-voice__item")];
    const staffPrevButton = staffVoice.querySelector(".staffs-voice__button--prev");
    const staffNextButton = staffVoice.querySelector(".staffs-voice__button--next");
    const staffPagination = staffVoice.querySelector(".staffs-voice__pagination");

    let staffCurrentIndex = 0;

    // ドット生成
    staffItems.forEach((_, index) => {
        const staffDot = document.createElement("button");
        staffDot.type = "button";
        staffDot.className = "staffs-voice__dot";
        staffDot.setAttribute("aria-label", `${index + 1}枚目へ`);

        staffDot.addEventListener("click", () => {
            staffCurrentIndex = index;
            staffUpdateSlider();
        });

        staffPagination.appendChild(staffDot);
    });

    const staffDots = [...staffPagination.querySelectorAll(".staffs-voice__dot")];

    function staffUpdateSlider() {
        const staffContainerWidth = staffVoice.querySelector(".flow-container").clientWidth;
        const staffItemWidth = staffItems[staffCurrentIndex].offsetWidth;

        const staffOffset =
            staffItems[staffCurrentIndex].offsetLeft
            - (staffContainerWidth - staffItemWidth) / 2;

        staffList.style.transform = `translateX(${-staffOffset}px)`;

        staffPrevButton.disabled = staffCurrentIndex === 0;
        staffNextButton.disabled = staffCurrentIndex === staffItems.length - 1;

        staffDots.forEach((dot, index) => {
            dot.classList.toggle("is-active", index === staffCurrentIndex);
        });

        staffItems.forEach((item, index) => {
            item.classList.toggle("is-active", index === staffCurrentIndex);
        });
    }

    function staffGoPrev() {
        if (staffCurrentIndex > 0) {
            staffCurrentIndex--;
            staffUpdateSlider();
        }
    }

    function staffGoNext() {
        if (staffCurrentIndex < staffItems.length - 1) {
            staffCurrentIndex++;
            staffUpdateSlider();
        }
    }

    staffPrevButton.addEventListener("click", staffGoPrev);
    staffNextButton.addEventListener("click", staffGoNext);

    // スワイプ
    let staffStartX = 0;
    let staffCurrentX = 0;

    staffList.addEventListener("touchstart", e => {
        staffStartX = e.touches[0].clientX;
    });

    staffList.addEventListener("touchmove", e => {
        staffCurrentX = e.touches[0].clientX;
    });

    staffList.addEventListener("touchend", () => {
        const diff = staffCurrentX - staffStartX;

        if (diff > 50) staffGoPrev();
        if (diff < -50) staffGoNext();

        staffStartX = 0;
        staffCurrentX = 0;
    });

    staffUpdateSlider();

});