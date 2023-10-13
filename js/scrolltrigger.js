class App {

	constructor() {

		this._initialize();
		this._render(); // lenis

	}

	_initialize() {
		this._setInitialStates();
		this._createLenis();
		this._createIntro();
	}

	_setInitialStates() {
		gsap.set('.hero h2 span', {
			opacity: 0
		})
	}

	_createLenis() {
		this.lenis = new Lenis({
			lerp: 0.1
		})
	}

	_createIntro() {
		const tl = gsap.timeline();

		tl.to('.hero h2', {
			opacity: 1
		}).to('.hero h2 span', {
			opacity: 1,
			ease: 'expo.out',
			duration: 3,
			stagger: 0.01
		})
	}
	

	_render(time) {
		this.lenis.raf(time);
		requestAnimationFrame(this._render.bind(this))
	}
}

new App();