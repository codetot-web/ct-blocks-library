module.exports = ( ctx ) => {
	const config = {
		plugins: {
			'postcss-import': {},
			'postcss-mixins': {
				mixinsDir: './src/postcss/mixins'
			},
			'postcss-preset-env': {
				stage: 2,
				features: {
					'custom-media-queries': true,
					'nesting-rules': true
				},
				autoprefixer: {
					grid: true,
				},
			}
		}
	};

	if ( 'development' === ctx.env ) {
		config.map = true;
	} else {
		config.map = false;
		config.plugins['cssnano'] = {
			safe: true,
		}
	}

	return config;
};
