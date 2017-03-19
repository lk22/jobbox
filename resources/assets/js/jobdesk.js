// dependencies
import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import {Route, Router, IndexRoute, HashHistory, browserHistory} from 'react-router';
import { syncHistoryWithStore } from 'react-router-redux';

// redux store
var store = require('./store/storeConfig.jsx').configure({});

const history = syncHistoryWithStore(browserHistory, store);

import App from './components/App.jsx';
import Feed from './components/Feed.jsx';
import About from './components/About.jsx';

// render application with react router
ReactDOM.render(
  	<Provider store={store}>
  		<Router history={history}>
	      <Route path="/" component={App}>
	      	<Route path="/feed" component={Feed}></Route>
	 		<Route path="/about" component={About}></Route>
	      </Route>
    	</Router>
  	</Provider>,
  	document.getElementById('blood')
);
