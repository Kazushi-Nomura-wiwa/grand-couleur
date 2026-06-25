
// ///////////////////////////////
// FAQのカテゴリーで切り替え
// ///////////////////////////////
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.faq-tab-btn');
    const panels  = document.querySelectorAll('.faq-tab-panel');

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {

            buttons.forEach(function (b) {
                b.classList.remove('is-active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('is-active');
            btn.setAttribute('aria-selected', 'true');

            const targetId = btn.getAttribute('data-target');
            panels.forEach(function (panel) {
                panel.classList.remove('is-active');
            });
            document.getElementById(targetId).classList.add('is-active');
        });
    });
});
