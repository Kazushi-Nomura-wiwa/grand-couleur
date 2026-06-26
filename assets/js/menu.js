document.addEventListener('DOMContentLoaded', function() {
	var toggle = document.querySelector('.site-header__toggle');
	var nav = document.querySelector('.global-nav');
	if (!toggle || !nav) return;

	function setExpandedState() {
		toggle.setAttribute('aria-expanded', nav.classList.contains('is_open'));
	}

	toggle.addEventListener('click', function(e) {
		nav.classList.toggle('is_open');
		setExpandedState();
	});

	toggle.addEventListener('keydown', function(e) {
		if (e.key === 'Enter' || e.key === ' ') {
			e.preventDefault();
			nav.classList.toggle('is_open');
			setExpandedState();
		}
	});

	// 初期状態のaria属性を設定
	setExpandedState();
});

