module.export {
    resolve: {
		root: __dirname,
		alias: {
			// components
			Main: 'app/resources/assets/js/components/Main.jsx',
			Header: 'app/resources/assets/js/components/Header.jsx',

			actions: 'app/resources/assets/js/actions/actions.jsx',
			reducers: 'app/resources/assets/js/reducers/reducers.jsx',
			store: 	  'app/resources/assets/js/store/storeConfig.jsx',
		},
		extensions: ['', '.js', '.jsx']
	},
    module: {
		loaders: [
			{
				loader: 'babel-loader',
				query: {
					presets: ['react', 'es2015', 'stage-0']
				},
				test: /\.jsx?$/,
				exclude: /(node_modules|bower_components)/
			}
		]
	}
}
