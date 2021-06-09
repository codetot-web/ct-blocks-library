import * as divider from './divider';

const { registerBlockCollection, registerBlockType } = wp.blocks;

window.jQuery( () => {
	[ divider ].forEach( ( { name, settings } ) => {
		let { category } = settings;

		// Collections are not supported.
		if ( 'undefined' === typeof registerBlockCollection ) {
			category = 'ghostkit';
		}

		// Fallback for WP < 5.5
		const fallbackCategories = {
			design: 'layout',
			media: 'common',
			text: 'common',
		};
		const allCategories = wp.blocks.getCategories();
		Object.keys( fallbackCategories ).forEach( ( newCat ) => {
			if ( category === newCat ) {
				const hasCategory = allCategories.some(
					( newCategory ) => newCategory.slug === category
				);
				category = hasCategory
					? category
					: fallbackCategories[ newCat ];
			}
		} );

		registerBlockType( name, {
			category,
			...settings,
		} );
	} );
} );
