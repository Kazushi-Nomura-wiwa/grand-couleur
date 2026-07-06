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

	const voice = document.querySelector(".users-voice");
    if (!voice) return;

    const list = voice.querySelector(".users-voice__list");
    const items = [...voice.querySelectorAll(".users-voice__item")];
    const prevButton = voice.querySelector(".users-voice__button--prev");
    const nextButton = voice.querySelector(".users-voice__button--next");
    const pagination = voice.querySelector(".users-voice__pagination");

    let currentIndex = 0;

    // ドット生成
    items.forEach((_, index) => {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "users-voice__dot";
        dot.setAttribute("aria-label", `${index + 1}枚目へ`);

        dot.addEventListener("click", () => {
            currentIndex = index;
            updateSlider();
        });

        pagination.appendChild(dot);
    });

    const dots = [...pagination.querySelectorAll(".users-voice__dot")];

    function updateSlider() {
        list.style.transform = `translateX(${-100 * currentIndex}%)`;

        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex === items.length - 1;

        dots.forEach((dot, index) => {
            dot.classList.toggle("is-active", index === currentIndex);
        });
    }

    function goPrev() {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    }

    function goNext() {
        if (currentIndex < items.length - 1) {
            currentIndex++;
            updateSlider();
        }
    }

    prevButton.addEventListener("click", goPrev);
    nextButton.addEventListener("click", goNext);

    // スワイプ
    let startX = 0;
    let currentX = 0;

    list.addEventListener("touchstart", e => {
        startX = e.touches[0].clientX;
    });

    list.addEventListener("touchmove", e => {
        currentX = e.touches[0].clientX;
    });

    list.addEventListener("touchend", () => {
        const diff = currentX - startX;

        if (diff > 50) goPrev();
        if (diff < -50) goNext();

        startX = 0;
        currentX = 0;
    });

    updateSlider();
});