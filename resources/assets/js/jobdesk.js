// dependencies
import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import {Route, Router, IndexRoute, HashHistory, browserHistory} from 'react-router';
import { syncHistoryWithStore } from 'react-router-redux';

// redux store
var store = require('./store/storeConfig.jsx').configure({});

const history = syncHistoryWithStore(browserHistory, store);


// render application with react router
ReactDOM.render(
  	<Provider store={store}>
  		<Router history={history}>
    	</Router>
  	</Provider>,
  	document.getElementById('app')
);
