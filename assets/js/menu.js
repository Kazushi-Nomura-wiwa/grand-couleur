document.addEventListener("DOMContentLoaded", function () {
    /*
     * ヘッダーメニュー
     */
    const toggle = document.querySelector(".site-header__toggle");
    const nav = document.querySelector(".global-nav");
    const toggleText = document.querySelector(".site-header__toggle-text");

    if (toggle && nav) {
        function setExpandedState() {
            toggle.setAttribute(
                "aria-expanded",
                String(nav.classList.contains("is_open"))
            );
        }

        function updateToggleText() {
            if (!toggleText) {
                return;
            }

            toggleText.textContent = nav.classList.contains("is_open")
                ? "CLOSE"
                : "MENU";
        }

        toggle.addEventListener("click", function () {
            nav.classList.toggle("is_open");
            setExpandedState();
            updateToggleText();
        });

        setExpandedState();
        updateToggleText();
    }

    /*
     * 利用者の声・職員の声に共通するスライダー
     */
    function initializeVoiceSlider({
        rootSelector,
        listSelector,
        itemSelector,
        prevButtonSelector,
        nextButtonSelector,
        paginationSelector,
        dotClass
    }) {
        const root = document.querySelector(rootSelector);

        if (!root) {
            return;
        }

        const viewport = root.querySelector(".flow-container");
        const list = root.querySelector(listSelector);
        const items = [...root.querySelectorAll(itemSelector)];
        const prevButton = root.querySelector(prevButtonSelector);
        const nextButton = root.querySelector(nextButtonSelector);
        const pagination = root.querySelector(paginationSelector);

        if (
            !viewport ||
            !list ||
            items.length === 0 ||
            !prevButton ||
            !nextButton ||
            !pagination
        ) {
            return;
        }

        let currentIndex = 0;
        let resizeAnimationFrameId = 0;

        /*
         * ページネーションのドットを生成
         */
        pagination.replaceChildren();

        items.forEach(function (_, index) {
            const dot = document.createElement("button");

            dot.type = "button";
            dot.className = dotClass;
            dot.setAttribute("aria-label", `${index + 1}枚目へ`);

            dot.addEventListener("click", function () {
                currentIndex = index;
                updateSlider();
            });

            pagination.appendChild(dot);
        });

        const dots = [
            ...pagination.querySelectorAll(`.${dotClass}`)
        ];

        /*
         * 選択中のitemの中心と表示領域の中心を一致させる
         */
        function updateSlider() {
            const activeItem = items[currentIndex];

            if (!activeItem) {
                return;
            }

            const itemCenter =
                activeItem.offsetLeft +
                activeItem.offsetWidth / 2;

            const viewportCenter =
                viewport.clientWidth / 2;

            const translateX =
                viewportCenter - itemCenter;

            list.style.transform =
                `translate3d(${translateX}px, 0, 0)`;

            items.forEach(function (item, index) {
                const isActive = index === currentIndex;

                item.classList.toggle("is-active", isActive);
            });

            dots.forEach(function (dot, index) {
                const isActive = index === currentIndex;

                dot.classList.toggle("is-active", isActive);

                if (isActive) {
                    dot.setAttribute("aria-current", "true");
                } else {
                    dot.removeAttribute("aria-current");
                }
            });

            prevButton.disabled = currentIndex === 0;
            nextButton.disabled =
                currentIndex === items.length - 1;
        }

        function goPrev() {
            if (currentIndex === 0) {
                return;
            }

            currentIndex -= 1;
            updateSlider();
        }

        function goNext() {
            if (currentIndex === items.length - 1) {
                return;
            }

            currentIndex += 1;
            updateSlider();
        }

        prevButton.addEventListener("click", goPrev);
        nextButton.addEventListener("click", goNext);

        /*
         * タッチ操作
         */
        let startX = 0;
        let currentX = 0;

        list.addEventListener(
            "touchstart",
            function (event) {
                startX = event.touches[0].clientX;
                currentX = startX;
            },
            { passive: true }
        );

        list.addEventListener(
            "touchmove",
            function (event) {
                currentX = event.touches[0].clientX;
            },
            { passive: true }
        );

        list.addEventListener("touchend", function () {
            const difference = currentX - startX;

            if (difference > 50) {
                goPrev();
            } else if (difference < -50) {
                goNext();
            }

            startX = 0;
            currentX = 0;
        });

        /*
         * ブラウザ幅やコンテナ幅が変化したら位置を再計算
         */
        function scheduleUpdate() {
            cancelAnimationFrame(resizeAnimationFrameId);

            resizeAnimationFrameId = requestAnimationFrame(
                updateSlider
            );
        }

        window.addEventListener("resize", scheduleUpdate);

        if ("ResizeObserver" in window) {
            const resizeObserver = new ResizeObserver(
                scheduleUpdate
            );

            resizeObserver.observe(viewport);
        }

        /*
         * 初期表示
         */
        requestAnimationFrame(updateSlider);
    }

    initializeVoiceSlider({
        rootSelector: ".users-voice",
        listSelector: ".users-voice__list",
        itemSelector: ".users-voice__item",
        prevButtonSelector: ".users-voice__button--prev",
        nextButtonSelector: ".users-voice__button--next",
        paginationSelector: ".users-voice__pagination",
        dotClass: "users-voice__dot"
    });

    initializeVoiceSlider({
        rootSelector: ".staffs-voice",
        listSelector: ".staffs-voice__list",
        itemSelector: ".staffs-voice__item",
        prevButtonSelector: ".staffs-voice__button--prev",
        nextButtonSelector: ".staffs-voice__button--next",
        paginationSelector: ".staffs-voice__pagination",
        dotClass: "staffs-voice__dot"
    });
});
