/**
 * Carousel frontend script.
 *
 * Initializes Embla Carousel on carousel blocks.
 */
import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';

/**
 * Initialize a single carousel.
 *
 * @param {HTMLElement} carousel The carousel container element.
 */
function initCarousel( carousel ) {
	const viewport = carousel.querySelector( '.wp-block-wpshadcn-carousel__viewport' );
	const prevButton = carousel.querySelector( '.wp-block-wpshadcn-carousel__prev' );
	const nextButton = carousel.querySelector( '.wp-block-wpshadcn-carousel__next' );
	const dotsContainer = carousel.querySelector( '.wp-block-wpshadcn-carousel__dots' );

	if ( ! viewport ) {
		return;
	}

	// Parse carousel data from attribute.
	let config = {};
	try {
		config = JSON.parse( carousel.dataset.carousel || '{}' );
	} catch ( e ) {
		console.warn( 'Invalid carousel config:', e );
	}

	const {
		autoplay = false,
		autoplayDelay = 3000,
		loop = true,
		orientation = 'horizontal',
	} = config;

	let slidesSelector = ".wp-block-wpshadcn-carousel-item";
	let containerSelector = ".wp-block-wpshadcn-carousel__content";

	if ( carousel.querySelector( '.wp-block-post-template' ) ) {
		containerSelector = ".wp-block-post-template";
		slidesSelector = ".wp-block-post ";
	}

	if ( carousel.querySelector( '.wc-block-product-template' ) ) {
		containerSelector = ".wc-block-product-template";
		slidesSelector = ".wc-block-product ";
	}

	console.log( containerSelector, slidesSelector );

	// Embla options.
	const options = {
		loop,
		axis: orientation === 'vertical' ? 'y' : 'x',
		align: 'start',
		containScroll: 'trimSnaps',
		container: containerSelector,
		slides: slidesSelector,
	};

	// Plugins.
	const plugins = [];
	if ( autoplay ) {
		plugins.push(
			Autoplay( {
				delay: autoplayDelay,
				stopOnInteraction: false,
				stopOnMouseEnter: true,
			} )
		);
	}

	// Initialize Embla.
	const embla = EmblaCarousel( viewport, options, plugins );
	// Arrow navigation.
	if ( prevButton ) {
		prevButton.addEventListener( 'click', () => {
			embla.scrollPrev()
	 } );
	}
	if ( nextButton ) {
		nextButton.addEventListener( 'click', () => embla.scrollNext() );
	}

	// Update button states.
	const updateButtons = () => {
		if ( ! loop ) {
			if ( prevButton ) {
				prevButton.disabled = ! embla.canScrollPrev();
			}
			if ( nextButton ) {
				nextButton.disabled = ! embla.canScrollNext();
			}
		}
	};

	// Dots navigation.
	const setupDots = () => {
		if ( ! dotsContainer ) {
			return;
		}

		const slides = embla.slideNodes();
		dotsContainer.innerHTML = '';

		slides.forEach( ( _, index ) => {
			const dot = document.createElement( 'button' );
			dot.type = 'button';
			dot.className = 'wp-block-wpshadcn-carousel__dot';
			dot.setAttribute( 'role', 'tab' );
			dot.setAttribute( 'aria-label', `Go to slide ${ index + 1 }` );
			dot.addEventListener( 'click', () => embla.scrollTo( index ) );
			dotsContainer.appendChild( dot );
		} );

		updateDots();
	};

	const updateDots = () => {
		if ( ! dotsContainer ) {
			return;
		}

		const dots = dotsContainer.querySelectorAll( '.wp-block-wpshadcn-carousel__dot' );
		const selectedIndex = embla.selectedScrollSnap();

		dots.forEach( ( dot, index ) => {
			dot.classList.toggle( 'is-active', index === selectedIndex );
			dot.setAttribute( 'aria-selected', index === selectedIndex );
		} );
	};

	// Event listeners.
	embla.on( 'init', () => {
		updateButtons();
		setupDots();
	} );

	embla.on( 'select', () => {
		updateButtons();
		updateDots();
	} );

	embla.on( 'reInit', () => {
		updateButtons();
		setupDots();
	} );
}

/**
 * Initialize all carousels on the page.
 */
function initAllCarousels() {
	const carousels = document.querySelectorAll( '.wp-block-wpshadcn-carousel' );
	carousels.forEach( initCarousel );
}

// Initialize when DOM is ready.
if ( document.readyState === 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', initAllCarousels );
} else {
	initAllCarousels();
}
