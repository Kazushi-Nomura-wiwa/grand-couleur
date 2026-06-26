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
});

