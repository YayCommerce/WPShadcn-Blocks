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
	const viewport = carousel.querySelector( '.wp-block-shadcn-carousel__viewport' );
	const prevButton = carousel.querySelector( '.wp-block-shadcn-carousel__prev' );
	const nextButton = carousel.querySelector( '.wp-block-shadcn-carousel__next' );
	const dotsContainer = carousel.querySelector( '.wp-block-shadcn-carousel__dots' );

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
		effect = 'none',
	} = config;

	const isCoverflow = 'coverflow' === effect;

	let slidesSelector = ".wp-block-shadcn-carousel-item";
	let containerSelector = ".wp-block-shadcn-carousel__content";

	if ( carousel.querySelector( '.wp-block-post-template' ) ) {
		containerSelector = ".wp-block-post-template";
		slidesSelector = ".wp-block-post ";
	}

	if ( carousel.querySelector( '.wc-block-product-template' ) ) {
		containerSelector = ".wc-block-product-template";
		slidesSelector = ".wc-block-product ";
	}

	// Embla options. Coverflow centres the active slide and must not trim the
	// snaps, otherwise the first and last slides cannot reach the middle.
	const options = {
		loop,
		axis: orientation === 'vertical' ? 'y' : 'x',
		align: isCoverflow ? 'center' : 'start',
		containScroll: isCoverflow ? false : 'trimSnaps',
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
			dot.className = 'wp-block-shadcn-carousel__dot';
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

		const dots = dotsContainer.querySelectorAll( '.wp-block-shadcn-carousel__dot' );
		const selectedIndex = embla.selectedScrollSnap();

		dots.forEach( ( dot, index ) => {
			dot.classList.toggle( 'is-active', index === selectedIndex );
			dot.setAttribute( 'aria-selected', index === selectedIndex );
		} );
	};

	/**
	 * Coverflow depth: scale, fade and stack slides by how far each one sits
	 * from the middle of the viewport.
	 *
	 * Measured from live DOM positions rather than Embla's scroll progress so
	 * that looped slides — which Embla repositions as they wrap around — are
	 * handled without any special casing.
	 */
	const applyCoverflow = () => {
		const viewportRect = viewport.getBoundingClientRect();
		const viewportCenter = viewportRect.left + viewportRect.width / 2;

		if ( ! viewportRect.width ) {
			return;
		}

		embla.slideNodes().forEach( ( slide ) => {
			const rect = slide.getBoundingClientRect();
			const slideCenter = rect.left + rect.width / 2;

			// 0 when centred, 1 once a slide is half a viewport away or more.
			const distance = Math.min(
				( Math.abs( slideCenter - viewportCenter ) / viewportRect.width ) * 2,
				1
			);

			slide.style.setProperty( '--shadcn-carousel-scale', ( 1 - distance * 0.22 ).toFixed( 3 ) );
			slide.style.setProperty( '--shadcn-carousel-opacity', ( 1 - distance * 0.3 ).toFixed( 3 ) );
			// Keep the centred slide above its neighbours as they overlap.
			slide.style.setProperty( '--shadcn-carousel-depth', String( Math.round( ( 1 - distance ) * 10 ) ) );
		} );
	};

	// Event listeners.
	embla.on( 'init', () => {
		updateButtons();
		setupDots();
		if ( isCoverflow ) {
			applyCoverflow();
		}
	} );

	embla.on( 'select', () => {
		updateButtons();
		updateDots();
	} );

	embla.on( 'reInit', () => {
		updateButtons();
		setupDots();
		if ( isCoverflow ) {
			applyCoverflow();
		}
	} );

	if ( isCoverflow ) {
		embla.on( 'scroll', applyCoverflow );
		embla.on( 'resize', applyCoverflow );
	}
}

/**
 * Initialize all carousels on the page.
 */
function initAllCarousels() {
	const carousels = document.querySelectorAll( '.wp-block-shadcn-carousel' );
	carousels.forEach( initCarousel );
}

// Initialize when DOM is ready.
if ( document.readyState === 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', initAllCarousels );
} else {
	initAllCarousels();
}
