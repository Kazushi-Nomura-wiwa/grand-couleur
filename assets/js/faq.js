document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq__item');

    faqItems.forEach(function (item) {
        const question = item.querySelector('.faq__question');

        question.addEventListener('click', function () {
            const isOpen = item.classList.toggle('is-open');

            question.setAttribute('aria-expanded', isOpen);
        });
    });
});