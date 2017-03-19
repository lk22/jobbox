module.export {
    resolve: {
		root: __dirname,
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
